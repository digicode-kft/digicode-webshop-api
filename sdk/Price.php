<?php

require "Base_api_model.php";

class Price extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($data = array()) {
		return $this->call("GET", "https://www.digicode.hu/api/price/get", $data);
	}

	public function list($data = array()) {
		return $this->call("GET", "https://www.digicode.hu/api/price/list", $data);
	}
}