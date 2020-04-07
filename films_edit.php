<?php
require 'includes/connect.php';
echo "<body style='background-color:pink'>";
echo "<p><a href='index.php'>Terug</a></p>" ;

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
};
$sql= ("SELECT * FROM films WHERE ID = :id");
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
    echo  "<form method='post' action='./films_up.php?id=$row[ID]'>";
    echo  "<p>Title <input type='text' name='Title' value='" . $title . "'></p>";
    echo  "<p>Duur <input type='float' name='Duur' value=" . $duur . "></p>";
    echo  "<p>Datum <input type='date' name='Date' value=" . $datum . "></p>";
    echo  "<p>Country <input type='text' name='Country' value=" . $land . "></p>";
    echo  "<p>Description <textarea type='text' name='Description' 
    rows='15' cols='40'>" . $description . "</textarea></p>";
    echo  "<p>Video <input type='text' name='Video' value=" . $video . "></p>";    
    echo  "<input type='submit' value='edit'>";
    echo  "</form>";


?>
