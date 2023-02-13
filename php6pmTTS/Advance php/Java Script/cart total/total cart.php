<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        th 
        {
            background-color: green;
            color: white;
        }
    </style>
    <script>
        function crt()
        {
            var p=document.getElementById("price").value;
            var q=document.getElementById("qty").value;
            var t=p*q;
            document.getElementById("tot").innerHTML=t;

        }
    </script>
</head>
<body>
    <table align="center" border="0" cellpadding="5" cellspacing="5">
        <tr>
            <th>Id</th>
            <th>photo</th>
            <th>Pname</th>
            <th>qty</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>1001</td>
            <td><img src="https://rukminim1.flixcart.com/image/312/312/l0igvww0/mobile/r/q/m/-original-imagca5ajerqpfjy.jpeg?q=70" width="55px" height="45px"></td>
            <td>iphone</td>
            <td><input type="number" id="qty" min="1" max="10" value="1" onchange="crt()"></td>
            <td>Rs.<input type="text" id="price"  value="2500" readonly style="border: none;"></td>
            <td><a href="">delete</a></td>
        </tr>

        <tr>
            <td colspan="6"><h3 align="right">Subtotal is Rs.<label id="tot">2500</label></h3></td>
        </tr>
    </table>
</body>
</html>