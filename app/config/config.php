<?php
/**
 * Created by PhpStorm.
 * User: ilanv
 * Date: 17/07/2016
 * Time: 10:51
 */
$configuration->loadFromExtention('doctrine', array(
    'dbal' => array(
        'driver' => 'pdo_mysql',
        'host' => '%database_host%',
        'dbname' => '%database_name%',
        'user' => '%database_user%',
        'password' => '%database_password%',
    )
));