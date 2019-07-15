<div id="userModel" class="modal fade " role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post" id="userForm">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-title form-control">
                    <h4>Add user</h4>
                </div>
                <div class="modal-body">

                    <span id="form_output"></span>
                    <div class="form-group">
                        <label for="name">Enter name</label>
                        <input type="text" name="name" class="form-control" id="firstname" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="name">Enter email</label>
                        <input type="text" name="email" class="form-control" id="emailname">
                    </div>
                    <div class="form-group">
                        <label for="text">Enter password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="button_action" id="button_action" value="insert"/>
                    <input type="submit" name="submit" id="action" value="Edit" class="btn btn-info">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>

</div>
