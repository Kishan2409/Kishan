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
   $(document).ready(function(){
    $("#btn").click(function () {
      var a=20;
      var b=30;
      var c=a+b;
      alert('Additon is '+c); 
    });
   });
    
    </script>
</head>
<body>

    <button type="button" id="btn">See Message</button>
    
</body>
</html>