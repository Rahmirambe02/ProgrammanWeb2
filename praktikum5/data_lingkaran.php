<?php
require_once('class_lingkaran.php');
echo "Nilai PHI: " . Lingkaran::PHI;

//instansiasi object Lingkaran
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(8);

// panggil method
echo "<br> Luas Lingkar 1: " . $lingkar1->getLuas();
echo "<br> Luas Lingkar 2: " . $lingkar2->getLuas();

echo "<br> keliling Lingkar 1: " . $lingkar1->getkeliling();
echo "<br> keliling Lingkar 2: " . $lingkar2->getkeliling();