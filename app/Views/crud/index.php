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
                Data Pohon
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <?php $i = 1; ?>
                        <?php foreach($pohon as $p) : ?>
                            <th>Nomor</th>
                            <th>Nama Pohon</th>
                            <th>Jenis Pohon</th>
                            <th>Musim Pohon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $p->nama_pohon ?></td>
                            <td><?= $p->nama_jenis ?></td>
                            <td><?= $p->musim_pohon ?></td>
                            <td>
                                <button class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-warning"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                </table>
                <div class="tombolButton text-end">
                <button class="btn btn-success">Tambah data <i class="bi bi-plus"></i></button>
                </div>
            </div>
        </div>

    </section>
</div>
<?= $this->endSection('content') ?>