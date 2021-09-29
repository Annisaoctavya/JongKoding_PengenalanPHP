<?php
    define("PHI",3.14);
    $jari=8;
    $sisi=10;
    $alas=5;
    $tinggi=12;
    $sisia=7;
    $sisib=13;

    $luaspersegi=$sisi*$sisi;
    $luasst=0.5*$alas*$tinggi;
    $luastrap=0.5*$tinggi*($sisia+$sisib);
    $luaspt=2*PHI*$jari*($jari+$tinggi);
    $luaslingkaran=PHI*$jari*$jari;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator|JongKoding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <img src="logo.825423d.png" alt="Gsmbar Tidak Tersedia" style="max-height:120px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="float:right">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">About Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      My Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Log In</a></li>
                      <li><a class="dropdown-item" href="#">Sign In</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Layanan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Kalkulator</a></li>
                      <li><a class="dropdown-item" href="#">Konversi Satuan</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
        </div>
    </nav>
            <div class="container bg-light p-2 mb-5" style="border-radius: 10px;">
              <div class="row text-dark">
                <div class="col-md-12 p-3 pt-3" style="margin-left: 55px; display: flex;">
                  <h1>Menghitung luas bangun ruang dan bangun datar</h1> 
                  <i class="fas fa-question-circle" style="font-size: 40px; margin-left: 15px;margin-top: 8px;"></i>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 p-5 pt-2">
                  <div class="container mb-5">
                    <div class="row justify-content-center">
                      <div class="col-lg-12">
                        <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Berapa luas persegi jika sisinya sebesar 5 cm?
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              <?php echo "Dengan panjang sisi sebesar ".$sisi." maka luas persegi ialah ".$luaspersegi." cm"?>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Berapa luas segitiga jika alas dan tingginya masing-masing sebesar 5 cm dan 12 cm?
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <?php echo "Dengan panjang alas sebesar ".$alas." dan tinggi ".$tinggi." maka luas segitiga ialah ".$luasst." cm"?>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Berapa luas trapesium jika sisi sejajar a, sisi sejajar b dan tingginya masing-masing sebesar 7cm, 13cm dan 12 cm?
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              <?php echo "Dengan panjang sisi sejajar a sebesar ".$sisia." cm, sisi sejajar b ".$sisib." cm dan tinggi ".$tinggi." cm maka luas trapesium ialah ".$luastrap." cm"?>
                              </div>
                            </div>
                          </div>
                          <!-- 4 -->
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Berapa luas permukaan tabung jika diberikan jari-jari sebesar 8 cm dan tingginya sebesar 12cm ?
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              <?php echo "Dengan jari-jari tabung sebesar ".$jari." cm dan tinggi ".$tinggi." cm maka luas permukaan tabung ialah ".$luaspt." cm"?>
                              </div>
                            </div>
                          </div>
                          <!-- five -->
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Berapa luas lingkaran jika diberikan jari-jari sebesar 8 cm ?
                              </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              <?php echo "Dengan jari-jari sebesar ".$jari." cm maka luas lingkaran ialah ".$luaslingkaran." cm"?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!----------- Footer ------------>
          <footer class="footer-bs">
              <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <div class="footernya">
                        <img class="img-fluid" src="logo.825423d.png" width="100" height="100" style="margin: left 10px;">
                        <h2>JongKoding </h2>
                      </div>
                  </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Menu —</h4>
                    <div class="col-md-6">
                          <ul class="list">
                            <li><a href="dashboard.html">Home</a></li>
                            <li><a href="tentang-kami-view.html">About Us</a></li>
                            <li><a href="hubungi-kami.html">My Account</a></li>
                            <li><a href="FAQ.html">Layanan</a></li>
                          </ul>
                      </div>
                  </div>
                <div class="col-md-2 footer-social animated fadeInDown">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/donasi.tape">Facebook</a></li>
                        <li><a href="https://twitter.com/DonasiTape">Twitter</a></li>
                        <li><a href="https://www.instagram.com/donasi_tape/">Instagram</a></li>
                      </ul>
                  </div>
                <div class="col-md-3 footer-ns animated fadeInRight">
                    <h4>JongKoding </h4>
                    <div class="alamat">
                        <i class="fas fa-home me-3"></i> Jl. Majapahit No. 62 Mataram
                    <div class="tlp">
                        <i class="fas fa-phone me-3"></i> 
                        + 62 877 321 9940
                    </div>
                    <br>
                    <h6>
                        Ayo bantu para generasi muda bangsa!
                    </h6>
                </div>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>