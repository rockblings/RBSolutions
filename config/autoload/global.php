<?php
return array(
   'db'=> array(
    'driver' => 'PDO_MYSQL',
    'dsn'    => 'mysql:dbname=rbsolutions;hostname=rbsolutions-db.my.phpcloud.com',
    'username'       => 'rbsolutions',
    'password'       => '888_ChelseaBlues247!',
    'port'=>'3306' 
    
), 
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);