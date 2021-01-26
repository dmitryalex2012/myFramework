<?php

class MyActiveRecord
{
    protected $dbh;

    /**
     * MyActiveRecord constructor.
     *
     * Load DB parameters.
     */
    public function __construct()
    {
        global $DB;
        $this->dbh = $DB;
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
        $table = static::class;

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

    /**
     * Replace the row in DB.
     *
     * @param $table
     * @param $oldUser
     * @param $user
     */
    public function changeTableRow($oldUser, $user)
    {
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

    private static function verifyEmptyParameter($oldParameter, $newParameter)
    {
        if (empty($newParameter)){
            return $oldParameter;
        } else{
            return $newParameter;
        }
    }
}