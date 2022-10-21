<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/apro-svg.svg" title="Favicon" sizes="16x16" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        html, body {
            font-family: Arial, Helvetica, sans-serif !important;
            background-image: url("images/background.jpg") !important;
            background-position:center center !important;
            background-repeat:no-repeat !important;
            background-size:cover !important;
        }

        label {
            color: #000000 !important;
            font-family: Arial, Helvetica, sans-serif !important;
            font-size: 18px !important;
        }

        h1 {
            color: #000000 !important;
            text-align: center !important;
            margin-top:20px !important;
            font-family: Arial, Helvetica, sans-serif !important;
            font-size: 24px !important;
            line-height: 40px !important;
        }

        .not {
            color:#000000 !important;
            text-align: center !important;
            margin-top: 40px !important;
        }
    </style>
  </head>
  <body>
    <div class="container" style="max-width:600px !important;">
        <div class="row">

            <div class="col-md-12">
                <img src="images/logo.png" style="display:block !important;width:300px !important;margin:0 auto !important;margin-top:40px !important;">
                <h1>E-Posta İmza Oluşturucu</h1>
            </div>

            <form class="row g-3 needs-validation" action="create.php" method="post" novalidate>
                <div class="col-md-6">
                    <!-- FORM -->
                    <div class="mb-1">
                        <label for="label_1" class="form-label">Ad Soyad</label>
                        <input type="text" name="ad_soyad" class="form-control" id="label_1" placeholder="Ad Soyad" autocomplete="off" required>
                        <!-- valid -->
                        <div class="invalid-feedback">
                            Kullanıcı adı boş olamaz !
                        </div>
                        <!-- end / valid -->
                    </div>
                    <!-- END / FORM -->
                </div>

                <div class="col-md-6">
                    <!-- FORM -->
                    <div class="mb-1">
                        <label for="label_2" class="form-label">Ünvan</label>
                        <input type="text" name="unvan" class="form-control" id="label_2" placeholder="Ünvan" autocomplete="off" required>
                        <!-- valid -->
                        <div class="invalid-feedback">
                            Ünvan boş olamaz !
                        </div>
                        <!-- end / valid -->
                    </div>
                    <!-- END / FORM -->
                </div>

                <div class="col-md-12">
                    <!-- FORM -->
                    <div class="mb-1">
                        <label for="label_3" class="form-label">Adres</label>
                        <input type="text" name="adres" class="form-control" id="label_3" placeholder="Adres" autocomplete="off" required>
                        <!-- valid -->
                        <div class="invalid-feedback">
                            Adres boş olamaz !
                        </div>
                        <!-- end / valid -->
                    </div>
                    <!-- END / FORM -->
                </div>

                <div class="col-md-6">
                    <!-- FORM -->
                    <div class="mb-1">
                        <label for="label_4" class="form-label">İl</label>
                        <input type="text" name="il" class="form-control" id="label_4" placeholder="İl" autocomplete="off" required>
                        <!-- valid -->
                        <div class="invalid-feedback">
                            İl boş olamaz !
                        </div>
                        <!-- end / valid -->
                    </div>
                    <!-- END / FORM -->
                </div>

                <div class="col-md-6">
                    <!-- FORM -->
                    <div class="mb-1">
                        <label for="label_5" class="form-label">İlçe</label>
                        <input type="text" name="ilce" class="form-control" id="label_5" placeholder="İlçe" autocomplete="off" required>
                        <!-- valid -->
                        <div class="invalid-feedback">
                            İlçe boş olamaz !
                        </div>
                        <!-- end / valid -->
                    </div>
                    <!-- END / FORM -->
                </div>

                <div class="col-md-12">
                    <!-- FORM -->
                    <div class="mb-1">
                        <label for="label_6" class="form-label">Telefon</label>
                        <input type="text" name="telefon" class="form-control" id="label_6" placeholder="Telefon" autocomplete="off" required>
                        <!-- valid -->
                        <div class="invalid-feedback">
                            Telefon boş olamaz !
                        </div>
                        <!-- end / valid -->
                    </div>
                    <!-- END / FORM -->
                </div>

                <div class="col-md-12">
                    <!-- FORM -->
                    <div class="mb-1">
                        <label for="label_7" class="form-label">Fax</label>
                        <input type="text" name="fax" class="form-control" id="label_7" placeholder="Fax" autocomplete="off" required>
                        <!-- valid -->
                        <div class="invalid-feedback">
                            Fax boş olamaz !
                        </div>
                        <!-- end / valid -->
                    </div>
                    <!-- END / FORM -->
                </div>

                <div class="col-md-12">
                    <!-- FORM -->
                    <div class="mb-1">
                        <label for="label_8" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="label_8" placeholder="Email" autocomplete="off" required>
                        <!-- valid -->
                        <div class="invalid-feedback">
                            Email boş olamaz !
                        </div>
                        <!-- end / valid -->
                    </div>
                    <!-- END / FORM -->
                </div>

                <div class="col-12" style="text-align:right !important;">
                    <button class="btn btn-danger fw-bold" type="submit">İmza Oluştur</button>
                </div>
            </form>

            <div class="col-md-12">
                <div style="display:block !important;margin:0 auto !important;background-size:cover !important;width:100px !important;height:32px !important;background-image: url('images/aprologo.png') !important;background-position:center center !important;background-repeat:no-repeat !important;margin-top:100px !important;"></div>
                <h1 style="font-size:14px !important;line-height:14px !important;margin-top:10px !important;margin-bottom:50px !important;">Powered by Apro</h1>
            </div>

            <div class="col-md-12 not" style="display:none !important;">
                NOT: İmza oluşturduktan sonra ctrl + A ile imzanızı seçin ctrl + C ile kopyalayın ve ctrl + V yaparak imza alanının içine yapıştırın!
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
  </body>
</html>