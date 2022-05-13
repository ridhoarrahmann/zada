<div class="main-pages">
    <div class="container-fluid">
        <div class="row g-2 mb-3">
            <div class="col-12">
                <form action="<?= base_url('/admin/changeFooter') ?>" method="post">
                    <label for="alamat"> Change alamat</label>
                    <label for="email"> Change email</label>
                    <label for="whatsapp"> Change whatsapp</label>

                    <textarea name="alamat" id="alamat" cols="30" rows="10" placeholder="alamat" ><?= $footer['alamat']?></textarea>
                    <textarea name="email" id="email" cols="30" rows="10"  ><?= $footer['email']?></textarea>
                    <textarea name="whatsapp" id="whatsapp" cols="30" rows="10" placeholder="WA" ><?= $footer['email']?></textarea>
                    <br>
                    <button type="submit">submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
</div>