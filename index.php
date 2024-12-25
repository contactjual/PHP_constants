<?php

// constants

define ("NAME", "Jual");
define ("PAYMENT", 2003);


// output 
echo NAME;
echo "<br>"; // or ."<br>"
echo PAYMENT; // or 
echo constant("PAYMENT"); // 2003


echo "My name is NAME"; // NAME constant will not work use '.' mathod. This system use for only variables.
echo "My name is: ".NAME; // Jual




// $("constant")------------------------------------------------

define ("MY_NAME", "Jual");
$naming = "constant";

echo "My name is: " .$naming("MY_NAME"); //Jual

?>