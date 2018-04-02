<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2011 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2011 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.7.6, 2011-02-27
 */

/** Error reporting */
error_reporting(E_ALL);

date_default_timezone_set('Asia/Bangkok');

/** PHPExcel */
require_once '../excel/Classes/PHPExcel.php';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set properties
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");

// Add some data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'ที่')
            ->setCellValue('B1', 'เรียนต่อ')            
            ->setCellValue('C1', 'เลขประจำตัวประชาชน')
            ->setCellValue('D1', 'ชื่อหนำหน้า')
            ->setCellValue('E1', 'ชื่อ')
            ->setCellValue('F1', 'นามสกุล')
            ->setCellValue('G1', 'ฉายา')
            ->setCellValue('H1', 'ชื่อเล่น')
            ->setCellValue('I1', 'ป/ด/ว/เกิด')
            ->setCellValue('J1', 'หมู่โลหิต')
            ->setCellValue('K1', 'ปัจจุบันน้ำหนัก')
            ->setCellValue('L1', 'ส่วนสูง')            
            ->setCellValue('N1', 'เลขรหัสประจำบ้าน')
            ->setCellValue('O1', 'เลขที่')
            ->setCellValue('P1', 'หมู่')
            ->setCellValue('Q1', 'บ้าน')
            ->setCellValue('R1', 'ตำบล')
            ->setCellValue('S1', 'อำเภอ')
            ->setCellValue('T1', 'จังหวัด')
            ->setCellValue('U1', 'ไปรษณีย์')
            ->setCellValue('V1', 'โทรศัพท์นักเรียน')
            ->setCellValue('X1', 'บิดาผู้ให้กำเนิด ชื่อ-สกุล')
            ->setCellValue('Y1', 'รายได้ต่อเดือน')
            ->setCellValue('Z1', 'โทร')
            ->setCellValue('AA1', 'อาชีพ')
            ->setCellValue('AB1', 'มารดาผู้ให้กำเนิด ชื่อ-สกุล')
            ->setCellValue('AC1', 'รายได้ต่อเดือน')
            ->setCellValue('AD1', 'โทร')
            ->setCellValue('AE1', 'อาชีพ')
            ->setCellValue('AF1', 'สถานภาพบิดา-มารดา')
            ->setCellValue('AH1', 'จำนวนพี่น้องทั้งหมด')
            ->setCellValue('AI1', 'พี่ชาย')
            ->setCellValue('AJ1', 'น้องชาย')
            ->setCellValue('AK1', 'พี่สาว')
            ->setCellValue('AL1', 'น้องสาว')
            ->setCellValue('AM1', 'นักเรียนเป็นบุตรคนที่')
            ->setCellValue('AO1', 'ชื่อ-สกุลผู้ปกครอง')
            ->setCellValue('AP1', 'รายได้ต่อเดือน')
            ->setCellValue('AQ1', 'โทร')
            ->setCellValue('AR1', 'เลขประจำตัวประชาชน')
            ->setCellValue('AS1', 'เกี่ยวข้องกับนักเรียน เป็น')
            ->setCellValue('AT1', 'อาชีพ')
            ->setCellValue('AV1', 'จบชั้น')
            ->setCellValue('AW1', 'จากโรงเรียน')
            ->setCellValue('AX1', 'ตำบล')
            ->setCellValue('AY1', 'อำเภอ')
            ->setCellValue('AZ1', 'จังหวัด')
            ->setCellValue('BA1', 'นักธรรม')
            ->setCellValue('BB1', 'สำนักเรียน')
            ->setCellValue('BC1', 'ตำบล')
            ->setCellValue('BD1', 'อำเภอ')
            ->setCellValue('BE1', 'จังหวัด')
            ->setCellValue('BF1', 'ปีพ.ศ.ที่จบ')
            ->setCellValue('BG1', 'บาลี')
            ->setCellValue('BH1', 'สำนักเรียน')
            ->setCellValue('BI1', 'ตำบล')
            ->setCellValue('BJ1', 'อำเภอ')
            ->setCellValue('BK1', 'จังหวัด')
            ->setCellValue('BL1', 'ปีพ.ศ.ที่จบ')
            ->setCellValue('BM1', 'วิชาที่ถนัดเรียน')
            ->setCellValue('BN1', 'วิชาที่ไม่ถนัด')
            ->setCellValue('BO1', 'ชื่อวัด')
            ->setCellValue('BP1', 'ตำบล')
            ->setCellValue('BQ1', 'อำเภอ')
            ->setCellValue('BR1', 'จังหวัด')
            ->setCellValue('BS1', 'รหัสไปรษณีย์')
            ->setCellValue('BT1', 'นามเจ้าอาวาส')
            ->setCellValue('BU1', 'โทรศัพท์')
            ->setCellValue('BW1', 'วุฒิการศึกษา (ปพ.1)')
            ->setCellValue('BX1', 'ใบประกาศนียบัตรจบการศึกษา (ปพ.2)')
            ->setCellValue('BY1', 'ใบรับรองผลการศึกษา (ปพ.7)')
            ->setCellValue('BZ1', 'สำเนาทะเบียนบ้านบิดาผู้ให้กำเนิด')
            ->setCellValue('CA1', 'สำเนาหนังสือสุทธิแสดงสังกัดวัด')
            ->setCellValue('CB1', 'หนังสือรับรองจากวัดต้นสังกัด')
            ->setCellValue('CC1', 'สำเนาทะเบียนบ้านนักเรียน')
            ->setCellValue('CD1', 'สำเนาใบประกาศนียบัตร นักธรรมชั้น')
            ->setCellValue('CE1', 'สำเนาใบประกาศนียบัตร บาลีประโยค')
            ->setCellValue('CF1', 'สำเนาทะเบียนบ้านมารดาผู้ให้กำเนิด')
            ->setCellValue('CG1', 'สำเนาใบเปลี่ยนชื่อ-นามสกุล')
            ->setCellValue('CH1', 'หลักฐานอื่น ๆ (ระบุ)')
            ->setCellValue('CJ1', 'ผู้รับสมัคร')
            ->setCellValue('CK1', 'บุคคลที่พามาสมัคร')
            ->setCellValue('CL1', 'created_at');

