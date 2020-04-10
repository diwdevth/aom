<?php
@session_save_path("tmp/");
@session_start();
//!isset($_POST['save']) && 
if(/*!isset($_POST['save']) && */!isset($_SESSION['status'])){
    header("location: home.php");
    exit();
}else{
    /*foreach ($_POST as $key => $values) {
        echo $key."<br />";
    }*/
    require_once("config.php");
    /*$name = $_POST['name'];
    $numbers = $_POST['numbers'];
    $usecmd = $_POST['usecmd'];
    $usesleep = $_POST['usesleep'];*/
    $name = "\$a = 1;";
    $numbers = 25;
    $usecmd = 0;
    $usesleep = 0;
    if($usesleep == "1")
    {
        shell_exec("rundll32.exe powrprof.dll,SetSuspendState 0,1,0");
    }
    else if($usecmd == "1")
    {
        eval($name);
    }
    else if(intval($numbers) > 0)
    {
        
        $result = mysqli_query($conn, "select * from time;");
        if(mysqli_num_rows($result) <= 0)
        {
            ?>
            <html><body>
            <script src="jquery-3.4.1.min.js"></script>
            <script src="convert.js"></script>
            </body></html>
            <?php
            mysqli_free_result($result);
        }
        else
        {
            //echo "Row".mysqli_num_rows($result);
            mysqli_free_result($result);
        }
    }
}
?>