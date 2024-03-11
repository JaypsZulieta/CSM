<?php
    session_start();
    include('meta.php');
?>

<?php
    session_start();
    include('meta.php');
?>
<body>
    <div class="grid place-items-center h-screen bg-base-100">
        <div class="shadow-2xl p-10 w-1/2 rounded-box">
            <h1 class="text text-3xl text-center fjalla-one-regular">Section 3</h1>
            <h2 class="texxt text-2xl text-left fjalla-one-regular">Instructions</h2>
            <p class="mt-5 text-justify inter-font font-light">
                For SQD 0-8, please put a check mark on the column that best corresponds to your answer.
            </p>
            <div class="flex mt-10 gap-2 place-content-center">
                <a href="CC1.php">
                    <button class="btn btn-error fjalla-one-regular">
                        Back
                        <span class="material-symbols-outlined">cancel</span>
                    </button>
                </a>
                <a href="SQD.php">
                    <button class="btn btn-primary fjalla-one-regular text-2xl">
                        Proceed
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>