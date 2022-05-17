<div class="main-pages">
    <div class="container-fluid">
        <div class="row g-2 mb-3">
            <div class="col-12">
                <form action="<?= base_url('/admin/edit_tentang_kami') ?>" method="post">
                    <label for="form-tentang_kami-content"> Change Tentang Kami</label>

                    <textarea name="tentang_kami-content" class ="form form-control"id="form-tentang_kami-content" cols="30" rows="10"><?= $tentang_kami['content']?></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
</div>