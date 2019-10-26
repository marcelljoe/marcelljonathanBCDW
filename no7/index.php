<!-- Load Header -->
<?php require_once('header.php'); ?>

<!-- Button Tambah Buku -->
<div class="row m-3">
    <div class="col text-right">
        <a href="tambah-biodata.php" class="btn btn-primary">Tambah Buku</a>
    </div>
</div>

<!-- Content List Buku -->
<div class="row m-3">
    <div class="col">
        <div class="table-responsive">
            <table class="table table-bordered">
                <!-- Table Header -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Stok</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach (getBooks() as $data) : ?>
                        <tr>
                            <td><?= $data['id']; ?></td>
                            <td><?= $data['name']; ?></td>
                            <td><?= $data['stok']; ?></td>
                            <td><?= $data['deskripsi']; ?></td>
                                <a href="pinjam_buku.php?id=<?= $data['id']; ?>" class="badge badge-primary">Pinjam</a>
                                <a href="kembalikan_buku.php?id=<?= $data['id']; ?>" class="badge badge-danger">Kembalikan</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Load Footer -->
<?php require_once('header.php'); ?>