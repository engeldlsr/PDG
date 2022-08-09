<?php

class Paypal extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Productos");
	}

    public function success()
	{
		$paypalInfo = $this->input->post();

		$data['user_id'] = $paypalInfo['custom'];
		$data['product_id'] = $paypalInfo["item_number"];
		$data['txn_id'] = $paypalInfo["txn_id"];
		//$data['payment_gross'] = $paypalInfo["payment_gross"];
		$data['currency_code'] = $paypalInfo["mc_currency"];
		$data['payer_email'] = $paypalInfo["payer_email"];
		$data['payment_status'] = $paypalInfo["payment_status"];

		$paypalURL = $this->paypal_lib->paypal_url;

		$result = $this->paypal_lib->curlPost($paypalURL, $paypalInfo);
		var_dump($result);
		//check whether the payment is verified / INVALID / VERIFIED
		if (preg_match("/INVALID/", $result)) {
		//insert the transaction data into the database
			$this->Productos->insertTransaction($data);
		  } 

	}
}