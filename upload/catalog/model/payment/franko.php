<?php 
/*
Copyright (c) 2013 John Atkinson (jga)
*/

class ModelPaymentFranko extends Model {
  	public function getMethod($address) {
		$this->load->language('payment/franko');
		
		if ($this->config->get('franko_status')) {
        	$status = TRUE;
		} else {
			$status = FALSE;
		}
		
		$method_data = array();
	
		if ($status) {  
      		$method_data = array( 
        		'code'         	=> 'franko',
        		'title'      	=> $this->language->get('text_title'),
				'sort_order' 	=> $this->config->get('franko_sort_order'),
      		);
    	}
   
    	return $method_data;
  	}
}
?>
