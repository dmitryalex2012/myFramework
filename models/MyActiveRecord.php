<?php

class MyActiveRecord
{
private $config;
private $hostname;
private $dbname;
private $user;
private $pass;

    /**MyActiveRecord constructor.
     *
     * Load DB parameters.
     */
    public function __construct()
    {
        $this->config = include './config/config.php';
        $this->hostname = $this->config['hostname'];
        $this->dbname = $this->config['dbname'];
        $this->user = $this->config['user'];
        $this->pass = $this->config['pass'];
    }

    /**Find the row with "$postName" identifier from "posts" table of the DB
     *
     * @param $identifier
     * @return mixed
     */
    protected function findTableRow($identifier)
    {
            $dbh = new PDO("mysql:host=$this->hostname; dbname=$this->dbname", $this->user, $this->pass);
            $sth = $dbh->prepare("SELECT * FROM `posts` WHERE postName = '$identifier'");
            $sth->execute();
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            $dbh = null;

        return $result;
    }
}
