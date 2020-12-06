<div class="container-fluid home">
    <div class="page-main">       
        <div class="main row">
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
                            <img src="<?= base_url(); ?>/assets/app/images/banner1.jpg"/>
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
            <div class="content col-sm-6">
                <div class="title">        
                    <h1>Sistem Pendukung Keputusan Pemilihan Lokasi TPA</h1>
                    <h2>(Tempat Pembuangan Akhir)</h2>
                </div>
                <!-- alter added -->
                <div class="after-input">
                    <ul class="list-group">
                        <?php for ($x = 1; $x <= 5; $x++) : ?>
                        <li class="list-group-item">
                            <span>Alternatif <?= $x; ?></span>
                            <a href="#"  data-toggle="tooltip" data-placement="top" title="Hapus alternatif" >
                                <i class="fas fa-minus"></i>
                            </a>
                        </li>
                        <?php endfor; ?>
                    </ul>
                </div>
                <!-- button action-->
                <div class="action-button row">
                    <button type="button" class="main-btn-rect-home popup-btn col-sm-6" data-popup="popup-reg">Tambah Alternatif</button>
                    <a href="<?= base_url('hasil'); ?>" type="button" class="main-btn-rect-home action-hitung col-sm-5"><span>Hitung</span></a></div>
            </div>
        </div>
    </div>
    <!-- Popup add Alter -->
    <div id="popup-reg" class="popup alter">
        <div class="popup-content">
            <div class="event-header">
                <h6>Masukan Spesifikasi TPA</h6>
            </div>
            <hr>
            <form id="send" class="send-form" action="<?= base_url('simpan') ?>" method="POST">
                <div class="form-group">
                    <input type="number" placeholder="Masukan luas tanah dalam m2" id="ls-tanah" name="ls-tanah" required="required">
                    <label for="ls-tanah">
                        <span>Luas Tanah</span>
                    </label>
                </div>
              
                <div class="form-group">
                    <input type="number" placeholder="Masukan jarak dalam Km" id="jr-sungai" name="jr-sungai" required="required">
                    <label for="jr-sungai">
                        <span>Jarak terhadap DAS</span>
                        <small>(Daerah Aliran Sungai)</small>
                    </label>
                </div>

                <div class="form-group">
                    <input type="number" placeholder="Masukan jarak dalam Km" id="jr-pemukiman" name="jr-pemukiman" required="required">
                    <label for="jr-pemukiman">
                        <span>Jarak terhadap Pemukiman</span>
                    </label>
                </div>

                <div class="form-group">
                    <input type="number" placeholder="Masukan jarak dalam Km" id="jr-jalan" name="jr-jalan" required="required">
                    <label for="jr-jalan">
                        <span>Jarak terhadap jalan umum</span>
                    </label>
                </div>

                <div class="form-group">    
                    <select class="custom-select" id="bencana" name="bencana">
                        <option selected>Terletak pada daerah dengan:</option>
                        <option value="1">Potensi bencana rendah</option>
                        <option value="2">Potensi bencana tinggi</option>
                    </select>
                    <label class="label bencana" for="bencana">Potensi bencana</label>
                </div>

                <div class="form-group action">
                    <button type="submit" class="main-btn-rect" name="text" value="Send">
                        </i>Tambah Alternatif</button>
                </div>
            </form>
            <span class="fade-out main-btn-circle">╳</span>
        </div>
    </div>
    <!--End Popup add Alter -->


</div>