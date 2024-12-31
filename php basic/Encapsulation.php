<!-- Encapsulation -->
<!-- The wrapping of data and method into a single unit is know as encapsulation -->
<!-- Encapsulation utilized to make the code more secure and robust. using Encapsulation we can hiding the real implementation of data from the user and also does nort allow anyone to manipilate data members except by calling the desired opration -->

<?php
 class user{
    private $id;
    private $name;
    private $email;

    // setter method is bydefault public

    public function setID($i){
        $this->id = $i;
    }
    // getter method
    public function getID(){
        return $this->id;
    }
    public function setName($n){
        $this->name = $n;
    }
    // getter method
    public function getName(){
        return $this->name;
    }
    public function setemail($e){
        $this->email = $e;
    }
    // getter method
    public function getemail(){
        return $this->email;
    }
 }
 $user = new user();
 $user->setID(5000);
 $user->setName("Ghanshyam");
 $user->setemail("Ghanshyam@patel.gmail.com");


 echo "id is". $user->getID()."<br>";
 echo "name is".$user->getName()."<br>";
 echo "email is".$user->getemail()."<br>"."<br>"."<br>";

 $user2 = new user();
 $user2->setID(2000);
 $user2->setName("Rohan");
 $user2->setemail("Rohan@lakhara.gmail.com");


 echo "id is". $user2->getID()."<br>";
 echo "name is".$user2->getName()."<br>";
 echo "email is".$user2->getemail()."<br>";


?>