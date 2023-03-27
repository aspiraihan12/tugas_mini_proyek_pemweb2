<?php

// include_once('../tugas_mini_proyek_pemweb2-main2/public/register.php');

require_once('../models/model_Costumer.php');
require_once('../views/view_Costumer.php');
// require_once('../../public/register.php');

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
         'name' => $_POST['name'],
         'email' => $_POST['email'],
         'password' => $_POST['password'],
         'is_admin'=>$_POST['is_admin']
      );
      $result = $this->model->insert_data($data);
      if ($result) {
         header("Location: ../controllers/controller_Costumer.php");
      } else {
         echo "Failed to insert data.";
      }
   }


   public function update()
   {
      $id = $_POST['id'];
      $data = array(
         'name' => $_POST['name'],
         'email' => $_POST['email'],
         'password' => $_POST['password'],
         'is_admin'=>$_POST['is_admin']
      );
      $result = $this->model->update_data($id, $data);
      if ($result) {

         header("Location: ../controllers/controller_Costumer.php");
      } else {
         echo "Failed to update data.";
      }
   }


   function delete()
   {
      $id = $_GET['id'];
      $result = $this->model->delete_data($id);
      if ($result) {

         header("Location:  ../controllers/controller_Costumer.php"
      );
      } else {
         echo "Failed to delete data.";
      }
   }
}

 function register(){
   error_reporting(E_ALL);
   ini_set('display_errors', 'On');


   session_start();

   if (isset($_SESSION['name'])) {
       header("Location: login.php");
   }

   if (isset($_POST['submit'])) {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $password = md5($_POST['password']);
       $is_admin = $_POST['is_admin'];
      //  echo "<script>alert('$email')</script>";

       // if ($password == $cpassword) {
       $sql = "SELECT * FROM costumer WHERE email='$email'";
       $conn = new mysqli('localhost', 'root', '', 'toko_sepatu');
       $result = mysqli_query($conn, $sql);
      //  echo "<script>alert('bruh 1 selcect')</script>";
       if (!$result->num_rows > 0) {
           $sql = "INSERT INTO costumer (name, email, password,is_admin)
               VALUES ('$name', '$email', '$password','$is_admin')";
           $result = mysqli_query($conn, $sql);
           if ($result) {
               
               // echo "<script>alert('Selamat, registrasi berhasil!')</script>";
               
               // $name = "";
               // $email = "";
               // $_POST['password'] = "";
               return 1;
           } else {
               echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
               echo mysqli_error($conn);
           }
       } else {
         //   echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
           return 0;
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
