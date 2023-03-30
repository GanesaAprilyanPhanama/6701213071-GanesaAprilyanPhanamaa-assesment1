<?php
$firstnum     = $_POST['firstnum'];
$operator     = $_POST['operator'];
$secnum       = $_POST['secnum'];

switch ($operator) {
    case '+':
        $val = (int)$firstnum + (int)$secnum;
        echo("Value: $val");
        echo("<br>");
        echo("<a href='http://localhost/6701213071-GanesaAprilyanPhanamaa-assesment1/form.html'>BACK</a>");  
        break;
    case '-':
        $val = (int)$firstnum - (int)$secnum;
        echo("Value: $val");
        echo("<br>");
        echo("<a href='http://localhost/6701213071-GanesaAprilyanPhanamaa-assesment1/form.html'>BACK</a>");  
        break;
    case '*':
        $val = (int)$firstnum * (int)$secnum;
        echo("Value: $val");
        echo("<br>");
        echo("<a href='http://localhost/6701213071-GanesaAprilyanPhanamaa-assesment1/form.html'>BACK</a>");  
        break;
    case '/':
        $val = (int)$firstnum / (int)$secnum;
        echo("Value: $val");
        echo("<br>");
        echo("<a href='http://localhost/6701213071-GanesaAprilyanPhanamaa-assesment1/form.html'>BACK</a>");  
        break;
    default:
        echo("");
        echo("<br>");
        echo("<a href='http://localhost/6701213071-GanesaAprilyanPhanamaa-assesment1/form.html'>BACK</a>");  
        break;
}