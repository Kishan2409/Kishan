<?php
       class a 
       {
        public $a,$b;
        public function display()
        {
        if(isset($_POST["ad"]))
        {
            $this->a=$_POST["a"];
            $this->b=$_POST["b"];
            $c=$this->a+$this->b; 
        return $c;
       }
    }
    }
    $obj=new a;
    echo "Additions of numbers :".$obj->display();
    ?>
    <html>
        <body>
        <form method="post">
        enter first number <input type="text" name="a" placeholder="enter number">
        enter second number <input type="text" name="b" placeholder="enter number">  
        <input type="submit" value="add" name="ad"> 
    </form>
        </body>
    </html>