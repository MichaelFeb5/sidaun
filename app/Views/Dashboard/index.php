<?= $this->extend('_Layout/index') ?>


<?= $this->section('content') ?>

<div class="page-heading">
    <h3>Dashboard</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row d-flex justify-content-center text-center">
                                <div class="d-flex justify-content-center">
                                    <div class="stats-icon purple mb-2">
                                        <i class="fa fa-tree"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">
                                        Total Tanaman
                                    </h6>
                                    <h6 class="font-extrabold mb-0" id="total_tanaman"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row d-flex justify-content-center text-center">
                                <div class="d-flex justify-content-center">
                                    <div class="stats-icon blue mb-2">
                                        <i class="fa fa-book"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Total Genus</h6>
                                    <h6 class="font-extrabold mb-0" id="total_genus"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Profile Visit</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-profile-visit"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection('content') ?>
<?= $this->section('javascript') ?>

<script src="http://sidaun.test/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="http://sidaun.test/assets/static/js/pages/dashboard.js"></script>

<script>
    $(document).ready(function() {
        // Mengubah nilai menggunakan text()
        $("#total_tanaman").text("<?= $totalTanaman ?>" + " Buah");
        $("#total_genus").text("<?= $totalGenus ?>" + " Genus");
    });
</script>


<?= $this->endSection('javascript') ?>