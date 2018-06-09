<?php

   if(!defined("_UTILS")) {
	   die('Error. Direct access not allowed.');
	}
	
	require_once("classMydb.php");
     
      define('DFORMAT', "Y-m-d H:i:s");
      define('SITE_DEBUG', true);
      define('DEF_CELL_PADDING', '5');
      define('DEF_TABLE_CLASS', 'table');
      define('REPLACER', '*');
     
      class myco {
		   private static $db = false;
		   
		   public function __construct() {
	      
		   }
		
		   public static function init() {
		      if(!self::$db) {
		         Mydb::config( 'driver',   'mysql' );
					Mydb::config( 'host',     'localhost' );
					Mydb::config( 'database', 'toast' );
					Mydb::config( 'user',     'toast' );
					Mydb::config( 'password', 'toast' );
					self::$db = Mydb::instance();
		      }
		   }
		   
		   public static function getdb() {
		   	return self::$db;
		   }
		
		}