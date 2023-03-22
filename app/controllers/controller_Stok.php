<?php

include_once('../models/model_Stok.php');
include_once('../views/view_Stok.php');

class Controller
{
   private $model;
   private $view;

   public function __construct()
   {
      $this->model = new Model();
      $this->view = new View();
   }

   public function index()
   {
      $data = $this->model->index();
      $this->view->index($data);
   }


   public function edit()
   {
      $id = $_GET['id'];
      $data = $this->model->edit($id);
      $this->view->edit($data);
   }

   public function tambah()
   {
      $data = $this->model->index();
      $this->view->create();
   }

   public function store()
   {

      $data = array(
      
         'jumlah_barang' => $_POST['jumlah_barang'],
         'data_barang_id' => $_POST['data_barang_id'],
         
      );
      $result = $this->model->insert_data($data);
      if ($result) {
         header("Location: ../controllers/controller_Stok.php");
      } else {
         echo "Failed to insert data.";
      }
   }


   public function update()
   {
      $id = $_POST['id'];
      $data = array(
        'jumlah_barang' => $_POST['jumlah_barang'],
        'data_barang_id' => $_POST['data_barang_id']
        
      );
      // var_dump($id,$data);
      $result = $this->model->update_data($id, $data);
      if ($result) {
         echo "<script>alert('test')</script>";
         header("Location: ../controllers/controller_Stok.php");
      } else {
         echo "Failed to update data.";
      }
   }


   public function delete()
   {
      $id = $_GET['id'];
      $result = $this->model->delete_data($id);
      if ($result) {

         header("Location:  ../controllers/controller_Stok.php"
      );
      } else {
         echo "Failed to delete data.";
      }
   }
}

$controller = new Controller();
if (isset($_GET['page'])) {
   $page = $_GET['page'];

   switch ($page) {
      case 'tambah':
         $controller->tambah();
         break;

      case 'store':
         $controller->store();
         break;

      case 'delete':
         $controller->delete();
         break;


      case 'edit':
         $controller->edit();
         break;

      case 'update':
         $controller->update();
         break;

      default:
         $controller->index();
         break;
   }
} else {
   $controller->index();
}
