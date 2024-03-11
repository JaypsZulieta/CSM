<?php
    session_start();
    include('meta.php');
?>

<div class="grid place-items-center h-screen bg-base-100">
    <form class="shadow-2xl p-10 w-2/4 flex flex-col gap-2 rounded-box" action="SDS.php" method="POST">
        <h1 class="text text-2xl fjalla-one-regular">Service Availed</h1>
        <!-- <select class="select select-bordered text-m inter-font" name="service">
            <option value="cash">Cash</option>
            <option value="personal">Personel</option>
            <option value="records">Records</option>
            <option value="supply">Supply</option>
            <option value="general">General Services</option>
            <option value="procurement">Procurement</option>
        </select> -->

        <div class="form-control mt-5">
             <div class="flex gap-5">   
                <input class="radio radio-primary" type="radio" name="service" value="cash" id="cash">
                <label for="cash" class="inter-font">cash</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">   
                <input class="radio radio-primary" type="radio" name="service" value="personal" id="personal">
                <label for="personal" class="inter-font">personal</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">   
                <input class="radio radio-primary" type="radio" name="service" value="records" id="records">
                <label for="records" class="inter-font">records</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">   
                <input class="radio radio-primary" type="radio" name="service" value="supply" id="supply">
                <label for="supply" class="inter-font">supply</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">   
                <input class="radio radio-primary" type="radio" name="service" value="General Services" id="general">
                <label for="general" class="inter-font">General Services</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">   
                <input class="radio radio-primary" type="radio" name="service" value="Procurement" id="procurement">
                <label for="procurement" class="inter-font">Procurement</label>
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