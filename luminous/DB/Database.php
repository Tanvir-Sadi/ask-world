<?php

namespace Luminous\DB;

use Dotenv\Dotenv;

class Database extends \PDO
{

    private $dsn;
    private $host;
    private $dbname;
    private $user;
    private $password;


    public function __construct($dsn = null, $username = null, $password = null, $options = null)
    {
        $dotenv = new Dotenv(__DIR__.'/../../');
        $dotenv->load();


        $this->host = getenv('DB_HOST');
        $this->dbname = getenv('DB_DATABASE');
        $this->dsn = $dsn == null ? 'mysql:host='. $this->host .';dbname='. $this->dbname : $dsn;


        $this->user = $username == null ? getenv('DB_USERNAME') : $username;
        $this->password = $password == null? getenv('DB_PASSWORD') : $password;


        parent::__construct($this->dsn, $this->user, $this->password, $options);


        $this->setAttribute(self::ATTR_DEFAULT_FETCH_MODE, self::FETCH_OBJ);
        $this->setAttribute(self::ATTR_EMULATE_PREPARES, false);

    }

}