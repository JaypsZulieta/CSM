<?php
    session_start();
    include('meta.php');
?>

<div class="grid place-items-center h-screen bg-base-100">
    <form action="CC2.php" method="POST" class="shadow-2xl w-2/4 flex flex-col gap-2 rounded-box p-10">
        <h1 class="text text-3xl fjalla-one-regular text-center">CC2</h1>
        <p class="inter-font mt-5 text-lg">If aware of CC (answered 1-3 in CC1),would you say that the CC of this office was...?</p>
        <div class="mt-5">
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text inter-font">
                            <b>1.</b> Easy to see
                        </span>
                        <input class="checkbox checkbox-accent" type="radio" name="CC2answer" value="Easy to see" checked required>
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text inter-font">
                            <b>2.</b> Somewhat easy to see
                        </span>
                        <input class="checkbox checkbox-accent" type="radio" name="CC2answer" value="Somewhat easy to see" required>
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text inter-font">
                            <b>3.</b> Difficult to see
                        </span>
                        <input class="checkbox checkbox-accent" type="radio" name="CC2answer" value="Difficult to see" required>  
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text inter-font">
                            <b>4.</b> Not visible at all.
                        </span>
                        <input class="checkbox checkbox-accent" type="radio" name="CC2answer" value="Not visible at all." required>
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text inter-font">
                            <b>5.</b> N/A
                        </span>
                        <input class="checkbox checkbox-error" type="radio" name="CC2answer" value="N/A" required>
                    </label>
                </div>
                <div class="form-control mt-5 gap-2">
                    <div class="flex gap-2 place-content-center">
                        <a href="CC1.php">
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
$CC2answer = null;

if(isset($proceed)){
    $CC2answer = $_POST["CC2answer"];
    $_SESSION["CC2answer"] = $CC2answer;
    header('location: CC3.php');
}

?>




