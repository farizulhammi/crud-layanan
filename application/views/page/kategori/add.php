<?php
$this->load->view("lib/header.php");
?>
<br>
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <span style="font-size: 25px;;">Tambah Data Kategori</span>
        </div>
        <div class="card-body">
            <form action="<?= base_url("Kategori/add"); ?>" method="post">
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" value="" required>
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