<?php
$array_keys = array('a', 'b', 'c');
$array_values = array('one', 'two', 'three');
print_r(array_combine($array_keys, $array_values));
/* kết quả:
Array(
[a] => one
[b] => two
1 => three;
)*/;
?>