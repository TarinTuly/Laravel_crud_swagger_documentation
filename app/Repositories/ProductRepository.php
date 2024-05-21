<?php
namespace App\Repositories;

use App\Interfaces\CrudInterfaces;
use App\Models\Product;
use Illuminate\Contracts\Pagination\Paginator;

class ProductRepository implements CrudInterfaces
{
    public function getAll():Paginator
    {
        return Product::paginate(10);
    }
}
