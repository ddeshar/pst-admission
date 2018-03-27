<?php
error_reporting(0);
include ('db.php');
ob_start(); 
// include ('../function.php');
require_once('../assets/tcpdf/config/lang/thai.php');
require_once('../assets/tcpdf/tcpdf.php');

class my_pdf extends TCPDF {

      //Page header
    //   public function Header() {
    //   	$file = 'image/mwa01.png';
    //     $this->Image($file, 15, 3, '', '', 'PNG', '', 'T', false, 600, '', false, false, 0, false, false, false);
    //   }

      // Page footer
      public function Footer() {
      	$this->SetFont('thsarabun', '', 14, '', true);
      	$footer_text = '<div><b>หมายเหตุ:</b> </div>';               
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
$pdf->AddPage();

// set text shadow effect
// $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

$i = "01";
// Set some content to print

$detail_id = $_GET["id"];

if(isset($_GET["id"])){
        $detail_id = $_GET["id"];
        $sql = "SELECT CONCAT(N.newstu_titlename,'', N.newstu_name , ' ' ,N.newstu_lastname ) AS name, C.class_name AS class
        FROM newstudent AS N INNER JOIN class AS C ON N.newstu_admit_class = C.class_id
        WHERE newstu_id = 3";
        
        // SELECT * FROM detail WHERE detail_id='$detail_id'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $name_head    = $row["name"];
            $class_head    = $row["class"];
            // $date       = DateThai($row["date"]);
        }else{
            $name_head    = "";
            $class_head       = "";
        }
    }

$ft = ' <div style="text-align:center">
            <b>ใบสมัครเรียน '.$name_head.'</b><br />
            <b>ระดับมัธยมศึกษาตอนต้น เรียนต่อ '.$class.'</b><br /> 
            <b>โรงเรียนพระปริยัติธรรมวัดโสธรวราราม  ตำบลหน้าเมือง  อำเภอเมืองฉะเชิงเทรา  จังหวัดฉะเชิงเทรา</b><br />
        </div> ';
$pdf->writeHTML($ft, true, false, true, false, '');
$pdf->SetFont('thsarabun', '', 14, '', true);

// if(isset($_GET["id"])){
        $detail_id = $_GET["id"];
        $new_stu = "SELECT * FROM `newstu_view` WHERE newstu_id = 3";
        $stu_result = mysqli_query($connection, $new_stu);
        include_once ('admissions/query.php');
// }
// Set some content to print
$html = <<<EOD
    ชื่อ <b>$newstu_titlename</b> <b>$newstu_name</b> นามสกุล <b> $newstu_lastname </b>ฉายา <b>  $newstu_chaya </b>  ชื่อเล่น <b>  $newstu_petname </b> เกิดวันที่ <b>  $newstu_dob </b> อายุ <b>  $newstu_dob </b> ปี <br>
    หมู่โลหิต <b>  $newstu_bgroup </b> ปัจจุบัน น้ำหนัก <b>  $newstu_weight </b> กิโลกรัม ส่วนสูง <b>  $newstu_height </b> เซนติเมตร  เลขประจำตัวประชาชน <b>  $newstu_nationalid </b><br>

    เลขรหัสประจำบ้าน <b>  $newstu_houseno </b>  ที่อยู่ตามทะเบียนบ้าน  	เลขที่ <b>  $address_no </b>  หมู่ <b>  $address_moo </b> บ้าน <b>  $address_house </b> ตำบล <b>  $address_tambol </b> <br>
    อำเภอ <b>  $address_district </b> จังหวัด <b>  $address_provience </b> รหัสไปรษณีย์ <b>  $address_zip </b>โทรศัพท์นักเรียน<b>  $address_tel </b> <br>

    สถานภาพบิดา-มารดา   <b> $par_status_des </b> <br>
    บิดาผู้ให้กำเนิด ชื่อ-สกุล <b> $parent_f_name </b> อาชีพ <b> $FOCC </b> รายได้ต่อเดือน <b> $parent_f_income </b>บาท โทร. <b> $parent_f_tel </b> <br>
    มารดาผู้ให้กำเนิด ชื่อ-สกุล <b> $parent_m_name </b> อาชีพ <b> $MOCC </b> รายได้ต่อเดือน <b> $parent_m_income </b>บาท โทร. <b> $parent_m_tel </b> <br>
    จำนวนพี่น้องทั้งหมด <b> $sibling_total </b> คน พี่ชาย <b> $sibling_o_bro </b> คน  น้องชาย <b> $sibling_l_bro </b> คน  พี่สาว <b> $sibling_o_sis </b> คน  น้องสาว <b> $sibling_l_sis </b> คน นักเรียนเป็นบุตรคนที่ <b> $newstut_status </b> <br>
    
