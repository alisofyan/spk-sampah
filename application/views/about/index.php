<div class="container-fluid about-us">
    <div class="page-main">          
        <div class="main row">
            <!-- content --> 
            <div class="content col-sm-6">
                <!-- title -->
                <div class="title">        
                    <h1>Sistem Pendukung Keputusan Pemilihan Lokasi TPA</h1>
                    <h2>(Tempat Pembuangan Akhir)</h2>
                </div>
                <div class="top">
                    <span>
                        Sistem Pendukung Keputusan ini digunakan untuk mencari atau menentukan tempat pembuangan akhir yang sesuai dengan kriteria yang telah dimasukan.
                    </span>
                </div>
                <div class="faq">
                    <div class="accordion" id="accordion-faq">
                        <div class="card">
                            <div class="card-header" id="headingFirst">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFirst" aria-expanded="true" aria-controls="collapseFirst">
                                    <i class="fas fa-chevron-up"></i>
                                    <span>Kreator aplikasi</span>
                                </button>
                            </h2>
                            </div>

                            <div id="collapseFirst" class="collapse show" aria-labelledby="headingFirst" data-parent="#accordion-faq">
                            <div class="card-body">
                                   Nama : Ajit Rimbayana Fail<br>
                                   NIM : 14030031<br>
                                   Prodi : Teknik Informatika
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-chevron-up"></i>
                                    <span>Cara menggunakan aplikasi</span>
                                </button>
                            </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-faq">
                            <div class="card-body">
                                  1. Ke halaman <a href="<?= base_url(); ?>" style="color:#eb6752;">Home</a>, <br>
                                  2. Klik tambah alternatif, <br>
                                  3. Masukan spesifikasi tempat pembuangan akhir yang ingin anda jadikan alternatif<br>
                                  4. Jika sudah kemudian klik Hitung maka anda akan mendapatkan hasil dari perhitungan Weighted Product.
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner col-sm-6">
                <!-- carousel -->
                <div id="carouselhomepage" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselhomepage" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselhomepage" data-slide-to="1"></li>
                        <li data-target="#carouselhomepage" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url(); ?>/assets/app/images/banner5.jpg"/>
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url(); ?>/assets/app/images/banner2.jpg"/>
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url(); ?>/assets/app/images/banner3.jpg"/>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselhomepage" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselhomepage" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- End carousel -->
            </div> 
        </div>

    </div>
</div>
