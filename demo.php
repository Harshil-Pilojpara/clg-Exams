<!-- --------------------------------------------- Forms ---------------------------------------------------- -->
<html>
    <head></head>
    <body>
        <form action="demo2.php" method="POST">
            <label>Enter name : </label>
            <input type="text" name="fn" placeholder="Enter name"><br>
            <label>Enter E-mail : </label>
            <input type="text" name="mail" placeholder="Enter E-mail"><br>
            <button name="submit">submit</button><br>
            <!-- <input type="time"> -->
        </form>
    </body>
</html>





<!-- --------------------------------------------- Arrays ---------------------------------------------------- -->
<!-- <?php
$color = array("pink","black","grey","white");
foreach ($color as $c)
{
    echo $c." ";
}
echo "<br>";
echo "<br>";

$car = array("Brand" => "Volvo" ,"Model" => "XC90", "Year" => 2002);
foreach ($car as $info => $sub_info)
{
    echo "Info : " . $info . " " . $sub_info . "<br>";
}
?> -->




<!-- ---------------------------------------- String functions -------------------------------------------- -->
<!-- <?php
$y = "Harshil Pilojpara";
echo strlen($y);

echo "<br>";
echo "<br>"; 

$a = "Hello world";
echo str_word_count($a);

echo "<br>";
echo "<br>";

$b = "hello world";
echo strtoupper($b);

echo "<br>";

$c = "HELLO WORLD";
echo strtolower($c);

echo "<br>";

$d = "Harshil Pilojpara";
echo str_replace("Pilojpara","gajjar",$d);

echo "<br>";

$x = "harshil gajjar";
echo strrev($x); 

echo "<br>";

$e = "  hello world";
echo trim($e);

echo "<br>";

$x = "Hello World!";
echo substr($x,6);

echo "<br>";
?> -->

<!-- ------------------------------------------- funtions ------------------------------------------------ -->

<!-- <?php
function ff()
{
    echo "Hi! this is first function of php";
}
ff();

echo "<br>";
echo "<br>";

function AF($name)
{
    echo "$name is samrt in study!!!";
}
AF("milan");

echo "<br>";
echo "<br>";

function summ($x,$y){
    $z = $x + $y;
    return $z;
}
echo "5 + 5 = ".summ(5,5)."<br>";
echo "6 + 12 = ".summ(6,12)."<br>";
?> -->