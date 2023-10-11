<div id="page-wrapper">
    <div class="main-page">

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

                if (!empty($Showall['Data'])) {
                    $i = 0;
                    foreach ($Showall['Data'] as $key => $value) {
                        $i++; ?>
                        <tr>

                            <td><?php echo $i; ?></td>
                            <td><?php echo $value->category_name; ?></td>
                            <td><?php echo $value->id; ?></td>
                           

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