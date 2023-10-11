<div id="page-wrapper">
    <div class="main-page">
        <form method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
            </div>
            <div class="modal-body">
              
                <div class="row ">
                    <div class="col">
                        <label for="category_name" class="form-label">Category Name</label>
                        <input type="text" name="category_name" id="category_name" value="<?php echo $ViewcategoryRes['Data'][0]->category_name; ?>"  class="form-control">
                    </div>
                </div>
                
                <div class="row ">
                    <div class="col">
                        <button type="submit" name="update_category" id="update_category" class="btn btn-primary">Update Category</button>
                    </div>
                </div>
        </form>

    </div>
</div>