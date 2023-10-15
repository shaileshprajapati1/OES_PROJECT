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

                if (!empty($ViewQuestionRes['Data'])) {
                    $i = 0;
                    foreach ($ViewQuestionRes['Data'] as $key => $value) {
                        $i++; ?>
                        <tr>

                            <td><?php echo $i; ?></td>
                            <td><?php echo $value->questions_name; ?></td>
                            <td><?php echo $value->option_1; ?></td>
                            <td><?php echo $value->option_2; ?></td>
                            <td><?php echo $value->option_3; ?></td>
                            <td><?php echo $value->option_4; ?></td>
                            <td><?php echo $value->answer; ?></td>
                            <td><?php echo $value->quiz_id; ?></td>

                            <td>
                                <a href="questionedit?id=<?php echo $value->id; ?>" class="btn btn-success btn-sm">Edit</a>&nbsp;
                                <a href="questiondelete?id=<?php echo $value->id; ?>" class="btn btn-danger btn-sm" onclick="return checkDelete()">Delete</a>

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