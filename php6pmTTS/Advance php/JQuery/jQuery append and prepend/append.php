<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='https://code.jquery.com/jquery-3.6.2.min.js'>
    </script>
    <script>
        $(document).ready(function(){
            $("input").addClass("bt1");
            $("#btn").click(function(){
                $("b").append("Patel");          
            });
        });
    </script>
    <style>
        .bt1{
            margin-top: 20%;
            margin-left: 35%;
            width: fit-content;
            height: auto;
            font-size: xx-large;
            background-color: black;
            color: white;
            align-self: center;
        }
    </style>
</head>

<body>
    <b style="font-size: xx-large; color: cadetblue;">Kishan 
    </b>
    <input type="submit" id="btn" name="Sub" value="append">
</body>

</html>