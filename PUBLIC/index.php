
<?php
//directorio del proyecto
define("RUTAPROYECTO", dirname(__DIR__));

//directorio app
define("RUTAAPP", PROJECTPATH . '/APP');

//autoload con namespaces
function autoload_classes($class_name)
{
    $filename = PROJECTPATH . '/' . str_replace('\\', '/', $class_name) .'.php';
    if(is_file($filename))
    {
        include_once $filename;
    }
}
//registramos el autoload autoload_classes
spl_autoload_register('autoload_classes');

