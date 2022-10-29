<?php

namespace App\src\Models;

use Itomori\Core\Model;

class MainModel extends Model
{
    protected $id;

    public function __construct()
    {
        $this->table = 'table_name';
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}                    
                    