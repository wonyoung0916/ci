<?php

namespace App\Controllers;
use Config\Database;
class Home extends BaseController
{
    public function index()
    {
        $query = $db->query('select * from notice');

        foreach ($query->getResultArray() as $row) {
            echo $row['title'];
        }
    }
}
