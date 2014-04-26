<?php
return array(
   'db'=> array(
    'driver' => 'pdo',
    'dsn'    => 'mysql:dbname=jmb;host=jmodb.c1doea96ilou.eu-west-1.rds.amazonaws.com',
    'username'       => 'jmb',
    'password'       => 'QyKN9jAw7xb2prZ5',
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