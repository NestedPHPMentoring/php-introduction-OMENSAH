<?php
/**
* task 001
*/
echo  '
I went down to the river,<br>
I set down on the bank.<br>
I tried to think but couldn\'t,<br>
So I jumped in and sank.<br><br>

I came up once and hollered!<br>
I came up twice and cried!<br>
If that water hadn\'t a-been so cold<br>
I might\'ve sunk and died.<br>'
;

/**
* task 002
*/
$firstName = "Oliver";
$age = '23';
$height = '6.5';
echo'<br>';
print_r('My fist name: '.$firstName.'<br>');
print_r('My age: '.$age.'<br>');
print_r('My height: '.$height.'<br>');
echo'<br>';
var_dump($firstName);
var_dump($age);
var_dump($height);
echo'<br><br>';
//typecasting
$ageInteger = (Integer)$age;
$heightDouble =(double)$height;
var_dump($ageInteger);
var_dump($heightDouble);
echo'<br>';
/**
* task 003
*getting the most common element in the array.
*I had wanted to create my own algorithm to do the work but it was not working
*I had to find out the built in methods that can help me out.
*/
$inputs = array(1,2,3,5,6,8,4,5);
$assoc = array_count_values($inputs);
asort($assoc);
end($assoc);
$answer = key($assoc);
echo $answer;
echo'<br>';

/*task004
*sorting  an array
*/
sort($inputs);
$arrLength = count($inputs);
for($index=0; $index<$arrLength; $index++){
  echo $inputs[$index]. ' ';
}

echo'<br>';

/*task005
*checking if array data is integer or float
*/
$arrayData = array(10.8, 1, 3, 6, 8, 0.9, 'Ama');
sort($arrayData);
foreach ($arrayData as $data) {
  if(is_numeric($data) && is_float($data) && $data==$arrayData[count($arrayData)-1]){
    echo $data;
  }
}
echo '<br>';
/*task006
*checking if array data is integer or float and sort data in ascending order;
*/
$arrayData = array(10.8, 1, 3, 6, 8, 0.9, 'Ama');
sort($arrayData);
foreach ($arrayData as $data) {
  if(is_numeric($data) || is_float($data)){
    echo $data. ' ';
  }
}
echo '<br>';

/*
*Loop through cities
*/
$largest_cities = array('Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London');

foreach($largest_cities as $cities){
  echo $cities. ', ';
}
echo '<br>';

sort($largest_cities);
foreach($largest_cities as $cities){
  echo '<li>'.$cities.'</li><br>';
}
echo '<br>';
array_push($largest_cities, 'Los Angeles', 'Calcutta',  'Osaka', 'Beijing');

sort($largest_cities);
foreach($largest_cities as $cities){
  echo '<li>'.$cities.'</li><br>';
}

echo '<br>';
