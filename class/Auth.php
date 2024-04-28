<?php
require_once 'Database.php';

class Auth extends Database
{
    public $date;
    public $dateTime;

    /* database connection for Auth Class */
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
    }

    /* user register method */
    public function Register($email, $pass)
    {
        $sql = "INSERT INTO auth (email, pass, update_at, create_at) VALUES (?, ?, NOW(), NOW())";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute([$email, $pass]);

        return $result ? true : false;
    }

    /* user login method */
    public function Login($email, $pass)
    {
        $sql = "SELECT * FROM `auth` WHERE `email` = ? AND `pass` = ? LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$email, $pass]);
        $result = $stmt->fetch();

        return $result ? true : false;
    }

    /* prevent duplicate email insertion method */
    public function CheckEmail($email)
    {
        $sql = "SELECT `email` FROM `auth` WHERE `email` = ? LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$email]);
        $result = $stmt->fetch();

        return $result ? true : false;
    }

    /* forget password method */
    public function ForgetPass($email)
    {

    }
}
