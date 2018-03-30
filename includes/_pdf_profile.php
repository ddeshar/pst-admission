<?php
error_reporting(0);
include ('db.php');
ob_start(); 
// include ('../function.php');
require_once('../assets/tcpdf/config/lang/thai.php');
require_once('../assets/tcpdf/tcpdf.php');

$detail_id = $_GET["newstu"];

if(isset($_GET["newstu"])){
    $detail_id = $_GET["newstu"];
    $sql = "SELECT
                CONCAT( s.newstu_titlename, '', s.newstu_name, ' ', s.newstu_lastname ) AS `name`,
                C.class_name AS class,
                n.notice_name AS noti
            FROM
                newstudent AS s
                LEFT JOIN class AS C ON s.newstu_admit_class = C.class_id
                LEFT JOIN notice AS n ON s.newstu_get_notice_from = n.notice_id 
            WHERE
                s.newstu_id = '$detail_id'";
    
    // SELECT * FROM detail WHERE detail_id='$detail_id'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $name_head    = $row["name"];
        $class_head    = $row["class"];
        $notice    = $row["noti"];
        // $date       = DateThai($row["date"]);
    }else{
        $name_head    = "";
        $class_head       = "";
        $notice       = "";
    }
}


class my_pdf extends TCPDF {

      //Page header
    //   public function Header() {
    //   	$file = 'image/mwa01.png';
    //     $this->Image($file, 15, 3, '', '', 'PNG', '', 'T', false, 600, '', false, false, 0, false, false, false);
    //   }

      // Page footer
      public function Footer() {
          global $notice;
      	$this->SetFont('thsarabun', '', 14, '', true);
      	$footer_text = '<div><b>หมายเหตุ:</b> ได้รับคำแนะนำจาก '.$notice.'</div>';               
        // $this->writeHTMLCell(100, 50, 10, 285, $footer_text, 0, 0, 0, true, 'L', true);  
		$this->writeHTML($footer_text, true, true, true, true, '');
      }
}

// create new PDF document
$pdf = new my_pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->setPageOrientation('p'); // PDF_PAGE_ORIENTATION---> 'l' or 'p'
// set document information
$pdf->SetCreator('Ben');
$pdf->SetAuthor('BEN');
$pdf->SetTitle('การประชุมพระสังฆาธิการ');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(true);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(15, 10, 8, 10); // left = 2.5 cm, top = 4 cm, right = 2.5cm
// $pdf->SetMargins(PDF_MARGIN_LEFT, 15, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
$pdf->SetFont('thsarabun', '', 16, '', true);

// Add a page
$pdf->AddPage('P', 'A4');
$tagvs = array('p' => array(0 => array('h' => 0, 'n' => 0), 1 => array('h' => 0, 'n'=> 0)));
$pdf->setHtmlVSpace($tagvs);

// set text shadow effect
// $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

$i = "01";
// Set some content to print

$ft = ' <div style="text-align:center">
            <b>ใบสมัครเรียน '.$name_head.'</b><br />
            <b>ระดับมัธยมศึกษาตอนต้น เรียนต่อ '.$class_head.'</b><br /> 
            <b>โรงเรียนพระปริยัติธรรมวัดโสธรวราราม  ตำบลหน้าเมือง  อำเภอเมืองฉะเชิงเทรา  จังหวัดฉะเชิงเทรา</b><br />
        </div> ';
$pdf->writeHTML($ft, true, false, true, false, '');
$pdf->SetFont('thsarabun', '', 14, '', true);

if(isset($_GET["newstu"])){
        $detail_id = $_GET["newstu"];
        $new_stu = "SELECT * FROM `newstu_view` WHERE newstu_id = '$detail_id'";
        $stu_result = mysqli_query($connection, $new_stu);
        include_once ('admissions/query.php');
    
    if($newstu_photo > 0){
        $photo = $newstu_photo;
    }else{
        $photo = "default.jpg";
    }
}

