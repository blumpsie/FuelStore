<?php
/**
 * The development database settings. These get merged with the global settings.
 */

$which = 'mysql'; // either 'mysql' or 'sqlite'

$mysql = [
  // change these MySQL database specs if necessary
  'connection'  => [
    'dsn'        => 'mysql:host=127.0.0.1;dbname=store',
    //'dsn'        => 'mysql:host=localhost;dbname=store',
    'username'   => 'guest',
    'password'   => '',
  ],
];

$sqlite = [
  'charset' => NULL,
  'connection'  => [
    'dsn' => 'sqlite:' . APPPATH . 'database/db.sqlite',
  ],
];

$choices = [
  'mysql' => $mysql,
  'sqlite' => $sqlite,
];

return [
  'which' => $which,
  'default' => $choices[$which],  // makes this the one used
];
