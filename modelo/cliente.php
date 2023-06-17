<?php

class Cliente
{
    public $Id;
    public $NombreApellido;
    public $NumeroDeDocumento;

    
    public function MostrarDatos () 
    {
        echo 'Cliente:'.'<br>';
        echo 'Id: ' . $this->Id . '<br>';
        echo 'Nombre: ' . $this->NombreApellido . '<br>';
        echo 'Raza: ' . $this->NumeroDeDocumento . '<br>';
        echo '<br>';
    }
}