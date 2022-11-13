<?php

// Vehicle has manufacturer and model
// Truck has max carrige size
// Car is a type of vehicle

class Vehicle
{
    private string $manufacturer;
    private string $model;

    function getManufacturer()
    {
        return $this->manufacturer;
    }

    function getModel()
    {
        return $this->model;
    }

    function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    function setModel($model)
    {
        $this->model = $model;
    }
}

// private atribute klase koje nasledjuje ne vide
// public atribute klase koje nasledjuje se vide
// protected atribute klase koje nasledjuje se vide, a spoljni korisnici ne
class Truck extends Vehicle
{
    private int $carrigeSize;

    function getCarrigeSize()
    {
        return $this->carrigeSize;
    }

    function setCarrigeSize($carrigeSize)
    {
        $this->carrigeSize = $carrigeSize;
    }
}

class Car extends Vehicle
{
    private string $vehicleType;

    function getVehicleType()
    {
        return $this->vehicleType;
    }

    function setVehicleType($vehicleType)
    {
        $this->vehicleType = $vehicleType;
    }
}

//hajde da istanciramo jedno vozilo
$car = new Car();
$truck = new Truck();
$car->setManufacturer("Renault");
