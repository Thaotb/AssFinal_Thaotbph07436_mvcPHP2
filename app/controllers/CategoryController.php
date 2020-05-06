<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController extends BaseController{
       public function index(){
        $cates = Category::all();
                $mess = isset($_GET['mess']) ? $_GET['mess'] : null;
         $this->render('category.index', [
                                            'listCate' => $cates,
                                             'messenger' =>$mess
                                            
                                        ]);
    }

	  public function addForm(){
        // lấy dữ liệu từ bảng danh mục
        $cates = Category::all();
        $this->render('category.add-form', ['cates' => $cates]);
    }

    public function saveAdd(){
        $requestData = $_POST;
        $model = new Category();
        $model->fill($requestData);
        $model->save();
        header('location: ./category');
        
    }
    //Hàm xóa sản phẩm
 public function remove(){
 
    $removeId = isset($_GET['id']) ? $_GET['id'] : null;
    if(!$removeId){
        header("location: ./category?mess=không đủ thông tin để xóa");
        die;
    }
    // kiểm tra xem id có thật hay không
    $model = Category::find($removeId);
    
    if(!$model){
        $mess = "id không tồn tại!";
    }else{
        Category::destroy($removeId);
        $mess = "Xóa danh mục thành công";
    }

    header("location: ./category?mess=$mess");
    die;

}

  public function editForm(){
  $removeId = isset($_GET['id']) ? $_GET['id'] : null;
  if(!$removeId){
      header("location: ./category?mess=không đủ thông tin để xóa");
      die;
  }
  // kiểm tra xem id có thật hay không
  $model = Category::find($removeId);
  
  if(!$model){
      $mess = "id không tồn tại!";
      header("location: ./category?msg=$msg");
      die;
  }
  
  $cates = Category::all();
  $this->render('category.edit-form', [
                                          'cates' => $cates,
                                          'model' => $model
                                      ]);

}

public function saveEdit(){
  $id = $_GET['id'];
  $id = isset($_GET['id']) ? $_GET['id'] : null;
  if(!$id){
      header("location: ./category?mess=không đủ thông tin để xóa");
      die;
  }
  // kiểm tra xem id có thật hay không
  $model = Category::find($id);
  
  if(!$model){
      $mess = "id không tồn tại!";
      header("location: ./category?mess=$mess");
      die;
  }

  $requestData = $_POST;
  $model->fill($requestData);

 
  $model->save();
  header('location: ./category');
}


}



?>