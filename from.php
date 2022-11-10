<?php 
 echo '<h3>'."Example : 1 "."</br>".'</h3>';
 for($Start = 1;$Start < 11;$Start++){
     echo "Riduan"."</br>";
 };

 echo '<h3>'."Example : 2 "."</br>".'</h3>';
// "<select>"
// $on = 2022;
// $off = 1900;
// for($frist_count = $on;$frist_count >= $off ; $frist_count--){
//         echo "<option> $frist_count </option>";
// }
// "</select>";
 echo '<h3>'."Example : 3 "."</br>".'</h3>';

for ($oneNumber = 1 ; $oneNumber <= 10; $oneNumber++){
        echo str_repeat("*", $oneNumber)."</br>";
}

for ($oneNumber = 10 ; $oneNumber >= 1; $oneNumber--){
    echo str_repeat("%", $oneNumber)."</br>";
}


echo '<h3>'."Example : 4 "."</br>".'</h3>';
$number = 3; 

for ($count = 1 ; $count <= 10 ; $count++){
    $result = $number * $count;
    echo "$number * $count = $result.</br>";
}



echo '<h3>'."Example : 4 "."</br>".'</h3>';
$joma_taka = [365,600,500];
$num_array = [];
$sum = 0;

for ($i = 0; $i < count($joma_taka);$i++){
        $sum = $joma_taka [$i] + $sum;
        array_push($num_array,$sum);
}
print_r($num_array);


echo '<h3>'."Example : 5 "."</br>".'</h3>';
$numbers = 10;
$factorial = 1;
for ($i = 1; $i <= $numbers;$i++){
        $factorial *= $i ;
}
echo $factorial;


echo '<h3>'."Example : 6 "."</br>".'</h3>';

$number = 1 ;
while ($number <= 20){
    echo "$number";
    $number++;
}


echo '<h3>'."Example : 7 "."</br>".'</h3>';
$num = 1 ;
do {
    echo $num;
    $num++;
}while ($num >15);


echo '<h3>'."Example : 8 "."</br>".'</h3>';
$names = [
    [
        'id' => 1231,
        'name' => 'Riduan',
        'Email' => 'Riduan@gmail.com', 
    ],

    [   'id' => 2345,
        'name' => 'Shoyib',
        'Email' => 'Shoyib@gmail.com',
    ],
    
    [   'id' => 2645,
        'name' => 'Faruk',
        'Email' => 'Faruk@gmail.com',
    ],

];
    foreach ($names as $name){
        echo $name ['Email']."</br>";                              
    }


echo '<h3>'."Example : 9 "."</br>".'</h3>';
