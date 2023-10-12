<div id="page-wrapper">
    <div class="main-page">
        <form method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Quiz</h5>
            </div>
            <div class="modal-body">
                <?php
                // echo "<pre>";
                // print_r($EditquizRes['Data'][0]);
                // echo "</pre>";

                ?>
                <div class="row ">
                    <div class="col">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="<?php echo $EditquizRes['Data'][0]->title; ?>">
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <label for="no_questions" class="form-label">Total Questions</label>
                        <input type="tel" name="no_questions" id="no_questions" class="form-control" value="<?php echo $EditquizRes['Data'][0]->no_questions; ?>">
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <label for="marks_per_no_questions" class="form-label">Marks Per Question</label>
                        <input type="tel" name="marks_per_no_questions" id="marks_per_no_questions" class="form-control" value="<?php echo $EditquizRes['Data'][0]->marks_per_no_questions; ?>">
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <label for="time" class="form-label">time</label>
                        <input type="text" name="time" id="time" class="form-control" value="<?php echo $EditquizRes['Data'][0]->time; ?>">
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <label for="is_negative" class="form-label">Negative_Mark </label>
                        <select name="is_negative" id="is_negative" class="form-control">
                            <option selected>DO You Have Nagative Marking</option>
                            <option value="YES" <?php if (isset($EditquizRes['Data'])) {
                                                    if ($EditquizRes['Data'][0]->is_negative == "YES") {
                                                        echo "selected";
                                                    }
                                                } ?>>YES</option>
                            <option value="NO" <?php if (isset($EditquizRes['Data'])) {
                                                    if ($EditquizRes['Data'][0]->is_negative == "NO") {
                                                        echo "selected";
                                                    }
                                                } ?>>NO</option>
                        </select>

                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <label for="neg_mark_per_que" class="form-label">Negative_Mark </label>
                        <select name="neg_mark_per_que" id="neg_mark_per_que" class="form-control">
                            <option selected>Nagative Marks per Question</option>
                            <option value="0.25" <?php if (isset($EditquizRes['Data'])) {
                                                        if ($EditquizRes['Data'][0]->neg_mark_per_que == "0.25") {
                                                            echo "selected";
                                                        }
                                                    } ?>>0.25</option>
                            <option value="0.50" <?php if (isset($EditquizRes['Data'])) {
                                                        if ($EditquizRes['Data'][0]->neg_mark_per_que == "0.50") {
                                                            echo "selected";
                                                        }
                                                    } ?>>0.50</option>
                            <option value="0.75" <?php if (isset($EditquizRes['Data'])) {
                                                        if ($EditquizRes['Data'][0]->neg_mark_per_que == "0.75") {
                                                            echo "selected";
                                                        }
                                                    } ?>>0.75</option>
                            <option value="1.00" <?php if (isset($EditquizRes['Data'])) {
                                                        if ($EditquizRes['Data'][0]->neg_mark_per_que == "1.00") {
                                                            echo "selected";
                                                        }
                                                    } ?>>1.00</option>
                        </select>

                    </div>
                </div>


                <div class="row ">
                    <div class="col">
                        <label for="description" class="form-label">Description</label><br>
                        <textarea name="description" id="description" cols="152" rows="2" class="form-label"><?php echo $EditquizRes['Data'][0]->description; ?></textarea>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        <button type="submit" name="updatequiz" id="updatequiz" class="btn btn-primary">Update Quiz</button>
                    </div>
                </div>
        </form>

    </div>
</div>