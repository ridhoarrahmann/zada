<div class="main-pages">
    <div class="container-fluid">
        <div class="row g-2 mb-3">
            <div class="col-12">
                <form action="<?= base_url('/admin/change_footer') ?>" method="post">
                    <label for="alamat"> Change alamat</label>
                    
                    

                    <textarea class="form-control" name="alamat" id="alamat" cols="10" rows="5" placeholder="alamat" ><?= $footer['alamat']?></textarea>
                    <label for="email"> Change email</label>
                    <textarea class="form-control" name="email" id="email" cols="10" rows="5"  ><?= $footer['email']?></textarea>
                    <label for="whatsapp"> Change whatsapp</label>
                    <textarea class="form-control" name="whatsapp" id="whatsapp" cols="10" rows="5" placeholder="WA" ><?= $footer['whatsapp']?></textarea>
                   <label for="facebook">Link Facebook</label>
                    <input class="form form-control"type="text" name="link_facebook" id="facebook" value="<?= $footer['link_facebook'] ?>">
                    <label for="ig">Link Instagram</label>
                    <input class="form form-control"type="text" name="link_instagram" id="ig" value="<?= $footer['link_instagram'] ?>">
                    <br>

                    <button type="submit" class="btn-primary">submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
</div>