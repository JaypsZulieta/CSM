<?php
    session_start();
?>
<?php 
    include('meta.php');
?>
<body>
    <div class="grid place-items-center h-screen bg-base-100">
        <form class="flex flex-col gap-2 shadow-2xl p-10 w-1/3 rounded-box" action="region.php" method="POST">
            <h1 class="text text-2xl fjalla-one-regular text-center">Regional Residence <i>(optional)</i></h1>
            <p class="inter-font mt-2 text-lg">Where do you live?</p>
            <div class="flex flex-col">
                <input class="input input-bordered text-xl inter-font text-center font-semibold placeholder:font-light placeholder:text-xl" type="text" name="region" placeholder="Your region">
            </div>
            <div class="form-control mt-5">
                <div class="flex gap-2 place-content-center">
                    <a href="age.php">
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
</body>
</html>
<?php
$proceed = $_POST["proceed"];
$region = null;

if(isset($proceed)){
    $region = $_POST["region"];
    if(empty($region)) $_SESSION["region"] = "anonymous";
    else{
        $_SESSION["region"] = $region;
    }
    header('location: office.php');
} 
?>