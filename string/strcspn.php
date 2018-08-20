<?php
$password = "12345";

if (strcspn($password, "1234567890") === 0) {
	echo "密码不能只包含数字";
}
