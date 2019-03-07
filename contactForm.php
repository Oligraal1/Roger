<?php
class Contact {
    protected $id;
    protected $name;
    protected $email;
    protected $question;

    function __construct($_id,$_name,$_email, $_question){
        $this->id=$_id;
        $this->name = $_name;
        $this->email = $_email;
        $this->question = $_question;
    }
    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function getQuestion(){
        return $this->question;
    }  
}
?>