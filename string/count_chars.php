<?php
$str = "Time doth transfix the flourish set on youth And delves the parallels in beauty’s brow, Feeds on the rarities of nature’s truth, And nothing stands but for his scythe to mow";

$arr = count_chars($str, 1);

foreach ($arr as $key => $value) {
	echo "Character [" . ($key) . "] appears {$value} times <br/>";
}
