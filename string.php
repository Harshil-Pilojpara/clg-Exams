<?php
echo strtolower("HELLO WORLD");echo "<br>";
echo strtoupper("hello world");echo "<br>";
echo ucfirst("hello world");echo "<br>";
echo lcfirst("Hello world");echo "<br>";
echo ucwords("hello world");echo "<br>";
echo strrev("hello world");echo "<br>";
echo strlen("hello world!");echo "<br>";

echo strpos("i love php, i love php too!","php");echo "<br>";
$oldstr = "this cat is cute,cat is funny";
$newstr = str_replace("cat","dog",$oldstr,$a);
echo $newstr;
echo $a;echo "<br>";

print_r(str_split("hello"));echo "<br>";
$a=str_split("hello");
print_r($a);
echo $a[0];echo "<br>";

echo str_word_count("hello world");echo "<br>";
$a=str_word_count("hello world",1);
echo $a[0];echo "<br>";
print_r(str_word_count("Hello world & good
morning!",1,"&"));echo "<br>";

echo strcmp("hello","hello");echo "<br>";
echo strcmp("hello","Hello");echo "<br>";

echo substr("Hello world",10);echo "<br>";
// echo substr("Hello world",1)."<br>";
echo substr("Hello world",3)."<br>";
// echo substr("Hello world",7)."<br>";
echo substr("Hello world",-1)."<br>";
// echo substr("Hello world",-10)."<br>";
echo substr("Hello world",-8)."<br>";
// echo substr("Hello world",-4)."<br>";
echo substr("Hello world",0,11)."<br>";
// echo substr("Hello world",1,8)."<br>";
echo substr("Hello world",0,5)."<br>";
// echo substr("Hello world",6,6)."<br>";
echo substr("Hello world",0,-1)."<br>";
// echo substr("Hello world",-10,-2)."<br>";
echo substr("Hello world",0,-6)."<br>";echo "<br>";echo "<br>";

$string = "hello world. Beautiful day today";
$token = strtok($string," ");
while($token !== false)
{
    echo "$token<br>";
    $token = strtok(" ");
}
echo "<br>";echo "<br>";

echo str_repeat("Harshil ",4);echo "<br>";

$str = "this is nice";
echo strlen($str);echo "<br>";
echo substr_count($str,"is");echo "<br>";
echo substr_count($str,"is",2);echo "<br>";
echo substr_count($str,"is",3);echo "<br>";
echo substr_count($str,"is",3,3);echo "<br>";
?>