<div id="page-wrapper">
    <div class="main-page">
        <form method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
            </div>
            <div class="modal-body">
                <?php
                // echo "<pre>";
                // print_r($Selectbyid['Data'][0]);
                // echo "</pre>";
                ?>
                <div class="row ">
                    <div class="col">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" value="<?php echo $Selectbyid['Data'][0]->name; ?>" class="form-control">
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" value="<?php echo $Selectbyid['Data'][0]->email; ?>" class="form-control">
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <label for="college" class="form-label">College</label>
                        <input type="text" name="college" id="college" value="<?php echo $Selectbyid['Data'][0]->college; ?>" class="form-control">
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <label for="mob" class="form-label">Phone</label>
                        <input type="tel" name="mob" id="mob" value="<?php echo $Selectbyid['Data'][0]->mob; ?>" class="form-control">
                    </div>
                </div>
                <div class="row ">
                    <label for="gender" class="form-label">Gender</label>
                    <div class="col">
                        <input type="radio" name="gender" id="Male" value="Male" <?php if (isset($Selectbyid['Data'])) {
                                                                                        if ($Selectbyid['Data'][0]->gender == "Male") {
                                                                                            echo "checked";
                                                                                        }
                                                                                    } ?>><label for="Male">Male</label>
                        <input type="radio" name="gender" id="Female" value="Female" <?php if (isset($Selectbyid['Data'])) {
                                                                                            if ($Selectbyid['Data'][0]->gender == "Female") {
                                                                                                echo "checked";
                                                                                            }
                                                                                        } ?>><label for="Female">Female</label>
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <button type="submit" name="update" class="btn btn-primary">Update User</button>
                    </div>
                </div>
        </form>


    </div>
</div>