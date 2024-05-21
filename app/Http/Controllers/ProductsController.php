<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Exception;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;

class ProductsController extends Controller
{
    use ResponseTrait;
    public $productRepository;
    public function __construct(ProductRepository $productRepository){
        $this->productRepository =$productRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       try{
        //$productRepository = new ProductRepository();
        return $this->responseSuccess($this->productRepository->getAll(),"tuly");
       }
       catch(Exception $e){
         return $this->responseError([],$e->getMessage());
       }
      // return "tuly";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
