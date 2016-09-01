<?php include 'header.php'; ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
<div class="row">
    <div class="col-md-3 col-md-offset-5 col-sm-3 col-sm-offset-5 col-xs-5 col-xs-offset-4">
        <form action="user-manager.php?command=login" method="post">
            <input id="login" type="text" class="form-control" name="login" placeholder="Nazwa użytkownika" required>
            <input id="password" type="password" class="form-control" name="password" placeholder="Hasło" required>
            <div class="g-recaptcha" data-sitekey="6LfGxBwTAAAAAGTdagt32GKPtufgym1IzgE7UPyu"></div>
            <?php
            if (isset($_GET['error'])) {
                $error = $_GET['error'];
                if ($error == 'loginError') {
                    echo '<br><p>Niepoprawna nazwa użytkownika lub hasło!</p>';
                }else if($error == 'recaptchaError'){
                    echo '<br><p>Błąd reCaptcha!</p>';
                }
            }
            ?>

            <button class="btn btn-primary">Zaloguj</button>
        </form>
    </div>
</div>

<?php include 'footer-sklep.php'; ?>