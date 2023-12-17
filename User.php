<?php

class User
{
    public function logIn(PDO $conn, $login, $password) : bool {
        $sql = "SELECT * FROM USERS WHERE login = '$login' AND password = '$password'";

        $result = $conn->query($sql);

        if ($result->rowCount() == 0) {
            echo "No such user";

            return false;
        }
        else {
            $row = $result->fetch();

            $this->login = $row['login'];
            $this->password = $row['password'];
            $this->role = $row['role'];
            $this->id = $row['id'];

            return true;
        }
    }

    private $login;
    private $password;
    private $role;
    private $id;

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}