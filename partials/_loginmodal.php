<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login to Badmeester</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/capstone/partials/_handlelogin.php">
                    <div class="form-group">
                        <label for="loginphone">Enter Phone number</label>
                        <input type="text" class="form-control" id="loginphone" name="loginphone"
                            placeholder="Enter Your registered Phone number" required>
                    </div>

                    <div class="form-group">
                        <label for="loginpass">Enter Password</label>
                        <input type="password" class="form-control" id="loginpass" name="loginpass"
                            placeholder="Enter your Password" required>
                    </div>

                
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button type="submit" class="btn btn-success">Login</button>
            </div>
            </form>
        </div>
    </div>
</div>