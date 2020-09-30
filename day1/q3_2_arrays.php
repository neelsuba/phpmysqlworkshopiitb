<?php
$m1 = array( "row1"=>array(3,7), "row2"=>array(1,5));
$m2 = array( "row1"=>array(2,3), "row2"=>array(2,1));

echo "Matrix 1:";
echo("<br>");
echo($m1["row1"][0]);
echo "    ";
echo($m1["row1"][1]);
echo("<br>");
echo($m1["row2"][0]);
echo "    ";
echo($m1["row2"][1]);
echo("<br>");
echo "Matrix 2:";
echo("<br>");
echo($m2["row1"][0]);
echo "    ";
echo($m2["row1"][1]);
echo("<br>");
echo($m2["row2"][0]);
echo "    ";
echo($m2["row2"][1]);
echo("<br>");


$m3 = array(
        
        "row1"=>array($m1["row1"][0]+$m2["row1"][0],$m1["row1"][1]+$m2["row1"][1]), 
        "row2"=>array($m1["row2"][0]+$m2["row2"][0],$m1["row2"][1]+$m2["row2"][1]) 
);

echo "Result:";
echo("<br>");
echo($m3["row1"][0]);
echo "    ";
echo($m3["row1"][1]);
echo("<br>");
echo($m3["row2"][0]);
echo "    ";
echo($m3["row2"][1]);
echo("<br>");


?>