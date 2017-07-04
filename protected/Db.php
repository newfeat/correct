<?php

class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=php2','root','');
    }

    public function query($sql, $class, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);

        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return false;
    }


    public function execute($sql,$params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);

        if (false !== $res) {
            return true;
        }
        return false;
    }

}