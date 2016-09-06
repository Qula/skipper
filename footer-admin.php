<span class="scrollToTop" title="Wróć na początek!"><i class="glyphicon glyphicon-arrow-up"></i></span>

<script src="js/bootstrap.min.js"></script>
<script src="js/sklep.min.js"></script>
<script src="js/zagle.min.js"></script>
<script src="trumbowyg/trumbowyg.min.js"></script>
<script src="trumbowyg/pl.min.js"></script>
<script src="trumbowyg/trumbowyg.table.js"></script>
<script src="js/trumbowyg.js"></script>

<footer>
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
</body>
</html>
