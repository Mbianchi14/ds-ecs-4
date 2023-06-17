<?php

class Proveedor
{
    public $Id;
    public $NumeroDeDocumento;
    public $Producto;

    public function MostrarDatos () 
    {
        echo 'Provedor:'.'<br>';
        echo 'Id: ' . $this->Id . '<br>';
        echo 'Numero de Documento: ' . $this->NumeroDeDocumento . '<br>';

        echo 'Producto:' .'<br>';
        echo '-->Id: ' . $this->Producto->Id . '<br>';
        echo '-->Codigo: ' . $this->Producto->Codigo . '<br>';
        echo '-->Descripcion: ' . $this->Producto->Descripcion . '<br>';

        echo '-->Marca:' .'<br>';
        echo '----->Id: ' . $this->Producto->Marca->Id . '<br>';
        echo '----->Codigo: ' . $this->Producto->Marca->Codigo . '<br>';
        echo '----->Descripcion: ' . $this->Producto->Marca->Descripcion . '<br>';
   
    }
}