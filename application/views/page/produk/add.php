<?php
$this->load->view("lib/header.php");
?>
<br>
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <span style="font-size: 25px;;">Tambah Data Produk</span>
        </div>
        <div class="card-body">
            <form action="<?= base_url("Produk/add"); ?>" method="post">

                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori" id="">
                        <?php
                        foreach ($kat as $var) {
                            echo '<option value="' . $var['id_kategori'] . '">' . $var['nama_kategori'] . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" value="" required>
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control" value="" required>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" value="" required>
                </div>
                <input type="submit" name="submit" value="Tambahkan data" class="btn btn-success">
            </form>
            <br>
        </div>
    </div>
</div>
<br>
<br>
<br>