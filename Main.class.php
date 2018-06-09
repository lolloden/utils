<?php

   if(!defined("_UTILS")) {
	   die('Error. Direct access not allowed.');
	}
	
	require_once("myconfig.php");

	class Main {
		
		private $gump;
		public $mytime;
		
		public function __construct(GUMP $_gump) {
	 		if(session_status() == PHP_SESSION_NONE) {
	 			session_start();
	 		}
	 		if(SITE_DEBUG === true) {
				error_reporting(E_ALL);
			   ini_set("display_errors", 1);
		   }
		  date_default_timezone_set("Europe/Berlin");
		  //myco::init();
		  //$this->idb = myco::getdb();
		  $this->gump = $_gump;
		  $this->mytime = date(DFORMAT);

	   }
	   
	   public function dataControl() {
	   	$val_rules = array();
      	$val_filters = array();
      	if(isset($_GET) && !empty($_GET)) {
      	   $_GET = $this->gump->sanitize($_GET);
      	    /*if(isset($_GET['get1'])) {
						 $val_rules['get1'] = 'required|alpha_dash|min_len,3|max_len,7';
						 $val_filters['get1'] = 'trim|sanitize_string';
				    }*/
					    $this->gump->validation_rules($val_rules);
						 $this->gump->filter_rules($val_filters);
			      	 $validated_data = $this->gump->run($_GET);
						 // errors?
						 if($validated_data === false) {
							   die($this->gump->get_readable_errors(true)); 
						 } else {
							   return $validated_data;
						 }
				
        } else if(isset($_POST) && !empty($_POST)) {
      	      $_POST = $this->gump->sanitize($_POST);
					
						 if(isset($_POST['submit1'])) {
						 	      $val_rules['columns'] = 'required|numeric|min_numeric,1|max_numeric,99';
									$val_rules['comp'] = 'boolean|contains,1';
									$val_rules['mydata'] = 'required';
									$val_rules['padding'] = 'numeric|min_numeric,1|max_numeric,99';
									$val_rules['replace'] = 'min_len,1|max_len,99';
									$val_rules['submit1'] = 'required|alpha|exact_len,2|contains,go';
									$val_rules['tabClass'] = 'min_len,1|max_len,99';
									$val_filters['columns'] = 'trim|sanitize_numbers';
									$val_filters['comp'] = 'trim|sanitize_numbers';
							      $val_filters['mydata'] = 'trim|sanitize_string';
							      $val_filters['padding'] = 'trim|sanitize_numbers';
							      $val_filters['replace'] = 'trim|sanitize_string';
							      $val_filters['submit1'] = 'trim|sanitize_string';
							      $val_filters['tabClass'] = 'trim|sanitize_string';
						 }
						    $this->gump->validation_rules($val_rules);
							 $this->gump->filter_rules($val_filters);
				      	 $validated_data = $this->gump->run($_POST);
							 // errors?
							 if($validated_data === false) {
							 	  die($this->gump->get_readable_errors(true));  
							 } else {
								 return $validated_data;
							 } 
          }
      }
	}