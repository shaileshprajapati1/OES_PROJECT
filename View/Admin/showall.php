<div id="page-wrapper">
    <div class="main-page">

        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
            Add User
        </button> -->

        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" placeholder="Enter email" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="college" class="form-label">College</label>
                                    <input type="text" name="college" id="college" placeholder="Enter college" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="mob" class="form-label">Phone</label>
                                    <input type="tel" name="mob" id="mob" placeholder="Enter phone no" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="gender" class="form-label">Gender</label>
                                <div class="col">
                                    <input type="radio" name="gender" id="Male" value="Male"><label for="Male">Male</label>
                                    <input type="radio" name="gender" id="Female" value="Female"><label for="Female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>SR.NO</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>COLLAGE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // echo "<pre>";
                // print_r($Showall['Data']);
                // echo "</pre>";
                if (!empty($Showall['Data'])) {
                    $i = 0;
                    foreach ($Showall['Data'] as $key => $value) {
                        $i++; ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $value->name; ?></td>
                            <td><?php echo $value->email; ?></td>
                            <td><?php echo $value->mob; ?></td>
                            <td><?php echo $value->college; ?></td>
                            <td>
                             
                                <a href="edit?id=<?php echo $value->id; ?>" class="btn btn-primary">Edit</a> &nbsp;

                                <a href="delete?id=<?php echo $value->id; ?>" class="btn btn-danger">Delete</a>

                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="6" class="text-center">NO DATA FOUND </td>
                    </tr>
                <?php  }
                ?>
            </tbody>
        </table>
    </div>
</div>