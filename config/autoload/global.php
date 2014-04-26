<?php
return array(
   'db'=> array(
    'driver' => 'mysqli',
    'dsn'    => 'mysqli:dbname=rbsolutions;hostname=rbsolutions-db.my.phpcloud.com',
    'username'       => 'rbsolutions',
    'password'       => '888_ChelseaBlues247!',
    'driver_options' => array(
                1002 => 'SET NAMES \'UTF8\''                
            ), 
    
), 
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);