<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\MenuInsertValidation;
use App\Models\Menu;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{

    private $menu;
    private $data = [];
    public function __construct()
    {
        $this->menu = new Menu();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = $this->menu->getMenu();
        $this->data['menu'] = $menu;
        return view('admin.menu.index',$this->data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuInsertValidation $request)
    {
        $href = $request->input('href');
        $content = $request->input('content');
        try {
            $menu = $this->menu->insert($href, $content);
            return redirect('admin/menu')->with('msg','Successfull insert');
        }
        catch (QueryException $e){
            \Log::info('Error '.$e->getMessage());
            return redirect('admin/menu')->with('msg_error','Error with insert');
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
        $menu = $this->menu->getOneMenu($id);
        $this->data['menu'] = $menu;
        return view('admin.menu.edit',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $href = $request->input('href');
        $content = $request->input('content');
        try{
            $this->menu->update($href,$content,$id);
            return redirect("admin/menu")->with("msg","Successfull update");
        }
        catch (QueryException $e){
            \Log::info("Error ".$e->getMessage());
            return redirect("admin/menu")->with("msg_error","Error with update");
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
            $this->menu->delete($id);
        }catch (QueryException $e){
            \Log::info("Error ".$e->getMessage());
            return redirect("admin/menu")->with("msg_error","Error with delete");
        }
    }
}
