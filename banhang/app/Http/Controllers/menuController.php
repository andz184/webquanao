<?php

namespace App\Http\Controllers;

use App\Components\menuRecusive;
use App\Models\menu;
use Illuminate\Http\Request;

class menuController extends Controller
{
    private $menuRecusive;
    private $menu;
    public function __construct(menuRecusive $menuRecusive,menu $menus)
    {
        $this->menuRecusive = $menuRecusive;
        $this->menu = $menus;
    }
    public function index(){
        $menu = $this->menu->simplepaginate(5);
        return view('menus.index',compact('menu'));
    }
    public function create()
    {

       $htmlOption = $this->menuRecusive->menuRecusiveAdd();
       
        return view('menus.add',compact('htmlOption'));
    }
    public function store(Request $request){
        $this->menu->create([
            'name' =>$request->name,
            'parent_id'=> $request->parent_id,
            'slug'=> $request->slug
            
        ]);
        
        return redirect()->route('menus.index');

    }
}
