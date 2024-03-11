<?php
    session_start();
?>

<?php
    include('meta.php')
?>
<body>
    <div class="grid place-items-center h-screen bg-base-100 rounded-box">
        <form class="shadow-2xl p-10 flex flex-col gap-2  w-2/4" action="clientType.php" method="POST">
            <h1 class="text text-2xl fjalla-one-regular text-center">Choose your client type</h1>
            <div class="mt-5">
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <input class="radio radio-primary" type="radio" name="client-type" value="Government" required>
                        <span class="label-text inter-font text-lg">Government (employee or other agancies)</span>
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <input class="radio radio-primary" type="radio" name="client-type" value="Business" required>
                        <span class="label-text inter-font text-lg">Business</span>
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <input class="radio radio-primary" type="radio" name="client-type" value="Citezen" required>
                        <span class="label-text inter-font text-lg">Citezen</span>
                    </label>
                </div>
            </div>
            <div class="form-control mt-2 place-items-center">
                <button class="btn btn-primary fjalla-one-regular w-40" name="proceed">Proceed</button>
            </div>
        </form>
    </div>
</body>
</htmL>

<?php

$clientType = null;
$proceedButton = $_POST["proceed"];

if(isset($proceedButton)){
    $clientType = $_POST["client-type"];
    $_SESSION["client-type"] = $clientType;
    header('location: gender.php');
}
?>