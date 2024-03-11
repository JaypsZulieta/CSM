<?php
    session_start();
    include('meta.php');
    require 'vendor/autoload.php';
?>

<div class="bg-base-100 h-screen grid place-items-center">

    <div class="shadow-2xl mt-10">
    <form action="SQD.php" method="POST">;
        <div class="overflow-x-auto">
            <table class="table">
            <!-- head -->
            <thead class="bg-accent">
            <tr>
                <th class="w-80 text-center uppercase"></th>
                <th class="text-center uppercase w-24">Strongly disagree</th>
                <th class="text-center uppercase w-24">Disagree</th>
                <th class="text-center uppercase w-24">Neither Agree or disagree</th>
                <th class="text-center uppercase w-24">Agree</th>
                <th class="text-center uppercase w-24">Strongly Agree</th>
                <th class="text-center uppercase w-24">Not applicaple</th>
            </tr>
            </thead>
            <tbody>
            
            <tr>
                <td>
                    <p class="text text-lg inter-font">
                        <b>SQD0.</b> I am satisfied with the service that I availed.
                    </p> 
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD0" value="strongly-disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD0" value="disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-warning rounded-full" type="radio" name="SQD0" value="neither" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD0" value="agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD0" value="strongly-agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox rounded-full" type="radio" name="SQD0" value="N/A" required>
                        </label>
                    </div>
                </td>
            </tr>
          
            <tr>
                <td>
                    <p class="text text-lg inter-font">
                        <b>SQD1.</b> I spent a reasonable amount of time for my transaction.
                    </p>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD1" value="strongly-disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD1" value="strongly-disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-warning rounded-full" type="radio" name="SQD1" value="neither" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD1" value="agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD1" value="strongly-agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox rounded-full" type="radio" name="SQD1" value="N/A" required>
                        </label>
                    </div>
                </td>
            </tr>
           
            <tr>
                <td>
                    <p class="text text-lg inter-font">
                        <b>SQD2.</b> The office followed the transaction's requirements and steps based on the information provided.
                    </p> 
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD2" value="strongly-disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD2" value="disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-warning rounded-full" type="radio" name="SQD2" value="neither" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD2" value="agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD2" value="strongly-agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox rounded-full" type="radio" name="SQD2" value="N/A" required>
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="text text-lg inter-font">
                        <b>SQD3.</b> The steps (Including payment) I needed to do for my transaction were easy and simple.
                    </p>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD3" value="strongly-disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD3" value="disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-warning rounded-full" type="radio" name="SQD3" value="neither" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD3" value="agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD3" value="strongly-agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox rounded-full" type="radio" name="SQD3" value="N/A" required>
                        </label>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td>
                    <p class="text text-lg inter-font">
                        <b>SQD4.</b> I easily found information about my transaction from the office or its website.
                    </p>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD4" value="strongly-disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD4" value="disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-warning rounded-full" type="radio" name="SQD4" value="neither" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD4" value="agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD4" value="strongly-agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox rounded-full" type="radio" name="SQD4" value="N/A" required>
                        </label>
                    </div>
                </td>
            </tr>
            <!-- row 3 -->
            <tr>
                <td>
                    <p class="text text-lg inter-font">
                        <b>SQD.5</b> I paid a reasonable amount of fees for my transaction.
                    </p>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD5" value="strongly-disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD5" value="disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-warning rounded-full" type="radio" name="SQD5" value="neither" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD5" value="agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD5" value="strongly-agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox rounded-full" type="radio" name="SQD5" value="N/A" required>
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="text text-lg inter-font">
                        <b>SQD6.</b> I feel the office was fair to everyone, or "walang palakasan, during my transaction."
                    </p>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD6" value="strongly-disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD6" value="disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-warning rounded-full" type="radio" name="SQD6" value="neither" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD6" value="agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD6" value="strongly-agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox rounded-full" type="radio" name="SQD6" value="N/A" required>
                        </label>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td>
                    <p class="text text-lg inter-font">
                        <b>SQD.7</b> I was treated courteously by the staff, and (If asked for help) the staff was helpful
                    </p>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD7" value="strongly-disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD7" value="disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-warning rounded-full" type="radio" name="SQD7" value="neither" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD7" value="agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD7" value="strongly-agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox rounded-full" type="radio" name="SQD7" value="N/A" required>
                        </label>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td>
                    <p class="text text-lg inter-font">
                        <b>SQD.8</b> I got what I needed from the government office, or (if deried) denial of request was sufficiently explained to me.
                    </p>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD8" value="strongly-disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-error rounded-full" type="radio" name="SQD8" value="disagree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-warning rounded-full" type="radio" name="SQD8" value="neither" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD8" value="agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox checkbox-success rounded-full" type="radio" name="SQD8" value="strongly-agree" required>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="grid place-items-center">
                        <label class="label cursor-pointer">
                            <input class="checkbox rounded-full" type="radio" name="SQD8" value="N/A" required>
                        </label>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
        </div>
        <div class="mt-10 flex place-content-center gap-2">
            <a href="section3.php">
                <button type="button" class="btn btn-error fjalla-one-regular">
                    Back
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </a>
            
            <button type="submit" class="btn btn-primary fjalla-one-regular" name="submit">
                Submit
                <span class="material-symbols-outlined">arrow_forward</span>
            </button>
        </div>
        
        </form>
    </div>
</div>


<?php
    if(isset($_POST["submit"])){
        $sqd0 = $_POST["SQD0"];
        $sqd1 = $_POST["SQD1"];
        $sqd2 = $_POST["SQD2"];
        $sqd3 = $_POST["SQD3"];
        $sqd4 = $_POST["SQD4"];
        $sqd5 = $_POST["SQD5"];
        $sqd6 = $_POST["SQD6"];
        $sqd7 = $_POST["SQD7"];
        $sqd8 = $_POST["SQD8"];
    
        $_SESSION["SQD0"] = $sqd0;
        $_SESSION["SQD1"] = $sqd1;
        $_SESSION["SQD2"] = $sqd2;
        $_SESSION["SQD3"] = $sqd3;
        $_SESSION["SQD4"] = $sqd4;
        $_SESSION["SQD5"] = $sqd5;
        $_SESSION["SQD6"] = $sqd6;
        $_SESSION["SQD7"] = $sqd7;
        $_SESSION["SQD8"] = $sqd8;
    
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

        echo "<script>";
        echo "window.location.href='./done.php'";
        echo "</script>";
    }
?>

