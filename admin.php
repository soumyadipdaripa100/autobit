<?php

    include "includes/header.php";

$dbservername = "localhost";
$dbusername = "root";
$pass = "";
$dbname = "autobit";

$conn = mysqli_connect($dbservername,$dbusername,$pass,$dbname);

if($conn)
{
    if(isset($_POST['upload']))
    {   
        $image = $_FILES['img'];
        $img_name = basename($_FILES['img']['name']);
        $img_tmp_name = $_FILES['img']['tmp_name'];
        
        $sql = "insert into gallery(image) values('$img_name')";
        
        $res = mysqli_query($conn,$sql);
        
        if($res)
        {
            move_uploaded_file($img_tmp_name,"image/gallery/".$img_name);
            echo "<script>alert('Uploaded successfully')</script>";
        }
    }
}
?>
<html>
    <body>
        <div class="card-panel">
            <h3>Gallery</h3>
            <form action="admin.php" method="post" enctype="multipart/form-data">
                <input type="file" name="img" class="file">
                <input type="submit" value="upload" class="btn" name="upload">
            </form>
        </div>
        <div class="card-panel">
            <h3>Calender</h3>
            <a href="https://calendar.google.com/calendar/b/2/r?pli=1&t=AKUaPma9zQEooJGo3x2icZLBJTtWThJqC_9g6QvvDNGyexUuFj-YFk0swjmhoomIx2w2OaKQLX9zoaiyp-T3HWMvZjCRcU-tmg%3D%3D" target="null">Click on this Link</a>
        </div>
    </body>
</html>
