<span class="scrollToTop" title="Wróć na początek!"><i class="glyphicon glyphicon-arrow-up"></i></span>

<!--    <script src="bootstrap336/js/jquery-1.12.2.min.js"></script>-->
<!--    <script src="bootstrap336/js/bootstrap.min.js"></script>-->
<!--    <script src="bootstrap336/js/jquery-ui.min.js"></script>-->
<!--    <script src="js/jquery.scrollTo.min.js"></script>-->
<!--    <script src="js/jquery.flip.min.js"></script>-->



<!--    <script src="js/script.js"></script>-->
<!--    <script src="js/view.js"></script>-->
<!--    <script src="js/ajax-mail.js"></script>-->
<!--    <script src="js/jquery.magnific-popup.min.js"></script>-->
<!--    <script src="js/gallery.js"></script>-->

<script src="js/sklep.min.js"></script>
<script src="js/zagle.min.js"></script>






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
