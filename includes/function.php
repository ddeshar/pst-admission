<?php
    function sendlinemesg() {
                        
        define('LINE_API',"https://notify-api.line.me/api/notify");
        define('LINE_TOKEN','6KZvolmWS9SdCW3ADKyX7HyHB7sJGtaddo6aX5IASdF'); // line token
        function notify_message($message){
            $queryData = array('message' => $message);
            $queryData = http_build_query($queryData,'','&');
            $headerOptions = array(
                'http'=>array(
                    'method'=>'POST',
                    'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
                            ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                            ."Content-Length: ".strlen($queryData)."\r\n",
                    'content' => $queryData
                )
            );
            $context = stream_context_create($headerOptions);
            $result = file_get_contents(LINE_API,FALSE,$context);
            $res = json_decode($result);
            return $res;
        }
    }
	function DateThai($strDate) {
        $strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear, เวลา $strHour:$strMinute";
	}
    
    function getAge($birthday) {
        $then = strtotime($birthday);
        return(floor((time()-$then)/31556926));
    }

    function timeago($time, $tense='ago') {
        // declaring periods as static function var for future use
        static $periods = array('year', 'month', 'day', 'hour', 'minute', 'second');
        // checking time format
        // if(!(strtotime($time)>0)) {
        //     return trigger_error("Wrong time format: '$time'", E_USER_ERROR);
        // }
        // getting diff between now and time
        $now  = new DateTime('now');
        $time = new DateTime($time);
        $diff = $now->diff($time)->format('%y %m %d %h %i %s');
        // combining diff with periods
        $diff = explode(' ', $diff);
        $diff = array_combine($periods, $diff);
        // filtering zero periods from diff
        $diff = array_filter($diff);
        // getting first period and value
        $period = key($diff);
        $value  = current($diff);
        // if input time was equal now, value will be 0, so checking it
        if(!$value) {
            $period = 'seconds';
            $value  = 0;
        } else {
            // converting days to weeks
            if($period=='day' && $value>=7) {
                $period = 'week';
                $value  = floor($value/7);
            }
            // adding 's' to period for human readability
            if($value>1) {
                $period .= 's';
            }
        }
        // returning timeago
        return "$value $period $tense";
    }