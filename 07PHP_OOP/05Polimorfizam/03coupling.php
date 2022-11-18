<?php
// zavisnosti - dependencies (dependency)

class Service {
    public function doTask() {
        echo "Servis uradio zadatak";
    }
}

class Client {
    private $service;

    //invisible dependency
    // public function __construct(Service $srv)
    // {
    //     $this->service = new Service;
    // }

    //dependency injection pattern
    public function __construct(Service $srv)
    {
        //visible dependency
        $this->service = $srv;
    }

    public function doSomething() {
        $this->service->doTask();
    }
}

$cli = new Client(new Service);
$cli->doSomething();