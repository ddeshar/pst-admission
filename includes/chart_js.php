<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
<script type="text/javascript">  
    google.charts.load('current', {'packages':['corechart']});  
    google.charts.setOnLoadCallback(drawChart);  
        function drawChart() {  
            var data = google.visualization.arrayToDataTable([  
                    ['Class', 'Total'],  
                    <?php while($row = mysqli_fetch_array($result)){  
                        echo "['".$row["class"]."', ".$row["total"]."],";
                    } ?>  
                ]);  
            var options = {
                    // title: 'สรุปจำนวนนักเรียนที่มาสมัครเรียน ม.ต้น จำนวนว <?=$ton?> รูป ม.ปลาย จำนวน <?=$plai?>รูป รวม <?=$total?> รูป',
                    // is3D:true,
                    pieHole: 0.4,
                    // pieSliceText: 'value'
                };  
            var chart = new google.visualization.PieChart(document.getElementById('totalstudent'));  
            chart.draw(data, options);  
        }
        
    google.charts.setOnLoadCallback(provience);  
        function provience() {  
            var data = google.visualization.arrayToDataTable([  
                    ['provience', 'stu'],  
                    <?php while($row = mysqli_fetch_array($result1)){  
                        echo "['".$row["provience"]."', ".$row["stu"]."],";
                    } ?>  
                ]);  
            var options = {
                    // title: 'สรุปจำนวนนักเรียนที่มาสมัครเรียน ตามจังหวัด จำนวน<?=$total?> รูป',  
                    // is3D:true,  
                    pieHole: 0.4,
                    // pieSliceText: 'value'
                };  
            var chart = new google.visualization.PieChart(document.getElementById('provience'));  
            chart.draw(data, options);  
        }
    
    google.charts.setOnLoadCallback(wats);  
        function wats() {  
            var data = google.visualization.arrayToDataTable([  
                    ['provience', 'stu'],  
                    <?php while($row = mysqli_fetch_array($wats)){  
                        echo "['".$row["wat"]."', ".$row["stud"]."],";
                    } ?>  
                ]);  

            var options = {
                    // title: 'สรุปจำนวนนักเรียนที่มาสมัครเรียน ตามสังกัดวัด จำนวน<?=$total?> รูป',  
                    // is3D:true,  
                    pieHole: 0.4,
                    // pieSliceText: 'value'
                };  
            var chart = new google.visualization.PieChart(document.getElementById('wats'));  
            chart.draw(data, options);  
        }
</script>  