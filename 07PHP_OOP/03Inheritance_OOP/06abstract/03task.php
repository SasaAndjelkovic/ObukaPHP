<?php

// Vehicle has doorStatus, hoodStatus and bootStatus
// Vechicle has methods openAllDoors, and shift random Door, get door status
// Driving depends on the fuel type and makes a sound
// Vehicle can be electric car and gasoline car
// electric car has battery capacity, gasoline car has fuelLevel
// you can ask for getRemainingMileage but it depends on fuel type

abstract class VehicleHd {
    public bool $doorStatus;
    public bool $bootStatus;
    public bool $hoodStatus;
    // function doorStatus($dStatus) {
    //     if ($dStatus) {
    //         echo "door is open";
    //     } else {
    //         echo "doore is closed";
    //     }
    // }
  
    function openAlldoors() {
        $this->doorStatus = true;
        $this->hoodStatus = true;
        $this->bootStatus = true;
    }
    function shiftRadnomDoor() {
        $number = random_int(1, 3);
        if ($number == 1) $this->doorStatus = !$this->doorStatus;
        if ($number == 2) $this->hoodStatus = !$this->hoodStatus;
        if ($number == 3) $this->bootStatus = !$this->bootStatus;
    }
    function getDoorStatus() {
        echo "Door status " . $this->doorStatus;
        echo "Hood status " . $this->hoodStatus;
        echo "Boot status " . $this->bootStatus;
    }
    abstract function makesSound();
    abstract function getRemainingMileage();
}

class ElectricCar extends VehicleHd {
    public string $batteryCapacity;
	public function makesSound() {
        echo "electric voooom";
	}
	public function getRemainingMileage() {
        return $this->batteryCapacity;
	}
}

class GasolineCar extends VehicleHd {
    public string $fuelLevel;
	public function makesSound() {
        echo "usualy voooom";
	}
	public function getRemainingMileage() {
        return $this->fuelLevel;
	}
}