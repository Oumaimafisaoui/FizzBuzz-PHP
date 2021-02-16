<?php
$counter = 1;
while($counter <= 100){
  if($counter % 15 == 0){
  echo "FizzBuzz\n";
}elseif($counter % 3 == 0){
  echo "Fizz\n";
}elseif($counter % 5 == 0){
  echo "Buzz\n";
}else{
  echo "$counter\n";
} 
  $counter++;
}
