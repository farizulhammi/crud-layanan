<?php
$this->load->view("lib/header.php");
print_r($kat);
?>
<br>
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <span style="font-size: 25px;;">Tambah Data Kategori</span>
        </div>
        <div class="card-body">
            <form action="<?= base_url("Kategori/update"); ?>" method="post">
                <input type="hidden" name="id_kategori" value="<?= $kat[0]['id_kategori']; ?>">
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" value="<?= $kat[0]['nama_kategori']; ?>" required>
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