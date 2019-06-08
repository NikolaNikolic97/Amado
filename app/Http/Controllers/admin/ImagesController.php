<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\InsertImageValidation;
use App\Models\Images;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImagesController extends Controller
{

    private $data;
    private $img;
    private $posts;
    public function __construct()
    {
        $this->img=new Images();
        $this->posts = new Posts();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['images']= $this->img->getAllImages();
        $this->data['posts']= $this->posts->getAll();
        return view('admin.images.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['posts']= $this->posts->getAll();
        return view('admin.images.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertImageValidation $request)
    {
        $alt = $request->input('alt');
        $post = $request->input('post');
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $fileName = time().'_'.$fileName;
        $sourcePath = asset('img/product-img').'/'.$fileName;
        try{
            $file->move(public_path('img\product-img'),$fileName);
            $this->img->insertImage($sourcePath,$alt,$post);
            return redirect('/admin/images')->with('msg','Successfull insert');
        }
        catch (\Exception $e){
            \Log::info('Error '.$e->getMessage());

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
        $this->data['images']= $this->img->getImage($id);
        $this->data['posts']= $this->posts->getAll();
        return view('admin.images.edit',$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InsertImageValidation $request, $id)
    {
        $src = $request->input('src');
        $alt = $request->input('alt');
        $post = $request->input('post');
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $fileName = time().'_'.$fileName;
        try{
            $file->move(public_path('img\product-img'),$fileName);
            $this->img->updateImage($src,$alt,$post,$id);
            return redirect('/admin/images')->with('msg','Successfull update');
        }
        catch (\Exception $e){
            \Log::info('Error '.$e->getMessage());

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
            $this->img->deleteImg($id);
        }
        catch (QueryException $e){
            \Log::info('error '.$e->getMessage());
        }
    }
}
