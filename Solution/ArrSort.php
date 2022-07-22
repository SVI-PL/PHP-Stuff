<?php 
#Сортировка масива по ключу: Первый->Последний->Первый->Последний...
function SortArr($arr) {
$array = $arr;  
$i = 0;
$numeric = 0;
$float = count($array) - 1;
while($i < count($array)) {
$k = $i / 2;
    if( is_float($k) / 2 == false ) {
        echo $array[$numeric++] . '<br>';
        
    }
    if( is_float($k) / 2 == true ) {
        echo $array[$float--] . '<br>';   
    }

$i++;
}
}
echo "Преобразование массива в отсортированный массив:<br>";
echo "Из 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 <br> в 1, 10, 2, 9, 3, 8, 4, 7, 5, 6 <br><br><br>";

$array = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 );
SortArr($array);