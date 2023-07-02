<?= $this->extend('_Layout/index') ?>
<?= $this->section('content') ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Pohon</h3>
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
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Minimal jQuery Datatable</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Graiden</td>
                                <td>vehicula.aliquet@semconsequat.co.uk</td>
                                <td>076 4820 8838</td>
                                <td>Offenburg</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                        </tbody>
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
    $(document).ready(function() {
        $('#table2').DataTable({
            processing: true,
            serverSide: false,
            ajax: {
                url: "<?= base_url() ?>/Jenis/grid",
                dataSrc: function(data) {
                    console.log(data);
                    return result;
                }
            },
            dataType: "json",
        });
    });
</script>
<?= $this->endSection('javascript') ?>