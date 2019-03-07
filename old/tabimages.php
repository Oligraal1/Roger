<?php
class PageImage{
    protected $tabImage=[];
    
    function addPicture($newPictures) {
        array_push($this->tabImage, $newPictures);
    }
    function getPictureList(){
        return $this->tabImage;
    }
   function DisplayPictureListColor(){
       foreach ($this->tabImage as $image) {
       $typImage=$image->getType();
        $nameImage=$image->getName();
        if($typImage=="couleur"){
            echo "<a class='images' href='".$image->getHref()."?action =".$nameImage."' target='blank'>
            <img src=".$image->getSource()." alt=".$image->getAlt()." ></a>";
            echo $nameImage;
        }
} 
    }
            function DisplayPictureListNB(){
              foreach ($this->tabImage as $image) {
            $typImage=$image->getType();
            if($typImage=="nb"){
                echo "<a class='images' href='bigImage.php?action=".$image->getName()."' target='blank'>
                <img src=".$image->getSource()." alt=".$image->getAlt()." ></a>";
            }
        }    
    }
    function FindName(){
        foreach ($this->tabImage as $image) {
            $imageName=$image->getName();
            echo $imageName;
            
        }
    }
    
}

?>