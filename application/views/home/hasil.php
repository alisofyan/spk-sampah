<div class="container-fluid home hasil">
    <div class="page-main">       
        <div class="main row">
            <div class="banner col-sm-3">
                <div class="title">        
                    <h1>Hasil Rekomendasi Pemilihan Lokasi TPA</h1>
                    <h2>(Tempat Pembuangan Akhir)</h2>
                </div>
            </div> 
            <div class="content col-sm-9">
                <!-- Header -->
                <div class="header-hasil row justify-content-sm-center">
                    <div class="col-sm-1">
                        <span>No.</span>
                    </div>
                    <div class="col-sm-6">
                        <span>Nama</span>
                    </div>
                    <div class="col-sm-3">
                        <span>Nilai</span>
                    </div>
                </div>

                <!-- Hasil -->
                <?php for($x=1; $x<=5; $x++) : ?>
                <div class="content-hasil row justify-content-sm-center">
                    <div class="col-sm-1 nomor">
                        <span><?= $x; ?>.</span>
                    </div>
                    <div class="col-sm-6 alternatif">
                        <span>Alternatif <?= $x; ?></span>
                    </div>
                    <div class="col-sm-3 nilai">
                        <span><?= $x; ?>.00</span>
                    </div>
                </div>
                <?php endfor;?>

                <!-- Tambah -->
                <div class="tambah-hasil row justify-content-sm-center">
                    <button type="button" class="popup-btn col-sm-4" data-popup="popup-reg">Tambah Alternatif</button>
                </div>
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