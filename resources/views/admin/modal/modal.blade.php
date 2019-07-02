<div class="modal fade" id="ajax-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="adminCrudModal"></h4>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="adminForm" name="adminForm" class="form-horizontal">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title"
                                   value="" maxlength="50" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Author</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="author" name="author" placeholder="Enter author"
                                   value="" maxlength="50" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">ISBN</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="ISBN" name="ISBN" placeholder="Enter ISBN"
                                   value="" maxlength="12" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="category" name="category"
                                   placeholder="Enter category" value="" maxlength="20" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Pages</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="pages" name="pages" placeholder="Enter pages"
                                   value="" maxlength="3" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Year</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="year" name="year" placeholder="Enter year"
                                   value="" maxlength="4" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">language</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="language" name="language"
                                   placeholder="Enter language" value="" maxlength="15" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">description</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="description" name="description"
                                   placeholder="Enter description" value="" maxlength="500" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Price</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter price"
                                   value="" maxlength="3" required>
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="add" value="add">Save changes</button>
            </div>
        </div>
    </div>
</div>