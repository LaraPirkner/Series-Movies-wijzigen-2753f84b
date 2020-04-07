<?php
require 'includes/connect.php';
echo "<body style='background-color:pink'>";
echo "<p><a href='index.php'>Terug</a></p>" ;

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
};
$sql= ("SELECT * FROM series WHERE ID = :id");
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
};
    echo  "<form method='post' action='./series_up.php?id=$row[ID]'>";
    echo  "<p>Title <input type='text' name='Title' value='" . $title . "'></p>";
    echo  "<p>Rating <input type='float' name='Rating' value=" . $rating . "></p>";
    echo  "<p>Seasons <input type='number' name='Season' value=" . $season . "></p>";
    echo  "<p>Country <input type='text' name='Country' value=" . $country . "></p>";
    echo  "<p>Langauge <input type='text' name='Language' value=" . $language . "></p>";
    echo  "<p>Awards <input type='text' name='Awards' value=" . $awards . "></p>";
    echo  "<p>Description <textarea type='text' name='Description' 
    rows='15' cols='40'>" . $description . "</textarea></p>";
    echo  "<input type='submit' value='edit'>";
    echo  "</form>"; 
    
?>