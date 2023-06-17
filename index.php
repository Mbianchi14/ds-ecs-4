<?php

require_once 'modelo/cliente.php';
require_once 'modelo/producto.php';
require_once 'modelo/marcaDelProducto.php';
require_once 'modelo/proveedor.php';

$c = new Cliente();
$c->Id = 1;
$c->NombreApellido = 'Cliente Prueba';
$c->NumeroDeDocumento = 33520321;
$c->MostrarDatos();

$mp = new MarcaDelProducto();
$mp->Id = 1;
$mp->Descripcion = 'Descripcion de la marca del producto';
$mp->Codigo = 155;

$p = new Producto();
$p->Id = 1;
$p->Codigo = 15;
$p->Descripcion= 'Descripcion del producto';
$p->Marca = $mp;

$pr = new Proveedor();
$pr->Id = 1;
$pr->NumeroDeDocumento = 35125478;
$pr->Producto= $p;
$pr->MostrarDatos();