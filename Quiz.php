<?php

class Rumah {

    private $warnaCat;

    public function __construct($warnaCat) {
        $this->warnaCat = $warnaCat;
    }

    public function warnaCat() {
        return $this->warnaCat;
    }
}
$rumahBaru = new Rumah('Hijau');
echo "saya punya rumah berwarna ".$rumahBaru->warnaCat();

?>
