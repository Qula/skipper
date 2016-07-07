<?php include 'header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <a href="sklep.php#onas">
                <div class="col-md-12 head-desc">
                    <img src="pic/onas.png" class="img-responsive" alt="">
                    <div class="head-name">
                        <p>O nas</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <a href="#">
                <div class="col-md-12 head-desc">
                    <img src="pic/kasydrukarki.jpg" class="img-responsive" alt="">
                    <div class="head-name">
                        <p>Kasy i&nbspdrukarki</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <a href="#">
                <div class="col-md-12 head-desc">
                    <img src="pic/serwis.jpg" class="img-responsive" alt="">
                    <div class="head-name">
                        <p>Serwis</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <a href="#">
                <div class="col-md-12 head-desc">
                    <img src="pic/oprogramowanie.jpg" class="img-responsive" alt="">
                    <div class="head-name">
                        <p>Oprogramowanie</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <a href="#">
                <div class="col-md-12 head-desc">
                    <img src="pic/sprzetkomputerowy.jpg" class="img-responsive" alt="">
                    <div class="head-name">
                        <p>Sprzęt komputerowy</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <a href="#">
                <div class="col-md-12 head-desc">
                    <img src="pic/oprogramowaniedlafirm.jpg" class="img-responsive" alt="">
                    <div class="head-name">
                        <p>Oprogramowanie dla&nbspfirm</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <a href="#">
                <div class="col-md-12 head-desc">
                    <img src="pic/terminale.jpg" class="img-responsive" alt="">
                    <div class="head-name">
                        <p>Terminale płatnicze</p>
                    </div>
                </div>
            </a>
        </div>



    </div>
    <hr>
    <h1 id="onas">O nas</h1>
    <div class="row">
        <img class="img-responsive col-lg-6 col-md-6 col-sm-6 col-xs-10" src="http://placehold.it/500x400">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <p>Od ponad X lat specjalizujemy się w... coś tam dalej</p>
            <p>Jeszcze wiecej</p>
            <p>i jeszcze!</p>
            <h2>Adres:</h2>
            <address>
                <strong>SKIPPER - Paweł Butscher</strong>
                <br>33-300 Nowy Sącz
                <br>ul. Jana Matejki 36
                <br><a href="" data-toggle="modal" data-target="#aboutModal">Mapa</a>
                <button type="button" class="modalButton" data-toggle="modal" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91737.51273778046!2d12.566428499999994!3d44.06689465000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132cc3a48fa6592b%3A0xc1f284db17f1449d!2sRimini+RN!5e0!3m2!1sit!2sit!4v1427492339750" data-width="600" data-height="450" data-target="#aboutModal">Google maps</button>
            </address>
            <h2>Kontakt</h2>
            <address>
                Tel: 607-913-007
                <br>Tel: 664-455-799
                <br>Tel: 18 443-56-18
                <br>
                <a href="">Napisz do nas!</a>
            </address>

        </div>
    </div>

    <hr>

    <h1>Kasy i drukarki</h1>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img class="img-responsive col-lg-4 col-md-4 col-sm-4 col-xs-6" src="http://placehold.it/500x400">
        <p>Cos tam</p>

    </div>

</div>

<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h1 class="text-center">Mapa</h1>
            </div>
            <div class="modal-body">

                <iframe class="embed-responsive-item embed-responsive-16by9" frameborder="0" src="https://www.google.com/maps/d/embed?ll=49.619997%2C20.697234&spn=0.005144%2C0.01178&output=embed&hl=pl&t=h&msa=0&z=16&ie=UTF8&mid=1BXXAadxShwIur62uwPIPNgs6U20" width="100%"></iframe>
                <h5>
                    opis
                </h5>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'?>
