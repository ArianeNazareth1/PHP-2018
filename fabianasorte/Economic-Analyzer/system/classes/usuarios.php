<?php
/**
 * Created by PhpStorm.
 * User: ARIANE
 * Date: 02/06/2018
 * Time: 13:15
 */

class usuarios
{
    /**
     * @return mixed
     */
    private $id;
    private $login;
    private $password;

    /**
     * usuarios constructor.
     * @param $id
     * @param $login
     * @param $password
     */
    public function __construct($id, $login, $password)
    {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }


}