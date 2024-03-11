<?php
    session_start();
?>

<?php
    include('meta.php');
?>

<div class="grid place-items-center h-screen">
    <form class="shadow-2xl w-2/4 flex flex-col p-10 gap-2" action="SGOD.php" method="POST">
        <h1 class="text text-2xl fjalla-one-regular">The office you want to transact with</h1>
        <!-- <select class="select select-bordered mt-5 inter-font" name="office" required>;
            <option value="education">
                Education Facilities
            </option>
            <option value="HRD">
                HRD - Human Resource Development
            </option>
            <option value="Planning">
                Planning & Research
            </option>
            <option value="School">
                School Health
            </option>
            <option value="SMME">
                SMME - School Management Monitoring and Evaluation Section
            </option>
            <option value="SocMob">
                SocMob - Social Mobilization and Networking
            </option>
        </select> -->

        <div class="form-control mt-5">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="office" value="Education Facilities" id="education">
                <label for="education" class="inter-font">Education Facilities</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="office" value="Human Resource Development" id="HRD">
                <label for="HRD" class="inter-font"> HRD - Human Resource Development</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="office" value="Planning & Research" id="Planning">
                <label for="Planning" class="inter-font"> Planning & Research</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="office" value=" School Health" id="School">
                <label for="School" class="inter-font"> School Health</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="office" value="School Management Monitoring and Evaluation Section" id="SMME">
                <label for="SMME" class="inter-font"> SMME - School Management Monitoring and Evaluation Section</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="office" value="Human Resource Development" id="SocMob">
                <label for="SocMob" class="inter-font">SocMob - Social Mobilization and Networking</label>
             </div>
        </div>

        <div class="form-control mt-5">
            <div class="flex gap-2 place-content-center">
                <a href="region.php">
                    <button type="button" class="btn btn-error fjalla-one-regular w-32">
                        Cancel
                        <span class="material-symbols-outlined">cancel</span>
                    </button>
                </a>
                <button class="btn btn-primary fjalla-one-regular w-32" name="next">
                    Proceed
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>
    </form>
</div>

<?php

$proceed = $_POST["next"];

if(isset($proceed)){
    $office = $_POST["office"];
    $_SESSION["office"] = $_SESSION["office"] . "-" . $office;
    header('location: SGODservice.php');
}

?>



