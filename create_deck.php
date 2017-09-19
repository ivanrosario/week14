
<?php
  $suits = array ("clubs", "diamonds", "hearts", "spades");
  $faces = array (
   "Ace" => 1,
   "2" => 2,
   "3" => 3,
   "4" => 4,
   "5" => 5,
   "6" => 6,
   "7" => 7,
   "8" => 8,
   "9" => 9,
   "10" => 10,
   "Jack" => 11,
   "Queen" => 12,
   "King" => 13
    );

    $deck = array();
  //gives me a suit as a suit
  foreach($suits as $suit){
    //gives me a value for each suit
      foreach($faces as $key => $face){
        $deck[] = $key ." of " . $suit . "<br />";
    }
  }
   print_r($deck);

?>