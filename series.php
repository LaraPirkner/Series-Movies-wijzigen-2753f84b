<?php
require 'includes/connect.php';

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
};

$sql = ("SELECT * FROM series WHERE ID = :id");
$sth = $pdo->prepare($sql);
$sth->execute(array(':id' => $id));
foreach ($sth as $row) {
    $title = $row['Title'];
    $rating = $row['Rating'];
    $awards = $row['Awards'];
    $season = $row['Season'];    
    $country = $row['Country'];
    $language = $row['Language'];
    $description = $row['Description'];
    echo "<p><a href='index.php'>Terug</a></p>" ; 
    echo "<p><a href='series_edit.php?id=$row[ID]'>Edit</a></p>" ; 
};

echo "<h1>" . $title ." - " . $rating . "</h1>";
echo "<h3>Awards?: " . $awards . "</h3>";
echo "<h3>Seasons: " . $season . "</h3>";
echo "<h3>Country: " . $country . "</h3>";
echo "<h3>Language: " . $language . "</h3>";
echo "<p>".$description."</p>";
echo "<body style='background-color:pink'>";


