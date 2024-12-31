<?php

trait hello
{
    public function sayhello()
    {
        echo "Hello everyone";
    }

    public function sayhi()
    {
        echo "hi everyone";
    }
}

trait bye
{
    public function bayhello()
    {
        echo "Bye everyone";
    }
}

class base
{
    use hello, bye;
}

class base2
{
    use hello;
}

$test = new base();
$test->sayhello();
echo "<br>";
$test->bayhello();
echo "<br>";
$test->sayhi();



echo "<br>";

$test2 = new base2();
$test2->sayhello();
