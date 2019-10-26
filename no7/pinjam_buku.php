<!-- Load Header -->
<?php require_once('header.php');

// Ambil Biodata Berdasarkan ID
$books = getBookById($_GET['id']);

?>

<form action="processedit.php?id=<?= $books['id']; ?>" method="post">
    <h4 class="text-center m-3">Edit Buku</h4>
    <div class="row m-3 mt-4">
            <div class="col-md-6">
            <div class="form-group">
                <label for="name">Nama Buku</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= $books['name']; ?>" required>
            </div>
                <div class="col-md-6 mb-3">
                    <label for="stok">Stok</label>
                    <input type="text" name="stok" id="stok" class="form-control" value="<?= $books['stok']; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?= $books['deskripsi']; ?>" required>
            </div>
            <div class="form-group">
                <label for="category_id">ID Kategori</label>
                <input type="text" name="category_id" id="category_id" class="category_id" value="<?= $books['category_id']; ?>" required>
            </div>
        </div>     
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<!-- Load Footer -->
<?php require_once('footer.php'); ?>