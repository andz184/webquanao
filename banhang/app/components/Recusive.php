<?php

namespace App\Components;
use App\Models\categories;

class Recusive {
    private $data;
    private $htmlselect = '';
    public function __construct($data)
    {
        $this->data = $data;

       
    } 

    public function categoryRecusive($id = 0){
        $data = categories::all();
       
        foreach($this->data as $value){
            if($value['parent_id'] == $id){
                $this->htmlselect .= "<option>".$value['name'].
                "</option>";
               $this->categoryRecusive($value['id']);
             
}

        }
        return $this->htmlselect;
       
}

}
