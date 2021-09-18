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
            <form action="<?= base_url("Produk/update"); ?>" method="post">
                <input type="hidden" name="id_produk" value="<?= $produk[0]['id_produk']; ?>">
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori" id="">
                        <option value="<?= $produk[0]['id_kategori']; ?>"><?= $produk[0]['nama_kategori']; ?></option>
                        <?php
                        foreach ($kat as $var) {
                            echo '<option value="' . $var['id_kategori'] . '">' . $var['nama_kategori'] . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" value="<?= $produk[0]['nama_produk']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control" value="<?= $produk[0]['stok']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" value="<?= $produk[0]['harga']; ?>" required>
                </div>
                <input type="submit" name="submit" value="Perbaharui data" class="btn btn-success">
            </form>
            <br>
        </div>
    </div>
</div>
<br>
<br>
<br>