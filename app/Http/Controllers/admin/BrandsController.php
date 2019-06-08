<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\BrandsValidation;
use App\Models\Brands;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
    private $data=[];
    private $brands;
    public function __construct()
    {
        $this->brands = new Brands();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = $this->brands->getAll();
        $this->data['brands'] = $brands;
        return view('admin.brands.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandsValidation $request)
    {
        $brand = $request->input('brand');
        try{
            $this->brands->insert($brand);
            return redirect("admin/brands")->with("msg","Successfull insert");
        }
        catch (QueryException $e){
            \Log::info("Error ".$e->getMessage());
            return redirect("admin/brands")->with("msg_error","Error with insert");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = $this->brands->getOneBrand($id);
        $this->data['brand'] = $brand;
        return  view('admin.brands.edit',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandsValidation $request, $id)
    {
        $brand = $request->input('brand');
        try{
            $this->brands->updateBrand($brand,$id);
            return redirect("admin/brands")->with("msg","Successfull update");
        }
        catch (QueryException $e){
            \Log::info("Error ".$e->getMessage());
            return redirect("admin/brands")->with("msg_error","Error with update");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $this->brands->deleteBrand($id);
        }
        catch (QueryException $e){
            \Log::info("Error ".$e->getMessage());
            return redirect("admin/brands")->with("msg_error","Error with delete");
        }
    }
}
