<?php
    session_start();
    include('meta.php');
?>

<div class="grid place-items-center h-screen bg-base-100">
    <form class="shadow-2xl p-10 w-2/4   flex flex-col gap-2 rounded-box" action="SDS.php" method="POST">
        <h1 class="text text-2xl fjalla-one-regular">Service Availed</h1>
        <!-- <select class="select select-bordered text-m inter-font" name="service">
            <option value="LRMS ">LRMS - Learning Resource Management Section</option>
            <option value="instructional">Instructional Management Section</option>
            <option value="PSDS">PSDS - Public School District Supervisor</option>
            
        </select> -->

        <div class="form-control">
            <label class="label cursor-pointer">
                <input class="radio radio-primary" type="radio" name="service" value="Learning Resource Management Section" required>
                    <span class="label-text inter-font">
                    LRMS - Learning Resource Management Section
                    </span>
            </label>
        </div>
        <div class="form-control">
            <label class="label cursor-pointer">
                <input class="radio radio-primary" type="radio" name="service" value="Instructional Management Section" required>
                    <span class="label-text inter-font">
                    Instructional Management Section
                    </span>
            </label>
        </div>
        <div class="form-control">
            <label class="label cursor-pointer">
                <input class="radio radio-primary" type="radio" name="service" value="PSDS" required>
                    <span class="label-text inter-font">
                    PSDS - Public School District Supervisor
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

?>