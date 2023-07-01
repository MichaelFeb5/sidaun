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
    </div>

    <!-- <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Jenis Tanaman</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body pt-0">
                            <p class="card-text">
                                Tabel ini berisi Jenis tanaman
                            </p>
                        </div>
                        <div class="ms-4 me-4 mb-4">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Jenis</th>
                                            <th>Nama Family</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-bold-500">1</td>
                                            <td>$15/hr</td>
                                            <td class="text-bold-500">UI/UX</td>
                                            <td>
                                                <a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Minimal jQuery Datatable start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Minimal jQuery Datatable</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table table-hover dataTable complex-headers" width="100%" id="table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jenis</th>
                                <th>Nama Family</th>
                                <th>Aksi</th>
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
    $(document).ready(function() {
        $('#table2').DataTable({
            processing: true,
            serverSide: false,
            ajax: {
                url: "<?= base_url() ?>/Jenis/grid",
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
        });
    });
</script>
<?= $this->endSection('javascript') ?>