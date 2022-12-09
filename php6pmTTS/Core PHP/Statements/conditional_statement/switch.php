<?php echo "Enter a grade in as only A,B,C";
  $grade="A";
   switch($grade)
   {
    case 'A':
        echo "<h1>You are topper students &#9786<h1>";
        break;
        
    case 'B':
        echo "<h1>You are average students &#9786<h1>";
        break;

        
    case 'C':
        echo "<h1>You are failed students &#128526<h1>";
        break;

     default:
         echo "<h1>sorry this grade is not found contact with admin<h1>";
         break;
   }?>