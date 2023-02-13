<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    

    <form method="post">
        <center>


        select All country :<select name="country">
                <option value="">-select country-</option>
                <?php 
                  $url="http://country.io/names.json";
                  $data=file_get_contents($url,True);
                  $cn=json_decode($data,true);
                  foreach($cn as $cn1)
                  {
                 
                  ?>   
            
                <option value="<?php echo $cn1;?>"><?php echo $cn1;?></option>
            
                <?php 
                  }
                  ?>
            </select>

            <br><br>
            select country :<select name="country">
                <option value="">-select country-</option>
                <?php 
                  $url="country list.json";
                  $data=file_get_contents($url,True);
                  $cn=json_decode($data,true);
                  foreach($cn as $cn1)
                  {

                ?>
                <option value="<?php echo $cn1;?>"><?php echo $cn1;?></option>
            
                <?php 
                  }
                  ?>
            </select>
        </center>
    </form>
</body>
</html>