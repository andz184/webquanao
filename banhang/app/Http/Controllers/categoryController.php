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
            'slug' => str($request->name)
        ]);
        return view('category.index');
    }
    public function create()
    {

        $data = $this->categories->all();
        $Recusive = new Recusive($data);
        $htmlOption = $Recusive->categoryRecusive();
        return view('category.add', compact('htmlOption'));
    }




    public function index()
    {
        return view('category.index');
    }
   
}
