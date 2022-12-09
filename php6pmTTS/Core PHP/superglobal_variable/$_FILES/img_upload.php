<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <?php 
     if(isset($_POST["upd"]))
     {
        // file upload
        $tmp_name=$_FILES["img"]["tmp_name"];
        //$type=$_FILES["img"]["type"];
        $size=$_FILES["img"]["size"]/1024;
        $path="uploads/".$_FILES["img"]["name"];
        $type = strtolower(pathinfo($path,PATHINFO_EXTENSION));
        if(file_exists($path))
        {
            echo "<h5 style='color:red; text-align:center'>sorry file aleady exist try another</h5>";
            header("refresh:4,img_upload.php");
        }   
        elseif($_FILES["img"]["size"]<500)
        {
            echo "<h5 style='color:red; text-align:center'>sorry your image size exeeded 2kb please upload under 2kb size</h5>";
            header("refresh:4,img_upload.php");
        }
        elseif($type!='jpg' && $type!='png' && $type!='gif')
        {    
            echo "<h5 style='color:red; text-align:center'>Please upload image only in .jpg .png and .gif formate</h5>";
            header("refresh:4,img_upload.php");
        }

     else 
     {
        move_uploaded_file($tmp_name,$path);   
        echo "<h5 style='color:green; text-align:center'>Thanks your images uploaded</h5>";
        header("refresh:4,display_photo.php");
     }

     } 

    ?>
    <center>
        <h1>Upload files</h1>
        <form method="post" enctype="multipart/form-data">
            select image :<input type="file" name="img" placeholder="Upload" required>
            <br><br>
            <input type="submit" name="upd" value="Upload file here !">

        </form>
    </center>
</body>
</html>