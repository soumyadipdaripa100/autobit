<?php

$dbservername = "localhost";
$dbusername = "root";
$pass = "";
$dbname = "autobit";

$conn = mysqli_connect($dbservername,$dbusername,$pass,$dbname);

if($conn)
{
    if(isset($_POST['login']))
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        
        $input = "select password from admin where username = '$user'";
        
        $query = mysqli_query($conn,$input);
        
        if(mysqli_num_rows($query))
        {
            $dbarray = mysqli_fetch_assoc($query);
            if($pass==$dbarray['password'])
            {
                header("Location: admin.php");
            }
            else
                header("Location: login.php");
        }
        else
            header("Location: login.php");
    }
    else
        header("Location: login.php");
}

?>