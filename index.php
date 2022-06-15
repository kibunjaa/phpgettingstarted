<?php
//your code goes here
// $myname="Franziska Wangari";
// $finaloutput="My name is called".' ' .$myname;
// echo $finaloutput;
//echo $finaloutput

//Arrays
//  $students= array(" Franzy"," Peter"," Sheila"," Mercy"," Hilda");
//  echo $students[3];
$programmarks= array("assignments"=>25,"CAT"=>30,"attendance"=>8,"projects"=>45);
echo "CAT:" .$programmarks["CAT"];
//Multidimensional Arrays
$WebTechnologies= array(
    "fronted"=> array(" HTML"," CSS"," Bootstrap"),
    "backend"=> array(" PHP"," JS"," Python"," Java"),
    "database"=> array(" mySQL"," Mongo"," Firebase",)
);
echo $WebTechnologies["fronted"][2];
echo $WebTechnologies["backend"][2];
echo $WebTechnologies["database"][0];

?>