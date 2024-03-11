<?php
    require 'vendor/autoload.php';
    session_start();

    $clientType = $_SESSION["client-type"];
    $gender = $_SESSION["gender"];
    $age = $_SESSION["age"];
    $region = $_SESSION["region"];
    $office = $_SESSION["office"];
    $service = $_SESSION["service"];

    $cc1 = $_SESSION["CC1answer"];
    $cc2 = $_SESSION["CC2answer"];
    $cc3 = $_SESSION["CC3answer"];

    $sqd0 = $_SESSION["SQD0"];
    $sqd1 = $_SESSION["SQD1"];
    $sqd2 = $_SESSION["SQD2"];
    $sqd3 = $_SESSION["SQD3"];
    $sqd4 = $_SESSION["SQD4"];
    $sqd5 = $_SESSION["SQD5"];
    $sqd6 = $_SESSION["SQD6"];
    $sqd7 = $_SESSION["SQD7"];
    $sqd8 = $_SESSION["SQD8"];

    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    $spreadSheet = $reader->load("CSM.xlsx");
    $sheet = $spreadSheet->getActiveSheet();
    $row = $sheet->getHighestRow() + 1;
    $sheet->insertNewRowBefore($row);
    $sheet->setCellValue("A" . $row, $clientType);
    $sheet->setCellValue("B" . $row, $gender);
    $sheet->setCellValue("C" . $row, $age);
    $sheet->setCellValue("D" . $row, $region);
    $sheet->setCellValue("E" . $row, $office);
    $sheet->setCellValue("F" . $row, $service);
    $sheet->setCellValue("G" . $row, $cc1);
    $sheet->setCellValue("H" . $row, $cc2);
    $sheet->setCellValue("I" . $row, $cc3);
    $sheet->setCellValue("J" . $row, $sqd0);
    $sheet->setCellValue("K" . $row, $sqd1);
    $sheet->setCellValue("L" . $row, $sqd2);
    $sheet->setCellValue("M" . $row, $sqd3);
    $sheet->setCellValue("N" . $row, $sqd4);
    $sheet->setCellValue("O" . $row, $sqd5);
    $sheet->setCellValue("P" . $row, $sqd6);
    $sheet->setCellValue("Q" . $row, $sqd7);
    $sheet->setCellValue("R" . $row, $sqd8);

    $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadSheet);
    $writer->save("CSM.xlsx");
    header("Location: localhost:8080/done.php");
    exit;
?>



