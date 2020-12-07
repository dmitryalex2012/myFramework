<?php

class MyActiveRecord
{
private $config;
private $hostname;
private $dbname;
private $user;
private $pass;
private $dbh;

    /**
     * MyActiveRecord constructor.
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
        $this->dbh = new PDO("mysql:host=$this->hostname; dbname=$this->dbname", $this->user, $this->pass);
    }

    /**
     * Find the row with "$postName" identifier from "posts" table of the DB
     *
     * @param $table
     * @param $rowIdentifier
     * @param $identifier
     * @return mixed
     */
    public function findTableRow($table, $rowIdentifier, $identifier)
    {
            $sth = $this->dbh->prepare("SELECT * FROM `$table` WHERE $rowIdentifier = '$identifier'");
            $sth->execute();
            $result = $sth->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * Add new user to DB
     *
     * @param $table
     * @param $loginName
     * @param $password
     * @param $phone
     * @param $email
     * @param $photo
     */
    public function writeTableRow($table, $loginName, $password, $phone, $email, $photo)
    {
        $sth = $this->dbh->prepare("INSERT INTO `$table` (loginName, password, phone, email, photo) VALUES (?,?,?,?,?)");
        $sth->execute([$loginName, $password, $phone, $email, $photo]);
    }
}

