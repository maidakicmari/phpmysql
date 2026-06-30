<?php 
//krijo nje funksion me parameter
  function pjestueshmeria($n){
    if(($n%2)== 0){
        return "$n is fully divisible by 2";
    }else{
         return "$n is not fully divisible by 2";
    }
  }

  print_r(pjestueshmeria(4)."<br>");
  print_r(pjestueshmeria(5)."<br>");
  print_r(pjestueshmeria(6)."<br>");
  print_r(pjestueshmeria(7)."<br>");
?>