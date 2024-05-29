<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Admin</title>
    <link rel="stylesheet" href="<?= base_url('css/style-login.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('vendors/feather/feather.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('vendors/ti-icons/css/themify-icons.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('vendors/css/vendor.bundle.base.css') ?>" />
    <link rel="shortcut icon" href="<?= base_url('images/favicon.png') ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>

  <div class="container-scroller">
        <div class="page-body-wrapper full-page-wrapper">
            <div class="row">
                <div class="right-section">
                    <div class="content-wrapper d-flex align-items-center auth px-0">
                        <div class="auth-form">
                            <div class="img-icon">
                                <img src="../../images/gambar/bc_logo_sd.png" alt="" srcset="">
                            </div>
                            <h2>Hallo! Selamat Datang</h2>
                            <p>Masuk Dengan Username dan Password Anda.</p>
                            <?php if (session()->getFlashdata('error')): ?>
                                <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashdata('error') ?>
                                </div>
                            <?php endif; ?>
                            <form class="mb-5" action="/proses_login" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <span class="text-danger"></span>
                                    <input type="text" class="username" id="username" name="username" placeholder="Masukan Username"/>
                                </div>
                                <div class="form-group">
                                    <label for="katasandi">Kata Sandi</label>
                                    <span class="text-danger"></span>
                                    <input type="password" id="katasandi" class="katasandi" name="katasandi" placeholder="Masukan Kata Sandi"/>
                                </div>
                                <button type="submit" class="btn btn-primary" >Masuk</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('vendors/js/vendor.bundle.base.js') ?>"></script>
    <script src="<?= base_url('js/off-canvas.js') ?>"></script>
    <script src="<?= base_url('js/hoverable-collapse.js') ?>"></script>
    <script src="<?= base_url('js/template.js') ?>"></script>
    <script src="<?= base_url('js/settings.js') ?>"></script>
    <script src="<?= base_url('js/todolist.js') ?>"></script>
    <script src="<?= base_url('js\login.js') ?>"></script>

  </body>
</html>
