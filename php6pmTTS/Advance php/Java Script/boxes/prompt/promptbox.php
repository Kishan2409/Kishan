<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script>
        function test() {
            document.getElementById("btn").style = "width:150px; height:40px;";
            document.getElementById("btn1").style = "width:150px; height:40px;";
            document.getElementById("btn2").style = "width:150px; height:40px;";
            document.getElementById("btn3").style = "width:150px; height:40px;";

        }

        function ad() {
            if (confirm('Additions ke liye ok press kare')) {
                var a = parseInt(prompt("Enter a values :"));
                var b = parseInt(prompt("Enter b values :"));
                var c = a + b;
                alert('Additions of numbers is :' + c)
            }
            else
            {
                window.location="promptbox.php"
            }
        }

        function sub() {
            if (confirm('Substractions ke liye ok press kare')) {
                var a = parseInt(prompt("Enter a values :"));
                var b = parseInt(prompt("Enter b values :"));
                var c = a - b;
                alert('Substractions of numbers is :' + c)
            }
            else
            {
                window.location="promptbox.php"
            }
        }


        function mult() {
            if (confirm('Multiplications ke liye ok press kare')) {
                var a = parseInt(prompt("Enter a values :"));
                var b = parseInt(prompt("Enter b values :"));
                var c = a * b;
                alert('Multiplications of numbers is :' + c)
            }
            else
            {
                window.location="promptbox.php"
            }
            
        }


        function dv() {
            if (confirm('Divisions ke liye ok press kare')) {
                var a = parseInt(prompt("Enter a values :"));
                var b = parseInt(prompt("Enter b values :"));
                var c = a / b;
                alert('Divisions of numbers is :' + c)
            }
            else
            {
                window.location="promptbox.php"
            }
        }
    </script>
</head>

<body onload="test()">

    <button type="button" id="btn" onclick="ad()">Additions</button>
    <button type="button" id="btn1" onclick="sub()">Substractions</button>
    <button type="button" id="btn2" onclick="mult()">Multiplications</button>
    <button type="button" id="btn3" onclick="dv()">Divisions</button>

</body>

</html>