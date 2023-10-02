
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

                        $InsertRes = $this->Insert("users", $data);
                        echo "<pre>";
                        print_r($InsertRes);
                        echo "</pre>";
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