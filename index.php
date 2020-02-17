<?php
require 'vendor/autoload.php';
require "cust.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$myfile = fopen("mb.txt", "r") or die("Unable to open file!");
$str= fread($myfile,filesize("mb.txt"));
$arr=explode('
',$str);
//NATIONALITY_NAME,CITY_NAME,PRIMARY_PHONE,PRIMARY_EMAIL

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'PARENT_ACC_NO');
$sheet->setCellValue('B1', 'MSISDN');
$sheet->setCellValue('C1', 'SERVICE_STATUS');
$sheet->setCellValue('D1', 'LINE_CREATION_DATE');
$sheet->setCellValue('E1', 'LINE_MOD_DATE');
$sheet->setCellValue('F1', 'EFFECTIVE_DATE');
$sheet->setCellValue('G1', 'ACCOUNT_NO');
$sheet->setCellValue('H1', 'ACCOUNT_OBJ_ID0');
$sheet->setCellValue('I1', 'SERVICE_OBJ_ID0');
$sheet->setCellValue('J1', 'GL_SEGMENT');
$sheet->setCellValue('K1', 'ACCOUNT_STATUS');
$sheet->setCellValue('L1', 'BILL_NO');
$sheet->setCellValue('M1', 'CURRENT_TOTAL');
$sheet->setCellValue('N1', 'TOTAL_DUE');
$sheet->setCellValue('O1', 'DAY_0');
$sheet->setCellValue('P1', 'DAY_30');
$sheet->setCellValue('Q1', 'DAY_60');
$sheet->setCellValue('R1', 'DAY_90');
$sheet->setCellValue('S1', 'DAY_120');
$sheet->setCellValue('T1', 'DAY_150');
$sheet->setCellValue('U1', 'DAY_180');
$sheet->setCellValue('V1', 'DAY_210');
$sheet->setCellValue('W1', 'DAY_240');
$sheet->setCellValue('X1', 'DAY_270');
$sheet->setCellValue('Y1', 'DAY_300');
$sheet->setCellValue('Z1', 'DAY_330');
$sheet->setCellValue('AA1', 'DAY_365');
$sheet->setCellValue('AB1', 'DAY_365_MORE');
$sheet->setCellValue('AC1', 'BALANCE');
$sheet->setCellValue('AD1', 'PLAN_NAME');
$sheet->setCellValue('AE1', 'CATEGORY_ID');
$sheet->setCellValue('AF1', 'LINE_STATUS');
$sheet->setCellValue('AG1', 'CUST_ID');
$sheet->setCellValue('AH1', 'ID_TYPE');
$sheet->setCellValue('AI1', 'CUSTOMER_NAME');
$sheet->setCellValue('AJ1', 'CUST_SEGMENT_NAME');
$sheet->setCellValue('AK1', 'NATIONALITY_NAME');
$sheet->setCellValue('AL1', 'CITY_NAME');
$sheet->setCellValue('AM1', 'PRIMARY_PHONE');
$sheet->setCellValue('AN1', 'PRIMARY_EMAIL');
/*$sheet->setCellValue('A1', 'CUST_SEGMENT_NAME');
$sheet->setCellValue('A1', 'CUST_SEGMENT_NAME');
$sheet->setCellValue('A1', 'CUST_SEGMENT_NAME');
$sheet->setCellValue('A1', 'CUST_SEGMENT_NAME');
$sheet->setCellValue('A1', 'CUST_SEGMENT_NAME');
$sheet->setCellValue('A1', 'CUST_SEGMENT_NAME');
$sheet->setCellValue('A1', 'CUST_SEGMENT_NAME');*/





$cont=2;
$ends=10;
for($i=1;$i<=$ends;$i++){
$arr2=explode(',',$arr[$i]);
//print_r($arr2);
//$cu=new Customer($arr2[0],$arr2[1]);
//break;
$sheet->setCellValue('A'.$cont, $arr2[0]);
$sheet->setCellValue('B'.$cont, $arr2[1]);
$sheet->setCellValue('C'.$cont, $arr2[2]);
$sheet->setCellValue('D'.$cont, $arr2[3]);
$sheet->setCellValue('E'.$cont, $arr2[4]);
$sheet->setCellValue('F'.$cont, $arr2[5]);
$sheet->setCellValue('G'.$cont, $arr2[6]);
$sheet->setCellValue('H'.$cont, $arr2[7]);
$sheet->setCellValue('I'.$cont, $arr2[8]);
$sheet->setCellValue('J'.$cont, $arr2[9]);
$sheet->setCellValue('K'.$cont, $arr2[10]);
$sheet->setCellValue('L'.$cont, $arr2[11]);
$sheet->setCellValue('M'.$cont, $arr2[12]);
$sheet->setCellValue('N'.$cont, $arr2[13]);
$sheet->setCellValue('O'.$cont, $arr2[14]);
$sheet->setCellValue('P'.$cont,$arr2[15] );
$sheet->setCellValue('Q'.$cont,$arr2[16] );
$sheet->setCellValue('R'.$cont,$arr2[17] );
$sheet->setCellValue('S'.$cont, $arr2[18]);
$sheet->setCellValue('T'.$cont, $arr2[19]);
$sheet->setCellValue('U'.$cont, $arr2[20]);
$sheet->setCellValue('V'.$cont,$arr2[21] );
$sheet->setCellValue('W'.$cont,$arr2[22] );
$sheet->setCellValue('X'.$cont, $arr2[23]);
$sheet->setCellValue('Y'.$cont, $arr2[24]);
$sheet->setCellValue('Z'.$cont, $arr2[25]);
$sheet->setCellValue('AA'.$cont, $arr2[26]);
$sheet->setCellValue('AB'.$cont, $arr2[27]);
$sheet->setCellValue('AC'.$cont, $arr2[28]);
$sheet->setCellValue('AD'.$cont, $arr2[29]);
$sheet->setCellValue('AE'.$cont, $arr2[30]);
$sheet->setCellValue('AF'.$cont, $arr2[31]);
$sheet->setCellValue('AG'.$cont, $arr2[32]);
$sheet->setCellValue('AH'.$cont, $arr2[33]);
$sheet->setCellValue('AI'.$cont, $arr2[34]);
$sheet->setCellValue('AJ'.$cont, $arr2[35]);
$sheet->setCellValue('AK'.$cont, $arr2[36]);
$sheet->setCellValue('AL'.$cont, $arr2[37]);
$sheet->setCellValue('AM'.$cont, $arr2[38]);
$sheet->setCellValue('AN'.$cont, $arr2[39]);
$cont++;

}
//print_r($arr[5]) ;
fclose($myfile);

$writer = new Xlsx($spreadsheet);
$writer->save('uhb.xlsx');
  header('Content-Type: application/vnd.ms-excel');
   header('Content-Disposition: attachment; filename="export.xlsx"');
   $writer->save("php://output");
    exit;