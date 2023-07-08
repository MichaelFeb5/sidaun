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
                                                <input type="text" id="nama_tanaman" class="form-control" name="nama_tanaman" placeholder="Nama" value="<?= $model['nama_tanaman'] ?>" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="id_genus">Jenis</label>
                                                <select class="js-example-basic-single" style="width:100%" name="id_genus" id="id_genus">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="umur_tanaman">Umur</label>
                                                <input type="number" id="umur_tanaman" class="form-control" name="umur_tanaman" placeholder="Umur" value="<?= $model['umur_tanaman'] ?>" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="tinggi_tanaman">Tinggi</label>
                                                <input type="number" id="tinggi_tanaman" class="form-control" name="tinggi_tanaman" placeholder="Tinggi" value="<?= $model['tinggi_tanaman'] ?>" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="deskripsi_tanaman">Deskripsi</label>
                                                <div id="snow" name="deskripsi_tanaman">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="musim_tanaman">Musim</label>
                                                    <input type="text" id="musim_tanaman" class="form-control" name="musim_tanaman" placeholder="Musim" value="<?= $model['musim_tanaman'] ?>" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="gambar_tanaman">Gambar</label>
                                                    <input type="file" class="image-preview-filepond" data-filepond>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex mt-3">
                                                <button class="btn btn-primary me-1 mb-1" onclick="onSave()">
                                                    Submit
                                                </button>
                                                <button class="btn btn-danger me-1 mb-1" onclick="onBatal()">
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
    model.gambar = <?= json_encode($model['gambar']) ?>;
    model.id_tanaman = <?php echo json_encode($model['id_tanaman']); ?>

    // Set Gambar
    const inputElement = document.querySelector('.image-preview-filepond');
    const pond = FilePond.create(inputElement, {
        allowMultiple: false,
        acceptedFileTypes: ['image/*'],
    });
    const urlGambar = '<?= base_url() ?>/assets/images/tanaman/<?= $model['gambar'] ?>'; // Ganti dengan URL gambar dari database
    pond.addFile(urlGambar)

    function onBatal() {
        window.location.replace("<?= base_url(); ?>Tanaman");
    }

    function onSave() {
        let nama_tanaman = $("#nama_tanaman").val();
        let id_genus = $("#id_genus").val();
        let umur_tanaman = $("#umur_tanaman").val();
        let tinggi_tanaman = $("#tinggi_tanaman").val();
        let musim_tanaman = $("#musim_tanaman").val();

        // Mendapatkan konten dari Quill Editor
        var textDeskripsi = snow.getContents();
        // Mengkonversi konten menjadi format JSON
        let deskripsi_tanaman = JSON.stringify(textDeskripsi);
        const file = pond.getFile();

        if (nama_tanaman == "" || id_genus == "" || umur_tanaman == "" || tinggi_tanaman == "" ||
            umur_tanaman == "" || musim_tanaman == "" || textDeskripsi == "" || file == null) {
            Swal.fire('Ups !', "Isi Seluruh Data", 'warning');
        } else {
            // Masukan Ke dalam model
            model.nama_tanaman = $("#nama_tanaman").val();
            model.id_genus = $("#id_genus").val();
            model.umur_tanaman = $("#umur_tanaman").val();
            model.tinggi_tanaman = $("#tinggi_tanaman").val();
            model.musim_tanaman = $("#musim_tanaman").val();
            model.deskripsi_tanaman = JSON.stringify(textDeskripsi);

            var formData = new FormData();
            formData.append("file", file.file);
            formData.append("isNew", 0);
            formData.append("model", JSON.stringify(model));

            $.ajax({
                url: "<?= base_url(); ?>tanaman/simpan",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (typeof res.validasi == 'undefined') {
                        if (typeof res.validasi == 'undefined') {
                            Swal.fire({
                                title: 'Berhasil',
                                text: "Data Berhasil Ditambahkan",
                                icon: 'success',
                            }).then((result) => {
                                window.location.replace("<?= base_url(); ?>Tanaman");
                            })
                        } else {
                            Swal.fire('Ups', "Data Harus Lengkap", 'error');
                        }
                    } else {
                        Swal.fire('Ups', "Data Harus Lengkap", 'error');
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                    Swal.fire('Error', "Server gagal merespon", 'error');
                },
                complete: function() {
                    // app.form.isSaving = false;
                }
            });
        }
    }

    $(document).ready(function() {

        // Get data Jenis
        let dataJenis = [];
        dataJenis = <?= $dataJenis ?>;
        dataJenis.forEach(function(element, index) {
            dataJenis[index] = {
                id: element.id_genus,
                text: element.nama_genus
            }
        });

        $('.js-example-basic-single').select2({
            data: dataJenis
        });
        $('.js-example-basic-single').val(<?= $model['id_genus'] ?>).trigger('change');

        // Take text deskripsi n apply to quill editor
        let textDeskripsi = {};
        textDeskripsi = JSON.parse(<?php echo json_encode($model['deskripsi_tanaman']); ?>);
        snow.setContents(textDeskripsi)
    });
</script>
<?= $this->endSection('javascript') ?>