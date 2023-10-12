<div id="page-wrapper">
    <div class="main-page">
        <a href="addquiz" class="btn btn-primary">Add Quiz</a>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>title</th>
                    <th>category_id</th>
                    <th>no_questions</th>
                    <th>marks_per_no_questions</th>
                    <th>time</th>
                    <th>is_negative</th>
                    <th>neg_mark_per_que</th>
                    <th>description</th>
                    <th>ACTION</th>
                    <th>status</th>
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
                            <td><?php echo $value->description; ?></td>
                            <td>
                                <a href="quizedit?id=<?php echo $value->id; ?>" class="btn btn-success">Edit</a>&nbsp;
                                <a href="quizdelete?id=<?php echo $value->id; ?>" class="btn btn-danger" onclick="return checkDelete()">Delete</a>

                            </td>
                            <td>
                                <a href="quizstatus?statusid=<?php echo $value->status; ?>" class="btn btn-primary">Active</a>
                                <a href="quizstatus?statusid=<?php echo $value->status; ?>"class="btn btn-danger">Inactive</a>
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