<?php

require_once 'duenoMascota.php';


class Mascota
{
    public $Id;
    public $Nombre;
    public $Raza;
    public $Dueno;

    public function Datos()
    {
        echo 'Los datos de la mascota son' . '<br>';
        echo 'Id de la mascota: ' . $this->Id . '<br>';
        echo 'Nombre de la mascota: ' . $this->Nombre . '<br>';
        echo 'Raza de la mascota: ' . $this->Raza . '<hr>';
        echo 'Los datos del dueño de la mascota son' . '<br>';
        echo 'Id del dueño de la mascota: ' . $this->Dueno->Id. '<br>';
        echo 'Nombre del dueño de la mascota: ' . $this->Dueno->Nombre . '<br>';
        echo 'Apellido del dueño de la mascota: ' . $this->Dueno->Apellido. '<br>';
        echo 'Documento del dueño de la mascota: ' . $this->Dueno->Documento. '<br>';
        echo 'Celular del dueño de la mascota: ' . $this->Dueno->Celular. '<br>';
        echo 'Direccion del dueño de la mascota: ' . $this->Dueno->Direccion. '<br>';
    }
}
