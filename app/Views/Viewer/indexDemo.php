<?= $this->extend('_Layout/index') ?>
<?= $this->section('content') ?>

<div id="app">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Nama : Pohon Pinus (Pinus L.)</h3>
                    <h4>Umur : 3 tahun</h4>
                    <p class="text-subtitle text-muted"> Tinggi tanaman: 17 meter</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Tanaman</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pohon Pinus (Pinus L.)</li>
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
                    <img width="200" height="200" src="<?= base_url('assets/images/viewer/') ?>/pinus.jpg" alt="bla">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Nama Family : Pinaceae</h4>
                </div>
                <div class="card-body">
                    Pinaceae atau Suku Pinus-pinusan adalah sebuah famili pohon konifer atau semak, yang didalamnya terdiri dari banyak jenis Tumbuhan runjung (konifer) terkenal yang penting secara komersial, salah satunya adalah Pinus. Famili ini termasuk dalam ordo Pinales yang sebelumnya dikenal sebagai Coniferales.
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Nama Genus : Pinus L.</h4>
                </div>
                <div class="card-body">
                    pinus adalah sebuah genus pohon konifer atau semak dalam famili Pinaceae (Suku Pinus-pinusan). Tanaman didalam genus ini juga dikenal dengan nama Pohon Pinus.
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Deskripsi Tanaman </h4>
                </div>
                <div class="card-body">
                    Tanaman Pinus (Pinus merkusii) adalah tanaman perdu yang tingginya mencapai 10-40 m dan tumbuh pada ketinggian 300-1800 m di atas permukaan laut. Pohon pinus ini sering dimanfaatkan kayunya dan diolah untuk dijadikan bahan – bahan furniture, perabotan rumah tangga, korek api, sumpit, dan masih banyak lagi.
                </div>
            </div>
        </section>
    </div>
</div>

<?= $this->endSection('content') ?>