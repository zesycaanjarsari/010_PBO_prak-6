<!-- Nama   : Zesyca Dwi Anjarsari
    NIM     : 21091397010
    Prodi   : Manajemen Informatika 2021 B-->
<?php 

require_once 'prak6 no3 abstrak.php';
require_once 'prak6 no3 interface.php';

class Animal  
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function eat()
    {
        return $this->name . ' sedang makan';
    }
}

class Homosapiens extends Animal {}

class Airplane2 extends Vehicle implements Flyer
{
    public function __construct($maxLoad, $name)
    {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }
    
    public function takeOff()
    {
        return "$this->name lepas landas";
    }
    
    public function land()
    {
        return "$this->name mendarat";
    }

    public function fly()
    {
        return "$this->name dalam perjalanan";
    }

    public function calcFuelNeeds()
    {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();

        
        
        return ceil($fuel /= $trip);
    }
}

class Superman2 extends Homosapiens implements Flyer
{
    public function takeOff()
    {
        return "$this->name mengejar Musuh";
    }
    
    public function land()
    {
        return "$this->name melawan Musuh";
    }

    public function fly()
    {
        return "$this->name melakukan pukulan";
    }

    public function leapBuilding()
    {
        return "Musuhnya terpukul hingga menabrak mobil";
    }

    public function stopBullet()
    {
        return " $this->name menembak musuh";
    }
}

$burung = new Animal('Burung');
$manusia = new Homosapiens('Anjar');
$airplane2 = new Airplane2(25000, 'Lion Air');
$superman2 = new Superman2('Superman');