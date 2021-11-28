<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP WEB</title>
</head>
<body>
    <div class="container">
        this is my first php website
        <?php
           echo"this is string using php";
           $var1 = 69;
           $var2 = 45;
           echo $var1;
           echo" ";
           echo $var2;
           echo "  ";
           echo $var1 + $var2;
           echo "<br>";


           //operators 
           echo "the sum of var and var2 is ";
           echo $var1 + $var2;
           echo"<br>";


           //assignment operators 
           $newvar = $var1;
           $newvar +=1;
           echo"the assign opera is: ";
           echo $newvar;
           echo"<br>";


           //boolean
           echo "the vale of 1==4 is: ";
           echo var_dump(1==4);
           echo"<br>";

           echo "the vale of 1!=4 is: ";
           echo var_dump(1!=4);
           echo"<br>";

           echo "the vale of 1<4 is: ";
           echo var_dump(1<4);
           echo"<br>";

           echo "the vale of 1>4 is: ";
           echo var_dump(1>4);
           echo"<br>";

           //increment || decrement operator 
        //    echo $var1++;
           echo"<br>";
        //    echo $var1--;
           echo"<br>";
        //    echo $var1;
           echo ++$var1;
           echo"<br>";
           echo --$var1;
           echo"<br>";

           //logical operators
        //    $myvar = (true ) and (true);
        //    echo var_dump($myvar);
        //    echo"<br>";
        //    $myvar = (false) and (true);
        //    echo var_dump($myvar);
        //    echo"<br>";
           
        //    $myvar = (false) or (true);
        //    echo var_dump($myvar);
        //    echo"<br>";

        //    $myvar = (true) or (false);
        //    echo var_dump($myvar);
        //    echo"<br>";


        //    $myvar = (false) or (true);
        //    $myvar = (false) or (true);
           $myvar = (true) xor (false);
           echo var_dump($myvar);


        //    datatypes
        echo "<br> data types <br>";
        $var3 = "this is aslan shaikh ";
        echo var_dump($var3);

        //CONSTANTS ... KA TARIKA 
        define('PI', 3.14);
        echo PI;

        ?>
    </div>
</body>
</html>