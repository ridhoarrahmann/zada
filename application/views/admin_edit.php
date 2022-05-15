<div class="main-pages">
    <div class="container-fluid">
        <div class="row g-2 mb-3">
            <div class="col-12">
                <form action="<?= base_url('/admin/edit_admin_profile/'.$user['username']) ?>" method="post">
                    <label for="username"> Change Username</label>
                    
                    

                  <input type="text" name="username" id="username" class="form form-control">
                    
                    <button type="submit" class="btn-primary">submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
</div>