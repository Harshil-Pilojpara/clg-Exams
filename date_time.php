<?php
// echo "hellow";
// echo "represent date " . date("d.m.Y");echo "<br>";

// echo "represent day of week " . date("l");echo "<br>";

// echo "hour minutes seconde fun ".date("h.i.sa");echo "<br>";

// $a=mktime(2024,03,10,04,32,55);
// echo "mktime function ". date("Y.m.d h-i-s",$a);echo "<br>";

// $b = strtotime("10:30pm April 15 2010");
// echo "strtotime ".date("h:i:sa Y.m.d");echo "<br>";

// $date=date_create("2024-03-10");
// echo date_format($date,"Y.m.d");echo "<br>";

// $date1 = date_create("2013-08-22");
// $date2 = date_create("2013-09-22");
// $diff = date_diff($date1,$date2);
// echo $diff->format("%R%a days");echo "<br>";

$date = date_create("2024/03/11");
date_modify($date,"+15 days");
echo date_format($date,"Y/m/d");echo "<br>";

// print_r(date_parse("2013-05-01 12:30:45.5"));echo "<br>";

// $date = date_create("2013-03-15");
// date_add($date,date_interval_create_from_date_string("15 days"));
// echo date_format($date,"Y-m-d");echo "<br>";

// $date = new DateTime('2000-01-20');
// $date->add(new DateInterval('P10D'));
// echo $date->format('Y-m-d')."\n";echo "<br>";

// $date = date_create("2013-03-15");
// date_sub($date,date_interval_create_from_date_string("15 days"));
// echo date_format($date,"Y-m-d");echo "<br>";

// $date = date_create("2013-05-01");
// date_time_set($date,13,24);
// echo date_format($date,"Y-m-d h.i.sa");echo "<br>";

// print_r(getdate());echo "<br>";

// $t=time();
// echo($t."<br>");
// echo (date("Y-m-d",$t));echo "<br>";

// $startdate = strtotime("now");
// echo date("d/m/Y",$startdate)."<br>";
// $add15days = $startdate+(15*86400);
// echo date("d/m/Y",$add15days);
// $enddate = strtotime("+6 weeks",$startdate);
// while($startdate<$enddate)
// {
//     echo date("d M",$startdate)."<br>";
//     $startdate = strtotime("+1week",$startdate);
// }
// echo "<br>";
// echo "<br>";

// $val1 = "test";
// var_dump(isset($val1));
?>
