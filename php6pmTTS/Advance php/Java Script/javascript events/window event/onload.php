<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script>
        function tr()
        {
            alert('hello this is onload event when load your page..')
        }
    </script>
</head>
<body onload="tr()">
    <input type="submit" name="cl" value="Click" onclick="tr()">
</body>
</html>