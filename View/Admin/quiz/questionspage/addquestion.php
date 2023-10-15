<div id="page-wrapper">
    <div class="main-page">
        <form method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Question Form </h5>
            </div>
            <div class="modal-body">

                <div class="row ">
                    <div class="col">
                        <label for="questions_name" class="form-label">Questions Name</label>
                        <input type="text" name="questions_name" id="questions_name" class="form-control" required>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <label for="option_1" class="form-label">Option 1</label>
                        <input type="text" name="option_1" id="option_1" class="form-control" required>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <label for="option_2" class="form-label">Option 2</label>
                        <input type="text" name="option_2" id="option_2" class="form-control" required>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <label for="option_3" class="form-label">Option 3</label>
                        <input type="text" name="option_3" id="option_3" class="form-control" required>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <label for="option_4" class="form-label">Option 4</label>
                        <input type="text" name="option_4" id="option_4" class="form-control" required>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <label for="answer" class="form-label">Answer</label>
                        <input type="text" name="answer" id="answer" class="form-control" required>
                    </div>
                </div>
              
                <div class="row ">
                    <div class="col">
                        <label for="quiz_id" class="form-label">Quiz id</label>
                        <select name="quiz_id" id="quiz_id" class="form-control">
                            <option selected>Select QuizId</option>
                            <?php if (isset($Selectquiz_id['Data'])) {
                                foreach ($Selectquiz_id['Data'] as $key => $value) { ?>
                                    <option value="<?php echo$value->id; ?>"><?php echo $value->id; ?></option>

                            <?php     }
                            }  ?>
                        </select>
                    </div>
                </div>


                <div class="row ">
                    <div class="col">
                        <button type="submit" name="addquestion" id="addquestion" class="btn btn-primary">Add Question</button>
                    </div>
                </div>
        </form>

    </div>
</div>