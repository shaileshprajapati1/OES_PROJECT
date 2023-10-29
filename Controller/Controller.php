
<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

require("Model/Model.php");

class Controller extends Model
{
    public $URL = "";
    function __construct()
    {
        ob_start();
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
                case '/result':
                    $totalquestion = $this->Select("questions");
                    // echo "<pre>";
                    // print_r(count($totalquestion['Data']));
                    // echo "</pre>";
                    include_once("View/result.php");
                    break;

                case '/quizpage':
                    $Viewquestion = $this->Select('questions');

                    include_once("View/quizpage.php");
                    if (isset($_POST['answer-submit'])) {
                        array_pop($_POST);
                        // echo "<pre>";
                        // print_r($_POST);
                        // echo "</pre>";
                        $correctAnswers = 0;
                        $IncorrectAnswers = 0;

                        // $i = 1;
                        foreach ($_POST as $key => $value) {
                            foreach ($Viewquestion['Data'] as $key => $dvalue) {
                                if ($value == $dvalue->answer) {
                                    $correctAnswers++;
                                } else {
                                    $IncorrectAnswers++;
                                }
                            }
                        }
                        // Stored our score and attempted question value in session to be used on Result page
                        $_SESSION['attempted'] = count($_POST);
                        $_SESSION['score'] = $correctAnswers;
                        $_SESSION['IncorrectAnswers'] = $IncorrectAnswers;
                        // echo "<pre>";
                        // print_r($_SESSION['attempted'])."<br>";
                        // print_r($_SESSION['score']);
                        header("location:result");
                    } else {
                        // $_SESSION['attempted'] = 0;
                        // $_SESSION['score'] = 0;
                        // header("location:result");
                    }
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

                case '/status':
                    //    echo "hello";
                    $SatusRes = $this->Select("users", array("is_deleted" => $_GET['is_deleted']));

                    if ($SatusRes['Data'][0]->is_deleted == 0) {
                        $updateuser = $this->Update("users", array("is_deleted" => 1), array("id" => $_GET['id']));
                        header("location:showall");
                    } else {
                        $updateuser = $this->Update("users", array("is_deleted" => 0), array("id" => $_GET['id']));
                        header("location:showall");
                    }


                    break;
                case '/delete':
                    $DeleteRes = $this->Delete("users", array("id" => $_GET['id']));
                    if ($DeleteRes['Code'] == 1) {
                        echo " <script>
                    alert('Delete Update Success')
                    window.location.href='showall';
                     </script>";
                    }


                    break;
                case '/edit':
                    $Selectbyid = $this->Select("users", array("id" => $_GET['id'], "roll_id" => "2"));

                    include_once("View/Admin/header_admin.php");
                    include_once("View/Admin/edit.php");
                    include_once("View/Admin/footer_admin.php");
                    if (isset($_POST['update'])) {
                        array_pop($_POST);

                        $data = $_POST;
                        $UpdateRes = $this->Update("users", $data, array("id" => $_GET['id']));

                        if ($UpdateRes['Code'] == 1) {
                            echo " <script>
                            alert('Recode Update Success')
                            window.location.href='showall';
                             </script>";
                        }
                    }
                    break;
                case '/showall':
                    $Showall = $this->Select("users", array("roll_id" => "2"));

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

                            $_SESSION['Userdata'] = $LoginRes['Data'];

                            if ($LoginRes['Code'][0] == 1) {

                                $name = $_SESSION['Userdata'][0]->name;
                                $_SESSION['msg'] = "Welcome to Dashboard";

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
                            } else {
                                echo "<script>
                                alert(`Invalid User`);
                               
                                </script>";
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

                        $Emailcheck = $this->Select("users", array("email" => $_POST['email']));

                        if (isset($Emailcheck['Data'])) {

                            if ($Emailcheck['Data'][0]->email != $_POST['email']) {

                                $InsertRes = $this->Insert("users", $data);

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
                    }
                    break;


                    // Category Switchcase Start
                case '/viewcategory':
                    $ViewcategoryRes = $this->Select("category");

                    include_once("View/Admin/header_admin.php");
                    include_once("View/Admin/quiz/category/viewallcategory.php");
                    include_once("View/Admin/header_admin.php");

                    break;
                case '/edit_category':
                    $ViewcategoryRes = $this->Select("category", array("id" => $_GET['id']));

                    include_once("View/Admin/header_admin.php");
                    include_once("View/Admin/quiz/category/editcategory.php");
                    include_once("View/Admin/header_admin.php");
                    if (isset($_POST['update_category'])) {
                        array_pop($_POST);
                        $UpdateCategoryRes = $this->Update("category", $_POST, array("id" => $_GET['id']));
                        if ($UpdateCategoryRes['Code'] == 1) {
                            echo " <script>
                                alert('Recode Update Success')
                                window.location.href='viewcategory';
                                 </script>";
                        }
                    }

                    break;
                case '/delete_category':
                    $DeleteCategoryRes = $this->Delete("category", array("id" => $_GET['id']));
                    if ($DeleteCategoryRes['Code'] == 1) {
                        echo " <script>
                        alert('Delete Update Success')
                        window.location.href='viewcategory';
                         </script>";
                    }
                    break;
                case '/addcategory':
                    include_once("View/Admin/header_admin.php");
                    include_once("View/Admin/quiz/category/addcategory.php");
                    include_once("View/Admin/header_admin.php");
                    if (isset($_POST['category'])) {
                        array_pop($_POST);

                        $CategoryRes = $this->Insert("category", $_POST);

                        if ($CategoryRes['Code'] == 1) {
                            echo " <script>
                                alert('Category Add Success')
                                window.location.href='viewcategory';
                                 </script>";
                        } else {
                            echo " <script>
                                alert('fail')
                                window.location.href='addcategory';
                                 </script>";
                        }
                    }
                    break;

                    // Category Switchcase End


                    // Quizpage Switchcase Start

                case '/viewquizpage':
                    $Viewquizpage = $this->Select("quiz");
                    include_once("View/Admin/header_admin.php");
                    include_once("View/Admin/quiz/quizpage/viewquizpage.php");
                    include_once("View/Admin/header_admin.php");
                    break;
                case '/quizdelete':
                    $QuizDeleteRes = $this->Delete("quiz", array("id" => $_GET['id']));
                    if ($QuizDeleteRes['Code'] == 1) {
                        echo " <script>
                        alert('Data Delete Success')
                        window.location.href='viewquizpage';
                         </script>";
                    }

                    break;
                case '/quizedit':
                    $EditquizRes = $this->Select("quiz", array("id" => $_GET['id']));
                    include_once("View/Admin/header_admin.php");
                    include_once("View/Admin/quiz/quizpage/editquiz.php");
                    include_once("View/Admin/header_admin.php");
                    if (isset($_POST['updatequiz'])) {
                        array_pop($_POST);
                        // echo "<pre>";
                        // print_r($_POST);
                        // echo "</pre>";
                        $QuizUpdateRes = $this->Update("quiz", $_POST, array("id" => $_GET['id']));
                        if ($QuizUpdateRes['Code']  == 1) {
                            echo " <script>
                                alert('Data Update Success')
                                window.location.href='viewquizpage';
                                 </script>";
                        }
                    }
                    break;
                case '/addquiz':
                    $ViewCategory = $this->Select("category");

                    // echo "<pre>";
                    // print_r($ViewCategory);
                    // echo "</pre>";

                    include_once("View/Admin/header_admin.php");
                    include_once("View/Admin/quiz/quizpage/addquiz.php");
                    include_once("View/Admin/header_admin.php");
                    if (isset($_POST['addquiz'])) {
                        array_pop($_POST);

                        $AddquizRes = $this->Insert("quiz", $_POST);
                        if ($AddquizRes['Code'] == 1) {
                            echo " <script>
                    alert('Data Insert Success')
                    window.location.href='viewquizpage';
                     </script>";
                        }
                    }
                    break;

                case '/quizstatus':
                    //    echo "hello";
                    $QuizStatusRes = $this->Select("quiz", array("id" => $_GET['statusid']));
                    // echo "<pre>";
                    // print_r($QuizStatusRes);
                    // echo "</pre>";
                    if ($QuizStatusRes['Data'][0]->status == 0) {
                        $updatequizstatesRes = $this->Update("quiz", array("status" => 1), array("id" => $_GET['statusid']));
                        header("location:viewquizpage");
                    } else {
                        $updatequizstatesRes = $this->Update("quiz", array("status" => 0), array("id" => $_GET['statusid']));
                        header("location:viewquizpage");
                    }


                    break;


                    // Quizpage Switchcase End

                    //Question switchcase Start

                case '/viewquestion':
                    $ViewQuestionRes = $this->Select("questions");

                    include_once("View/Admin/header_admin.php");
                    include_once("View/Admin/quiz/questionspage/viewquestion.php");
                    include_once("View/Admin/header_admin.php");

                    break;
                case '/addquestion':
                    $Selectquiz_id = $this->Select("quiz");

                    include_once("View/Admin/header_admin.php");
                    include_once("View/Admin/quiz/questionspage/addquestion.php");
                    include_once("View/Admin/header_admin.php");

                    if (isset($_POST['addquestion'])) {
                        array_pop($_POST);

                        $QuestionAddRes = $this->Insert("questions", $_POST);
                        if ($QuestionAddRes['Code'] == 1) {
                            echo " <script>
                                alert('Data Successfully Inserted')
                                window.location.href='viewquestion';
                                 </script>";
                        }
                    }

                    break;
                case '/questionedit':
                    $EditQuestionRes = $this->Select("questions", array("id" => $_GET['id']));
                    include_once("View/Admin/header_admin.php");
                    include_once("View/Admin/quiz/questionspage/editquestion.php");
                    include_once("View/Admin/header_admin.php");
                    if (isset($_POST['updatequestion'])) {
                        array_pop($_POST);
                        $UpdateQuestionRes = $this->Update("questions", $_POST, array("id" => $_GET['id']));
                        if ($UpdateQuestionRes['Code'] == 1) {
                            echo " <script>
                                alert('Data Successfully Updated')
                                window.location.href='viewquestion';
                                 </script>";
                        }
                    }

                    break;

                case '/questiondelete':

                    $DeleteQuestionRes = $this->Delete("questions",  array("id" => $_GET['id']));
                    if ($DeleteQuestionRes['Code'] == 1) {
                        echo " <script>
                                alert('Data Delete Success')
                                window.location.href='viewquestion';
                                 </script>";
                    }


                    break;



                    //Question switchcase End


                default:
                    # code...
                    break;
            }
        } else {
            echo " <script>
            window.location.href ='home'
            </script>";
        }
        ob_flush();
    }
}

$Contoller = new Controller;


?>