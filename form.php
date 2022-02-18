<div class="modal fade" id="usermodal" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Adding or Updating Users</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addform" action="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <!-- -----------------------------  name ---------------- -->
                        <label for="username">Username:</label>
                        <div class="input-group">
                            <div class="input-group-prepent">
                                <span class="input-group-text bg-dark"><i class=" fa-solid fa-user text-light"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" id="username" name="username">
                        </div>
                        <!-- -----------------------------  email ---------------- -->
                        <label for="email">Email:</label>
                        <div class="input-group">
                            <div class="input-group-prepent">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-envelope text-light"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" placeholder="Enter your email adress" autocomplete="off" required="required" id="email" name="email">
                        </div>
                        <!-- -----------------------------  mobile ---------------- -->
                        <label for="phone">Phone:</label>
                        <div class="input-group">
                            <div class="input-group-prepent">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-phone text-light"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter your mobile phone number" autocomplete="off" required="required" id="phone" name="phone">
                        </div>
                        <!-- ------------------------photo--------------------------- -->
                        <label>Photo:</label>
                        <div class="input-group">
                            <input type="file" class="form-control" name="photo" id="photo">
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                </div>
            </form>
        </div>
    </div>
</div>