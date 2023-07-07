<?= $this->extend('_Layout/index') ?>


<?= $this->section('content') ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Jenis</h3>
                <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </nav>
            </div>

        </div>
        <div class="d-flex mb-3 justify-content-end">
            <button onclick="onNew()" style="width: 150px;" class="btn btn-primary "><i class="fa fa-plus"></i> Tambah</i></button>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Data Jenis</h5>
                <p>Menampilkan Data Jenis Tanaman</p>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table table-hover dataTable complex-headers" width="100%" id="table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jenis</th>
                                <th>Nama Family</th>
                                <th width="12%">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>

</div>
<?= $this->endSection('content') ?>
<?= $this->section('javascript') ?>
<script>
    function onNew() {
        window.location.href = '<?= base_url() ?>jenis/tambah'
    }

    function onEdit(id) {
        window.location.href = '<?= base_url(); ?>jenis/detail/' + id
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
                $.post(`<?= base_url() ?>Jenis/hapus/` + id, function(res) {
                    console.log('onDelete Res', res);
                    if (res == true) {
                        Swal.fire('Terhapus!', 'Data berhasil dihapus !.', 'success').then((result) => {
                            window.location.href = "<?= base_url() ?>Jenis"
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
                url: "<?= base_url() ?>Jenis/grid",
                dataSrc: function(data) {
                    console.log(data.data);
                    return data.data; // Ubah "result" menjadi "data.data"
                }
            },
            columns: [{
                    data: 'id_jenis',
                    render: function(val, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'nama_jenis',
                },
                {
                    data: 'nama_family',
                },
                {
                    data: 'id_jenis',
                    render: function(val, type, row, meta) {
                        return `
                            <div class="d-flex justify-content-around">
                                                    <button type="button" onclick="onDelete(` + val + `)"
                                                         class="btn btn-sm btn-sm btn-outline-danger waves-effect waves-light"><i
                                                            class="fas fa-trash"></i></button>
                                                    <a type="button" onclick="onEdit(` + val + `)"
                                                         class="btn btn-sm btn-outline-warning waves-effect waves-light"><i
                                                            class="fas fa-edit"></i></a>
                                                </div>`
                    }
                },
            ],
            columnDefs: [{
                targets: 3,
                className: 'text-center'
            }],
        });
    });
</script>
<?= $this->endSection('javascript') ?>