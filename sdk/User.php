<?php

require_once "Base_api_model.php";

class User extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($data = array()) {
		return $this->call("GET", $this->api_host."api/user/get", $data);
	}
	
	public function company($data = array()) {
		return $this->call("GET", $this->api_host."api/user/company", $data);
	}

	public function company_user_list($data = array()) {
		return $this->call("GET", $this->api_host."api/user/company_user_list", $data);
	}
}