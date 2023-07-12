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
                    $decoded = json_decode($pohon[0]->deskripsi_genus);

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
                    <p id="deskripsi-tanaman"></p>
                </div>
            </div>
        </section>
    </div>
</div>

<?= $this->endSection('content') ?>

<?= $this->section('javascript') ?>
<script>
   

    // Mendapatkan data teks dari Quill Editor
    var deskripsiJSON = '{"ops":[{"insert":"Paragraf pertama."},{"insert":"\n\n"},{"insert":"Paragraf kedua."}]}';
    var deskripsiObj = JSON.parse(deskripsiJSON);
    var deskripsiHTML = '';

    

    // Menampilkan teks hasil pemrosesan
    document.getElementById('deskripsi_tanaman').innerHTML = deskripsiHTML;
</script>
<?= $this->endSection('javascript') ?>