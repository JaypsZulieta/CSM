<?php
    session_start();
    include('meta.php');
?>

<div class="grid place-items-center h-screen bg-base-100">
    <form action="CC1.php" method="POST" class="shadow-2xl w-2/4 flex flex-col gap-2 rounded-box p-10">
        <h1 class="text text-3xl fjalla-one-regular text-center">CC1</h1>
        <p class="inter-font mt-5 text-lg">Which of the following best describes your awareness of a CC?</p>
        <div class="mt-5">
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text inter-font">
                            <b>1.</b> I know what a CC is and I saw this office's CC.
                        </span>
                        <input class="checkbox checkbox-accent" type="radio" name="CC1answer" value="I know what a CC is and I saw this office's CC." checked required>
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text inter-font">
                            <b>2.</b> I know what a CC is but I did NOT see this office's CC.
                        </span>
                        <input class="checkbox checkbox-accent" type="radio" name="CC1answer" value="I know what a CC is but I did NOT see this office's CC" required>
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text inter-font">
                            <b>3.</b> I learned of the CC only when I saw this office's CC.
                        </span>
                        <input class="checkbox checkbox-accent" type="radio" name="CC1answer" value="I learned of the CC only when I saw this office's CC." required>  
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text inter-font">
                            <b>4.</b> I do not know what a CC is and I did not see on in this office.
                        </span>
                        <input class="checkbox checkbox-accent" type="radio" name="CC1answer" value="I do not know what a CC is and I did not see on in this office." required>
                    </label>
                </div>
                <div class="form-control mt-5 gap-2">
                    <div class="flex gap-2 place-content-center">
                        <a href="section2.php">
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
$CC1answer = null;

if(isset($proceed)){
    $CC1answer = $_POST["CC1answer"];
    $_SESSION["CC1answer"] = $CC1answer;

    if($CC1answer == "I do not know what a CC is and I did not see on in this office."){
        header('location: section3.php');
        $_SESSION["CC2answer"] = "N/A";
        $_SESSION["CC3answer"] = "N/A";
    }
    else{
        header('location: CC2.php');
    }
}
?>

