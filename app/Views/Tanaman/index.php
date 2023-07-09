<?= $this->extend('_Layout/index') ?>
<?= $this->section('content') ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3><b>Tanaman</b></h3>
                <p class="text-subtitle text-muted">Menampilkan fitur yang berhubungan dengan data Tanaman</p>
            </div>
            <div class="content-header-right text-md-right col-md-6 col-12 mb-2">
                <div class="top">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Tanaman</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                        <div class="text-left ">
                            <button onclick="onNew()" style="width: 180px;" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</i></button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Data Tanaman</h5>
                <p>Menampilkan Data Tanaman</p>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table table-hover " id="table2" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Family</th>
                                <th>Umur & Tinggi</th>
                                <th>Gambar</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection('content') ?>

<?= $this->section('css') ?>

<?= $this->endSection('css') ?>

<?= $this->section('javascript') ?>

<script>
    function onNew() {
        window.location.href = '<?= base_url() ?>tanaman/tambah'
    }

    function onEdit(id) {
        window.location.href = '<?= base_url(); ?>tanaman/detailEdit/' + id
    }

    function onDetail(id) {
        window.location.href = '<?= base_url(); ?>viewer/details/' + id
    }

    function onDelete(id) {
        Swal.fire({
            title: 'Anda Yakin ?',
            text: "Data yang terhapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                $.post(`<?= base_url() ?>Tanaman/hapus/` + id, function(res) {
                    console.log('onDelete Res', res);
                    if (res == true) {
                        Swal.fire('Terhapus!', 'Data berhasil dihapus !.', 'success').then((result) => {
                            window.location.href = "<?= base_url() ?>Tanaman"
                        })
                    } else {
                        Swal.fire('Info!', res.message, 'warning')
                    }
                }).fail(function(xhr) {
                    console.log('onDelete Fail', xhr);
                    Swal.fire('Error', "Server gagal merespon", 'error');
                }).always(function() {
                    app.form.isSaving = false;
                    btn.removeAttr('disabled', true).html(`<i class="feather icon-trash"></i>`);
                });
            }
        });
    }

    $(document).ready(function() {
        $('#table2').DataTable({
            processing: true,
            serverSide: false,
            ajax: {
                url: "<?= base_url() ?>/Tanaman/grid",
            },
            columns: [{
                    data: 'id_tanaman',
                    render: function(val, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'nama_tanaman',
                },
                {
                    data: 'nama_genus',
                },
                {
                    data: 'nama_family',
                },
                {
                    data: '',
                    render: function(val, type, row, meta) {
                        var text = row.umur_tanaman + " Tahun & " + row.tinggi_tanaman + " cm"
                        return text
                    }
                },
                {
                    data: 'gambar',
                    render: function(val, type, row, meta) {
                        return `<img src="<?= base_url() ?>assets/images/tanaman/` + val + `" alt="Tidak Ada Foto" class="img-fluid" style="width: 100px; height: 100px;">`
                    }
                },
                {
                    data: 'id_tanaman',
                    render: function(val, type, row, meta) {
                        return `
                            <div class="d-flex justify-content-around">
                                                    <button type="button" onclick="onDelete(` + val + `)"
                                                        class="btn btn-sm btn-sm btn-outline-danger waves-effect waves-light"><i
                                                            class="fas fa-trash"></i></button>
                                                    <a type="button" onclick="onDetail(` + val + `)"
                                                        class="btn btn-sm btn-outline-primary waves-effect waves-light"><i
                                                            class="fas fa-search"></i></a>
                                                    <a type="button" onclick="onEdit(` + val + `)"
                                                        class="btn btn-sm btn-outline-warning waves-effect waves-light"><i
                                                            class="fas fa-edit"></i></a>
                                                </div>`
                    }
                },
            ],
            columnDefs: [{
                    targets: 0,
                    className: 'text-center'
                },
                {
                    targets: 4,
                    className: 'text-center'
                },
                {
                    targets: 6,
                    className: 'text-center'
                }
            ],
            dataType: "json",
        });
    });
</script>
<?= $this->endSection('javascript') ?>