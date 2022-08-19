<?= $this->extend("layout/layout_dashboard") ?>

<?= $this->section("content") ?>

<div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- title -->
                <!-- title -->
            </div>
            <!-- isi -->
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <!-- MultiStep Form -->
                    <div class="container-fluid" id="grad1">
                        <div class="row justify-content-center mt-0">
                            <div class="col-11 text-center p-0 mt-3 mb-2">
                                <!-- MultiStep Form -->
                                <div class="container-fluid" id="grad1">
                                    <div class="row justify-content-center mt-0">
                                        <div class="col-12 text-center p-0 mt-3 mb-2">
                                            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                                <h2><strong>Reservasi Laboratorium</strong></h2>
                                                <p>Isikan semua data reservasi anda pada form !</p>
                                                <div class="row">
                                                    <div class="col-md-12 mx-0">
                                                        <form id="msform">
                                                            <!-- progressbar -->
                                                            <ul id="progressbar">
                                                                <li class="active" id="account"><strong>Labratorium</strong></li>
                                                                <li id="payment"><strong>Waktu</strong></li>
                                                                <li id="payment"><strong>Konfirmasi</strong></li>
                                                                <li id="confirm"><strong>Pembayaran</strong></li>
                                                            </ul>
                                                            <!-- fieldsets -->
                                                            <fieldset>
                                                                <div class="form-card">
                                                                    <div class="row">
                                                                        <div class="col-7">
                                                                            <h2 class="fs-title">Plih Lab</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row align-items-center justify-content-center">
                                                                        <!-- id = input nilai -->
                                                                        <div class="col-3 ">
                                                                            <input type="radio" name="lab_id" class="sr-only" id="lab_a">
                                                                            <label for="lab_a" class="center align-items-center justify-content-center">
                                                                                <img class="img-reservation-lab img-fluid" src="/img/fasilitas/lab-1.png" alt="lab_a">
                                                                                <h6 class="">Laboratorium Komputer</h6>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-3 ">
                                                                            <input type="radio" name="lab_id" class="sr-only" id="lab_b">
                                                                            <label for="lab_b" class="center align-items-center justify-content-center">
                                                                                <img class="img-reservation-lab img-fluid" src="/img/fasilitas/lab-1.png" alt="lab_b">
                                                                                <h6 class="">Laboratorium Robotika</h6>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-3 ">
                                                                            <input type="radio" name="lab_id" class="sr-only" id="lab_c">
                                                                            <label for="lab_c" class="center align-items-center justify-content-center">
                                                                                <img class="img-reservation-lab img-fluid" src="/img/fasilitas/lab-1.png" alt="lab_c">
                                                                                <h6 class="">Laboratorium Multimedia</h6>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-3 ">
                                                                            <input type="radio" name="lab_id" class="sr-only" id="lab_d">
                                                                            <label for="lab_d" class="center align-items-center justify-content-center">
                                                                                <img class="img-reservation-lab img-fluid" src="/img/fasilitas/lab-1.png" alt="lab_d">
                                                                                <h6 class="">Laboratorium Jaringan</h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="button" name="next" class="next action-button" value="Next Step" />
                                                            </fieldset>

                                                            <fieldset>
                                                                <div class="form-card mb-4 mt-2">
                                                                    <div class="row">
                                                                        <div class="col-7">
                                                                            <h2 class="fs-title">Pilih Tanggal</h2>
                                                                        </div>
                                                                        <div class="d-flex justify-content-center text-center">
                                                                            <div class="col-sm-12 col-md-12">
                                                                                <div id="inline_cal"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-7">
                                                                            <h2 class="fs-title">Pilih Jam</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex justify-content-center text-center mt-4">
                                                                        <div class="col-sm-12 col-md-12">
                                                                            <h3 id="waktu-tersedia" class="text-success">Waktu Tersedia</h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex justify-content-center text-center">
                                                                        <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="container">
                                                                                        <div class="cat action">
                                                                                            <label>
                                                                                                <input type="checkbox" value="1"><span>Action</span>
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="cat comedy">
                                                                                            <label>
                                                                                                <input type="checkbox" value="1"><span>Comedy</span>
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="cat crime">
                                                                                            <label>
                                                                                                <input type="checkbox" value="1"><span>Crime</span>
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="cat history">
                                                                                            <label>
                                                                                                <input type="checkbox" value="1"><span>History</span>
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="cat reality">
                                                                                            <label>
                                                                                                <input type="checkbox" value="1"><span>Reality</span>
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="cat news">
                                                                                            <label>
                                                                                                <input type="checkbox" value="1"><span>News</span>
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="cat scifi">
                                                                                            <label>
                                                                                                <input type="checkbox" value="1"><span>Scifi</span>
                                                                                            </label>
                                                                                        </div>

                                                                                        <div class="cat sports">
                                                                                            <label>
                                                                                                <input type="checkbox" value="1"><span>Sports</span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div><!-- end container -->
                                                                                    <div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex justify-content-center text-center mt-4">
                                                                        <div class="col-sm-12 col-md-12">
                                                                            <button type="button" id="cek-waktu" onclick="cekWaktu()" class="btn btn-danger cek-tanggal" id="cek-tanggal">Cek</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                                <input type="button" id="confirm-waktu" name="make_payment" class="next action-button" value="Konfirmasi" />
                                                            </fieldset>

                                                            <fieldset>
                                                                <div class="form-card mb-4 mt-2">
                                                                    <div class="row">
                                                                        <div class="col-7">
                                                                            <h2 class="fs-title">Reservasi Anda</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="container mt-5">
                                                                        <div class="d-flex justify-content-center row">
                                                                            <div class="col-md-8 border invoice">
                                                                                <div class="p-3 bg-white rounded">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6 mb-4">
                                                                                            <h1 class="text-uppercase">Invoice</h1>
                                                                                            <div class="billed"><span class="font-weight-bold text-uppercase">User : </span><span class="ml-1">Juniar</span></div>
                                                                                            <div class="billed"><span class="font-weight-bold text-uppercase">Date : </span><span class="ml-1">13 Juni 2022</span></div>
                                                                                            <div class="billed"><span class="font-weight-bold text-uppercase">Order ID : </span><span class="ml-1">xxx/xxxx/xxx</span></div>
                                                                                            <div class="billed"><span class="font-weight-bold text-uppercase">Status : </span><span class="ml-1 text-danger">Pending</span></div>
                                                                                        </div>
                                                                                        <div class="col-md-6 text-right mt-3">
                                                                                            <h1 class="nge-lab mb-0">Nge-Lab</h1><span>ngelab.com</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="mt-4">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table">
                                                                                                <th>Laboratorium :</th>
                                                                                                <th>Lab Robotika</th>
                                                                                                <tbody>
                                                                                                    <td>Tanggal</td>
                                                                                                    <td>10 Juni 2022</td>
                                                                                                    <tr>
                                                                                                        <td>Waktu</td>
                                                                                                        <td>10:00 - 12:00</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="mt-4">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table">
                                                                                                <th>Waktu</th>
                                                                                                <th>Harga / Jam</th>
                                                                                                <tbody>
                                                                                                    <td>2 Jam</td>
                                                                                                    <td>120.000</td>
                                                                                                    <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td>Total</td>
                                                                                                        <td>240.000</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                                <input type="button" id="buktitfshow" name="make_payment" class="buktitfshow next action-button" value="PAY & CONFIRM" />
                                                            </fieldset>
                                                        </form>

                                                        <form id="bukti" action="">
                                                            <fieldset>
                                                                <div class="form-card mb-4 mt-2">
                                                                    <div class="row">
                                                                        <div class="col-7">
                                                                            <h2 class="fs-title">Upload Bukti Pembayaran</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="container mt-5">
                                                                        <div class="d-flex justify-content-center row">
                                                                            <div class="col-md-12 border invoice">
                                                                                <div class="p-3 bg-white rounded">
                                                                                    <div class="row mb-4">
                                                                                        <div class="col-md-6 text-left">
                                                                                            <h1 class="text-uppercase">Invoice</h1>
                                                                                            <div><span class="font-weight-bold text-uppercase">Order ID : </span><span class="ml-1">xxx/xxxx/xxx</span></div>
                                                                                            <div><span class="font-weight-bold text-uppercase">Status : </span><span class="ml-1 text-danger">Pending</span></div>
                                                                                        </div>
                                                                                        <div class="col-md-6 text-right mt-3">
                                                                                            <h1 class="nge-lab mb-0">Nge-Lab</h1><span>ngelab.com</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="mt-4 table-total">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table">
                                                                                                <th>Total :</th>
                                                                                                <th>Rp. 200.000</th>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="mt-4">
                                                                                        <div class="table-responsive">
                                                                                            <p class="text-left">Kirim sesuai dengan total harga ke rekening dibawah</p>
                                                                                            <table class="table">
                                                                                                <th>No Rekening :</th>
                                                                                                <th>08909089898 BNI an Juniar</th>
                                                                                                <tbody>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="mt-4 table-upload">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table">
                                                                                                <div class="form-group">
                                                                                                    <th><label for="exampleFormControlFile1">Upload Bukti Transfer</label></th>
                                                                                                    <th><input type="file" class="form-control-file" id="exampleFormControlFile1"></th>
                                                                                                </div>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <input type="submit" class="btn btn-success text-left" value="Konfirmasi">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    // Below code sets format to the
    // datetimepicker having id as
    // datetime
    $('#datetime1').datetimepicker({
        format: 'hh'
    });
    $('#datetime2').datetimepicker({
        format: 'hh'
    });
</script>


<?= $this->endSection() ?>