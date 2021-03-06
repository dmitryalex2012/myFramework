<?php

include "./config/config.php";

class MyActiveRecord
{
    protected $dbh;

    /**
     * Loads PDO object from config.
     */
    public function __construct()
    {
        /* @var $DB PDO object */

        include "./config/config.php";
        $this->dbh = $DB;
    }


    /**
     * Finds the row with "$postName" identifier from "posts" table of the DB
     *
     * @param $rowIdentifier
     * @param $identifier
     * @return mixed
     */
    public function findRow($rowIdentifier, $identifier)
    {
        $table = static::class;

        $sth = $this->dbh->prepare("SELECT * FROM `$table` WHERE $rowIdentifier = '$identifier'");
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * Adds new user to DB.
     *
     * @param $loginName
     * @param $password
     * @param $phone
     * @param $email
     * @param $photo
     */
    public function writeRow($loginName, $password, $phone, $email, $photo)
    {
        $table = static::class;

        $sth = $this->dbh->prepare("INSERT INTO `$table` (loginName, password, phone, email, photo) VALUES (?,?,?,?,?)");
        $sth->execute([$loginName, $password, $phone, $email, $photo]);
    }

    /**
     * Replaces the row in DB.
     *
     * @param $oldUser
     * @param $user
     */
    public function changeRow($oldUser, $user)
    {
        $table = static::class;

        $user['loginName'] = self::verifyEmptyParameter($oldUser['loginName'], $user['loginName']);
        $user['password'] = $oldUser['password'];
        $user['phone'] = self::verifyEmptyParameter($oldUser['phone'], $user['phone']);
        $user['email'] = self::verifyEmptyParameter($oldUser['email'], $user['email']);
        $user['photo'] = self::verifyEmptyParameter($oldUser['photo'], $user['photo']);

        $set = '`loginName` = :loginName, `password` = :password, `phone` = :phone, `email` = :email, `photo` = :photo';
        $sth = $this->dbh->prepare("UPDATE `$table` SET $set WHERE `loginName` = :oldLoginName");
        $execute = [
            'loginName' => $user['loginName'],
            'password' => $user['password'],
            'phone' => $user['phone'],
            'email' => $user['email'],
            'photo' => $user['photo'],
            'oldLoginName' => $oldUser['loginName']
        ];
        $sth->execute($execute);
    }

    /**
     * Checks the parameter on emptiness.
     *
     * @param $oldParameter
     * @param $newParameter
     * @return mixed
     */
    private static function verifyEmptyParameter($oldParameter, $newParameter)
    {
        if (empty($newParameter)){
            return $oldParameter;
        } else{
            return $newParameter;
        }
    }
}