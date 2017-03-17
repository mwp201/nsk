<?php

class DB
{
    protected $dbh;

    public function __construct()
    {
        $config = require_once __DIR__.'/../config.php';
        $str = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $this->dbh = new PDO($str, $config['user'], $config['password']);
    }

    public function execute(string $sql)
    {
        $sth = $this->dbh->prepare($sql);
        if ($sth->execute()){
            return true;
        }
        return false;
    }

    public function query(string $sql, array $data)
    {
        $sth = $this->dbh->prepare($sql);
        if ($sth->execute($data)){
            return $sth->fetchAll();
        }
        return false;
    }
}
