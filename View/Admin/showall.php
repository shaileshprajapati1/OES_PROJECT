<div id="page-wrapper">
    <div class="main-page">
        <div class="d-flex align-items-end">
            <a href="add" class="btn btn-success ">Add User</a>
        </div>
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