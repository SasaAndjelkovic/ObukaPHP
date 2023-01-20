<?php

class Response {
    private $_success;
    private $_httpStatusCode;  //od 1xx do 5xx
    private $_messages = array();  //ako imam vise gresaka
    private $_data;
    private $_toCashe = false;  // kesiranje je privremeno sacuvati. ako ima previse zahteva za refres, moze da padne server;
    private $_responseData = array();

	public function setSuccess($success) {  //_success je globalno, success je lokalno
		$this->_success = $success;
	}

	public function setHttpStatusCode($httpStatusCode) {
		$this->_httpStatusCode = $httpStatusCode;
	}

	public function addMessage($message) {
		$this->_messages[] = $message;
	}

	public function setData($data) {
		$this->_data = $data;
	}

	public function toCashe($toCashe) {
		$this->_toCashe = $toCashe;
	}

   
}