    ผู้ปกครอง ชื่อ-สกุล<b> $guardian_name </b> อาชีพ <b> $occupation_name </b> รายได้ต่อเดือน<b> $guardian_income </b> บาท โทร. <b> $guardian_tel </b> เลขประจำตัวประชาชน <b> $guardian_nid </b> <br>
    เกี่ยวข้องกับนักเรียน เป็น  <b> $guardian_relation </b> <br>

    การศึกษาชั้นสุดท้าย จบชั้น <b> $edu_class </b> จากโรงเรียน <b> $edu_sco_name </b>  ตำบล <b> $edu_tambol </b> อำเภอ <b> $edu_district </b> จังหวัด <b> $edu_provience </b> <br>
    นักธรรม <b> $naktham_l_name </b>  สำนักเรียน <b> $na_sco_name </b> ตำบล <b> $na_tambol </b> อำเภอ <b> $na_district </b> จังหวัด <b> $sna_provience </b> ปีพ.ศ.ที่จบ <b> $naktham_year </b> <br>
    บาลี <b> $pali_l_name </b> สำนักเรียน <b> $pa_sco_name </b> ตำบล <b> $pa_tambol </b> อำเภอ <b> $pa_district </b> จังหวัด <b> $pa_provience </b> ปีพ.ศ.ที่จบ <b> $naktham_year </b> <br>

    ปัจจุบันสังกัดวัด <b> $wat_name </b> ตำบล <b> $wat_tambol </b> อำเภอ <b> $wat_district </b> จังหวัด <b> $wat_provience </b> รหัสไปรษณีย์ <b> $wat_postal </b> นามเจ้าอาวาส <b> $wat_abbot </b> <br>
    โทรศัพท์ <b> $wat_tel </b>  <br>
    
    วิชาที่ถนัดเรียน <b> $best_sub </b> วิชาที่ไม่ถนัด <b> $worst_sub </b> <br> <br>

    
    <b>หลักฐานในการสมัคร</b> <br>

        <table style="width:100%">
            <tr>
                <td width="35%">วุฒิการศึกษา (ปพ.1) </td>
                <td width="15%"><b>  $ev_1 </b></td>
                <td width="35%">สำเนาทะเบียนบ้านนักเรียน</td>
                <td width="15%"><b> $ev_7 </b></td>
            </tr>
            <tr>
                <td>ใบประกาศนียบัตรจบการศึกษา (ปพ.2)</td>
                <td><b> $ev_2 </b></td>
                <td>สำเนาทะเบียนบ้านมารดาผู้ให้กำเนิด</td>
                <td><b> $ev_4 </b></td>
            </tr>
            <tr>
                <td>ใบรับรองผลการศึกษา (ปพ.7)</td>
                <td><b> $ev_3 </b></td>
                <td>สำเนาใบเปลี่ยนชื่อ-นามสกุล</td>
                <td><b> $ev_11 </b></td>
            </tr>
            <tr>
                <td>สำเนาทะเบียนบ้านบิดาผู้ให้กำเนิด</td>
                <td><b> $ev_10 </b></td>
                <td>สำเนาใบประกาศนียบัตร นักธรรมชั้น</td>
                <td><b> $evi_8 </b></td>
            </tr>
            <tr>
                <td>สำเนาหนังสือสุทธิแสดงสังกัดวัด</td>
                <td><b> $ev_5 </b></td>
                <td>สำเนาใบประกาศนียบัตร บาลีประโยค</td>
                <td><b> $evi_9 </b></td>
            </tr>
            <tr>
                <td>หนังสือรับรองจากวัดต้นสังกัด</td>
                <td><b> $ev_6 </b></td>                
                <td>หลักฐานอื่น ๆ (ระบุ)</td>
                <td><b> $evi_12 </b></td>
            </tr>
        </table>
    <p>ข้าพเจ้าขอสมัครเข้าเรียน เพื่อศึกษาในโรงเรียนแห่งนี้ ตั้งแต่บัดนี้เป็นต้นไป  ข้าพเจ้าขอรับรองว่าข้อความข้างต้นนี้เป็นความจริงทุกประการ และข้าพเจ้าจะปฏิบัติตามระเบียบ ข้อบังคับ ของโรงเรียนทุกประการ.</p>
EOD;

$html .= '  <br />
            <div style="text-align:center">
            ลงชื่อ <b>'.$newstu_titlename.' '.$newstu_name.' '.$newstu_lastname.'</b> <br>
            ผู้สมัคร	ว/ด/ป ที่สมัครเรียน<b>  '.$created_at.' </b> <br>
            ลงชื่อ <b> '.$typer_firstname .' '.$typer_lastname.' </b> ผู้รับสมัคร <br>
            </div>';
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