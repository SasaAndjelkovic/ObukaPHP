<?php
// zavisnosti - dependencies (dependency)

interface ServiceInterface {
    public function thirth();
}

//kada bi dodali implements ServiceInterface, to bi ucinilo da se ***menja kod unutara klasa
//zato se radi adapter class ServiceAdapter
class Service {
    public function first() {
        echo "Servis uradio zadatak iz Adaptera";
    }

	// *** public function thirth() {
    //     echo "Servis uradio zadatak";
	// }
}

class ServiceAdapter implements ServiceInterface {
    private $service;
    public function __construct(Service $srv)
    {
        $this->service = $srv;
    }

    public function thirth()
    {
        $this->service->first();
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
    public function __construct(ServiceInterface $srv)
    {
        //visible dependency
        $this->service = $srv;
    }

    public function second() {
        // $this->service->first();
        $this->service->thirth();
    }
}

$cli = new Client(new ServiceAdapter(new Service()));
$cli->second();