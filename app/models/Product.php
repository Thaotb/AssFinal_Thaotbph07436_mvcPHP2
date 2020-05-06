<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    protected $table = "products";
    public $fillable = ['name', 'cate_id', 'price', 'short_desc', 
                        'detail', 'star', 'views'];

    public function getCateName(){
    	$parent = Category::find($this->cate_id);
    	if ($parent) {
    		return $parent->cate_name;
    		return null;
    	}
    }
}

?>