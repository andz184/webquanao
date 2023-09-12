<?php

namespace App\Http\Controllers;

use App\Models\categories;

use Illuminate\Http\Request;
use App\Components\Recusive;



class categoryController extends Controller
{
    
    private $categories;
    public function __construct(categories $categories)
    {
      
        $this->categories = $categories; 
    }



    public function store(Request $request){
        $this->categories->create([
            'name' =>$request->name,
            'parent_id'=> $request->parent_id,      
            'slug'=> $request->slug
        ]);
       
       
        return redirect()->route('categories.index');
    }
    public function create()
    {

        $htmlOption = $this->getCategory($parentId= null);
        return view('category.add', compact('htmlOption'));
    }
    public function getCategory($parentId){
        $data = $this->categories->all();
        $Recusive = new Recusive($data);
        $htmlOption = $Recusive->categoryRecusive($parentId);
        return $htmlOption;
    }
    public function edit($id)
    {
        $categories = $this->categories->find($id);
      $htmlOption = $this->getCategory($categories->parent_id);
     
        return view('category.edit',compact('categories','htmlOption'));
    }
    public function delete($id)
    {
        $this->categories->find($id)->delete();
       
        return $this->index();
    }
    public function update($id,Request $request){
        $this->categories->find($id)->update([
            'name' =>$request->name,
            'parent_id'=> $request->parent_id,
            'slug'=> $request->slug
           
        ]);
        return $this->index();

    }





    public function index()
    {
        $category = $this->categories->latest()->paginate(5);
        // latest là số bản ghi thêm sau sẽ hiên lên trước // paginate(số) là số bản ghi được hiển thị trên 1 màn hình 
        return view('category.index',compact('category'));
    }
   
}
