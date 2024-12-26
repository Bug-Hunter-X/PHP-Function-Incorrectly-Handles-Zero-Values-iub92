```php
<?php
function my_function($a, $b) {
  return $a + $b; //Corrected to handle zero values directly
}

$result = my_function(0, 5);
echo $result; // Outputs 5

$result = my_function(0, 0);
echo $result; // Outputs 0

$result = my_function(5, 0);
echo $result; //Outputs 5
?>
```