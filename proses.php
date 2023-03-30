<?php
$firstnum     = $_POST['firstnum'];
$operator     = $_POST['operator'];
$secnum       = $_POST['secnum'];

if ($operator == "+"){
    $val = (int)$firstnum + (int)$secnum;
    echo("Value: $val");
    echo("<br>");
    echo("<a href='http://localhost/6701213071-GanesaAprilyanPhanamaa-assesment1/form.html'>BACK</a>");  
}elseif ($operator == "-") {
    $val = (int)$firstnum - (int)$secnum;
    echo("Value: $val");
    echo("<br>");
    echo("<a href='http://localhost/6701213071-GanesaAprilyanPhanamaa-assesment1/form.html'>BACK</a>");  
}elseif ($operator == "*") {
    $val =(int)$firstnum * (int)$secnum;
    echo("Value: $val");
    echo("<br>");
    echo("<a href='http://localhost/6701213071-GanesaAprilyanPhanamaa-assesment1/form.html'>BACK</a>");  
}elseif ($operator == "/") {
    $val = (int)$firstnum / (int)$secnum;
    echo("Value: $val");
    echo("<br>");
    echo("<a href='http://localhost/6701213071-GanesaAprilyanPhanamaa-assesment1/form.html'>BACK</a>");  
}