// Write data from MySQL result
include_once 'db.php';
$strSQL = "SELECT * FROM student";

$objQuery = mysqli_query($connection, $strSQL);
$i = 2;
while($objResult = mysqli_fetch_array($objQuery)){
    $objPHPExcel->getActiveSheet()->setCellValue('A1' . $i, $objResult["newstu_id"]);
    $objPHPExcel->getActiveSheet()->setCellValue('B1' . $i, $objResult["class_name"]);    
    $objPHPExcel->getActiveSheet()->setCellValue('C1' . $i, $objResult["newstu_nationalid"]);    
    $objPHPExcel->getActiveSheet()->setCellValue('D1' . $i, $objResult["newstu_titlename"]);
    $objPHPExcel->getActiveSheet()->setCellValue('E1' . $i, $objResult["newstu_name"]);
    $objPHPExcel->getActiveSheet()->setCellValue('F1' . $i, $objResult["newstu_lastname"]);
    $objPHPExcel->getActiveSheet()->setCellValue('G1' . $i, $objResult["newstu_chaya"]);
    $objPHPExcel->getActiveSheet()->setCellValue('H1' . $i, $objResult["newstu_petname"]);
    $objPHPExcel->getActiveSheet()->setCellValue('I1' . $i, $objResult["newstu_dob"]);
    $objPHPExcel->getActiveSheet()->setCellValue('J1' . $i, $objResult["newstu_bgroup"]);
    $objPHPExcel->getActiveSheet()->setCellValue('K1' . $i, $objResult["newstu_weight"]);
    $objPHPExcel->getActiveSheet()->setCellValue('L1' . $i, $objResult["newstu_height"]);    
    $objPHPExcel->getActiveSheet()->setCellValue('N1' . $i, $objResult["newstu_houseno"]);
    $objPHPExcel->getActiveSheet()->setCellValue('O1' . $i, $objResult["address_no"]);
    $objPHPExcel->getActiveSheet()->setCellValue('P1' . $i, $objResult["address_moo"]);
    $objPHPExcel->getActiveSheet()->setCellValue('Q1' . $i, $objResult["address_house"]);
    $objPHPExcel->getActiveSheet()->setCellValue('R1' . $i, $objResult["address_tambol"]);
    $objPHPExcel->getActiveSheet()->setCellValue('S1' . $i, $objResult["address_district"]);
    $objPHPExcel->getActiveSheet()->setCellValue('T1' . $i, $objResult["address_provience"]);
    $objPHPExcel->getActiveSheet()->setCellValue('U1' . $i, $objResult["address_zip"]);
    $objPHPExcel->getActiveSheet()->setCellValue('V1' . $i, $objResult["address_tel"]);    
    $objPHPExcel->getActiveSheet()->setCellValue('X1' . $i, $objResult["parent_f_name"]);
    $objPHPExcel->getActiveSheet()->setCellValue('Y1' . $i, $objResult["parent_f_income"]);
    $objPHPExcel->getActiveSheet()->setCellValue('Z1' . $i, $objResult["parent_f_tel"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AA1' . $i, $objResult["FOCC"]);    
    $objPHPExcel->getActiveSheet()->setCellValue('AB1' . $i, $objResult["parent_m_name"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AC1' . $i, $objResult["parent_m_income"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AD1' . $i, $objResult["parent_m_tel"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AE1' . $i, $objResult["MOCC"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AF1' . $i, $objResult["par_status_des"]);    
    $objPHPExcel->getActiveSheet()->setCellValue('AH1' . $i, $objResult["sibling_total"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AI1' . $i, $objResult["sibling_o_bro"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AJ1' . $i, $objResult["sibling_l_bro"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AK1' . $i, $objResult["sibling_o_sis"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AL1' . $i, $objResult["sibling_l_sis"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AM1' . $i, $objResult["newstut_status"]);    
    $objPHPExcel->getActiveSheet()->setCellValue('AO1' . $i, $objResult["guardian_name"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AP1' . $i, $objResult["guardian_income"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AQ1' . $i, $objResult["guardian_tel"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AR1' . $i, $objResult["guardian_national_id"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AS1' . $i, $objResult["guardian_relation"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AT1' . $i, $objResult["occupation_name"]);    
    $objPHPExcel->getActiveSheet()->setCellValue('AV1' . $i, $objResult["edu_class"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AW1' . $i, $objResult["edu_sco_name"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AX1' . $i, $objResult["edu_tambol"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AY1' . $i, $objResult["edu_district"]);
    $objPHPExcel->getActiveSheet()->setCellValue('AZ1' . $i, $objResult["edu_provience"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BA1' . $i, $objResult["pali_l_name"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BB1' . $i, $objResult["pa_sco_name"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BC1' . $i, $objResult["pa_tambol"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BD1' . $i, $objResult["pa_district"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BE1' . $i, $objResult["pa_provience"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BF1' . $i, $objResult["pali_year"]);    
    $objPHPExcel->getActiveSheet()->setCellValue('BG1' . $i, $objResult["naktham_l_name"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BH1' . $i, $objResult["na_sco_name"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BI1' . $i, $objResult["na_tambol"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BJ1' . $i, $objResult["na_district"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BK1' . $i, $objResult["na_provience"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BL1' . $i, $objResult["naktham_year"]);    
    $objPHPExcel->getActiveSheet()->setCellValue('BM1' . $i, $objResult["best_sub"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BN1' . $i, $objResult["worst_sub"]);    
    $objPHPExcel->getActiveSheet()->setCellValue('BO1' . $i, $objResult["wat_name"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BP1' . $i, $objResult["wat_tambol"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BQ1' . $i, $objResult["wat_district"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BR1' . $i, $objResult["wat_provience"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BS1' . $i, $objResult["wat_postal"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BT1' . $i, $objResult["wat_abbot"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BU1' . $i, $objResult["wat_tel"]);    
    $objPHPExcel->getActiveSheet()->setCellValue('BW1' . $i, $objResult["evi_1"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BX1' . $i, $objResult["evi_2"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BY1' . $i, $objResult["evi_3"]);
    $objPHPExcel->getActiveSheet()->setCellValue('BZ1' . $i, $objResult["evi_4"]);
    $objPHPExcel->getActiveSheet()->setCellValue('CA1' . $i, $objResult["evi_5"]);
    $objPHPExcel->getActiveSheet()->setCellValue('CB1' . $i, $objResult["evi_6"]);
    $objPHPExcel->getActiveSheet()->setCellValue('CC1' . $i, $objResult["evi_7"]);
    $objPHPExcel->getActiveSheet()->setCellValue('CD1' . $i, $objResult["evi_8"]);
    $objPHPExcel->getActiveSheet()->setCellValue('CE1' . $i, $objResult["evi_9"]);
    $objPHPExcel->getActiveSheet()->setCellValue('CF1' . $i, $objResult["evi_10"]);
    $objPHPExcel->getActiveSheet()->setCellValue('CG1' . $i, $objResult["evi_11"]);
    $objPHPExcel->getActiveSheet()->setCellValue('CH1' . $i, $objResult["evi_12"]);    
    $objPHPExcel->getActiveSheet()->setCellValue('CJ1' . $i, $objResult["typer_firstname"]);
    $objPHPExcel->getActiveSheet()->setCellValue('CK1' . $i, $objResult["stu_b_fname"]);    
    $objPHPExcel->getActiveSheet()->setCellValue('CL1' . $i, $objResult["created_at"]);
    $i++;
}
mysqli_close($connection);

// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('Simple');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Pstadmissions.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
