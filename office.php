<?php
    session_start();
?>

<?php
    include('meta.php');
?>

<div class="grid place-items-center h-screen">
    <form class="shadow-2xl w-2/4 flex flex-col p-10 gap-2" action="office.php" method="POST">
        <h1 class="text text-2xl fjalla-one-regular">The office you want to transact with</h1>
        <!-- <select class="select select-bordered mt-5 inter-font" name="office" required>;
            <option value="SDS" selected>
                SDS - shcool division superintendent
            </option>
            <option value="ASDS">
                ASDS - Assistant Schools Division Superintendent
            </option>
            <option value="Admin">
                Admin (Cash, Personnel, Records, Supply, General Services, Procurement*)
            </option>
            <option value="CID">
                CID - Curriculum Implementation
            </option>
            <option value="Finance">
                Finance (Accounting, Budget)
            </option>
            <option value="ICT">
                ICT
            </option>
            <option value="Legal">
                Legal
            </option>
            <option value="SGOD">
                SGOD - School Governance and Operations Division (M&E, SocMob, Planning & Research, HRD, Facilities, School Health)
            </option>
        </select> -->
        <div class="form-control mt-5">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="office" value="SDS" id="SDS">
                <label for="SDS" class="inter-font">SDS - shcool division superintendent</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="office" value="ASDS" id="ASDS">
                <label for="ASDS" class="inter-font">ASDS - Assistant Schools Division Superintendent</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="office" value="Admin" id="Admin">
                <label for="Admin" class="inter-font"> Admin (Cash, Personnel, Records, Supply, General Services, Procurement*)</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="office" value="CID" id="CID">
                <label for="CID" class="inter-font">CID - Curriculum Implementation</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="office" value="Finance" id="Finance">
                <label for="Finance" class="inter-font">Finance (Accounting, Budget)</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="office" value="ICT" id="ICT">
                <label for="ICT" class="inter-font">ICT</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="office" value="Legal" id="Legal">
                <label for="Legal" class="inter-font">Legal</label>
             </div>
        </div>
        <div class="form-control">
             <div class="flex gap-5">
                <input class="radio radio-primary" type="radio" name="office" value="SGOD" id="SGOD">
                <label for="SGOD" class="inter-font">SGOD - School Governance and Operations Division (M&E, SocMob, Planning & Research, HRD, Facilities, School Health)</label>
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
                <button class="btn btn-primary fjalla-one-regular w-32" name="proceed">
                    Proceed
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>
    </form>
</div>



<?php
$proceed = $_POST["proceed"];

if(isset($proceed)){
    $office = $_POST["office"];
    $_SESSION["office"] = $office;

    if($office == "SDS") header('location: SDS.php');
    if($office == "ASDS") header('location: ASDS.php');
    if($office == "Admin") header('location: Admin.php');
    if($office == "CID") header('location: CID.php');
    if($office == "Finance") header('location: Finance.php');
    if($office == "ICT") header('location: ICT.php');
    if($office == "Legal") header('location: Legal.php');
    if($office == "SGOD") header('location: SGOD.php');
}

?>



