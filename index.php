<?php

  $obj = new main();
  $text = "This is my 1st string function that prints.";
  $obj->printthis($text);
  
  $array = array(1,2,3,4,5,6,7);
  $obj->printArray($array);

  class main {

    public function __construct() {

      echo 'This is my 3rd weeks WSD Assignment  </br>';

    }

    public function printthis($text) {
      echo '<h1>1) Print Functon </h1>';
      print($text);
      echo '<hr>';

      echo '<h1>2) Getting length of the string</h1></br>';
      echo strlen("Hello World");   //will return the length of given string
      echo '<hr>';

      echo '<h1>3) Counting of the numbers of words in a string </h1></br>';
      echo str_word_count("Hello World");
      echo '<hr>';

      echo '<h1>4) Reversing a String</h1></br>';
      echo strrev("Hello World");   // will return the string starting from the end
      echo '<hr>';

      echo '<h1>5) Replacing text within a string</h1></br>';
      echo str_replace("cloudways", "the programming world", "Welcome to cloudways");
      echo '<hr>';

      echo '<h1>6) Converting lowercase into Title Case</h1></br>';
      echo ucwords("welcome to the programming world");
      echo '<hr>';

      echo '<h1>7) Converting a whole string into UPPERCASE</h1></br>';
      echo strtoupper("welcome to the programming world");  // It will convert all letters of string into uppercase
      echo '<hr>';

      echo '<h1>8) Converting whole String to lowercase</h1></br>';
      echo strtolower("WELCOME TO THE PROGRAMMING WORLD");
      echo '<hr>';

      echo '<h1>9) Repeating a String</h1></br>';
      echo str_repeat("$",20);
      echo '<hr>';

      echo '<h1>10) Displaying part of String</h1></br>';
      echo substr("Welcome to the Programming World",6)."<br>";
      echo substr("Welcome to the Programming World",0,10)."<br>";
      echo '<hr>';

      echo '<h1>11) Removing white spaces from a String</h1></br>';
      $str = "Wordpess Hosting";
      echo $str . "<br>";
      echo trim("$str","Wording");
      echo '<hr>';



    }
    
    public function printArray($array) {
      echo '<h1>1) Array print function</h1>';
      print_r($array);
      echo '<hr>';

      echo '<h1> 2) Merge funtion</h1></br>';
      $array1 = array("color" => "red", 2, 4);
      $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
      $result = array_merge($array1, $array2);
      print_r($result);
      echo '<hr>';

      echo '<h1> 3) Asort function</h1></br>';
      $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
      asort($fruits);
      foreach ($fruits as $key => $val) {
      echo "$key = $val\n";
      }
      echo '<hr>';

      echo '<h1> 4) Arsort function</h1></br>'; 
      $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
      arsort($fruits);
      foreach ($fruits as $key => $val) {
      echo "$key = $val\n";
      }
      echo '<hr>';

      echo '<h1> 5) Return function</h1></br>';
      $array = array("size" => "XL", "color" => "gold");
      print_r(array_values($array));
      echo '<hr>';

      echo '<h1> 6) Sum function</h1></br>';
      $a = array(2, 4, 6, 8);
      echo "sum(a) = " . array_sum($a) . "\n";
      $b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
      echo "sum(b) = " . array_sum($b) . "\n";
      echo '<hr>';

      echo '<h1> 7) Push function</h1></br>';
      $stack = array("orange", "banana");
      array_push($stack, "apple", "raspberry");
      print_r($stack);
      echo '<hr>';

      echo '<h1> 8) Pop function</h1></br>';
      $stack = array("orange", "banana", "apple", "raspberry");
      $fruit = array_pop($stack);
      print_r($stack);
      echo '<hr>';

      echo '<h1> 9) Flip function</h1></br>';
      $input = array("oranges", "apples", "pears");
      $flipped = array_flip($input);
      print_r($flipped);
      echo '<hr>';

      echo '<h1> 10) Sort function</h1></br>';
      $fruits = array(
      "Orange1", "orange2", "Orange3", "orange20"
      );
      sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
      foreach ($fruits as $key => $val) {
      echo "fruits[" . $key . "] = " . $val . "\n";
      }
      echo '<hr>';

      echo '<h1> 11) Shuffle function</h1></br>';
      $numbers = range(1, 20);
      shuffle($numbers);
      foreach ($numbers as $number) {
      echo "$number ";
      }
      echo '<hr>';


 }
    
    public function __destruct() {

      echo '</br> THE END';

    } 


  }



?>