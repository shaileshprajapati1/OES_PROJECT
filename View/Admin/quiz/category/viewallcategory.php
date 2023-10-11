<div id="page-wrapper">
    <div class="main-page">
        <a href="addcategory" class="btn btn-primary">Add Category</a>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>SR.NO</th>
                    <th>Category Name</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // echo "<pre>";
                // print_r($ViewcategoryRes['Data']);
                // echo "</pre>";

                if (!empty($ViewcategoryRes['Data'])) {
                    $i = 0;
                    foreach ($ViewcategoryRes['Data'] as $key => $value) {
                        $i++; ?>
                        <tr>

                            <td><?php echo $i; ?></td>
                            <td><?php echo $value->category_name; ?></td>
                            <td>
                                <a href="edit_category?id=<?php echo $value->id; ?>" class="btn btn-success">Edit</a>&nbsp;&nbsp;
                                <a href="delete_category?id=<?php echo $value->id; ?>" class="btn btn-danger">Delete</a>

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