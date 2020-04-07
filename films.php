<?php
require 'includes/connect.php';

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
};

$sql = "SELECT * FROM films WHERE ID = :id";
$sth = $pdo->prepare($sql);
$sth->execute(array(':id' => $id));
foreach ($sth as $row) {
    $title = $row['Title'];
    $duur = $row['Duur'];
    $datum = $row['Datum'];
    $land = $row['Land'];
    $description = $row['Description'];
    $video = $row['Video'];
};

echo "<p><a href='index.php'>Terug</a></p>" ; 
echo "<p><a href='films_edit.php?id=$row[ID]'>Edit</a></p>" ; 

echo "<h1>" . $title ."  " . $duur . " minuten </h1>";
echo "<h3>Release datum: " . $datum ."</h3>";
echo "<h3>Land van herkomst: " . $land ."</h3>";
echo "<p>".$description."</p>";
echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$video.'
    " frameborder="0" allow="accelerometer autoplay encrypted-media gyroscope picture-in-picture" allowfullscreen></iframe>';
echo "<body style='background-color:pink'>";
