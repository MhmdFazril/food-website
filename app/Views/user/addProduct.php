<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="form-wrapper">
        <h2>Add Product</h2>
        <?php $error = session()->get('_ci_validation_errors'); ?>
        <form action="/admin/save-product" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputName">Nama Barang :</label>
                        <input type="text" class="form-control <?= isset($error['name']) ? 'is-invalid' : '' ?>" id="inputName" name="name" placeholder="Masukkan nama barang">
                        <div class="invalid-feedback">
                            <?= isset($error['name']) ? $error['name'] : ''; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPrice">Harga :</label>
                        <input type="number" class="form-control <?= isset($error['price']) ? 'is-invalid' : '' ?>" id="inputPrice" name="price" placeholder="Masukkan harga barang">
                        <div class="invalid-feedback">
                            <?= isset($error['price']) ? $error['price'] : ''; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Deskripsi :</label>
                        <textarea class="form-control <?= isset($error['description']) ? 'is-invalid' : '' ?>" id="inputDescription" name="description" placeholder="Masukkan deskripsi barang"></textarea>
                        <div class="invalid-feedback">
                            <?= isset($error['description']) ? $error['description'] : ''; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputQuantity">Stock :</label>
                        <input type="number" class="form-control <?= isset($error['quantity']) ? 'is-invalid' : '' ?>" id="inputQuantity" name="quantity" placeholder="Masukkan jumlah barang">
                        <div class="invalid-feedback">
                            <?= isset($error['quantity']) ? $error['quantity'] : ''; ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit">Simpan</button>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputSource">Asal Makanan :</label>
                        <input type="text" class="form-control <?= isset($error['source']) ? 'is-invalid' : '' ?>" id="inputSource" name="source" placeholder="Masukkan asal makanan">
                        <div class="invalid-feedback">
                            <?= isset($error['source']) ? $error['source'] : ''; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputMaterials">Bahan Utama :</label>
                        <input type="text" class="form-control <?= isset($error['material']) ? 'is-invalid' : '' ?>" id="inputMaterials" name="material" placeholder="Masukkan bahan pembuatan">
                        <div class="invalid-feedback">
                            <?= isset($error['material']) ? $error['material'] : ''; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputFoto">Foto Barang :</label>
                        <input type="file" class="form-control-file" id="inputFoto" name="foto">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>