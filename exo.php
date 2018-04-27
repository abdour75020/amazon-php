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
'prime' => 'true'
);

$naruto = array(
'titre' => 'naruto',
'price' => 30,
'rating' => 3,
'prime' => 'false'
);

$dbz = array(
'titre' => 'dbz',
'price' => 25,
'rating' => 5,
'prime' => 'true'
);
$flora = array(
'titre' => 'flora',
'price' => 20,
'rating' => 2,
'prime' => 'true'
);
$vivant = array(
'titre' => 'vivant',
'price' => 35,
'rating' => 3,
'prime' => 'false'
);
$histoire = array(
'titre' => 'histoire',
'price' => 15,
'rating' => 3,
'prime' => 'true'
);
$html = array(
'titre' => 'html',
'price' => 20,
'rating' => 5,
'prime' => 'true'
);
$politique = array(
'titre' => 'politique',
'price' => 30,
'rating' => 3,
'prime' => 'true'
);
$livre = array($titanic, $naruto, $dbz, $flora, $vivant, $histoire, $html, $politique);

foreach ($livre as $book) {
        echo $book['titre'].'<br/>'.$book['price'].'<br/>'.$book['rating'].'<br/>';

         if ($book['prime']=='true') {
          echo 'Le Livre '.$book['titre'].' est disponible en promo ! Vite commandes-le !<br/><br/>';
        }

        else {
          echo 'Désolé, le livre '.$book['titre'].' n\'est pas disponible en promo! Achetes un autre livre si tu en veux une.<br/><br/>';
        }


      }

?>	
</p>
</body>
</html>