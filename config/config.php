<!-- Defining the constants of the DB -->
<?php
class Db_config
{
  protected $servername;
  protected $username;
  protected $password;
  protected $dbname;
  // special method that is automatically called when an object of the class is created
  function __construct()
  {
    $this->servername = 'localhost';
    $this->username = 'root';
    $this->password = '';
    $this->dbname = 'art_gallery';
  }
}
