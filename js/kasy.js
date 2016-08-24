$(function() {
    var malaPlus = {
        nazwa: "Mała Plus",
        zdjecia: [
            "kdpic/Mala_Plus.jpg"
        ],
        cechy : [
            "Zgrabna, energonomiczna obudowa",
            "Baza towarów: 3 000 towarów",
            "Dwa kody dla każdego towaru (kod porządkowy oraz kod kreskowy)"
        ],
        cena: "999 zł (netto)",
        opis: "Kasa fiskalna MAŁA PLUS (rozbudowana wersja kasy MAŁA) - to zaawansowany technologicznie produkt, przeznaczony dla niewielkich punktów sprzedaży. Nowoczesny design, sprawdzona, poparta wieloletnim doświadczeniem ergonomia, oraz zastosowanie podzespołów najwyższej jakości sprawią, że zarówno początkujący jak i wieloletni użytkownik kas fiskalnych znajdzie w nich to, czego obecnie można wymagać od urządzeń fiskalnych. Dzięki kompaktowym wymiarom kasa nie zabierze dużo miejsca na – często ograniczonej – powierzchni stanowiska sprzedaży.",
        dane: "Tutaj beda dane"
    };
    var lupo = {
        nazwa: "Lupo",
        zdjecia: [
            "kdpic/Lupo_1.jpg",
            "kdpic/Lupo_2.jpg",
            "kdpic/Lupo_3.jpg"
        ],
        cechy : [
            "Zgrabna, energonomiczna obudowa",
            "klawiszy funkcyjnych 4x2 poziomy) do zaprogramowania towarów szybkiej sprzedaży lub dostępnych w menu funkcji",
            "Baza towarów: 3 000 towarów"
        ],
        cena: "1090 zł (netto)",
        opis: "Kasa współpracuje z komputerem, pozwala na podłączenie czytnika kodów kreskowych, elektronicznej wagi kalkulacyjnej czy terminala płatniczego. Steruje szufladą na pieniądze.",
        dane: "Dane lupo"
    };
    $(".head-desc").on("click", function() {
        var kasa = $(this).attr("data-kasa");
//        console.log((malaPlus.zdjecia).length);


        if($("#kNazwa + span").length){
            clean();
        }
        if(kasa == "lupo"){
            showDetails(lupo);
        }else if(kasa == "malaPlus"){
            showDetails(malaPlus);
        }
       // showDetails(window["lupo"]);
        //$("#kNazwa").attr("src", haxsrc).removeClass("hidden").after("<img src='"+lupo.zdjecia[0]+"' class='img-responsive'>");
        //$("#kNazwa + img").remove();
        //$("#kZdjecia").after("<img src='"+kasa.zdjecia[0]+"' class='img-responsive'>");
        //$("#kCechy").after();
        //$("#kCena").after();
        //$("#kOpis").after();
        //$("#kDane").after();
    });
var html;
    function showDetails(kasa){
        $("#kNazwa").after("<span>"+kasa.nazwa+"</span>");
        html = "";
        for( var zdj in kasa.zdjecia){
            if(kasa.zdjecia.hasOwnProperty(zdj)){
                html += "<img src='"+kasa.zdjecia[zdj]+"' class='col-md-4 img-responsive'>";
            }
        }
        $("#kZdjecia").after(html);
        html = "<ul class='custom-bullet list-unstyled'>";
        for( var key in kasa.cechy){
            if(kasa.cechy.hasOwnProperty(key)){
                html += "<li><i class='glyphicon glyphicon-chevron-right'></i> "+kasa.cechy[key]+"</li>";
            }
        }
        $("#kCechy").after(html + "</ul>");
        $("#kCena").after("<p>"+kasa.cena+"</p>");
        $("#kOpis").after("<p>"+kasa.opis+"</p>");
        $("#kDane").after("<table class='table table-hover'><thead>            <tr>            <th>Firstname</th>            <th>Lastname</th>            <th>Email</th>            </tr> </thead>            <tbody>            <tr> <td>John</td> <td>Doe</td>            <td>john@example.com</td>        </tr>        <tr>        <td>Mary</td>        <td>Moe</td>        <td>mary@example.com</td>        </tr>        <tr>        <td>July</td>        <td>Dooley</td>        <td>july@example.com</td>        </tr>        </tbody></table>");
    }
    function clean (){
        $("#kNazwa + span").remove();
        $("#kZdjecia").nextAll().remove();
        $("#kCechy + ul").remove();
        $("#kCena + p").remove();
        $("#kOpis + p").remove();
        $("#kDane + table").remove();
    }

    //<ul class="custom-bullet list-unstyled ">
    //    <li><i class="glyphicon glyphicon-chevron-right"></i> komputerów stacjonarnych</li>
    //<li><i class="glyphicon glyphicon-chevron-right"></i> laptopów</li>
    //<li><i class="glyphicon glyphicon-chevron-right"></i> kas i drukarek fiskalnych</li>
    //<li><i class="glyphicon glyphicon-chevron-right"></i> odzyskujemy dane</li>
    //<li><i class="glyphicon glyphicon-chevron-right"></i> usuwamy szkodliwe oprogramowanie (wirusy, trojany, spam)</li>
    //<li><i class="glyphicon glyphicon-chevron-right"></i> instalujemy oprogramowanie (windows, sterowniki, anty-virus, open office itp.)</li>
    //<li><i class="glyphicon glyphicon-chevron-right"></i> budujemy i konfigurujemy sieci komputerowe</li>
    //<li> oraz wiele innych.</li>
    //</ul>
    //
    //

    //var form = $('#ajax-contact');
    //var formMessages = $('#form-messages');
    //
    //$(form).submit(function(e) {
    //    e.preventDefault();
    //
    //    var formData = $(form).serialize();
    //
    //    $.ajax({
    //        type: 'POST',
    //        url: $(form).attr('action'),
    //        data: formData
    //    })
    //        .done(function(response) {
    //            $(formMessages).removeClass('error');
    //            $(formMessages).addClass('success');
    //
    //            $(formMessages).text(response);
    //
    //            $('#name').val('');
    //            $('#email').val('');
    //            $('#telephone').val('');
    //            $('#message').val('');
    //            grecaptcha.reset();
    //        })
    //        .fail(function(data) {
    //            $(formMessages).removeClass('success');
    //            $(formMessages).addClass('error');
    //
    //            if (data.responseText !== '') {
    //                $(formMessages).text(data.responseText);
    //            } else {
    //                $(formMessages).text('Oops! Napotkano bład i Twoja widomość nie zostanie wysłana.');
    //            }
    //        });
    //
    //});

});
