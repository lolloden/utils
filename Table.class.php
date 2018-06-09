<?php


	class Table {
		
		private $mystring, $cols, $padd, $repl, $comp, $cssClass;
		
	
		public function __construct($_mystring, $_cols, $_comp = false, $_cssClass = 'table', $_padd = '5', $_repl = '*') {
		  $this->mystring = $_mystring;
		  $this->cols = $_cols;
		  $this->padd = $_padd;
		  $this->repl = $_repl;
		  $this->comp = $_comp;
		  $this->cssClass = $_cssClass;
		}
		
		public function buildTable() {
			$pieces = $this->fileTheString($this->mystring);
			$co = intval($this->cols);
			$numPieces = count($pieces);
			$outs = $numPieces % $co;
			if($outs != 0) {
			  $replaced = $co - $outs;
			  for($k = 0; $k < $replaced; $k++) {
			    $pieces[] = $this->repl;
			  }
			}
			$html = '<table class="' . $this->cssClass . '" cellpadding="' . $this->padd . '" border="2">
			          <thead>
			           <tr>';
			
			
			for($i = 0; $i < $co; $i++) {
			   $html .= '<th>' . $pieces[$i] . '</th>';
			}
			$html .= '</tr>
			         </thead>
			         <tbody>';
			  $cnt = 1;
			  foreach($pieces as $k1 => $v1) {
					if($k1 >= $co) {  
					   if($k1 % $co != 0) {
					   	$html .= '<td>' . $v1 . '</td>';
					   } else {
						    $html .= '<tr><td>' . $v1 . '</td>';
						  }
						  if($cnt === $co) {
						     $html .= '</tr>';
						     $cnt = 0;
					     }
						$cnt++;
				    }
		 	   }
			$html .= '</tbody>
			         </table>';
			return $html;
		}
		
		private function fileTheString($str) {
		  $res = array();
		  if($this->comp) {
		    $res[0] = ' ';
		  }
		  $str = trim(preg_replace("/\t/", "\r\n", $str));
		  $_res = explode('@@@', preg_replace("~[\r\n]+~", "@@@", $str));
		  foreach($_res as $val) {
		    $res[] = preg_replace("/ {2,}/", " ", $val);
		  }
		  return $res;
		}
	}