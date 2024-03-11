<?php
    session_start();
?>
<?php
    include('meta.php');
?>
<body>
    <div class="grid place-items-center h-screen">
        <form class="flex flex-col gap-2 shadow-2xl p-10 w-1/3" action="gender.php" method="POST">
            <h1 class="text text-2xl fjalla-one-regular text-center">Choose your Gender</h1>
            <div class="mt-5">
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <input class="radio radio-primary" type="radio" name="gender" value="Male" required>
                        <span class="label-text inter-font text-lg">
                            Male
                            <span class="material-symbols-outlined text-blue-500">male</span>
                        </span>
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <input class="radio radio-primary" type="radio" name="gender" value="Female" required>
                        <span class="label-text inter-font text-lg">
                            Female
                            <span class="material-symbols-outlined text-pink-500">female</span>
                        </span>
                    </label>
                </div>
                <div class="form-control mt-5 gap-2">
                    <div class="flex gap-2 place-content-center">
                        <a href="clientType.php">
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
            </div>
        </form>
    </div>
</body>
</html>

<?php

$proceedButton =  $_POST["proceed"];
$gender = null;

if(isset($proceedButton)){
    $gender = $_POST["gender"];
    $_SESSION["gender"] = $gender;
    header('location: age.php');
}

?>

