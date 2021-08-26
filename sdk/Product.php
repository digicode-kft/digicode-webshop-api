<?php

require_once "Base_api_model.php";

class Product extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($data = array()) {
		return $this->call("GET", $this->api_host."api/product/get", $data);
	}

	public function list($data = array()) {
		return $this->call("GET", $this->api_host."api/product/list", $data);
	}

	public function list_image($data = array()) {
		return $this->call("GET", $this->api_host."api/product/list_image", $data);
	}
}