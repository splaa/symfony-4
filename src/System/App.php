<?php
	
	
	namespace App\System;
	
	//TODO-splaa:  дописать Singleton PHP
	class App
	{
		public static $instance = null;
		
		private function __construct($basePath = null)
		{
		
		}
		
		/**
		 * @param null $basePath
		 * @return App
		 */
		public static function getInstance($basePath = null): App
		{
			if (static::$instance === null) {
				static::$instance = new static($basePath);
			}
			return self::$instance;
		}
		
		public function run()
		{
			echo 'Hello, Symfony!!!';
		}
		
	}