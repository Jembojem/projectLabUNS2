<?= $this->extend("layout/layout_dashboard") ?>

<?= $this->section("content") ?>

<?php
$civitas = ['student.uns.ac.id', 'staff.uns.ac.id'];
$is_civitas = in_array(explode("@", user()->email)[1], $civitas);
?>

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
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-11 text-center p-0 mt-3 mb-2">
                                <div class="card p-4">
                                    <h2 id="heading">Reservasi Laboratorium</h2>
                                    <p>Isikan semua pada form dibawah</p>

                                    <form id="msform" method="post" action="/panel/reservasi/submit-bukti" enctype="multipart/form-data">
                                        <!-- <?= csrf_field() ?> -->
                                        <!-- <input hidden id="kode_transaksi" type="text" value="<?= user()->id ?>"> -->
                                        <input hidden id="kode_transaksi" type="text" value="<?= user()->username . "-" . str_pad($order_counter + 1, 4, '0', STR_PAD_LEFT) ?>">
                                        <!-- progressbar -->
                                        <ul id="progressbar">
                                            <li class="active" id="account"><strong>Pilih Lab</strong></li>
                                            <li id="personal"><strong>Pilih Jam Pakai</strong></li>
                                            <li id="payment"><strong>Pembayaran</strong></li>
                                            <!-- <li id="confirm"><strong>Bukti Pembayaran</strong></li> -->
                                        </ul>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <br>
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
                                                    <?php foreach ($list_lab as $lab) : ?>
                                                        <div class="col-3 ">
                                                            <input type="radio" name="lab_slug" class="sr-only" id="<?= $lab->lab_slug ?>">
                                                            <label for="<?= $lab->lab_slug ?>" class="center align-items-center justify-content-center">
                                                                <img class="img-reservation-lab img-fluid" src="<?= $lab->file_img ?>" alt="<?= $lab->lab_slug ?>">
                                                                <h4 class="text-center mt-2"><?= $lab->nama_lab ?></h4>
                                                            </label>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <input type="button" name="next" class="next action-button" value="Next" />
                                        </fieldset>

                                        <fieldset>
                                            <div class="d-flex justify-content-center text-center mt-4 mb-4">
                                                <div class="col-sm-12 col-md-12">
                                                    <h2 id="waktu-tersedia" class="text-success">WAKTU TERSEDIA</h2>
                                                </div>
                                            </div>
                                            <div class="form-card mb-4 mt-2">
                                                <div class="row">
                                                    <hr>
                                                    <div class="col-12">
                                                        <h2 class="fs-title">Pilih Tanggal</h2>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-center text-center col-12">
                                                        <div class="col-sm-6 col-md-6 text-center">
                                                            <!-- <div id="inline_cal"></div> -->
                                                            <input type="date" id="kalender" min="<?= date('Y-m-d', strtotime('+1 day')) ?>" max="<?= date('Y-m-d', strtotime('+2 week')) ?>">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Pilih Jam</h2>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="d-flex justify-content-center text-center">
                                                    <div class="row">
                                                        <div class="col-12 text-center">
                                                            <div class="container text-center">
                                                                <div class="row justify-content-center text-center">
                                                                    <div class="col">
                                                                        <?php foreach ($list_jam as $jam) : if ($jam->id < 9 || $jam->id > 20) {
                                                                                continue;
                                                                            } ?>
                                                                            <input type="checkbox" class="pilihJam btn-check" disabled id="<?= $jam->id ?>" autocomplete="off" value="<?= $jam->id ?>">
                                                                            <label class="btn btn-outline-dark" id="label-<?= $jam->id ?>" for="<?= $jam->id ?>"><?= $jam->text; ?></label>
                                                                        <?php endforeach; ?>
                                                                    </div>
                                                                </div>
                                                                <!-- <input type="text" id="coba"> -->
                                                            </div><!-- end container -->
                                                            <div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="d-flex justify-content-center text-center mt-4"> -->
                                            <div class="row">
                                                <div class="col-4"></div>
                                                <div class="col-4">
                                                    <button style="width:100%;" type="button" id="prosesPembayaran" class="btn btn-primary cek-tanggal">Proses Ke Pembayaran <i class="mdi mdi-arrow-right"></i></button>
                                                </div>
                                            </div>
                                            <!-- </div> -->
                                            <input type="button" id="confirm-waktu" name="next" class="next action-button" value="Next" />
                                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                        </fieldset>


                                        <fieldset>
                                            <div class="form-card mb-4 mt-2">
                                                <div class="row">
                                                    <div class="col-2"></div>
                                                    <div class="col-8 bg-primary rounded">
                                                        <h2 class="fs-title text-center m-auto p-2 text-light">Invoice Reservasi</h2>
                                                    </div>
                                                </div>
                                                <div class="container mt-5">
                                                    <div class="d-flex justify-content-center row">
                                                        <div class="col-md-8 border invoice">
                                                            <div class="p-3 bg-white rounded">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-4">
                                                                        <h1 class="text-uppercase">Invoice</h1>
                                                                        <div class="billed"><span class="font-weight-bold text-uppercase ">User : </span><span class="ml-1" id="user-bill">Juniar</span></div>
                                                                        <div class="billed"><span class="font-weight-bold text-uppercase ">Date : </span><span class="ml-1" id="date-bill">13 Juni 2022</span></div>
                                                                        <div class="billed"><span class="font-weight-bold text-uppercase ">Order ID : </span><span class="ml-1" id="id-bill">xxx/xxxx/xxx</span></div>
                                                                        <div class="billed"><span class="font-weight-bold text-uppercase ">Status : </span><span class="ml-1 text-warning" id="status-bill">Pending</span></div>
                                                                    </div>
                                                                    <div class="col-md-6 text-right mt-3">
                                                                        <h1 class="nge-lab mb-0">Nge-Lab</h1><span>ngelab.com</span>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-4">
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <th>Laboratorium :</th>
                                                                            <th id="lab-bill">Lab Robotika</th>
                                                                            <tbody id="in-bill">
                                                                                <td>Tanggal</td>
                                                                                <td id="tanggal-bill">10 Juni 2022</td>
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
                                                                                <td id="lama-bill">2 Jam</td>
                                                                                <td id="perjam-bill">120.000</td>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td>Total</td>
                                                                                    <td id="total-bill">240.000</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <?php if (!$is_civitas) : ?>
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
                                                                                        <th><label for="formFile">Upload Bukti Transfer</label></th>
                                                                                        <th><input type="file" name="nama_file" class="form-control-file" accept="image/*,.pdf" id="formFile"></th>
                                                                                    </div>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    <?php else : ?>
                                                                        <hr>
                                                                        <p class="text-dark">terdeteksi user civitas UNS, tidak perlu melakukan pembayaran silahkan tunggu acc dari admin : <a href="/panel/riwayat" class="badge rounded-pill bg-success text-light">Ke Riwayat</a>
                                                                        </p>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <input type="submit" class="btn btn-primary" value="Submit" /> -->
                                            <?php if (!$is_civitas) : ?>
                                                <input type="submit" id="booknow" class="btn btn-success col-2" style="background-color:skyblue; color: white;" value="Submit" />
                                            <?php endif; ?>
                                            <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
                                        </fieldset>
                                    </form>

                                    <!-- bukti pembayaran -->
                                    <form id="bukti" action="">
                                        <fieldset>
                                            <div class="form-card mb-4 mt-2">
                                            </div>
                                        </fieldset>
                                        <!-- <input type="submit" class="btn btn-success text-left" value="Konfirmasi"> -->
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

<?= $this->endSection() ?>