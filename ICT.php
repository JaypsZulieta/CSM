<?php
    session_start();
    include('meta.php');
?>
<div class="grid place-items-center h-screen bg-base-100">
    <form class="shadow-2xl p-10 w-2/4 flex flex-col gap-2 rounded-box" action="SDS.php" method="POST">
        <h1 class="text text-2xl fjalla-one-regular">Service Availed</h1>
        <!-- <select class="select select-bordered text-m inter-font" name="service">
            <option value="create ">Create/delete/rename/reset user accounts</option>
            <option value="troubleshoot">Troubleshooting of ICT equipment</option>
            <option value="uploading">Uploading of publications</option>
            <option value="others">Other requests/inquiries</option>    
        </select> -->

        <div class="form-control">
            <label class="label cursor-pointer">
                <input class="radio radio-primary" type="radio" name="service" value=" Create/delete/rename/reset user accounts " required>
                    <span class="label-text inter-font text-lg semi-bold">
                    Create/delete/rename/reset user accounts         
                    </span>
            </label>
        </div>
        <div class="form-control">
            <label class="label cursor-pointer">
                <input class="radio radio-primary" type="radio" name="service" value="Troubleshooting of ICT equipment" required>
                    <span class="label-text inter-font text-lg semi-bold">
                    Troubleshooting of ICT equipment
                    </span>
            </label>
        </div>
        <div class="form-control">
            <label class="label cursor-pointer">
                <input class="radio radio-primary" type="radio" name="service" value="Uploading of publications" required>
                    <span class="label-text inter-font text-lg semi-bold">
                    Uploading of publications
                    </span>
            </label>
        </div>
        <div class="form-control">
            <label class="label cursor-pointer">
                <input class="radio radio-primary" type="radio" name="service" value="Other requests/inquiries" required>
                    <span class="label-text inter-font text-lg semi-bold">
                    Other requests/inquiries
                    </span>
            </label>
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

