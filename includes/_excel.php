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
            ->setCellValue('A1', 'ID')
            ->setCellValue('B1', 'newstu_titlename')
            ->setCellValue('C1', 'newstu_name!')
            ->setCellValue('D1', 'newstu_lastname')
            ->setCellValue('E1', 'newstu_chaya!')
            ->setCellValue('F1', 'newstu_petname!')
            ->setCellValue('G1', 'newstu_dob!');


// Write data from MySQL result
include_once 'db.php';
$strSQL = "SELECT * FROM newstu_view";

$objQuery = mysqli_query($connection, $strSQL);
$i = 2;
while($objResult = mysqli_fetch_array($objQuery)){
    $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $objResult["newstu_titlename"]);
    $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $objResult["newstu_titlename"]);
    $objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $objResult["newstu_name"]);
    $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $objResult["newstu_lastname"]);
    $objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $objResult["newstu_chaya"]);
    $objPHPExcel->getActiveSheet()->setCellValue('F' . $i, $objResult["newstu_petname"]);
    $objPHPExcel->getActiveSheet()->setCellValue('G' . $i, $objResult["newstu_dob"]);
    $i++;
}
mysqli_close($connection);

// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('Simple');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="01simple.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
