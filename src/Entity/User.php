<?php
/**
 * Created by PhpStorm.
 * User: Row
 * Date: 26/09/2018
 * Time: 14:51
 */

namespace App\Entity;


class User
{
    private $id;
    private $email;
    private $password;
    private $firstname;
    private $lastname;

    public function __construct($id, $email, $password, $firstname, $lastname)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}