<?php include 'header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 scroll" data-target="#onas">
            <div class="head-desc">
                <img src="pic/onas.png" class="img-responsive" alt="">
                <div class="head-name">
                    <p>O nas</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 scroll" data-target="#kasydrukarki">
            <div class="head-desc">
                <img src="pic/kasydrukarki.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Kasy i&nbspdrukarki</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 scroll" data-target="#serwis">
            <div class="head-desc">
                <img src="pic/serwis.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Serwis</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 scroll" data-target="#oprogramowanie">
            <div class="head-desc">
                <img src="pic/oprogramowanie.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Oprogramowanie</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 scroll" data-target="#sprzetkomputerowy">
            <div class="head-desc">
                <img src="pic/sprzetkomputerowy.jpg" class="img-responsive" alt="">
                <div class="head-name special">
                    <p>Sprzęt komputerowy</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 scroll" data-target="#oprogramowaniedlafirm">
            <div class="head-desc">
                <img src="pic/oprogramowaniedlafirm.jpg" class="img-responsive" alt="">
                <div class="head-name special">
                    <p>Oprogramowanie dla&nbspfirm</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 scroll" data-target="#terminale">
            <div class="head-desc">
                <img src="pic/terminale.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Terminale płatnicze</p>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <h1 id="onas">O nas</h1>
    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
            <p>Od ponad X lat specjalizujemy się w... coś tam dalej</p>
            <p>Jeszcze wiecej</p>
            <p>i jeszcze!</p>
            <h3>Adres: </h3>
            <address>
                <strong>SKIPPER - Paweł Butscher</strong>
                <br>33-300 Nowy Sącz
                <br>ul. Jana Matejki 36
            </address>
            <h3>Kontakt: </h3>
            <address>

                Tel: 607-913-007
                <br>Tel: 664-455-799
                <br>Tel: 18 443-56-18
                <br>
                <p class="scroll" id="napiszdonas" data-target="#kontakt">Napisz do nas!</p>
            </address>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-10 before-card">
            <div id="card">
                <div class="front">
                    <img class="img-responsive" src="pic/mapa.JPG">
                </div>
                <div class="back">
                    <img class="img-responsive hidden" id="map-load" src="pic/load.gif">
                    <iframe class="embed-responsive-item" frameborder="0"></iframe>
                </div>
            </div>
        </div>
