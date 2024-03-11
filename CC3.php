<?php
    session_start();
    include('meta.php');
?>

<div class="grid place-items-center h-screen bg-base-100">
    <form action="CC3.php" method="POST" class="shadow-2xl w-2/4 flex flex-col gap-2 rounded-box p-10">
        <h1 class="text text-3xl fjalla-one-regular text-center">CC3</h1>
        <p class="inter-font mt-5 text-lg">If aware of CC (answered code 1-3 in CC1),how much  did the CC help you in your transaction?</p>
        <div class="mt-5">
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text inter-font">
                            <b>1.</b> It helped very much.
                        </span>
                        <input class="checkbox checkbox-accent" type="radio" name="CC3answer" value="It helped very much." checked required>
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text inter-font">
                            <b>2.</b>Somewhat helped.
                        </span>
                        <input class="checkbox checkbox-accent" type="radio" name="CC3answer" value="Somewhat helped." required>
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text inter-font">
                            <b>3.</b> Did not help at all.
                        </span>
                        <input class="checkbox checkbox-accent" type="radio" name="CC3answer" value="Did not help at all." required>  
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text inter-font">
                            <b>4.</b>N/A.
                        </span>
                        <input class="checkbox checkbox-error" type="radio" name="CC3answer" value="N/A." required>
                    </label>
                </div>
               
                <div class="form-control mt-5 gap-2">
                    <div class="flex gap-2 place-content-center">
                        <a href="CC2.php">
                            <button type="button" class="btn btn-error fjalla-one-regular w-24" name="back">
                                Back
                                <span class="material-symbols-outlined">cancel</span>
                            </button>
                        </a>
                        <button class="btn btn-primary fjalla-one-regular" name="proceed">
                            Proceed
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
    </form>
</div>

<?php

$proceed = $_POST["proceed"];
$CC3answer = null;

if(isset($proceed)){
    $CC3answer = $_POST["CC3answer"];
    $_SESSION["CC3answer"] = $CC3answer;
    header('location: section3.php');
}
?>