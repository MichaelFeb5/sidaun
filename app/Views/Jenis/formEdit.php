<?= $this->extend('_Layout/index') ?>


<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Jenis Tanaman</h3>
                <p class="text-subtitle text-muted">
                    Jenis Tanaman
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
                        <h4 class="card-title">Edit Jenis Tanaman</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body pt-2">
                            <div class="form form-vertical">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama_jenis">Jenis</label>
                                                <input type="text" id="nama_jenis" class="form-control" name="nama_jenis" placeholder="Jenis" value="<?= $model['nama_jenis'] ?>" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama_family">Family</label>
                                                <input type="text" id="nama_family" class="form-control" name="nama_family" placeholder="Family" value="<?= $model['nama_family'] ?>" />
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
    var app = {};
    var form = {};
    var model = {};
    model.id_jenis = <?= $model['id_jenis'] ?>

    function test() {
        console.log("test");
    }

    function onSave() {
        // Set Data
        model.nama_jenis = $("#nama_jenis").val();
        model.nama_family = $("#nama_family").val();

        form.isNew = 0; // 0 untuk edit 1 untuk baru
        form.model = model; // set model ke form

        app.form = form // set semua ke app

        $.post("<?= base_url(); ?>Jenis/simpan", form, function(res) {
            if (typeof res.validasi == 'undefined') {
                Swal.fire({
                    title: 'Berhasil',
                    text: "Data Berhasil Diubah",
                    icon: 'success',
                }).then((result) => {
                    window.location.replace("<?= base_url(); ?>Jenis");
                })
            } else {
                Swal.fire('Ups', "Data Harus Lengkap", 'error');
            }
        }).fail(function(xhr) {
            console.log(xhr);
            Swal.fire('Error', "Server gagal merespon", 'error');
        }).always(function() {
            // app.form.isSaving = false;
        })
    }
</script>
<?= $this->endSection('javascript') ?>