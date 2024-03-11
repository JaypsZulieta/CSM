<?php
    session_start();
    include('meta.php');
?>
<div class="grid place-items-center h-screen bg-base-100">
    <form class="shadow-2xl p-10 w-2/4 flex flex-col gap-2 rounded-box" action="SDS.php" method="POST">
        <h1 class="text text-2xl fjalla-one-regular">Service Availed</h1>
        <!-- <select class="select select-bordered text-m inter-font" name="service">
            <option value="certificate ">Certificate of No Pending Case</option>
            <option value="correction">Correction of Entries in School Record</option>
            <option value="feedback">Feedback/Complaints</option>
            <option value="legal">Legal advice/opinion</option>    
            <option value="sites">Sites titling</option>    
        </select> -->

        <div class="form-control mt-5">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="service" value="Certificate of No. Pending Case" id="certificate">
                <label for="certificate" class="inter-font">Certificate of No. Pending Case</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="service" value="Correction of Entries in School Record" id="correction">
                <label for="correction" class="inter-font">Correction of Entries in School Record</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="service" value="Feedback/Complaints" id="feedback">
                <label for="feedback" class="inter-font">Feedback/Complaints</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="service" value="Legal advice/opinion" id="legal">
                <label for="legal" class="inter-font">Legal advice/opinion</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="service" value="Sites titling" id="sites">
                <label for="sites" class="inter-font">Sites titling</label>
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