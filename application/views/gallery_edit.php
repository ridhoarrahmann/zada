

        <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                           <form action="<?= base_url('/admin/changeJumbotron')?>" method="post">
                               <label for="form-jumbotron-content"> Change jumbotron Content</label>
                               
                              <textarea name="jumbotron-content" id="form-jumbotron-content" cols="30" rows="10"></textarea>
                            <br>
                          
                           <input type="file" name="galleryImage" >
                           <br>
                           <br>
                           <br>
                             <button type="submit">submit</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
