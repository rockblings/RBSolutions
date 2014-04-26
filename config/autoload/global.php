<?php
return array(
   $dsn = sprintf(
	'mysql:dbname=%s;host=%s',
	get_cfg_var('zend_developer_cloud.db.name'),
	get_cfg_var('zend_developer_cloud.db.host')
),

$db = new PDO(
	$dsn,
	get_cfg_var('zend_developer_cloud.db.username'),
	get_cfg_var('zend_developer_cloud.db.password')
),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);