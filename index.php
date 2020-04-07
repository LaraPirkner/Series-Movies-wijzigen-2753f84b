<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="style.css">
    <title>database</title>
</head>
<body>

<h1>Welkom op het netland beheerderspaneel </h1>
<h2>Series</h2>
<div class="title">

</div>
<?php
require 'includes/connect.php';

echo "<a href='index.php?sort=Title'>Title</a><a href='index.php?sort=Rating'>Rating</a>";

/*print de info*/
echo "<table>";
if (isset($_GET['sort'])) {
    $data = $pdo->query("SELECT * FROM series ORDER BY " . $_GET['sort'] . " ASC")->fetchAll();
}else{
$data = $pdo->query("SELECT * FROM series")->fetchAll();
}
echo "<tr>";
foreach ($data as $row) {
    echo "<td>". $row['Title']. "</td>";
    echo "<td>" .$row['Rating']."</td>";
    echo "<td><a href='series.php?id=$row[ID]'>Info</a></td>" ;
    echo "</tr>";
}
echo "</table>"
?>

<h2>Films</h2>
<div class="title">
</div>
<?php
echo "<a href='index.php?sortF=Title'>Title</a><a href='index.php?sortF=Duur'>Duur</a>";

echo "<table>";
if (isset($_GET['sortF'])) {
    $data = $pdo->query("SELECT * FROM films ORDER BY " . $_GET['sortF'] . " ASC")->fetchAll();
}else{
$data = $pdo->query("SELECT * FROM films")->fetchAll();
}
echo "<tr>";
foreach ($data as $row) {
    echo "<td>". $row['Title']."</td>"; 
    echo "<td>". $row['Duur']."</td>";
    echo "<td><a href='films.php?id=$row[ID]'>Info</a></td>" ;
    echo "</tr>";
}
echo "</table>"
?>

</body>
</html>

