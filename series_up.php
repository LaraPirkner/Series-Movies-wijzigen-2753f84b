<?php
    require 'includes/connect.php';
    
    $id=$_GET['id'];
    $title=$_POST['Title'];
    $rating=$_POST['Rating'];
    $description=$_POST['Description'];
    $awards=$_POST['Awards'];
    $seasons=$_POST['Season'];
    $country=$_POST['Country'];
    $language=$_POST['Language'];


    $sql="UPDATE series SET Title=? , Rating=?,
     Description=?, Awards=?, Season=?, Country=?, Language=?  where id=?";
    $stnt=$pdo->prepare($sql);
    $stnt->execute([$title,$rating,$description,
    $awards,$seasons,$country,$language,$id]);

    echo "<body style='background-color:#de8cff'>";
    echo "<p><a href='index.php'>Terug</a></p>" ;

?>