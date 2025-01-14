The solution is to ensure all array keys are explicitly strings, removing any potential for implicit type conversion.

```php
<?php
$data = [];
$data["1abc"] = "value1";
$data["1"] = "value2";
$data["2"] = "value3";
print_r($data);
?>
```
By using strings consistently, you avoid PHP's implicit conversion and maintain the integrity of your data.