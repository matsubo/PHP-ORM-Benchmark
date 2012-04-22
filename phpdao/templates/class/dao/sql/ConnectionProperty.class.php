<?php
/**
 * Connection properties
 *
 * @author: http://phpdao.com
 * @date: 27.11.2007
 */
class ConnectionProperty{
	private static $host = '192.168.0.40';
	private static $user = 'dbdesigner';
	private static $password = '';
	private static $database = 'orm';

	public static function getHost(){
		return ConnectionProperty::$host;
	}

	public static function getUser(){
		return ConnectionProperty::$user;
	}

	public static function getPassword(){
		return ConnectionProperty::$password;
	}

	public static function getDatabase(){
		return ConnectionProperty::$database;
	}
}
?>
