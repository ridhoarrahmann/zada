<div class="main-pages">
    <div class="container-fluid">
        <div class="row g-2 mb-3">
            <div class="col-12">
              
                <?php echo form_open_multipart('admin/update_top_produk/'.$produk['id']);?>
                    <label for="header"> Change Header</label>
                    
                    

                    <textarea class="form-control" name="header" id="header" cols="10" rows="5" placeholder="alamat" ><?= $produk['title']?></textarea>
                    <label for="description"> Change description</label>
                    <textarea class="form-control" name="description" id="description" cols="10" rows="5"  ><?= $produk['description']?></textarea>
                    <br>
                    <br>
                    <label for="image"> Change Image</label>
                    <input type="file" name="image" id="image" value="<?= $produk['img']?>">
                    <br>
                    <br>
                    <br>
                    <button type="submit" class="btn-primary">submit</button>
               
                
                           </div>
        </div>
    </div>
</div>
</div>
</div>