<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script>
        function con() {
            if (confirm('Are you sure to move another site ')) {
                alert('Click Ok Button')
                window.location="https://www.whatsapp.com";
            }
            else
            {
                window.location="confrimbox.php";
            }
        }
    </script>
</head>

<body>

    <input type="submit" name="click" value="Confrim box" onclick="con()">
</body>

</html>