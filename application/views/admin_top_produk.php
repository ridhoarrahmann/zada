<div class="main-pages">
    <div class="container-fluid">
        <div class="row g-2 mb-3">
            <div class="col-12">
              
            <table class=" table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($produk as $pd ) :?>
    <tr>
      <th scope="row">1</th>
      <td><?= $pd['title']; ?></td>
      <td><?= $pd['description']; ?></td>
      <td><a href="<?= base_url('admin/changeTopProduk/').$pd['id'] ?>"><button class="btn btn-primary">edit</button></a></td>
      <td><button class="btn btn-danger">hapus</button></td>
    </tr>
    <?php endforeach?>
   
   
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>
</div>
</div>