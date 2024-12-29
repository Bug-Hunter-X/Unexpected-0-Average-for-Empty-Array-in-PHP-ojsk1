```php
function calculateAverage(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array case
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculateAverage($numbers);
echo "Average: " . $average; //Output: Average: 15

$numbers = [];
$average = calculateAverage($numbers); //This will return 0, which is unexpected if no numbers are provided.
echo "Average: " . $average; //Output: Average: 0
```