<?php $this->load->view('lib/header.php'); ?>
<div class="container">
    <br>
    <div class="card">
        <div class="card-header">
            <span style="font-size: 25px;;">Data Produk</span>
            <span><a href="<?= base_url("Produk/TambahDataProduk"); ?>" style="float: right;" class="btn btn-primary"> Add </a></span>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-stripped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Produk</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($produk as $var) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $var['nama_produk'] ?></td>
                            <td><?= number_format($var['stok']) ?></td>
                            <td><?= number_format($var['harga'])  ?></td>
                            <td><a href="<?= base_url('Produk/PerbaruiDataProduk/' . $var['id_produk']) ?>" class="btn btn-primary">Update</a>
                                <a href="<?= base_url('Produk/delete/' . $var['id_produk']) ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>

</html>