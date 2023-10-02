
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
                        array_pop($_POST);

                        echo "<pre>";
                        print_r($_POST);
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