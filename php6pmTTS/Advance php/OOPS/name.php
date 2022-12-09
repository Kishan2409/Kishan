<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>name</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <form method="post">
        <input type="text" name="nm" placeholder="insert name">
        <input type="submit" name="su" value="Prit using class">
    </form>
    <?php

if(isset($_POST['su']))
{
        class A{
            //public $nm;
            public function name(){
                $n=$_POST['nm'];
                echo  $n ;
            }
        }
        $obj=new A;
        $obj->name();

}
   ?>
</body>

</html>