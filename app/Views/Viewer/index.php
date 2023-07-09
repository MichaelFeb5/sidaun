<?= $this->extend('_Layout/index') ?>
<?= $this->section('content') ?>

<div id="app">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Nama tanaman: <?= $pohon[0]->nama_tanaman ?></h3>
                    <h4>Umur: <?= $pohon[0]->umur_tanaman ?> tahun</h4>
                    <p class="text-subtitle text-muted"> Tinggi tanaman: <?= $pohon[0]->tinggi_tanaman ?> meter</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Tanaman</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $pohon[0]->nama_tanaman ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <!-- <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Gambar Tanaman</h4>
                    </div>
                    <div class="card-body">
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach ($pohon as $key => $item) : ?>
                                    <div class="carousel-item <?php echo ($key === 0) ? 'active' : ''; ?>">
                                        <img width="200" height="200" src="<?= base_url('assets/images/tanaman/' . $item->gambar) ?>" alt="Gambar Tanaman <?= $key + 1 ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gambar tanaman</h4>
                </div>
                <div class="card-body">
                    <img width="200" height="200" src="<?= base_url('assets/images/tanaman/' . $pohon[0]->gambar) ?>" alt="bla">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Nama family: <?= $pohon[0]->nama_family ?></h4>
                </div>
                <div class="card-body">
                    <?php
                    $decoded = json_decode($pohon[0]->deskripsi_family);

                    foreach ($decoded->ops as $op) {
                        if (isset($op->insert)) {
                            echo $op->insert;
                        }
                    }
                    $pohon[0]->deskripsi_family
                    ?>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Nama genus: <?= $pohon[0]->nama_genus ?></h4>
                </div>
                <div class="card-body">
                    <?php
                    $decoded = json_decode($pohon[0]->deskripsi_genus   );

                    foreach ($decoded->ops as $op) {
                        if (isset($op->insert)) {
                            echo $op->insert;
                        }
                    }
                    $pohon[0]->deskripsi_genus  
                    ?>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Deskripsi tanaman </h4>
                </div>
                <div class="card-body">
                    <?php
                    $decoded = json_decode($pohon[0]->deskripsi_tanaman);

                    foreach ($decoded->ops as $op) {
                        if (isset($op->insert)) {
                            echo $op->insert;
                        }
                    }
                    $pohon[0]->deskripsi_tanaman
                    ?>
                </div>
            </div>
        </section>
    </div>
</div>

<?= $this->endSection('content') ?>