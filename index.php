<?php

require_once 'modelo/mascota.php';

$duenoMascota = new DuenoMascota();
$duenoMascota->Id = 64789;
$duenoMascota->Nombre = 'Augusto';
$duenoMascota->Apellido = 'Lopez';
$duenoMascota->Documento = 4465138;
$duenoMascota->Celular = 341568732;
$duenoMascota->Direccion = 'Corrientes y Tucuman';

$mascota = new Mascota();
$mascota->Id = 12345;
$mascota->Nombre = 'Beto';
$mascota->Raza = 'Caniche';
$mascota->Dueno = $duenoMascota;



$mascota->Datos();
