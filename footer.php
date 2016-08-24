<!--<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog">-->
<!--    <div class="modal-dialog modal-sm">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
<!--                <h1 class="text-center">O programie</h1>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <h5>-->
<!--                    Projektowanie rozwiązań internetowych.<br>-->
<!--                    Autor: MK<br><br>-->
<!--                    Uniwersytet Śląski, 2016-->
<!--                </h5>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<span class="scrollToTop" title="Wróc na początek!"><i class="glyphicon glyphicon-arrow-up"></i></span>

    <script src="bootstrap336/js/jquery-1.12.2.min.js"></script>
    <script src="bootstrap336/js/bootstrap.min.js"></script>
    <script src="bootstrap336/js/jquery-ui.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.flip.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/view.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/kasy.js"></script>



</body>
<footer id="footer">
    <nav class="navbar navbar-default">
        <div class="container foot">
            <p>Copyright 2016 | Wszelkie prawa zastrzeżone |
                <?php if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
                                        echo '<a href="login.php" id="skipperlog" >SKIPPER</a>';
                }else{

                } ?>
                </p>
        </div>
    </nav>
</footer>
</html>
