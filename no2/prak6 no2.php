<!-- Nama   : Zesyca Dwi Anjarsari
    NIM     : 21091397010
    Prodi   : Manajemen Informatika 2021 B-->
     
<?php 

require_once 'prak6 no2 interface.php';

class Airplane implements Flyer {
    public function takeOff() {
        return 'Pesawat lepas landas';
    }
    
    public function land() {
        return 'Pesawat mendarat';
    }

    public function fly() {
        return 'Pesawat sedang terbang di  perjalanan';
    }
}

class Bird implements Flyer {
    public function takeOff() {
        return 'Burung sedang mencari makan';
    }
    
    public function land() {
        return 'Burung kembali pulang';
    }

    public function fly() {
        return 'Burung sedang terbang';
    }

    public function buildNest() {
        return 'Burung membangun sarang';
    }

    public function layEggs() {
        return 'Burung sedang bertelur';
    }
}

class Superman implements Flyer {
    public function takeOff() {
        return 'Superman mencari lawan';
    }
    
    public function land() {
        return 'Superman terjatuh';
    }

    public function fly() {
        return 'Superman terbang';
    }

    public function leapBuilding() {
        return 'Superman melompat dari bangunan';
    }

    public function stopBullet() {
        return 'Superman menembak musuh';
    }
}

$airplane = new Airplane;
$bird = new Bird;
$superman = new Superman;