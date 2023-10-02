
<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
require("Model/Model.php");

class Controller extends Model
{
    public $URL = "";
    function __construct()
    {
        parent::__construct();
        $this->URL = "http://localhost/oes_project/Public/";

        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("View/header.php");
                    include_once("View/homepage.php");
                    include_once("View/footer.php");
                    break;
                case '/about':
                    include_once("View/header.php");
                    include_once("View/about.php");
                    include_once("View/footer.php");
                    break;
                case '/contact':
                    include_once("View/header.php");
                    include_once("View/contact.php");
                    include_once("View/footer.php");
                    break;
                case '/admindashboard':
                    echo "adminpage";
                    break;
                case '/logout':
                   session_destroy();
                   header("location:login");
                    break;
                case '/login':
                    include_once("View/login.php");
                    if (isset($_POST['login'])) {
                        array_pop($_POST);
                        $LoginRes = $this->Select("users", array("email" => $_POST['email'], "password" => md5($_POST['password'])));
                        if ($LoginRes['Code'] == 1) {
                            $_SESSION['Userdata'] = $LoginRes['Data'];
                            // echo "<pre>";
                            // print_r($_SESSION['Userdata']);
                            // echo "</pre>";
                            $name = $_SESSION['Userdata']->name;
                            // echo $name;
                            if ($_SESSION['Userdata']->roll_id == 1) {
                                echo "<script>
                                alert(`Hello $name`);
                                window.location.href='admindashboard';
                                </script>";
                            } else {
                                echo "<script>
                                alert(`Hello $name`);
                                window.location.href='home';
                                </script>";
                            }
                            
                        }
                    }
                    break;
                case '/register':
                    include_once("View/register.php");
                    if (isset($_POST['register'])) {
                        array_pop($_POST);
                        $password = md5($_POST['password']);
                        $cpassword = md5($_POST['cpassword']);
                        array_pop($_POST);
                        // echo $cpassword;

                        unset($_POST['password']);
                        $data = array_merge($_POST, array('password' => $password));
                        // echo "<pre>";
                        // print_r($data);
                        // echo "</pre>";
                        $Emailcheck = $this->Select("users", array("email" => $_POST['email']));
                        // echo "<pre>";
                        // print_r($Emailcheck['Data']->email);
                        // echo "</pre>";

                        if ($Emailcheck['Data']->email != $_POST['email']) {

                            $InsertRes = $this->Insert("users", $data);
                            // echo "<pre>";
                            // print_r($InsertRes);
                            // echo "</pre>";
                            if ($InsertRes['Code'] == 1) {
                                echo " <script>
                                alert('Registration Success')
                                window.location.href ='login'
                                </script>";
                            }
                        } else {

                            echo " <script>
                            alert('Email Already Register')
                           
                            </script>";
                        }
                    }
                    break;

                default:
                    # code...
                    break;
            }
        } else {
            header("location:home");
        }
    }
}

$Contoller = new Controller;

?>