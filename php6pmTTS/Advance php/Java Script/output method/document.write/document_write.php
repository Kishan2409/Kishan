<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function l() {
            alert('Hello this is document.write output example')
        }
    </script>
</head>
<body onload="l()">
    <script>
        var a=50;
        var b=60;
        var c=a+b;
        document.write("Additions of numbers :",c);
    </script>
</body>
</html>