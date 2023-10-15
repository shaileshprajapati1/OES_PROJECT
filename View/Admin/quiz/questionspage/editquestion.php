<div id="page-wrapper">
    <div class="main-page">
        <form method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Question</h5>
            </div>
            <div class="modal-body">

                <div class="row ">
                    <div class="col">
                        <label for="questions_name" class="form-label">Questions Name</label>
                        <input type="text" name="questions_name" id="questions_name" value="<?php echo $EditQuestionRes['Data'][0]->questions_name; ?>" class="form-control" required>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <label for="option_1" class="form-label">Option 1</label>
                        <input type="text" name="option_1" id="option_1" value="<?php echo $EditQuestionRes['Data'][0]->option_1; ?>" class="form-control" required>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <label for="option_2" class="form-label">Option 2</label>
                        <input type="text" name="option_2" id="option_2" value="<?php echo $EditQuestionRes['Data'][0]->option_2; ?>" class="form-control" required>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <label for="option_3" class="form-label">Option 3</label>
                        <input type="text" name="option_3" id="option_3" value="<?php echo $EditQuestionRes['Data'][0]->option_3; ?>" class="form-control" required>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <label for="option_4" class="form-label">Option 4</label>
                        <input type="text" name="option_4" id="option_4" value="<?php echo $EditQuestionRes['Data'][0]->option_4; ?>" class="form-control" required>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <label for="answer" class="form-label">Answer</label>
                        <input type="text" name="answer" id="answer" value="<?php echo $EditQuestionRes['Data'][0]->answer; ?>" class="form-control" required>
                    </div>
                </div>


                <div class="row ">
                    <div class="col">
                        <button type="submit" name="updatequestion" id="updatequestion" class="btn btn-primary">Update Question</button>
                    </div>
                </div>
        </form>

    </div>
</div>