<?php
function Palindrome($MyString) {
  $l = 0;
  $r = strlen($MyString) - 1;
  $flag = 0;

  while($r > $l){
    if ($MyString[$l] != $MyString[$r]){
      $flag = 1;
      break;
    }
    $l++;
    $r--;
  }

  if ($flag == 0){
    echo $MyString." is a Palindrome string.\n";
  } else {
    echo $MyString." is not a Palindrome string.\n";
  }
}

Palindrome("radar");
Palindrome("rubber");
Palindrome("malayalam");
?>