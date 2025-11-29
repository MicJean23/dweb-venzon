<?php
include "header.php";
?>

<h2>FLOWER BASKET</h2>

<?php

$stock = 67;
$want = 17;

echo "Flowers: Tulips<br>";
echo "Stock: $stock<br>";
echo "Wanted: $want<br>";

$canBuy = 0;

if ($stock > $want){
    $canBuy = 1;
}

echo "Can buy: " . $canBuy . "<br><br>";


$favFoods = ["Pesto", "Sinigang", "Pizza", "Palabok", "Nuggets"];
$favGames = ["Sky: Children of the Light", "Mobile Legends", "Minecraft", "Stumble Guys"];
$dreamPlaces = ["Japan", "Switzerland", "Seoul", "New York"];
$favSongs = ["Dress", "I Choose", "party 4 u", "Daylight", "back to friends"];


echo "<h3>My Favorite Foods</h3>";

for ($i=0; $i<count($favFoods); $i++){

    $food = $favFoods[$i];

    echo ($i+1) . ". " . $food;

    if(strlen($food) > 6){
        echo " - long name";
    } else {
        echo " - short";
    }

    echo "<br>";
}


echo "<h3>Games I Like</h3>";

foreach($favGames as $g){

    echo $g;

    if($g === "Stumble Guys"){
        echo " - most played";
    } else if ($g === "Minecraft"){
        echo " - chill game";
    } else {
        echo " - I play sometimes";
    }

    echo "<br>";
}


echo "<h3>Dream Places to Visit</h3>";

for($i=0;$i<count($dreamPlaces);$i++){

    $place = $dreamPlaces[$i];

    echo $place;

    if($i == 0){
        echo " - top place";
    } else if($i == count($dreamPlaces)-1){
        echo " - last";
    }

    echo "<br>";
}


echo "<h3>Favorite Songs</h3>";

foreach($favSongs as $song){

    echo $song;

    $hasA = strpos($song, "a");

    if($hasA !== false){
        echo " - has 'a'";
    } else {
        echo " - no a";
    }

    echo "<br>";
}

?>

<?php
include "footer.php";
?>
