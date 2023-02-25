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

    public function send() {   //sklopi response objekat i ceo ga posalji klijentu
        header('Content-type: application/json; charset=utf-8');  //tip sadrzaja koji se vraca je json
        
        if($this->_toCashe == true) {
            header('Cache-control: max-age=60');
        } else {
            header('Cashe-control: no-cashe, no-store'); //svaki put kada se pozove ide ka serveru (API nesto)
        }

        if(($this->_success !== false && $this->_success !== true) || !is_numeric($this->_httpStatusCode)) { //status kod mora biti broj
            http_response_code(500); //setovanje koda, server greska, status... head deo
            //body
            $this->_responseData['statusCode'] = 500;
            $this->_responseData['success'] = false;
            $this->_messages = array();
            $this->addMessage('Response creation error');
            $this->_responseData['messages'] = $this->_messages;
        } else {
            http_response_code($this->_httpStatusCode);
            $this->_responseData['success'] = $this->_success;
            $this->_responseData['statusCode'] = $this->_httpStatusCode;
            $this->_responseData['messages'] = $this->_messages;
            $this->_responseData['data'] = $this->_data;
        }

        echo json_encode($this->_responseData); //pravi json objekat key-value, kroz body
    }
   
}