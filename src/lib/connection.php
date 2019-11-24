<?php
  namespace lib;
  class Connection
  {
    public static $HOST = 'host';
    public static $USERNAME = 'username';
    public static $PASSWORD = 'password';
    public static $DB = 'database';
    public static $connection;
  }  
  Connection::$connection = new \mysqli(Connection::$HOST, Connection::$USERNAME, Connection::$PASSWORD, Connection::$DB);
?>