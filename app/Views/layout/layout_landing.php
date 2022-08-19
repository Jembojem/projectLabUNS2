<?= $this->include('layout/header') ?>

<body>
  <?= $this->include('layout/navbar'); ?>
  <?= $this->renderSection('content'); ?>
  <?= $this->include('layout/footer'); ?>

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

</html>