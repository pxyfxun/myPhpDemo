<?php
/**
 *
 */
class Employee {
	public static $favSport = "Football";

	public static function watchTV() {
		echo "Watching " . static::$favSport;
	}

}

/**
 *
 */
class Executive extends Employee {
	public static $favSport = "Polo";
}
Executive::watchTV();
