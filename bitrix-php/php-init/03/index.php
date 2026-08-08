<?php

// вывести все ошибки
// error_reporting(-1);

// переменные
  $page_greet = 'Halo, World!';
  $page_title = 'Page title';
  $fruit = 'apple';
  $winnie = "I have 2 {$fruit}'s";
  $num_one = 12;
  $num_two = 5;

  // ------------

  // константы
  define('Page', 'new page');
  // или для PHP версии не менее 5.2
  const Page2 = 'The New Page';
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo Page2," :"," "; echo $num_two; ?> : <?php echo $num_two; ?></title>
</head>
<body>
  
<h1 style="color: #4e4040;"><?php echo $page_greet; ?></h1>
<hr>
<p>Calculate the sum: <b style="color: rgb(212, 160, 160); font-weight: 900;font-size: xx-large;"><?php echo $num_one-$num_two; ?></b></p>

<p>Winnie says: <b style="color: rgb(160, 212, 167); font-weight: 900;font-size: xx-large;"><?php echo $winnie; ?></p>

</body>
</html>