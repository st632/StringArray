<?php

  $obj = new main();
  $text = "Harshit";
  $text2= "Shah Harshit Mayur";
    $obj->str_repeat1($text);
    $obj->str_lower1($text);
    $obj->strtoupper1($text);
    $obj->strtcmp1($text);
    $obj->strlen1($text);
    $obj->strrev1($text);
    $obj->str_replace1($text);
    $obj->str_word_count1($text2);
    $obj->strtrim1($text2);
    $obj->substr1($text);
    $obj ->__construct1();
 $array = array(1,2,3,4,5,6,7);
 $array1=array( "banana", "orange","pineapple");
$games = array("d" => "cricket", "a" => "tennis", "b" => "badminton", "c" => "football");
  $obj->array_push1($array1);
    $obj->array_pop1($array1);
    $obj->asort1($games);
    $obj->arraycount1($games);
    $obj->arraymerge1($array1,$games);
    $obj->array_reverse1($games);
   $obj->array_shift1($games);
   $obj->array_unshift1($array1);
     $obj->array_values1($games);
     $obj->array_chunk1($games);



  class main {

    public function __construct() {

      echo '<b>10 string functions</b> </br>';

    }

    public function str_repeat1($text) {
      echo '<h1>String repeat function demo </h1>';
      echo str_repeat("$text", 10);
      echo '<hr>';
    }
    
    public function str_lower1($text) {
      echo '<h1>String is converted to lower case </h1>';
      echo strtolower($text);
      echo '<hr>';
    }
      
      public function strtoupper1($text) {
      echo '<h1>String is converted to Upper case </h1>';
      echo strtoupper($text);
      echo '<hr>';
    }
     
       public function strtcmp1($text) {
      echo '<h1>String comparision function </h1>';
      if (strcmp($text, "Harshit") !== 0) {
    echo 'The strings are not matching';

      }
           else{
               echo 'The strings are matching';
           }
      echo '<hr>';
    }
     
       public function strlen1($text) {
      echo '<h1>The length of the given String is</h1>';
      echo strlen($text);
           echo '<hr>';
       }
      
       public function strrev1($text) {
      echo '<h1>String Reverse function </h1>';
    
    echo strrev ($text);
           echo '<hr>';

      }
        
      
       public function str_word_count1($text2) {
      echo '<h1>Word Count Function Demo</h1>';
    print_r(str_word_count($text2, 1));

    echo str_word_count($text2);
           echo '<hr>';
 
       }
      
       public function str_replace1($text) {
      echo '<h1>String Replace Function</h1>';
           $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
      $onlyconsonants = str_replace($vowels, "V", "Hello World of PHP");
      echo $onlyconsonants;
      echo '<hr>';
    }
      
       public function strrev2($text) {
      echo '<h1>String Reverse function </h1>';
    
    echo strrev ($text);
                 echo '<hr>';


      }
       public function strtrim1($text2) {
      echo '<h1>String Trim function </h1>';
    
          $trimmed = trim($text2, "Mayur");
           echo $trimmed;
                 echo '<hr>';


      }
        

        public function substr1($text) {
      echo '<h1>String Trim function </h1>';
    
$rest = substr($text, -1);   
           echo $rest;
                 echo '<hr>';


      }
        

      
      public function __construct1() {

      echo '<b>10 Array functions</b> </br>';

    }
      
       public function array_push1($array1) {
      echo '<h1>Array push function </h1>';
    

 array_push($array1, "apple", "raspberry");
print_r($array1);
            echo '<hr>';
}


      
      
    
 public function array_pop1($array1) {
      echo '<h1>Array Pop function </h1>';
    

 array_pop($array1);
print_r($array1);
      echo '<hr>';
}
      
      public function asort1($games) {
      echo '<h1>Array Sort function </h1>';
    asort($games);
foreach ($games as $key => $val) {
    echo "$key = $val\n";
}

      echo '<hr>';

      }    
          
 public function arraycount1($array1) {
      echo '<h1>Array count function </h1>';
    

print_r(count($array1));
      echo '<hr>';
}
     

       public function arraymerge1($array1,$games) {
      echo '<h1>Array Merge function </h1>';
    

print_r(array_merge($array1, $games));
      echo '<hr>';
}
      
       public function array_reverse1($games) {
      echo '<h1>Array Reverse function </h1>';
    $reversed = array_reverse($games);
$preserved = array_reverse($games, true);

print_r($games);
print_r($reversed);
print_r($preserved);
      echo '<hr>';
}
      
      public function array_shift1($games) {
          echo '<h1>Array Shift function </h1>';
     $array1 = array_shift($games);
print_r($games);
      echo '<hr>';
}
      
      
      
       public function array_unshift1($array1) {
          echo '<h1>Array UnShift function </h1>';
    array_unshift($array1, "apple", "raspberry");
print_r($array1);
      echo '<hr>';
}
       public function array_values1($games) {
          echo '<h1>Array Values function </h1>';
    print_r(array_values($games));
      echo '<hr>';
}
       public function array_chunk1($games) {
          echo '<h1>Array Chunk function </h1>';
    print_r(array_chunk($games, 2));
print_r(array_chunk($games, 2, true));
      echo '<hr>';
}
     
    
    public function __destruct() {

      echo '</br> I\'m Done';

    }


  }



?>