<!--        <img class="img-responsive col-lg-6 col-md-6 col-sm-6 col-xs-10" src="http://placehold.it/500x400">-->
<!--        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">-->
<!--            <iframe class="embed-responsive-item" frameborder="0" src="https://www.google.com/maps/d/embed?ll=49.619997%2C20.697234&spn=0.005144%2C0.01178&output=embed&hl=pl&t=h&msa=0&z=16&ie=UTF8&mid=1BXXAadxShwIur62uwPIPNgs6U20" width="100%" height="400"></iframe>-->
<!--        </div>-->

    </div>

    <hr>
    <h1 id="kasydrukarki">Kasy i drukarki</h1>
    <div class="row">
        <div class="col-xs-12" >
            W ofercie posiadamy kasy oraz drukarki fiskalne. Więcej szczegółow po wybraniu kategorii:
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" id="kasy">
            <a href="kasy.php">
                <span>Kasy fiskalne</span>
                <img src="pic/kasy_fiskalne.jpg" class="img-responsive center-block">
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center" id="kasy">
            <a href="#">
                <span>Drukarki fiskalne</span>
                <img src="pic/drukarki_fiskalne.jpg" class="img-responsive center-block">
            </a>
        </div>
    </div>


    <hr>
    <h1 id="serwis">Serwis</h1>
    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">

            <h4>Prowadzimy serwis: </h4>
            <ul class="custom-bullet list-unstyled ">
                <li><i class="glyphicon glyphicon-chevron-right"></i> komputerów stacjonarnych</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> laptopów</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> kas i drukarek fiskalnych</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> odzyskujemy dane</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> usuwamy szkodliwe oprogramowanie (wirusy, trojany, spam)</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> instalujemy oprogramowanie (windows, sterowniki, anty-virus, open office itp.)</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> budujemy i konfigurujemy sieci komputerowe</li>
                <li> oraz wiele innych.</li>
            </ul>


        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <img src="pic/serwis_info.jpg" class="img-responsive">
            </div>
        </div>
    </div>

    <hr>
    <h1 id="oprogramowanie">Oprogramowanie</h1>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                <img src="pic/kaspersky.jpg" class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                <img src="pic/norton.jpg" class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                <img src="pic/aktyn.jpg" class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                <img src="pic/windows.jpg" class="img-responsive">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <img src="pic/office.jpg" class="img-responsive">
            </div>


        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
            <h4>Zajmujemy się sprzedażą, instalacją oraz konfiguracją oprogramowania:</h4>
            <ul class="custom-bullet list-unstyled ">
                <li><i class="glyphicon glyphicon-chevron-right"></i> River (Aktyn)</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> Kaspersky Lab</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> Symantec (Norton)</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> Microsoft (Windows, Office)</li>
                <li> oraz wiele innych.</li>
            </ul>
        </div>
    </div>

    <hr>
    <h1 id="sprzetkomputerowy">Sprzęt komputerowy</h1>
    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">

            <h4>Oferujemy szeroką gamę sprzętu komputerowego i akcesoriów:</h4>
            <ul class="custom-bullet list-unstyled ">
                <li><i class="glyphicon glyphicon-chevron-right"></i> komputery stacjonarne</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> laptopy</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> monitory</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> drukarki</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> urządzenia wielofunkcyjne</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> klawiatury, mysze komputerowe, słuchawki</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> materiały eksploatayjne (tusze, tonery)</li>
                <li> oraz wiele innych.</li>
            </ul>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <img src="pic/sprzet.jpg" class="img-responsive" id="sp">
            </div>
        </div>
    </div>

    <hr>
    <h1 id="oprogramowaniedlafirm">Oprogramowanie dla firm</h1>
    <div class="row">
        <span class="col-sm-12">W ofercie posiadamy oprogramowania Aktyn przeznaczone dla firm. Dodatkowe informacje po wybraniu oprogramowania.</span>
        <div class="aktyn">
            <div class="col-md-4 col-sm-4 col-xs-6" id="asprzedaz" data-name="aktyn-sprzedaz">
                <div class="front"><span class="hand"><i class="glyphicon glyphicon-chevron-right"></i> Aktyn System Sprzedaży</span></div>
                <div class="back"><span class="hand"><i class="glyphicon glyphicon-chevron-right"></i><strong> Aktyn System Sprzedaży</strong></span></div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6" id="afinanse" data-name="aktyn-finanse">
                <div class="front"><span class="hand"><i class="glyphicon glyphicon-chevron-right"></i> Aktyn Finanse - Księgowość</span></div>
                <div class="back"><span class="hand"><i class="glyphicon glyphicon-chevron-right"></i><strong> Aktyn Finanse - Księgowość</strong></span></div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6" id="aplace" data-name="aktyn-place">
                <div class="front"><span class="hand"><i class="glyphicon glyphicon-chevron-right"></i> Aktyn Płace - Kadry</span></div>
                <div class="back"><span class="hand"><i class="glyphicon glyphicon-chevron-right"></i><strong> Aktyn Płace - Kadry</strong></span></div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6" id="asrodki" data-name="aktyn-srodki">
                <div class="front"><span class="hand"><i class="glyphicon glyphicon-chevron-right"></i> Aktyn Środki Trwałe</span></div>
                <div class="back"><span class="hand"><i class="glyphicon glyphicon-chevron-right"></i><strong> Aktyn Środki Trwałe</strong></span></div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6" id="aksiega" data-name="aktyn-ksiega">
                <div class="front"><span class="hand"><i class="glyphicon glyphicon-chevron-right"></i> Aktyn Księga Przychodów i Rozchodów</span></div>
                <div class="back"><span class="hand"><i class="glyphicon glyphicon-chevron-right"></i><strong> Aktyn Księga Przychodów i Rozchodów</strong></span></div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6" id="acennik" data-name="aktyn-cennik">
                <div class="front"><span class="hand"><i class="glyphicon glyphicon-chevron-right"></i> Aktyn Cennik</span></div>
                <div class="back"><span class="hand"><i class="glyphicon glyphicon-chevron-right"></i><strong> Aktyn Cennik</strong></span></div>
            </div>
        </div>


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="aktyn-sprzedaz hidden">
                <span class="opis">
                    <strong>Aktyn Sprzedaż PRO </strong> <br>
                    Wersje dostosowane do zróżnicowanych potrzeb i możliwości klientów: Quatro, Omega, Polo. Zautomatyzowana współpraca z programami Aktyn Finanse-Księgowość, Aktyn KPR.
                    <br>
                </span>
                <span class="opis">
                    <strong>Aktyn Pro Omega</strong><br>
                    Ilościowo-wartościowa ewidencja obrotu towarowego, sprzedaż usług, kompletacja.
                    Elastyczność - możliwość zastosowania zarówno w pojedynczym punkcie sprzedaży lub magazynie jak i w sieci sklepów detalicznych lub hurtowni, w firmach wielooddziałowych .
                    Bogaty zestaw dokumentów sprzedaży, magazynowych, kasowych.
                    Obsługa rozliczeń rozrachunków i kasy, współpraca z systemami bankowości elektronicznej.
                    Mechanizmy zapobiegania i egzekwowania tzw. trudnych należności: limity kredytu, możliwość blokady sprzedaży, historia płatności, noty odsetkowe.
                    Bogate możliwości współpracy z kasami i drukarkami fiskalnymi, terminalami sprzedaży, wagami metkującymi, kolektorami danych, drukarkami kodów kreskowych.
                    Współpraca z systemami sprzedaży mobilnej – obsługa sieci przedstawicieli handlowych.
                    Zaawansowane systemy rabatowe, programy lojalnościowe.
                    Bogate możliwości raportowania.
                    Określanie praw dostępu użytkowników np. do wybranych magazynów, do cen zakupu.
                    <br>
                </span>
                <span class="opis">
                    <strong>Fiskas</strong><br>
                    Program 'Fiskas' przeznaczony jest dla firm handlowych rejestrujących sprzedaż na kasach fiskalnych. Wspomaga obsługę kas fiskalnych i wag metkujących. Może pracować samodzielnie lub współpracować z programem magazynowym Aktyn Pro.
                    <br>
                </span>
                <span class="opis">
                    <strong>Najważniejsze cechy:</strong><br>
                    atwe i szybkie konfigurowanie jednej lub wielu kas.
                    Możliwość wygodnego przygotowania cennika lub jego importu z programu magazynowego.
                    Szybkie przesyłanie cennika w całości lub częściowo do wszystkich obsługiwanych kas.
                    Możliwość odczytywania danych o sprzedaży dokonanej na poszczególnych kasach.
                    Czytelne raporty ze sprzedaży w dowolnym momencie i za dowolny okres.
                    Kontrola kasjerów (dostępna w zależności od modelu kasy).
                    Współpraca z programem magazynowym
                    <br>
                </span>
            </div>
            <div class="aktyn-finanse hidden">
                <span class="opis">
                    Zgodność z ustawą o rachunkowości.<br>
                    Możliwość zdefiniowania dowolnego systemu ewidencji księgowej.<br>
                    Bogata funkcjonalność umożliwiająca realizację wszystkich operacji księgowych.<br>
                    Integracja z innymi programami z pakietu Aktyn - automatyczne księgowanie dokumentów wystawionych w systemie sprzedaży Aktyn Pro oraz w aplikacjach Płace-Kadry i Środki Trwałe.<br>
                    Zaawansowane mechanizmy automatycznego księgowania operacji gospodarczych – zastosowanie ich pozwala na znaczne obniżenie kosztów pracy.<br>
                    Bogata funkcjonalność modułu rozrachunkowego.<br>
                    Możliwość generowania zarówno podstawowych zestawień jak również tworzenia własnych wzorów raportów księgowych.<br>
                    Rozbudowane mechanizmy ochrony danych.<br>
                    Wygodna obsługa, wbudowane mechanizmy pomocy kontekstowej.<br>
                    Wersja dla biur rachunkowych.

                </span>
            </div>
            <div class="aktyn-place hidden">
                <span class="opis">
                    <strong>Aktyn Płace Kadry</strong><br>
                    Obsługa kadrowo-płacowa dużych i średnich przedsiębiorstw o różnym typie działalności.<br>
                    Wygodne definiowanie dowolnie skomplikowanego systemu płacowego.<br>
                    Kompletny zestaw deklaracji ZUS i deklaracji podatkowych.<br>
                    Bogate możliwości tworzenia dokumentów kadrowo-płacowych: umów o pracę, umów-zleceń, umów o dzieło, innych.<br>
                    Rozbudowana ewidencja pracowników.<br>
                    Pełna ewidencja czasu pracy.<br>
                    Wygodne przygotowywanie przelewów (ZUS, urzędy skarbowe, pracownicy).<br>
                    Współpraca z systemami bankowości elektronicznej.<br>
                    Współpraca z programem Płatnik oraz programem Aktyn-W Kapitał Początkowy.<br>
                    Wygodna obsługa, wbudowane mechanizmy pomocy kontekstowej.<br>
                    Wersja dla biur rachunkowych.
                    <br>
                    <strong>Aktyn Płace Kadry PRO</strong><br>
                    Dodatkowe ewidencje kadrowe.<br>
                    Zaawansowane mechanizmy raportujące.<br>
                    Zestawienia 'Ad-hoc'.<br>
                    Planowanie i rozliczanie czasu pracy grup pracowników.<br>
                    Wykorzystanie Zasobów Pracy.<br>
                    Zestawienia do sprawozdań GUS.
                </span>
            </div>
            <div class="aktyn-ksiega hidden">
                <span class="opis">
                    Prowadzenie uproszczonej ewidencji księgowej oraz ewidencji zakupów i sprzedaży VAT.<br>
                    Możliwość prowadzenia ewidencji sprzedaży dla podatku zryczałtowanego
                    Wprowadzanie dokumentów do księgi poprzez odpowiednie rejestry, dostępne w programie lub tworzone na bieżąco. Gotowe rejestry są podstawą tworzenia zestawień pomocniczych przy kontroli kosztów.<br>
                    Wygodna obsługa, wbudowane mechanizmy pomocy kontekstowej.<br>
                    Rozliczanie kosztów eksploatacji pojazdów.<br>
                    Wygodna współpraca z programami: Aktyn Pro, Aktyn-W Płace-Kadry, Aktyn-W Środki Trwałe.<br>
                    Kompleksowe rozliczenie firmy i wspólników z urzędem skarbowym (VAT 7, PIT 5, dodatkowe raporty)
                    Bogaty zestaw słowników ułatwiających wprowadzanie danych i eliminujących możliwość pomyłek.<br>
                    Bogate możliwości konfiguracyjne programu dostosowujące system zarówno do zmieniających się przepisów jak i do indywidualnych wymagań użytkownika.<br>
                </span>
            </div>
            <div class="aktyn-srodki hidden">
                <span class="opis">
                    Wygodne w użyciu kartoteki środków trwałych.<br>
                    Pełny opis środka zawierający wszystkie potrzebne informacje.<br>
                    Rejestracja historii wszystkich działań związanych z danym środkiem (odpisy, przeszacowania, likwidacje).<br>
                    Automatyczne wykonywanie odpisów amortyzacyjnych.<br>
                    Dwa tory amortyzacji: bilansowa i podatkowa.<br>
                    Możliwość amortyzacji środków sezonowych.<br>
                    Współpraca z systemem inwentaryzacji środków trwałych przy pomocy kodów kreskowych.<br>
                    Rozbudowane zestawienia i raporty.<br>
                    Bogate możliwości analityczno-symulacyjne.<br>
                    Wygodna obsługa, wbudowane mechanizmy pomocy kontekstowej.<br>
                    Możliwość obsługi wielu podmiotów gospodarczych - wykorzystywany także przez biura rachunkowe.
                </span>
            </div>
            <div class="aktyn-cennik hidden">
                Cennik w formacie PDF:
            </div>
        </div>
    </div>


    <hr>
    <h1 id="terminale">Terminale płatnicze</h1>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <h4>Oferujemy terminale operatora:</h4>
            <img src="pic/paytel_logo.jpg" class="img-responsive">

        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" id="terminale-line">
            <h4>Pozwalają na:</h4>
            <ul class="custom-bullet list-unstyled ">
                <li><i class="glyphicon glyphicon-chevron-right"></i> Sprzedaż i dystrybucję doładowań do przedpłacanych kont sieci GSM poprzez terminale (w trybie off-line) oraz Internet</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> Sprzedaż produktów operatorów telekomunikacyjnych VoIP</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> Obsługę płatności masowych (rachunki za telefon, wodę, prąd, gaz itp.)</li>
                <li><i class="glyphicon glyphicon-chevron-right"></i> Obsługę kartowych transakcji płatniczych (VISA, VISA ELECTRON, MasterCard, MasterCard Electronic, Maestro)</li>
            </ul>
        </div>
    </div>


    <hr>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <h1 id="kontakt">Kontakt</h1>
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
            <form id="ajax-contact" class="form-horizontal" role="form" method="post" action="mailer.php">
                <div class="form-group">
                    <label for="select" class="col-sm-3 control-label">W&nbspsprawie*</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="contact">
                            <option value="aktyn" selected="selected">Aktyna</option>
                            <option value="kasy">Kas i Drukarek fiskalnych</option>
                            <option value="komputery">Komputerów i akcesoriów</option>
                            <option value="komputery">Napraw serwisowych</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">E-mail*</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email" placeholder="przyklad@domena.pl" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefon" class="col-sm-3 control-label">Telefon</label>
                    <div class="col-sm-9">
                        <input type='tel' pattern="^\d{3}?\d{3}?\d{3}$" class="form-control" id="telephone" name="telefon" placeholder="123-456-789" title="Format: 123-456-789" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Temat*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Temat wiadomości" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-3 control-label">Treść*</label>
                    <div class="col-sm-9">
                        <textarea id="message" class="form-control" rows="4" name="message" placeholder="Przykładowa treść wiadomości" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="captcha" class="col-sm-3 control-label">Zaznacz*</label>
                    <div class="col-sm-9 ">
                        <div class="g-recaptcha" data-sitekey="6LfGxBwTAAAAAGTdagt32GKPtufgym1IzgE7UPyu"></div>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <p>* Wymagane pola</p>
                        <input id="submit" name="submit" type="submit" value="Wyślij" class="btn btn-primary">
                    </div>
                </div>
            </form>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div id="form-messages"></div>
                    </div>
                </div>
        </div>
    </div>



    <hr>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
<!--<!--                <h1 class="text-center">Mapa</h1>-->-->
<!--            </div>-->
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" frameborder="0"></iframe>
                </div>
<!--                <iframe class="embed-responsive-item embed-responsive-16by9" frameborder="0" src="https://www.google.com/maps/d/embed?ll=49.619997%2C20.697234&spn=0.005144%2C0.01178&output=embed&hl=pl&t=h&msa=0&z=16&ie=UTF8&mid=1BXXAadxShwIur62uwPIPNgs6U20" width="100%"></iframe>-->

            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'?>
