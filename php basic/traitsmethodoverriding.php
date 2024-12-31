<?php
// trait hello{
//     public function sayhello(){
//         echo "Hello from hello trait\n";
//     }
// }
// trait hi{
//     public function sayhello(){
//         echo "Hello from hi trait\n";
//     }
// }
// class base{
//   use hello,hi{
//     hello::sayhello insteadOf hi;//hi trait sivay je trait hoy te chale
//     hi::sayhello as newhello; //rename 
//   }
// }
// $test = new base();
// $test->sayhello();
// echo "<br>";
// $test->newhello();

trait hello{
        private function sayhello(){
            echo "Hello from hello trait\n";
        }
    }
    class base{
      use hello{
        hello::sayhello as public;
      }

    }

        $test = new base();
        $test->sayhello();






?>