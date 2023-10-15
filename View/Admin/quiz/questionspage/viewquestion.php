<div id="page-wrapper">
    <div class="main-page">
        <a href="addquestion" class="btn btn-primary">Add Question</a>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Questions Name</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Option 3</th>
                    <th>Option 4</th>
                    <th>Answer </th>
                    <th>Quiz Id </th>
                    <th>Action </th>


                </tr>
            </thead>
            <tbody>
                <?php
                // echo "<pre>";
                // print_r($Viewquizpage['Data']);
                // echo "</pre>";

                if (!empty($Viewquizpage['Data'])) {
                    $i = 0;
                    foreach ($Viewquizpage['Data'] as $key => $value) {
                        $i++; ?>
                        <tr>

                            <td><?php echo $i; ?></td>
                            <td><?php echo $value->title; ?></td>
                            <td><?php echo $value->category_id; ?></td>
                            <td><?php echo $value->no_questions; ?></td>
                            <td><?php echo $value->marks_per_no_questions; ?></td>
                            <td><?php echo $value->time; ?></td>
                            <td><?php echo $value->is_negative; ?></td>
                            <td><?php echo $value->neg_mark_per_que; ?></td>

                            <td>
                                <a href="questionedit?id=<?php echo $value->id; ?>" class="btn btn-success btn-sm">Edit</a>&nbsp;
                                <?php if ($value->status == 1) { ?>
                                    <a href="questiondelete?id=<?php echo $value->id; ?>" class="btn btn-danger btn-sm" onclick="return checkDelete()">Delete</a>
                                <?php } ?>
                            </td>



                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="9" class="text-center">NO DATA FOUND </td>
                    </tr>
                <?php  }
                ?>
            </tbody>
        </table>

    </div>

</div>
<script language="JavaScript" type="text/javascript">
    function checkDelete() {
        return confirm('Are you Sure Want to Delete Data?');
    }
</script>