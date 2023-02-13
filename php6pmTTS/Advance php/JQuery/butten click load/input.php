<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='https://code.jquery.com/jquery-3.6.1.min.js'></script>
    <script>
        $(document).ready(function () {
            $("#btn").click(function () {
                var a = parseInt(prompt('Enter value for a '));
                var b = parseInt(prompt('Enter value for b '));
                var c = a + b;
                alert('Addiction is ' + c);

            });
        });

    </script>
</head>

<body>

    <input type="submit" id="btn" name="sub" value="See Message">

</body>

</html>