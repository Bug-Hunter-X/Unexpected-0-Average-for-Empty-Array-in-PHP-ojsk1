```php
function calculateAverage(array $numbers): float {
  if (empty($numbers)) {
    throw new LogicException("Cannot calculate the average of an empty array.");
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
try {
  $average = calculateAverage($numbers);
  echo "Average: " . $average; // Output: Average: 15
} catch (LogicException $e) {
  echo "Error: " . $e->getMessage();
}

$numbers = [];
try {
  $average = calculateAverage($numbers);
  echo "Average: " . $average; 
} catch (LogicException $e) {
  echo "Error: " . $e->getMessage(); // Output: Error: Cannot calculate the average of an empty array.
}
```