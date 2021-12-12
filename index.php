<?php
session_start();
require_once('environment.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//testa a variável url que veio lá do htaccess
if (isset($_GET['url'])) //se estiver preenchida, pega o valor
{
  $url =  strtolower($_GET['url']);
  switch ($url) {
    case "home":
      require "controllers/home.php";
      $controlador = new Home();
      $controlador->processRequest();
      break;
    case "registration_school":
      require "controllers/registrationSchool.php";
      $controlador = new RegistrationSchool();
      $controlador->processRequest();
      break;
    case "login":
      require "controllers/login.php";
      $controlador = new Login();
      $controlador->processRequest();
      break;
    case "canteen":
      require "controllers/canteen.php";
      $controlador = new Canteen();
      $controlador->processRequest();
      break;
    case "responsible":
      require "controllers/responsible.php";
      $controlador = new Responsible();
      $controlador->processRequest();
      break;
    case "register_responsible":
      require "controllers/registerResponsible.php";
      $controlador = new RegisterResponsible();
      $controlador->processRequest();
      break;
    case "register_responsible_form":
      require "controllers/registerResponsible.php";
      $controlador = new RegisterResponsible();
      $controlador->registerResponsibleForm();
      break;
    case "list_responsibles":
      require "controllers/listResponsibles.php";
      $controlador = new ListResponsibles();
      $controlador->processRequest();
      break;
    case "edit_responsible_form";
      require "controllers/editResponsible.php";
      $controlador = new EditResponsible();
      $controlador->editResponsiblesForm();
      break;
    case "edit_responsible";
      require "controllers/editResponsible.php";
      $controlador = new EditResponsible();
      $controlador->processRequest();
      break;
    case "delete_responsible";
      require "controllers/deleteResponsible.php";
      $controlador = new DeleteResponsible();
      $controlador->processRequest();
      break;
    case "register_students":
      require "controllers/registerStudent.php";
      $controlador = new RegisterStudent();
      $controlador->processRequest();
      break;
    case "register_student_form":
      require "controllers/registerStudent.php";
      $controlador = new RegisterStudent();
      $controlador->registerResponsibleForm();
      break;
    case "student":
      require "controllers/student.php";
      $controlador = new Student();
      $controlador->processRequest();
      break;
    case "register_products":
      require "controllers/registerProducts.php";
      $controlador = new RegisterProducts();
      $controlador->processRequest();
      break;
    case "register_products_form":
      require "controllers/registerProducts.php";
      $controlador = new RegisterProducts();
      $controlador->registerProductsForm();
      break;
    case "list_products":
      require "controllers/listProducts.php";
      $controlador = new ListProducts();
      $controlador->processRequest();
      break;
    case "delete_product";
      require "controllers/deleteProduct.php";
      $controlador = new DeleteProduct();
      $controlador->processRequest();
      break;
    case "edit_product_form";
      require "controllers/editProduct.php";
      $controlador = new EditProduct();
      $controlador->editProductsForm();
      break;
    case "edit_product";
      require "controllers/editProduct.php";
      $controlador = new EditProduct();
      $controlador->processRequest();
      break;
    case "list_students";
      require "controllers/listStudents.php";
      $controlador = new ListStudents();
      $controlador->processRequest();
      break;
    case "delete_student";
      require "controllers/deleteStudent.php";
      $controlador = new DeleteStudent();
      $controlador->processRequest();
      break;
    case "edit_student_form";
      require "controllers/editStudent.php";
      echo "entrei aqui ";
      $controlador = new Aleatorio();
      $controlador->editStudentForm();
      break;
    case "edit_student";
      require "controllers/editStudent.php";
      $controlador = new Aleatorio();
      $controlador->processRequest();
      break;
    case "register_deposit";
      require "controllers/registerDeposits.php";
      $controlador = new RegisterDeposits();
      $controlador->processRequest();
      break;
    case "register_deposit_form";
      require "controllers/registerDeposits.php";
      $controlador = new RegisterDeposits();
      $controlador->registerDepositsForm();
      break;
    case "list_student_balance";
      require "controllers/listStudentBalance.php";
      $controlador = new ListStudentBalance();
      $controlador->processRequest();
      break;
    case "list_historic_deposit";
      require "controllers/listHistoricDeposit.php";
      $controlador = new ListHistoricDeposit();
      $controlador->processRequest();
      break;
    case "cart";
      require "controllers/listCart.php";
      require_once "models/cartSession.php";
      $cartSession = new CartSession();
      $controlador = new ListCarts($cartSession);
      $controlador->processRequest();
      break;
    case "add_item_cart";
      require "controllers/addCartItem.php";
      require_once "models/cartSession.php";
      $cartSession = new CartSession();
      $controlador = new AddCartItem($cartSession);
      $controlador->processRequest();
      break;
    case "update_qtd_cart";
      require "controllers/updateQtdCart.php";
      require_once "models/cartSession.php";
      $cartSession = new CartSession();
      $controlador = new UpdateQtdCart($cartSession);
      $controlador->processRequest();
      break;
    case "delete_item_cart";
      require "controllers/deleteCartItem.php";
      require_once "models/cartSession.php";
      $cartSession = new CartSession();
      $controlador = new DeleteCartItem($cartSession);
      $controlador->processRequest();
      break;
    case "logout";
      require "controllers/logout.php";
      $controlador = new Login();
      $controlador->processRequest();
      break;
    default:
      require "controllers/home.php";
      $controlador = new Home();
      $controlador->processRequest();
      break;
  }
} else
  $url = '404.php';
