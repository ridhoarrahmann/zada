

        <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                           <form action="<?= base_url('/admin/changeJumbotron')?>" method="post">
                           <label for="form-jumbotron-top"> Change jumbotron top</label>
                               
                              <textarea class="form-control" name="jumbotron-top" id="form-jumbotron-top" cols="30" rows="10"><?= $jumbotron['jumbotron_top'] ?></textarea>
                            <br>  
                           
                           <label for="form-jumbotron-bottom"> Change jumbotron bottom</label>
                               
                              <textarea class="form-control" name="jumbotron-bottom" id="form-jumbotron-bottom" cols="30" rows="10"><?= $jumbotron['jumbotron_bottom'] ?></textarea>
                            <br>
                             <button type="submit">submit</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
