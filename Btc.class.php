<?php

   if(!defined("_UTILS")) {
	   die('Error. Direct access not allowed.');
	}
	
	require_once("Main.class.php");

	class Btc extends Main {
		
		private $url = 'https://bitpay.com/api/rates';
		
	
		public function __construct($gump) {
			parent::__construct($gump);
			
		  if($this->time_to_check()) {
				$rateObj = json_decode(file_get_contents($this->url));
				foreach($rateObj as $v) {
					if($v->code == 'EUR') {
		     	     $_SESSION['rate'] = $v->rate;
		         }
            }
           $this->update_last_check();
		  }
		}
		
		 public function satoshiToBtc($value) {  // value = string
	       return bcdiv(intval($value), 100000000, 8);
	    }
	    
	    public function btcToSatoshi($value) {  // value = string
	       $decimals = explode('.', $value);
	       if(strlen($decimals[1]) > 8) {
	         die('too much decimals');
	       }
	       return bcmul($value, pow(10, 8));
	    }
	}