// Set some content to print
$html = <<<EOD
    <p><b>ชื่อ </b> $newstu_titlename  $newstu_name<b> นามสกุล </b> $newstu_lastname <b>ฉายา </b>  $newstu_chaya </p>
    <p><b>ชื่อเล่น </b>  $newstu_petname <b> เกิดวันที่ </b>  $newstu_dob <b> อายุ </b>  $newstu_dob <b> ปี  หมู่โลหิต </b>  $newstu_bgroup <b> ปัจจุบัน น้ำหนัก </b>  $newstu_weight <b> กิโลกรัม ส่วนสูง </b>  $newstu_height <b> เซนติเมตร</b></p>
    <p><b>เลขประจำตัวประชาชน</b> $newstu_nationalid </p>
    <p><b>เลขรหัสประจำบ้าน </b>  $newstu_houseno </p>
    <p><b>ที่อยู่ตามทะเบียนบ้าน เลขที่ </b>  $address_no <b>  หมู่ </b>  $address_moo <b> บ้าน </b>  $address_house <b> ตำบล </b>  $address_tambol <b>อำเภอ </b>  $address_district <b> จังหวัด </b>  $address_provience</p>
    <p><b>รหัสไปรษณีย์ </b>  $address_zip <b>โทรศัพท์นักเรียน</b>  $address_tel </p>

    <p><b>สถานภาพบิดา-มารดา   </b> $par_status_des </p>
    <p><b>บิดาผู้ให้กำเนิด ชื่อ-สกุล </b> $parent_f_name <b> อาชีพ </b> $FOCC <b> รายได้ต่อเดือน </b> $parent_f_income <b>บาท โทร. </b> $parent_f_tel </p>
    <p><b>มารดาผู้ให้กำเนิด ชื่อ-สกุล </b> $parent_m_name <b> อาชีพ </b> $MOCC <b> รายได้ต่อเดือน </b> $parent_m_income <b>บาท โทร. </b> $parent_m_tel </p>
    <p><b>จำนวนพี่น้องทั้งหมด </b> $sibling_total <b> คน พี่ชาย </b> $sibling_o_bro <b> คน  น้องชาย </b> $sibling_l_bro <b> คน  พี่สาว </b> $sibling_o_sis <b> คน  น้องสาว </b> $sibling_l_sis <b> คน นักเรียนเป็นบุตรคนที่ </b> $newstut_status </p>
    
    <p><b>ผู้ปกครอง ชื่อ-สกุล</b> $guardian_name <b> อาชีพ </b> $occupation_name <b> รายได้ต่อเดือน</b> $guardian_income <b> บาท โทร. </b> $guardian_tel </p>
    <p><b>เลขประจำตัวประชาชน </b> $guardian_nid <b>เกี่ยวข้องกับนักเรียน เป็น  </b> $guardian_relation </p>

    <p><b>การศึกษาชั้นสุดท้าย จบชั้น </b> $edu_class <b> จากโรงเรียน </b> $edu_sco_name <b>  ตำบล </b> $edu_tambol <b> อำเภอ </b> $edu_district <b> จังหวัด </b> $edu_provience </p>
    <p><b>นักธรรม </b> $naktham_l_name <b>  สำนักเรียน </b> $na_sco_name <b> ตำบล </b> $na_tambol <b> อำเภอ </b> $na_district <b> จังหวัด </b> $sna_provience <b> ปีพ.ศ.ที่จบ </b> $naktham_year </p>
    <p><b>บาลี </b> $pali_l_name <b> สำนักเรียน </b> $pa_sco_name <b> ตำบล </b> $pa_tambol <b> อำเภอ </b> $pa_district <b> จังหวัด </b> $pa_provience <b> ปีพ.ศ.ที่จบ </b> $naktham_year </p>

    <p><b>ปัจจุบันสังกัดวัด </b> $wat_name <b> ตำบล </b> $wat_tambol <b> อำเภอ </b> $wat_district </p> 
    <p><b>จังหวัด </b> $wat_provience <b> รหัสไปรษณีย์ </b> $wat_postal <b> นามเจ้าอาวาส </b> $wat_abbot <b>โทรศัพท์ </b>$wat_tel </p>
    <p><b>วิชาที่ถนัดเรียน </b> $best_sub <b> วิชาที่ไม่ถนัด </b> $worst_sub <b></p><br>

    
    <p><b>หลักฐานในการสมัคร</b></p>

    <p> 
        <table style="width:100%">
            <tr>
                <td width="35%"><b>วุฒิการศึกษา (ปพ.1)</b></td>
                <td width="15%">$ev_1</td>
                <td width="35%"><b>สำเนาทะเบียนบ้านนักเรียน</b></td>
                <td width="15%">$ev_7</td>
            </tr>
            <tr>
                <td><b>ใบประกาศนียบัตรจบการศึกษา (ปพ.2)</b></td>
                <td>$ev_2</td>
                <td><b>สำเนาทะเบียนบ้านมารดาผู้ให้กำเนิด</b></td>
                <td>$ev_4</td>
            </tr>
            <tr>
                <td><b>ใบรับรองผลการศึกษา (ปพ.7)</b></td>
                <td>$ev_3</td>
                <td><b>สำเนาใบเปลี่ยนชื่อ-นามสกุล</b></td>
                <td>$ev_11</td>
            </tr>
            <tr>
                <td><b>สำเนาทะเบียนบ้านบิดาผู้ให้กำเนิด</b></td>
                <td>$ev_10</td>
                <td><b>สำเนาใบประกาศนียบัตร นักธรรมชั้น</b></td>
                <td>$evi_8</td>
            </tr>
            <tr>
                <td><b>สำเนาหนังสือสุทธิแสดงสังกัดวัด</b></td>
                <td>$ev_5</td>
                <td><b>สำเนาใบประกาศนียบัตร บาลีประโยค</b></td>
                <td>$evi_9</td>
            </tr>
            <tr>
                <td><b>หนังสือรับรองจากวัดต้นสังกัด</b></td>
                <td>$ev_6</td>                
                <td><b>หลักฐานอื่น ๆ (ระบุ)</b></td>
                <td>$evi_12</td>
            </tr>
        </table>
    </p>

    <p>ข้าพเจ้าขอสมัครเข้าเรียน เพื่อศึกษาในโรงเรียนแห่งนี้ ตั้งแต่บัดนี้เป็นต้นไป  ข้าพเจ้าขอรับรองว่าข้อความข้างต้นนี้เป็นความจริงทุกประการ และข้าพเจ้าจะปฏิบัติตามระเบียบ ข้อบังคับ ของโรงเรียนทุกประการ.</p>
<br>
    <table style="width:100%">
        <tr>
            <td width="40%"> <img src="../assets/img/newstu/$photo" alt="test alt attribute" width="auto" height="150" border="0" /></td>
            <td width="60%">            
                <br><br>
                <div style="text-align:center">
                    ..............................................<br>
                    <b>ลงชื่อ </b>$newstu_titlename $newstu_name $newstu_lastname <b>ผู้สมัคร</b> <br>
                    <b>ว/ด/ป ที่สมัครเรียน</b> $created_at <br>
                    <b>ลงชื่อ </b> $typer_firstname <b> ผู้รับสมัคร</b> <br>
                </div>
            </td>
        </tr>
    </table>
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);
// $pdf->writeHTML($html, true, false, true, false, '');

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

$pdf->lastPage(); 

//============================================================+
// END OF FILE
//============================================================+
?>