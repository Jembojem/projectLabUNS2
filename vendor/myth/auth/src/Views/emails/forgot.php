<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      h1 {
        text-align: center;
        color: skyblue;
        padding-bottom: 20px;
        border-bottom: 2px solid skyblue;
      }
      .email-body {
        padding: 4rem;
        /* border: 1px solid; */
        margin: 2rem 5rem 2rem 5rem;
        -webkit-box-shadow: 10px 10px 22px -4px rgba(145, 145, 145, 1);
        -moz-box-shadow: 10px 10px 22px -4px rgba(145, 145, 145, 1);
        box-shadow: 10px 10px 22px -4px rgba(145, 145, 145, 1);
      }
      .footer {
        text-align: center;
        border-top: 2px solid skyblue;
      }
      .button.activate {
        text-align: center !important;
      }
      .button {
        background-color: skyblue;
        border: none;
        color: white !important;
        padding: 5px 6px;
        text-align: center;
        text-decoration: none !important;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 12px;
      }
      button.btn.button.btn-primary {
        text-decoration: none !important;
        color: white;
      }
      a.oke {
        color: white;
        text-decoration: none !important;
      }
      .container-button {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="justify-content-center text-center">
        <div class="row">
          <div class="col-12">
            <h1>Nge-lab.com</h1>
          </div>
        </div>
      </div>
      <div class="body-email">
        <div class="email-body">
          <h4>
            Seseorang meminta anda untuk merest passwod akun anda di Ngelab.com
          </h4>

          <p>Untuk merest password anda silahkan ikuti link dibawah</p>

          <p>
            Kode anda:
            <?= $hash ?>
          </p>

          <p>Silahkan klik tautan dibawah</p>
          <div class="container-button">
            <div class="button activate">
              <button type="button" class="btn button btn-primary">
                <a class="oke" href="<?= site_url('reset-password') . '?token=' . $hash ?>"
                  >Reset Password</a
                >
              </button>
            </div>
          </div>

          <br />

          <p>
            Jika anda tidak melakukan permintaan reset password silahkan lupakan
            pesan ini
          </p>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="text-center">
        <p>Copyright 2022</p>
        <p>Nge-lab</p>
      </div>
    </div>
  </body>
  <!-- JavaScript Bundle with Popper -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"
  ></script>
</html>
