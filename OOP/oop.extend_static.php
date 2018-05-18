<?php
/**
 *
 */
class Employee {
	public static $favSport = "Football";

	public static function watchTV() {
		echo "Watching " . self::$favSport; //self关键字在编译时而非运行时确定其作用域
	}

}

/**
 *
 */
class Executive extends Employee {
	public static $favSport = "Polo";
}
Executive::watchTV();
