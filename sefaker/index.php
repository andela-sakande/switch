<?php

require 'vendor/autoload.php';

$faker = Faker\Factory::create();

// generate data by accessing properties
// 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>
You can call me <?php echo $faker->name ."\n"; ?>
 </br>
 i live in  <?php echo $faker->address; ?>

</p>
</body>
</html>

