<?php
    require 'includes/connect.php';
    
    $id= $_GET['id'];
    $title=$_POST['Title'];
    $duur=$_POST['Duur'];
    $datum=$_POST['Date'];
    $land=$_POST['Country'];
    $description=$_POST['Description'];
    $video=$_POST['Video'];


    $sql="UPDATE films SET Title=? , Duur=?, Datum=?, Land=?,
     Description=?, Video=?  where id=?";
    $stnt=$pdo->prepare($sql);
    $stnt->execute([$title,$duur,$datum,
    $land,$description,$video,$id]);

    echo "<body style='background-color:#de8cff'>";
    echo "<p><a href='index.php'>Terug</a></p>" ;

?>