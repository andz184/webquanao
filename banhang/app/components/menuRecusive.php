<?php
namespace App\Components;
use App\Models\menu;

class menuRecusive {
    protected $html;
    public function __construct( )
    {
        $this->html = '';
    }
    public function menuRecusiveAdd($parenId = 0,$subMark = ''){
        $data = menu::where('parent_id',$parenId) ->get();
        foreach($data as $dataItem){
            $this->html .= '<option value="'.$dataItem->id.'">'.$subMark.$dataItem->name.'</option>';
        $this->menuRecusiveAdd($dataItem->id,$subMark.'--');
        }
        return $this->html;
    }
}
?>