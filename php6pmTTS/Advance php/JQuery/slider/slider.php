<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script>
        function crt()
        {
            var q=document.getElementById("qty").value;
            var t=p*q;
            document.getElementById("tot").innerHTML=t;

        }
    </script>
    <script src='https://code.jquery.com/jquery-3.6.2.min.js'></script>
    <script src='https://malsup.github.io/jquery.cycle.all.js'></script>

    <script>
        $(document).ready(function(){
            $("#slid").cycle("fade,zoom,shuffle,turnLeft,turnRight")
            $("#delete").click(function(){
                $("#crt").remove();
            })
            $("#bt0").click(function(){
                $("#crt").fadeToggle();
            })
            $("#bt1").click(function(){
                $("#crt").hide();
            })
            $("#bt2").click(function(){
                $("#crt").show();
            })
            $("#bt3").click(function(){
                $("#crt").toggle();
            })

        })

    </script>
    <style>
        th 
        {
            background-color: green;
            color: white;
        }
    </style>
    
</head>
<body><center>
<div id="slid">
<img src="https://images.pexels.com/photos/574069/pexels-photo-574069.jpeg?auto=compress&cs=tinysrgb&w=600">
<img src="https://images.pexels.com/photos/60504/security-protection-anti-virus-software-60504.jpeg?auto=compress&cs=tinysrgb&w=600">
<img src="https://images.pexels.com/photos/50711/board-electronics-computer-data-processing-50711.jpeg?auto=compress&cs=tinysrgb&w=600">
</div><br><br><br>

    <input type="submit" id="bt0" name="fade" value="fade">
    <input type="submit" id="bt1" name="hide" value="hide">
    <input type="submit" id="bt2" name="show" value="show">
    <input type="submit" id="bt3" name="togal" value="togal">
<br>
<br>
<br>
    </center>
    <table align="center" id="crt" border="0" cellpadding="5" cellspacing="5">
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
            <td>Rs.<input type="text" id="p"  value="25000" readonly style="border: none;"></td>
            <td><a href="#" id="delete">delete</a></td>
        </tr>

        <tr>
            <td colspan="6"><h3 align="right">Subtotal is Rs.<label id="tot">25000</label></h3></td>
        </tr>
    </table>
</body>
</html>