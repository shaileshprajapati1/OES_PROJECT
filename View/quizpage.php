<!-- Coded by https://beproblemsolver.com  Visit for more such code -->


<?php


if (!isset($_SESSION['Userdata'])) {
    header("location:login");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="main-section">

        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="quizpage">Quiz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <!-- <a class="nav-link active" aria-current="page" href="quizpage">Dashboard</a> -->
                        </li>
                    </ul>

                    <div class="d-flex">
                        <a class="btn btn-danger" href="logout">Logout</a>
                    </div>
                </div>
            </div>
        </nav>

        <form method="post">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card my-2 p-3">
                            <div class="card-body">
                                <?php
                                // echo "<pre>";
                                // print_r($Viewquestion['Data']);
                                // echo "</pre>";
                                $i = 0;
                                foreach ($Viewquestion['Data'] as $key => $value) {
                                    $i++ ?>
                                    <h5 class="card-title py-2">Q.<?php echo $i . " " . $value->questions_name; ?> </h5>

                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="<?php echo $value->id; ?>" value="<?php echo $value->option_1; ?>">
                                        <?php echo $value->option_1; ?>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="<?php echo $value->id; ?>" value="<?php echo $value->option_2; ?>">
                                        <?php echo $value->option_2; ?>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="<?php echo $value->id; ?>" value="<?php echo $value->option_3; ?>">
                                        <?php echo $value->option_3; ?>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="<?php echo $value->id; ?>" value="<?php echo $value->option_4; ?>">
                                        <?php echo $value->option_4; ?>
                                    </div>
                                <?php  }
                                ?>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 mb-5">
                        <button type="submit" class="btn btn-success" name="answer-submit">Submit Answers</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<!-- Coded by https://beproblemsolver.com  Visit for more such code -->

</html>