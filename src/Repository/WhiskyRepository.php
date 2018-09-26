<?php
/**
 * Created by PhpStorm.
 * User: Row
 * Date: 26/09/2018
 * Time: 14:57
 */

namespace App\Repository;


use App\Entity\Whisky;

class WhiskyRepository
{
    private $whiskys;

    public function __construct()
    {
        $whisky1 = new Whisky(1,"William Peel");
        $whisky2 = new Whisky(2,"Jack Daniel's");
        $whisky3 = new Whisky(3,"Clan Campbell");
        $whisky4 = new Whisky(4,"Label 5");
        $whisky5 = new Whisky(5,"Ballantine's");

        $this->whiskys = [
            $whisky1,
            $whisky2,
            $whisky3,
            $whisky4,
            $whisky5,
        ];
    }

    public function findAll(): array
    {
        return $this->whiskys;
    }

    public function findById($id):Whisky
    {
        foreach ($this->whiskys as $whisky){
            if($whisky->getId() == $id){
                return $whisky;
            }
        }

        throw  new \RuntimeException(sprintf(
           'No product found with id "%s"', $id
        ));
    }
}