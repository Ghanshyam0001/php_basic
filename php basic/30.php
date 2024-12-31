<!-- php Exception Handling -->
<?php
// $n = 0;
// if($n > 0){
//     $div = 2/$n;
//     echo $div;

// }
// else{
// echo "Enter the valid number";
// }


// try catch
// try{
//     if($n <= 0){
//        throw new Exception("Enter valid number");
//     }
//     $div = 2/$n;// if part ma error aavse to aa code nai chale direct catch valo code chalse
//      echo $div;

// }catch(Exception $e){

//     echo $e->getMessage();// getmessage inbuilt function che te enter valid number print  karse

// }

// try catch in function and inheritance
class MYException extends Exception{
    function errorMessage(){
        $error = "<br> My Exception Message :".$this->getMessage().
        "<br> Error on line no.".$this->getLine();
        return $error;
    }
}
function division($n){
    try{
        if($n <= 0){
           throw new Exception("<br> Enter valid number");
        }
        if($n == 3){
            throw new MYException("<br>Number is 3");
         }
        $div = 2/$n;
         echo "<br>".$div;
    
    }catch(MYException $e){
        echo $e->errorMessage();


    
    }catch(Exception $e){
    
        echo $e->getMessage();
        // echo $e->getLine();
        // echo $e->getCode();
        // echo $e->getFile();


    }finally{
        echo "<br> finally";
    }
   

}
division(2);
division(3);
division(5);
?>