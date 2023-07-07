<?= $this->extend('_Layout/index') ?>
<?= $this->section('content') ?>

<div id="app">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Nama Tanaman : <?= $pohon[0]->nama_tanaman ?></h3>
                    <h4>Umur : <?= $pohon[0]->umur_tanaman ?></h4>
                    <p class="text-subtitle text-muted"> Tinggi tanaman : <?= $pohon[0]->tinggi_tanaman ?></p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Famili Tanaman</h4>
                </div>
                <div class="card-body">
                    <?= $pohon[0]->nama_family ?> : Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas omnis laudantium tempore
                    exercitationem, expedita aspernatur sed officia asperiores unde tempora maxime odio reprehenderit
                    distinctio incidunt! Vel aspernatur dicta consequatur!
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Jenis Tanaman</h4>
                </div>
                <div class="card-body">
                    <?= $pohon[0]->nama_jenis ?> : Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas omnis laudantium tempore
                    exercitationem, expedita aspernatur sed officia asperiores unde tempora maxime odio reprehenderit
                    distinctio incidunt! Vel aspernatur dicta consequatur!
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Deskripsi Tanaman</h4>
                </div>
                <div class="card-body">
                    <?php
                    $decoded = json_decode($pohon[0]-> deskripsi_tanaman);

                    foreach ($decoded->ops as $op) {
                        if (isset($op->insert)) {
                            echo $op->insert;
                        }
                    }
                    ?>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas omnis laudantium tempore
                    exercitationem, expedita aspernatur sed officia asperiores unde tempora maxime odio reprehenderit
                    distinctio incidunt! Vel aspernatur dicta consequatur!
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gambar Tanaman</h4>
                </div>
                <div class="card-body">
                    <img src="/public/assets/images/tanaman/1688652595_25b9aa34c64aaeb62d96.jpg" alt="bla">
                </div>
            </div>
        </section>
    </div>
</div>

<?= $this->endSection('content') ?>
