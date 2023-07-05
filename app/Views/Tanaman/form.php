<?= $this->extend('_Layout/index') ?>


<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tanaman</h3>
                <p class="text-subtitle text-muted">
                    Tanaman
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Form Layout
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Tambah Tanaman</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body pt-2">
                            <div class="form form-vertical">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama_tanaman">Nama</label>
                                                <input type="text" id="nama_tanaman" class="form-control" name="nama_tanaman" placeholder="Nama" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="id_jenis">Jenis</label>
                                                <select class="js-example-basic-single" style="width:100%" name="id_jenis" id="id_jenis">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="umur_tanaman">Umur</label>
                                                <input type="number" id="umur_tanaman" class="form-control" name="umur_tanaman" placeholder="Umur" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="tinggi_tanaman">Tinggi</label>
                                                <input type="number" id="tinggi_tanaman" class="form-control" name="tinggi_tanaman" placeholder="Tinggi" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="desktipsi_tanaman">Deskripsi</label>
                                                <div id="snow" name="deskripsi_tanaman">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="musin_tanaman">Musim</label>
                                                <input type="text" id="musin_tanaman" class="form-control" name="musin_tanaman" placeholder="Musim" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="musin_tanaman">Gambar</label>
                                                <input type="file" class="image-preview-filepond" />
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mt-3">
                                            <button class="btn btn-primary me-1 mb-1" onclick="onSave()">
                                                Submit
                                            </button>
                                            <button class="btn btn-danger me-1 mb-1">
                                                Batalkan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection('content') ?>

<?= $this->section('javascript') ?>
<script>
    var form = {};
    var model = {};

    // function onSave() {
    //     const nama_jenis = $("#nama_jenis").val();
    //     const nama_family = $("#nama_family").val();

    //     model.nama_jenis = nama_jenis;
    //     model.nama_family = nama_family;
    //     form.isNew = 1;
    //     form.model = model;

    //     $.post("<?= base_url(); ?>Jenis/simpan", form, function(res) {
    //         if (typeof res.validasi == 'undefined') {
    //             Swal.fire({
    //                 title: 'Berhasil',
    //                 text: "Data Berhasil Ditambahkan",
    //                 icon: 'success',
    //             }).then((result) => {
    //                 window.location.replace("<?= base_url(); ?>Jenis");
    //             })
    //         } else {
    //             Swal.fire('Ups', "Data Harus Lengkap", 'error');
    //         }
    //     }).fail(function(xhr) {
    //         console.log(xhr);
    //         Swal.fire('Error', "Server gagal merespon", 'error');
    //     }).always(function() {
    //         // app.form.isSaving = false;
    //     })
    // }
    $(document).ready(function() {
        // Get data Jenis
        let dataJenis = [];
        dataJenis = <?= $dataJenis ?>;
        dataJenis.forEach(function(element, index) {
            dataJenis[index] = {
                id: element.id_jenis,
                text: element.nama_jenis
            }
        });

        // Set Editor
        snow.insertText(0, 'Hello', 'bold', true);
        
        $('.js-example-basic-single').select2({
            data: dataJenis
        });
    });
</script>
<?= $this->endSection('jacascript') ?>