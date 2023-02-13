<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='CSS/gray.css'>
    <script src='https://code.jquery.com/jquery-3.6.1.min.js'></script>
    <script src="JS/jquery.bvalidator.min.js"></script>
    <script src="JS/default.min.js"></script>
    <script src="JS/gray.js"></script>
    <script>

        $(document).ready(function(){

            $("#frm").bValidator();
        })

    </script>

</head>
<body>
    <form align="center" style="margin-top: 10%;" method="post" id="frm" action="google.php">
        <input type="text" name="username" placeholder="Enter User Name" data-bvalidator="required,email">
        <br>
        <br>
        <input type="password" name="pass" placeholder="Enter password" data-bvalidator="required,minlen[4],maxlen[8]">
        <br>
        <br>
        <input type="submit" name="sub" value="Login">
    </form>
</body>
</html>