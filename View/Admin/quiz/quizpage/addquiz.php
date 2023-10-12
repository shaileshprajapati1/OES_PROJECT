<div id="page-wrapper">
    <div class="main-page">
        <form method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Quiz List</h5>
            </div>
            <div class="modal-body">

                <div class="row ">
                    <div class="col">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <label for="category_id" class="form-label">Category_id</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option selected>Select Category</option>
                            <?php if (isset($ViewCategory['Data'])) {
                                foreach ($ViewCategory['Data'] as $key => $value) { ?>
                                    <option value="<?php echo $value->id; ?>"><?php echo $value->category_name; ?></option>
                            <?php     }
                            } ?>
                        </select>
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <label for="no_questions" class="form-label">Total Questions</label>
                        <input type="tel" name="no_questions" id="no_questions" class="form-control" required>
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <label for="marks_per_no_questions" class="form-label">Marks Per Question</label>
                        <input type="tel" name="marks_per_no_questions" id="marks_per_no_questions" class="form-control" required>
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <label for="time" class="form-label">time</label>
                        <input type="text" name="time" id="time" class="form-control" required>
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <label for="is_negative" class="form-label">Negative_Mark </label>
                        <select name="is_negative" id="is_negative" class="form-control">
                            <option selected>DO You Have Nagative Marking</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>

                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <label for="neg_mark_per_que" class="form-label">Negative_Mark </label>
                        <select name="neg_mark_per_que" id="neg_mark_per_que" class="form-control">
                            <option selected <?Php if (isset($_POST['is_negative'])) {
                                                    if ($_POST['is_negative'] == "NO") {
                                                        echo "disabled";
                                                    }
                                                }  ?>>Nagative Marks per Question</option>
                            <option value="0.25" <?Php if (isset($_POST['is_negative'])) {
                                                        if ($_POST['is_negative'] == "NO") {
                                                            echo "disabled";
                                                        }
                                                    }  ?>>0.25</option>
                            <option value="0.50" <?Php if (isset($_POST['is_negative'])) {
                                                        if ($_POST['is_negative'] == "NO") {
                                                            echo "disabled";
                                                        }
                                                    }  ?>>0.50</option>
                            <option value="0.75" <?Php if (isset($_POST['is_negative'])) {
                                                        if ($_POST['is_negative'] == "NO") {
                                                            echo "disabled";
                                                        }
                                                    }  ?>>0.75</option>
                            <option value="1.00" <?Php if (isset($_POST['is_negative'])) {
                                                        if ($_POST['is_negative'] == "NO") {
                                                            echo "disabled";
                                                        }
                                                    }  ?>>1.00</option>
                        </select>

                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <label for="description" class="form-label">Description</label><br>
                        <textarea name="description" id="description" cols="152" rows="2" class="form-label"></textarea>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <button type="submit" name="addquiz" id="addquiz" class="btn btn-primary">Add Quiz</button>
                    </div>
                </div>
        </form>

    </div>
</div>