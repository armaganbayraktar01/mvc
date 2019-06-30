<?php require View::app('static/header') ?>

<!-- error veya success mesajlarının gösterilmesi -->
<?php if (post('submit')): ?>

    <?php if($error = error()): ?> 
        <div class="alert alert-danger" role="alert"><?= $error ?></div>
    <?php endif; ?>

    <?php if($success = success()): ?> 
        <div class="alert alert-success" role="alert"><?= $success ?></div>
    <?php endif; ?>
<?php endif; ?>
<!-- //error veya success mesajlarının gösterilmesi -->

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-5">
            <div class="card cardbox">
                <div class="card-header">Üye Giriş Sayfası</div>
                <div class="card-body">
                    <div class="social-buttons">
                        <a href="#" class="btn btn-lg btn-block btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="#" class="btn btn-lg btn-block btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                    <div class="login-or">
                        <hr class="hr-or">
                        <span class="span-or">ya da</span>
                    </div>
                    <div class="form-group">
                        <form class="form" role="form" method="post" accept-charset="UTF-8"
                            id="login-nav">
                            <div class="form-group">
                                <label class="sr-only" for="username">Kullanıcı Adınız</label>
                                <input type="text" name="user_name" class="form-control" id="username"
                                    placeholder="Kullanıcı Adınız" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Şifreniz</label>
                                <input type="password" name="user_password" class="form-control"
                                    id="exampleInputPassword2" placeholder="Şifreniz" required>
                                <div class="help-block text-right"><a href="">Şifremi Unuttum</a></div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="submit" value="1">
                                <button type="submit" class="btn-primary btn-lg btn-block">Oturumu Başlat</button>
                            </div>
                            <div class="checkbox">
                                <label class=""><input type="checkbox">   Beni Hatırla </label>
                            </div>
                        </form>
                    </div>
                    <div class="login-or">
                        <hr class="hr-or">
                    </div>
                    <div class="bottom text-center">
                        Üye değil misin? <a href="#"><b>Kayıt Ol!</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require View::app('static/footer') ?>