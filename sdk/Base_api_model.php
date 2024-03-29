<?php

class Base_api_model {
	private $api_key = "";
	protected $api_host = "https://www.digicode.hu/";
	
	public function set_api_key($api_key = NULL){
		$this->api_key = $api_key;
	}
	
	public function set_api_host($api_host = NULL){
		$this->api_host = $api_host;
	}
	
	public function call($method, $url, $data){
		$curl = curl_init();

		switch ($method){
			case "POST":
				curl_setopt($curl, CURLOPT_POST, 1);
				
				if ($data){
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
				}
			break;
			case "PUT":
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
				
				if ($data){
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
				}
			break;
			default:
				if ($data){
					$url = sprintf("%s?%s", $url, http_build_query($data));
				}
			break;
		}

		// OPTIONS:
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'X-API-KEY: '.$this->api_key,
			'Content-Type: application/json',
		));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

		// EXECUTE:
		$result = curl_exec($curl);
		if(!$result){
			die("Connection Failure");
		}
		
		curl_close($curl);
		
		return $result;
	}
}