<?php
$title = 'SKIPPER.COM.PL - kasy fiskalne';
include 'header.php' ?>

<div class="container">
    <button type="button" class="btn btn-primary" onclick="goBack()">Wróć do poprzedniej strony</button>

    <h4>Wybierz kase:</h4>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <div class="head-desc" data-kasa="malaPlus">
                <img src="kdpic/Mala_Plus.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Mała Plus</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="head-desc" data-kasa="lupo">
                <img src="kdpic/Lupo_1.JPG" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Lupo</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row opis-kas">
        <div class="col-lg-12">
            <h3 id="kNazwa">Nazwa: </h3>
            <h3 id="kZdjecia">Zdjęcia: </h3>
        </div>
    </div>

    <div class="row opis-kas">
        <div class="col-lg-12">
            <h3 id="kCechy">Cechy wyrozniajace: </h3>
            <h3 id="kCena">Cena: </h3>
        </div>
    </div>

    <div class="row opis-kas">
        <div class="col-lg-12">
            <h3 id="kOpis">Opis produktu: </h3>

        </div>
    </div>

    <div class="row opis-kas">
        <div class="col-lg-12">
            <h3 id="kDane">Dane techniczne: </h3>
        </div>
    </div>




    <hr>
</div>


<?php include 'footer-sklep.php' ?>
