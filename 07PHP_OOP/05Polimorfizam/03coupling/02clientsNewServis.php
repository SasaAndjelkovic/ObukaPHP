<?php
// zavisnosti - dependencies (dependency)

use Service as GlobalService;

interface ServiceInterface {
    public function thirth();
}


class Service {
    //promenjen naziv funkcije iz "first" u "fourth"
    //nije vise backwards compatible
    //bc - sposobnost novog i zastarelog sistema da radi bolje
    public function fourth() {
        echo "Servis uradio zadatak iz Adaptera preko fourth";
    }
}

class ServiceAdapter implements ServiceInterface {
    private $service;
    public function __construct(Service $srv)
    {
        $this->service = $srv;
    }

    public function thirth()
    {
        // menjamo implemetaciju service-a u adapteru iz "first" u "fourth"
        $this->service->fourth
        
        ();
    }
}
class Client {
    private $service;

    public function __construct(ServiceInterface $srv)
    {
        //visible dependency
        $this->service = $srv;
    }

    public function second() {
        $this->service->thirth();
    }
}

class NewService {
    public function theMethod() {
        echo "Stampa iz NewService";
    }
}

class NewServiceAdapter implements ServiceInterface {
    private $service;
    public function __construct(NewService $nsrv)
    {
       $this->service = $nsrv;
    }

    public function thirth()
    {
        $this->service->theMethod();
    }
}

$cli = new Client(new ServiceAdapter(new Service()));
$cli->second();
echo "<br>";
$new_cli = new Client(new NewServiceAdapter(new NewService()));
$new_cli->second();