
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
        if ($_SERVER['HTTP_HOST'] == "localhost") {
            $this->URL = "http://localhost/oes_project/Public/";
        } else {
            $this->URL = "https://" . $_SERVER['HTTP_HOST'] . "/Public/";
        }
        // print_r($_SERVER);
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
                case '/edit':
                    include_once("View/Admin/header_admin.php");
                    include_once("View/Admin/edit.php");
                    include_once("View/Admin/footer_admin.php");
                    break;
                case '/showall':
                    $Showall = $this->Select("users", array("roll_id" => "2"));
                    // echo "<pre>";
                    // print_r($Showall);
                    // echo "</pre>";
                    include_once("View/Admin/header_admin.php");
                    include_once("View/Admin/showall.php");
                    include_once("View/Admin/footer_admin.php");
                    break;
                case '/admindashboard':
                    include_once("View/Admin/header_admin.php");
                    include_once("View/Admin/dashboard.php");
                    include_once("View/Admin/footer_admin.php");
                    break;
                case '/logout':
                    session_destroy();
                    echo " <script>
                    alert('Logout Success')
                    window.location.href='home';
                     </script>";
                    // header("location:home");
                    break;
                case '/login':
                    include_once("View/login.php");
                    if (isset($_POST['login'])) {
                        array_pop($_POST);
                        if ($_POST['email'] != ""  && $_POST['password'] != "") {

                            $LoginRes = $this->Select("users", array("email" => $_POST['email'], "password" => md5($_POST['password'])));
                            // echo "<pre>";
                            // print_r($LoginRes['Data'][0]->name);
                            // echo "</pre>";


                            $_SESSION['Userdata'] = $LoginRes['Data'];
                            if ($LoginRes['Code'][0] == 1) {
                                // echo "<pre>";
                                // print_r($LoginRes['Code'][0]);
                                // echo "</pre>";
                                $name = $_SESSION['Userdata'][0]->name;
                                // echo $name;

                                if ($LoginRes['Data'][0]->roll_id == 1) {
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
                        } else {
                            echo "<script>
                            alert(`Enter Valid Email And Password`);
                           
                            </script>";
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