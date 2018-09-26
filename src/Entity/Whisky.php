<?php
/**
 * Created by PhpStorm.
 * User: Row
 * Date: 26/09/2018
 * Time: 14:47
 */

namespace App\Entity;


class Whisky
{
    private $id;
    private $name;

    public function __construct(int $id,string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}