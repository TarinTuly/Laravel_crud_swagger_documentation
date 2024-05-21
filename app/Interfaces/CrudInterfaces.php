<?php


namespace App\Interfaces;

use Illuminate\Contracts\Pagination\Paginator;

interface CrudInterfaces
{
    public function getAll():Paginator;
}
