<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/images/logo-icon.png">
    <title>Jadwal></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- Michalsnik CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Own CSS -->
    <!-- <link rel="stylesheet" href="/css/layout.css"> -->
    <link rel="stylesheet" href="/css/animation.css">
    <!-- Hover CSS -->
    <link rel="stylesheet" href="/css/hover.css">
    <link rel="stylesheet" href="/css/hover-min.css">

    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .navbar {
            width: 100%;
            position: relative;
            top: 0;
            z-index: 4;
            background: transparent;
            border: none;
            height: 13vh;
            padding: 0;
        }

        .navbar .container-fluid {
            width: 90%;
            padding: 0 50px !important;
        }

        .navbar .navbar-brand {
            color: #211b3d;
            font-weight: 500;
            font-size: 28px;
            margin-right: 60px;
        }

        .navbar .navbar-nav .nav-link {
            font-weight: 500;
            font-size: 16px;
            color: #211b3d;
        }

        .navbar .navbar-nav .nav-link.active {
            color: #5ac2f0;
        }

        .navbar .navbar-button {
            position: absolute;
            right: 7%;
        }

        .navbar form {
            justify-content: center;
        }

        .navbar-nav .dropdown-menu {
            text-align: center;
        }

        /* NAVBAR - Collapse */
        .navbar-collapse.collapse.show {
            background-color: #fff;
            text-align: center;
        }

        .navbar-collapse.collapse.show form {
            margin-top: 30px;
            margin-bottom: 20px;
        }

        /* SECONDARY NAVBAR */
        /* END OF NAVBAR */
        /* ========================================================================= */

        /* ========================================================================== */
        /* FOOTER */
        /* FOOTER */
        footer {
            width: 100%;
            background-color: #2c3763;
            border: none;
            padding-bottom: 50px;
        }

        footer h3 {
            font-weight: 700;
            font-size: 18px;
            color: #fff;
            margin-bottom: 10px;
        }

        footer ul {
            padding: 0;
        }

        footer ul a {
            text-decoration: none;
            font-weight: 400;
            font-size: 18px;
            line-height: 27px;
            color: #fff;
        }

        footer ul.kanan-dewe a {
            text-decoration: none;
            font-weight: 400;
            font-size: 14px;
            line-height: 21px;
            color: #fff;
        }

        footer h6 {
            font-weight: 400;
            font-size: 16px;
            margin: 125px auto 0;
        }

        .button-primary {
            border-radius: 47px;
            border: 1px solid #fff;
            width: 130px;
            height: 45px;
            background-color: #5ac2f0;
            color: #fff;
            font-weight: 500;
            font-size: 16px;
            overflow: hidden;
        }

        .button-primary a {
            text-decoration: none;
            color: inherit;
        }

        .button-secondary {
            border-radius: 47px;
            border: 1px solid #5ac2f0;
            width: 130px;
            height: 45px;
            background-color: #bceaff;
            color: #00affd;
            font-weight: 500;
            font-size: 16px;
            margin-right: 15px;
            overflow: hidden;
        }

        .button-secondary a {
            text-decoration: none;
            color: inherit;
        }

        .button-primary:hover {
            background-color: #5ac2f08f;
            color: #1e1919;
        }

        .button-secondary:hover {
            border: 1px solid #fff;
            background-color: #5ac2f0;
            color: #fff;
            /* border: 1px solid #fff;
  background-color: #5ac2f0;
  color: #fff; */
            /* background-color: #5ac2f08f;
  color: #1e1919; */
        }

        /* End of FOOTER */
        /* ========================================================================= */

        /* ========================================================================= */


        /* =============================================== */
        /* RESPONSIVE LAYOUT */
        @media (max-width: 576px) {

            .container,
            .container-fluid {
                padding-left: 30px;
                padding-right: 30px;
                overflow-x: hidden;
            }

            .navbar {
                height: auto;
            }

            .navbar .container-fluid {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .navbar .navbar-brand {
                margin-right: auto;
            }
        }
    </style>


</head>



<body>
    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/img/logo_uns.png" alt="" width="100">
                Nge-Lab
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link hvr-grow-shadow hvr-underline-from-center" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-grow-shadow hvr-underline-from-center active" href="/jadwal">Jadwal</a>
                    </li>
                    <li class="nav-item dropdown hvr-grow-shadow .hvr-underline-from-center">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fasilitas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item hvr-underline-from-center" href="/lab-kom-a">Laboratorium Komputer A</a></li>
                            <li><a class="dropdown-item hvr-underline-from-center" href="/fasilitas3">Laboratorium Komputer B</a></li>
                            <li><a class="dropdown-item hvr-underline-from-center" href="/lab-robotik">Laboratorium Robotika</a></li>
                            <!-- <li><hr class="dropdown-divider"></li> -->
                            <li><a class="dropdown-item hvr-underline-from-center" href="/fasilitas4">Laboratorium Multimedia</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-grow-shadow hvr-underline-from-center" href="/about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-grow-shadow hvr-underline-from-center" aria-current="page" href="/panel/reservasi">Reservasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-grow-shadow hvr-underline-from-center" href="/contact">Kontak</a>
                    </li>
                </ul>
                <?php if (logged_in()) { ?>
                    <div class="d-flex">
                        <div class="dropdown">
                            <a href="/panel/dashboard" style=" text-decoration: none;">
                                <span style="font-size: 1rem !important;"><?= '@' . user()->username; ?></span>
                                <img src="/img/users/<?= user()->avatar ?>" alt="user" class="rounded-circle" style="width: 5rem !important;">
                            </a>
                            <!-- <p> <a href="/panel"></a> </p> -->
                        </div>
                    </div>
                <?php } else { ?>
                    <form class="d-flex" role="search">
                        <a href="/login"><button type="button" class="button-secondary hvr-grow-shadow .hvr-shutter-out-horizontal">Sign In</button></a>
                        <a href="/daftar"><button type="button" class="button-primary hvr-grow-shadow">Sign Up</button></a>
                    </form>
                <?php } ?>
            </div>
        </div>
    </nav>
    <div class="container p-4" style="color: black;" data-aos="zoom-in-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h1>JADWAL LABORATORIUM</h1>
            </div>
        </div>
    </div>

    <div id="calendar" class="p-4 m-4" style="color: black;" data-aos="zoom-out-down" data-aos-duration="1100" data-aos-anchor-placement="top-bottom"></div>

    <div class="modal" id="calendarModal" tabindex="-1" style="color: black;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modal-calander">
                    <h5 class="modal-title modal-calendar-title" id="modalTitle">Laboratorium Multimedia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h6>Waktu : <span id="modalHari"></span></>
                        <h6 style="color: black;">Jam : <span id="modalWaktu"></span></h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/script/jquery.js"></script>
    <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/moment.min.js'></script>
    <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery.min.js'></script>
    <script src="http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js"></script>
    <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/fullcalendar.min.js'></script>

    <script type="text/javascript">
        var events = <?php echo json_encode($data) ?>;

        var date = new Date()
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear()

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            buttonText: {
                today: 'hari ini',
                month: 'bulan',
                week: 'minggu',
                day: 'hari',
                list: 'list'
            },
            axisFormat: 'H:mm',
            timeFormat: {
                agenda: 'H:mm{ - H:mm}'
            },
            timeFormat: 'H(:mm)',
            events: events,
            displayEventEnd: true,
            allDaySlot: false,
            lang: 'id',

            monthNames: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'October', 'November', 'Desember'],
            monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            dayNames: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
            dayNamesShort: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],

            eventClick: function(event, jsEvent, view) {
                $('#modalTitle').html(event.title);
                $('#modalHari').html(event.hari);
                $('#modalWaktu').html(event.waktu);
                $('#calendarModal').modal('show');
            },
            plugins: ['dayGrid'],
            timeZone: 'UTC',
            eventLimit: true, // allow "more" link when too many events
            eventLimitText: "More Events",
        }, )
    </script>

    <!-- Script -->
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- Michalsnik -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!--fullcalendar plugin files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

    <!-- for plugin notification -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- fullcalendar own css -->
    <link rel="stylesheet" href="/css/calendar.css">

    <script>
        AOS.init();
    </script>
    <!-- JQuery -->
    <script src="/script/jquery.js"></script>


</body>