<?php

/*
boolean: true/false → единица или пустая строка
integer: целое число
float: с плавающей точкой (Н: 1.5, 2.5, 17.2)
string
*/

$is_auth = true;
$int = 10;
$flo = 10.4;
$str = 'this is string';
$strs = 'these are string\'s';
$doubleQuotes = 'This is "String"';
$HEREDOC = <<< HERE
This is "String"
HERE;
$NOWDOC = <<<'HERE'
This 'is' "String"
HERE;
// получить тип данных
// var_dump();
// gettype();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Типы данных</title>
</head>
<body>
<p>
Boolean(var_dump):
<?php 
var_dump($is_auth); // bool(true)
?>
</p>
<p>
Boolean(gettype):
<?php 
echo gettype($is_auth); //boolean
?>
</p>
<p>
Integer:
<?php 
var_dump($int); //  int(10)
?>
</p>
<p>
Float:
<?php 
var_dump($flo); // float(10.4) 
?>
</p>
<p style="margin: 0;">
String:
<?php 
var_dump($str); // string(14) "this is string" 
?>
</p>
<hr style="width: 120px; display:inline-block; color: #e5e5e5; margin: 0">
<p style="margin: 0;">
  <?php 
echo $strs; // these are string's 
?>
</p>
<p>
  Double Quotes:
  <?php 
echo $doubleQuotes; // This is "String"
?>
</p>
<code>
  $doubleQuotes = 'This is "String"';
</code>
<p style="text-decoration: underline;">
HEREDOC:
<?php 
echo $HEREDOC; // This is "String"
?>
</p>
<code>
$HEREDOC = <<< HERE This is String HERE;
</code>
<p style="text-decoration: underline;">
NOWDOC:
<?php 
echo $NOWDOC; // This is "String"
?>
</p>
<code>
$NOWDOC = <<<'HERE' 
This is String 
HERE;
</code>
  
</body>
</html>