<?php require_once('header.php'); ?>

<form action="processinsert.php" method="post">
    <h4 class="text-center m-3">Tambah Buku</h4>
    <div class="row m-3 mt-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Nama Buku</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" name="stok" id="stok" class="form-control" required>
            </div>
            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="category_id">ID Category</label>
                <input type="text" name="category_id" id="category_id" class="form-control" required>
            </div>    
        </div>
    <div class="row m-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<!-- Load Footer -->
<?php require_once('footer.php'); ?>