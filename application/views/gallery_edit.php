<div class="main-pages">
    <div class="container-fluid">
        <div class="row g-2 mb-3">
            <div class="col-12">
              
                <?php echo form_open_multipart('admin/update_gallery/'.$gallery['name']);?>
                    <label for="name"> Change name</label>
                    
                    <input type="text" value="<?= $gallery['name'] ?>" name="name" id="name">              

                   <br>
                    <br>
                    <label for="image"> Change Image</label>
                    <input type="file" name="image" id="image" >
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