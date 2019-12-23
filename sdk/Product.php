<?php

require "Base_api_model.php";

class Product extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($data = array()) {
		return $this->call("GET", "https://www.digicode.hu/api/product/get", $data);
	}

	public function list($data = array()) {
		return $this->call("GET", "https://www.digicode.hu/api/product/list", $data);
	}
}