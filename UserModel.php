<?php
class UserModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "db_web");
        $this->conn = mysql_connect("localhost", "root", "", "db_web");
        if (!$this->conn) {
            die("Koneksi database gagal: " . mysql_error());
        }
    }

    public function checkLogin($email, $password)
    {
        $email    = mysql_real_escape_string($email, $this->conn);
        $password = mysql_real_escape_string($password, $this->conn);

        $query = "SELECT * FROM users 
                  WHERE email='$email' AND password='$password'";
        $result = mysql_query($query, $this->conn);

        if ($result && mysql_num_rows($result) > 0) {
            return mysql_fetch_assoc($result);
        }
        return null;
    }
}