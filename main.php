<?php

class Location {
    private $id;
    private $name;
    private $isReserved;

    public function __construct($id, $name, $isReserved) {
        $this->id = $id;
        $this->name = $name;
        $this->isReserved = $isReserved;
    }

    public function getName() {
        return $this->name;
    }

    public function isReserved() {
        return $this->isReserved;
    }

    public function getId() {
        return $this->id;
    }
}

class Reservation {
    private $id;
    private $location;
    private $numberOfRentalDays;

    public function __construct($id, $location, $numberOfRentalDays) {
        $this->id = $id;
        $this->location = $location;
        $this->numberOfRentalDays = $numberOfRentalDays;
    }

    public function getId() {
        return $this->id;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getNumberOfRentalDays() {
        return $this->numberOfRentalDays;
    }
}

function main() {
    $loc = new Location(1, "voiture", true);
    $res = new Reservation(1, $loc, 20);

    echo "Location: " . $loc->getName() . ", reserved: " . ($loc->isReserved() ? 'true' : 'false') . "\n";
    echo "Reservation of " . $res->getNumberOfRentalDays() . " days for id location " . $res->getLocation()->getId() . "\n";
}

main();
