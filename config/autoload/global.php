<?php
return array(
   'db' => array(
        'driver'    => 'PDO_MYSQL',
        'Database host'  => 'rbsolutions-db.my.phpcloud.com',
        'Database port'  => '3306',
        'Database schema name'  => 'rbsolutions',
        'Database user'  => 'rbsolutions',
        'Database password'  => '888_ChelseaBlues247!'
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);

