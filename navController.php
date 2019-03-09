<?php 
$nav=["index","couleur","nb","contact"];
if(isset($_GET["action"])){
    foreach ($nav as $navOn) {
        if($_GET["action"]==$navOn){
            return $navOn;
            echo $navOn;
        }
    } 
}
?>