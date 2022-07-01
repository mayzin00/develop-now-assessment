<?php 

//Refactor The Code

class vehicleDuration{
    protected $distance, $speed, $type;

    public function __construct($distance, $speed, $type){
        $this->distance = $distance;
        $this->speed = $speed;
        $this->type = $type;
    }
    
    public function getDuration(){

        foreach ($this->type as $index => $vehicleType) {
            $duration = $this->distance/$this->speed[$index];

            switch ($vehicleType) {

                case 'boat':
                    echo $vehicleType." : ". $duration + 0.25;
                    break;
                
                default:
                    echo $vehicleType." : ". $duration;
                    break;
            }

        }

    }
}

    $vehicleTypes = ['sport-car', 'truck', 'bike', 'boat'];
    $vehiclesSpeed = [150, 60, 100, 50]; // vehicles speed in km/h
    $distance = 350; // destination distance in km

    
    $vehicleDuration = new vehicleDuration($distance,$vehiclesSpeed,$vehicleTypes);
    $vehicleDuration->getDuration();

?>