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

    public function categoryRecusive($parentId, $id = 0)
{
    foreach ($this->data as $value) {
        if ($value['parent_id'] == $id) {
            if (!empty($parentId) && $parentId == $value['id']) {
                $this->htmlselect .= "<option selected value= '".$value['id']."'>" . $value['name'] . "</option>";
            } else {
                $this->htmlselect .= "<option value= '".$value['id']."'>" . $value['name'] . "</option>";
            }
            $this->categoryRecusive($parentId, $value['id']);
        }
    }
    return $this->htmlselect;
}


}
