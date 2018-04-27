<!DOCTYPE html>
<html>
<head>
	<title>Test Php</title>
</head>
<body>
<p>
<?php

$titanic = array(
'titre' => 'Titanic',
'price' => 20,
'rating' => 3,
'prime' => 'prime'
);

$naruto = array(
'titre' => 'naruto',
'price' => 30,
'rating' => 3,
'prime' => 'pas prime'
);

$dbz = array(
'titre' => 'dbz',
'price' => 25,
'rating' => 5,
'prime' => 'prime'
);
$flora = array(
'titre' => 'flora',
'price' => 20,
'rating' => 2,
'prime' => 'prime'
);
$vivant = array(
'titre' => 'vivant',
'price' => 35,
'rating' => 3,
'prime' => 'pas prime'
);
$histoire = array(
'titre' => 'histoire',
'price' => 15,
'rating' => 3,
'prime' => 'prime'
);
$html = array(
'titre' => 'html',
'price' => 20,
'rating' => 5,
'prime' => 'prime'
);
$politique = array(
'titre' => 'politique',
'price' => 30,
'rating' => 3,
'prime' => 'pas prime'
);
$livre = array($titanic, $naruto, $dbz, $flora, $vivant, $histoire, $html, $politique);

foreach ($livre as $book){
	echo $book['titre']. '<br />' . $book['price'].  '<br />' . $book['rating']. '<br />' . $book['rating']. '<br />' .$book['prime']. '<br />'. '<br />';
}

?>	
</p>
</body>
</html>