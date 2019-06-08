<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\CategoryValidation;
use App\Models\Categories;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

    private $data=[];
    private $categories;
    public function __construct()
    {
        $this->categories = new Categories();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = $this->categories->getAll();
        $this->data['categories'] = $cat;
        return view('admin.categories.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryValidation $request)
    {
        $cat = $request->input('category');
        try{
            $this->categories->insert($cat);
            return redirect("admin/categories")->with("msg","Successfull insert");
        }
        catch (QueryException $e){
            \Log::info("Error ".$e->getMessage());
            return redirect("admin/categories")->with("msg_error","Error with insert");
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
        $this->data['category'] = $this->categories->getOneCategory($id);
        return view('admin.categories.edit',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryValidation $request, $id)
    {
        $cat = $request->input('category');
        try{
            $this->categories->updateCategory($cat,$id);
            return redirect("admin/categories")->with("msg","Successfull update");
        }
        catch (QueryException $e){
            \Log::info("Error ".$e->getMessage());
            return redirect("admin/categories")->with("msg_error","Error with update");
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
            $this->categories->deleteCategory($id);
        }
        catch (QueryException $e){
            \Log::info("Error ".$e->getMessage());
            return redirect("admin/categories")->with("msg_error","Error with delete");
        }
    }
}
