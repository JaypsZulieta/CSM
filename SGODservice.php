<?php
    session_start();
    include('meta.php');
?>

<div class="grid place-items-center h-screen bg-base-100">
    <form class="shadow-2xl p-10 flex flex-col gap-2 rounded-box w-2/4" action="SDS.php" method="POST">
        <h1 class="text text-2xl fjalla-one-regular">Service Availed</h1>
        <!-- <select class="select select-bordered text-m inter-font" name="service">
            <option value="privateSchool">Private school-related</option>
            <option value="BasicEduc">Basic Education Data</option>
            <option value="performance-indicators">EBEIS/LIS/NAT Data and Performance Indicators</option>
            <option value="feedback">Other requests/inquiries</option>
        </select> -->
        
        <div class="form-control mt-5">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="service" value="Private school-related" id="privateSchool">
                <label for="privateSchool" class="inter-font">Private school-related</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="service" value="Basic Education Data" id="BasicEduc">
                <label for="BasicEduc" class="inter-font">Basic Education Data</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="service" value="EBEIS/LIS/NAT Data and Performance Indicators" id="performance-indicators">
                <label for="performance-indicators" class="inter-font">EBEIS/LIS/NAT Data and Performance Indicators</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="service" value="Other requests/inquiries" id="feedback">
                <label for="feedback" class="inter-font">Other requests/inquiries</label>
             </div>
        </div>
        

        <div class="form-control mt-5">
            <div class="flex place-content-center gap-2">
                <a href="office.php">
                    <button class="btn btn-error fjalla-one-regular" type="button">
                        back
                        <span class="material-symbols-outlined">cancel</span>
                    </button>
                </a>
                <button class="btn btn-primary fjalla-one-regular" type="submit" name="proceed">
                    proceed
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>
    </form>
</div>

<?php

$proceed = $_POST["proceed"];

if(isset($proceed)){
    $service = $_POST["service"];
    $_SESSION["service"] = $service;
    echo $_SESSION["service"];
    header('location: results.php');
}

?>