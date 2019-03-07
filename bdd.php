<?php
include "images.php";
include "contactForm.php";


class BDD {
    protected $pdo;

    function __construct(){
        $this->pdo = $pdo = new PDO
        (
            'mysql:host=localhost;dbname=Roger;charset=UTF8',
            'root',
            '123456',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
        $this->pdo->exec("SET NAMES UTF8");
        //Pour afficher erreur SQL
       // $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function insertPicture($name, $size, $source,$href,$alt,$type){
        $query= $this->pdo->prepare
        ("INSERT INTO picture (name, size, source,href,alt,types)
        VALUES (?,?,?,?,?,?)");
    
        $query->execute([$name, $size, $source,$href,$alt,$type]);
    }

    function getAllPicture(){
        $query = $this->pdo->prepare("SELECT * FROM picture ORDER BY name");

        $query->execute();        
        $pictureSQL = $query->fetchAll(PDO::FETCH_ASSOC);

        $allPictures = [];

        foreach($pictureSQL as $sql){
            $picture = new Pictures($sql["id"],$sql["name"],$sql["size"],$sql["source"] ,$sql["href"], $sql["alt"],$sql["types"]);
            array_push($allPictures, $picture);
        }
        return $allPictures;
    }
    function getColorPicture(){
        $query=$this->pdo->prepare("SELECT * FROM picture WHERE types='couleur' ORDER BY name");
        $query->execute();
        $picturesColor= $query->fetchAll(PDO::FETCH_ASSOC);
        $pictureColor= [];
        foreach($picturesColor as $sql){
            $picture = new Pictures($sql["id"],$sql["name"],$sql["size"],$sql["source"] ,$sql["href"], $sql["alt"],$sql["types"]);
            array_push($pictureColor, $picture);
        }
        return $pictureColor;

    }
    function randomPicture(){
        $query = $this->pdo->prepare("SELECT * FROM picture ORDER BY RAND() LIMIT 1");
        $query->execute();        
        $picturesRandom = $query->fetchAll(PDO::FETCH_ASSOC);
        $pictureRandom = [];

        foreach($picturesRandom as $sql){
            $picture = new Pictures($sql["id"], $sql["name"],$sql["size"],$sql["source"] ,$sql["href"], $sql["alt"],$sql["types"]);
            array_push($pictureRandom, $picture);
        }
        return $pictureRandom;
    }
   function DisplayPicture($id){
    $query = $this->pdo->prepare("SELECT * FROM picture WHERE id=?");
    $query->execute([$_GET["id"]]);      
    $picturesDisplay = $query->fetchAll(PDO::FETCH_ASSOC);
    $pictureDisplay = [];

    foreach($picturesDisplay as $sql){
        $picture = new Pictures($sql["id"], $sql["name"],$sql["size"],$sql["source"] ,$sql["href"], $sql["alt"],$sql["types"]);
        array_push($pictureDisplay, $picture);
    }
    return $pictureDisplay;
   //var_dump($pictureDisplay);
   }

   function insertContact($name, $email, $question,$creationDate){
    $query= $this->pdo->prepare
    ("INSERT INTO contactform (name, email, question,creationDate)
    VALUES (?,?,?,Now())");
    $query->execute([$name, $email, $question]);
    }

    function lastId(){
        $query = $this->pdo->prepare("SELECT * FROM contactform WHERE id=LAST_INSERT_ID()");
        $query->execute();      
        $lastInsertId = $query->fetch(PDO::FETCH_ASSOC);
        return $lastInsertId;
         
    }

function getAllContact(){
    $query = $this->pdo->prepare("SELECT * FROM contactform");
        $query->execute();      
        $contacts = $query->fetchAll(PDO::FETCH_ASSOC);
        $allContacts = [];

        foreach($contacts as $sql){
            $contact = new Contact ($sql["id"], $sql["name"],$sql["email"],$sql["question"]);
            array_push($allContacts, $contact);
        }
        return $allContacts; 
        
}

}
?>