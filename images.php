<?php
 class Pictures{
     protected $id;
    protected $name;
    protected $size;
    protected $source;
    protected $href;
    protected $alt;
    protected $type;
    
    function __construct($_id,$_name,$_size,$_source, $_href, $_alt, $_type){
        $this->id=$_id;
        $this->name = $_name;
        $this->size = $_size;
        $this->source = $_source;
        $this->href= $_href;
        $this->alt=$_alt;
        $this->type=$_type;
    }
    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getSize(){
        return $this->size;
    }
    function getSource(){
        return $this->source;
    }
    function getHref(){
        return $this->href;
    }
    function getAlt(){
        return $this->alt;
    }
    function getType(){
        return $this->type;
    }
    function setName($newName){
        return $this->name=$newName;
    }
    function setSize($newSize){
        return $this->size=$newSize;
    }
    function setSource($newSource){
        return $this->source=$newSource;
    }
    function setHref($newHref){
        return $this->href=$newHref;
    }
    function setAlt($newAlt){
        return $this->alt=$newAlt;
    }
    function setType($newType){
        return $this->type=$newType;
    }
    function Get(){
        $this->getName();
        $this->getSource();
        $this->getAlt();
        $this->getType();
        $this->getHref();
    }
   
   
   
    
}

?>