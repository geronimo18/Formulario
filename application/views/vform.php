<?php

echo form_open('formulario');
$nombre = array(
        'name'          => 'username',
        'id'            => 'username',
        'value'         => 'Escriba aqui su nombre',
        'maxlength'     => '50',
        'size'          => '25',
        'style'         => 'width:11%'
);
$direccion = array(
        'name'          => 'direccion',
        'id'            => 'direccion',
        'value'         => 'Escriba aqui su direccion',
        'maxlength'     => '50',
        'size'          => '25',
        'style'         => 'width:10%'
);
echo form_label('Nombre:     ', 'nickname');
echo form_input($nombre)."<br>"."<br>";
echo form_label('Direccion: ', 'adress');
echo form_input($direccion);
echo form_submit('Guardar', 'Guardar');
echo form_close();
?>

