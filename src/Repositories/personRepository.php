<?php

namespace ManishaPropel\InterfaceRepository\Repositories;

use ManishaPropel\InterfaceRepository\Interfaces\PersonInterface;

class PersonRepository implements PersonInterface
{
    public function getPersonById($id)
    {
        return "Person with ID: $id";
    }
}
