<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

// array length

var_dump($arr);

echo '<br>';

// Moving array elements

$element = array_splice($arr, 0, 4);
$arr = array_merge($arr, $element);
print_r($arr);

echo '<br>';

// Sum of 4,5,6 elements

$sum_elements = $arr[4] + $arr[5] + $arr[6];
print_r($sum_elements);

echo '<br>';

$firstArr = [ 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 5, 'five' => 12];
$secondArr = [ 'one' => 1, 'seven' => 22, 'three' => 32, 'four' => 5, 'five' => 13, 'six' => 37];

// Elements that are present in the second array but missing in the first

$first_diff = array_diff($secondArr, $firstArr);
print_r($first_diff);

echo '<br>';

// Elements that are present in the first array but missing in the second

$second_diff = array_diff($firstArr, $secondArr);
print_r($second_diff);

echo '<br>';

// Same elements of arrays

$arr_intersect = array_intersect($firstArr, $secondArr);
print_r($arr_intersect);

echo '<br>';

// Different elements of arrays

$split_and_merged_arr = array_merge(array_diff($firstArr, $secondArr), array_diff($secondArr, $firstArr));

print_r($split_and_merged_arr);

echo '<br>';

$firstArr = [
  'one' => 1,
  'two' => [
    'one' => 1,
  'seven' => 22,
  'three' => 32,
  ],
  'three' => [
'one' => 1,
'two' => 2,
  ],
  'four' => 5,
  'five' => [
   'three' => 32,
   'four' => 5,
   'five' => 12,
],  
];

// All second elements of nested arrays

function getSecondElements($arr) {
  $elements = [];
  
  foreach ($arr as $key => $value) {
      if (is_array($value)) {
          $values = array_values($value);
          if (isset($values[1])) {
              $elements[] = $values[1];
          }
      }
  }

  return $elements;
}
print_r(getSecondElements($firstArr));

echo '<br>';

// Get all elements of nested array

function countElements($array) {
  $length = 0;
  foreach ($array as $value) {
      if (is_array($value)) {
          $length += countElements($value); 
      } else {
          $length++;
      }
  }
  return $length;
}

print_r(countElements($firstArr));

echo '<br>';

// Sum of all elements of nested array

function sumElements($array) {
  $sum = 0;
  foreach ($array as $value) {
      if (is_array($value)) {
          $sum += sumElements($value); 
      } else {
          $sum += $value;
      }
  }
  return $sum;
}

print_r(sumElements($firstArr));