<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Piñatabrief</title>

	<link rel="stylesheet" href="css/style.css">

</head>
<body>

	<?php include('data.php');

	// get random brief branch in lowercase
	$branch = strtolower($branch[array_rand($branch)]);

	// get random values from selections
	foreach($selections as &$s) {
		if(is_array(reset($s))) $s = $s[$branch];
		$s = $s[array_rand($s)];
	}

	// combine selections to brief
	$text = vsprintf('<h3>Piñatabrief</h3>
		<h4>Bakgrund</h4>
		<p>%s. %s. %s %s %s. %s. %s, %s, %s &amp; %s %s.</p>
		<h4>Målgrupp</h4>
		<p>%s %s &ndash; %s. %s, %s %s.</p>
		<h4>Uppdrag</h4>
		<p>%s %s. %s, %s %s och %s. %s. %s?</p>', $selections);

	// insert random business name
	$business = $business[array_rand($business)];
	$text = str_replace('@@insertForetagsnamn@@', $business, $text);

	echo('<div class="readable">'.$text.'</div>');

	// show randomized selections array for debugging
	echo('<br><br><pre>'.print_r($selections,1).'</pre>');

	?>

</body>
</html>