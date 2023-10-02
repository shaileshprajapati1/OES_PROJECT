
<?php
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
                case '/login':
                    echo "login page";
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
                            if($InsertRes['Code'] == 1){
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