<?php
require('vendor/autoload.php');
use Talifhani\ZaIdParser\IDNumberParser;

// YYMMDDSSSSCAZ

$MM = '05';
$DD = '03';
$S1 = '5';
$S2 = '1';

$C = '0';
$A = '8';
echo 'IDNumber,Birthdate,Age,Citizenship,Gender'."\n";
for ($YY = 60; $YY <= 88; $YY++) {
  for ($S3 = 0; $S3 <= 9; $S3++) {
    for ($S4 = 0; $S4 <= 9; $S4++) {
      for ($Z = 0; $Z <= 9; $Z++) {
        $idNum = $YY.$MM.$DD.$S1.$S2.$S3.$S4.$C.$A.$Z;
        $idNumberData = (new  IDNumberParser($idNum))->parse();
        if ($idNumberData->isValid()) {
          echo  $idNumberData->getIdNumber().','.$idNumberData->getBirthdate().','.$idNumberData->getAge().','.$idNumberData->getCitizenship().','.$idNumberData->getGender()."\n";
        }
      }
    }
  }
}