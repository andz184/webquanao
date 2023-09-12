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
        $menu = $this->menu->latest()->simplepaginate(5);
        return view('menus.index',compact('menu'));
    }
    public function create()
    {

       $htmlOption = $this->menuRecusive->menuRecusiveAdd($parent_id = '');
       
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
    public function edit($id)
    {
        $menu = $this->menu->find($id);
      
        $htmlOption = $this->menuRecusive->menuRecusiveEdit($menu->parent_id);
     
        return view('menus.edit',compact('menu','htmlOption'));
    }
    public function update($id,Request $request){
        $this->menu->find($id)->update([
            'name' =>$request->name,
            'parent_id'=> $request->parent_id,
            'slug' => str($request->name)
        ]);
        return redirect()->route('menus.index');

    }
    public function delete($id){
        $this->menu->find($id)->delete();
        return redirect()->route('menus.index');
    }
}
