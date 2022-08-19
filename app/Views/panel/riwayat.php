<?= $this->extend("layout/layout_dashboard") ?>

<?= $this->section("content") ?>
<div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- title -->
                <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <div class="d-md-flex align-items-center">
                    <div>
                        <h4 class="card-title"><?= $title; ?></h4>
                    </div>
                </div>
                <div>
                    <!-- Table -->
                    <div class="table-responsive" id="view-table">

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="detailTransaksi" tabindex="-1" aria-labelledby="detailTransaksiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailTransaksiLabel">Detail Invoice</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- ['id', 'lab_slug', 'kode_fasilitas', 'nama_fasilitas', 'good', 'broken', 'file_image', 'created_at', 'updated_at']; -->
                <div class="container mt-5">
                    <div class="d-flex justify-content-center row">
                        <div class="col-md-8 border invoice">
                            <div class="p-3 bg-white rounded">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <h1 class="text-uppercase">Invoice</h1>
                                        <input type="text" id="idx" hidden>
                                        <input type="text" id="kode_pembayaran" hidden>
                                        <div class="billed"><span class="font-weight-bold text-uppercase ">User : </span><span class="ml-1" id="user-bill">Juniar</span></div>
                                        <div class="billed"><span class="font-weight-bold text-uppercase ">Date : </span><span class="ml-1" id="date-bill">13 Juni 2022</span></div>
                                        <div class="billed"><span class="font-weight-bold text-uppercase ">Order ID : </span><span class="ml-1" id="id-bill">xxx/xxxx/xxx</span></div>
                                        <div class="billed"><span class="font-weight-bold text-uppercase ">Status : <h5 class="badge rounded-pill" id="status-bill"></h5></span>

                                        </div>
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
                                </div>
                                <?php if (in_groups('admin')) : ?>
                                    <div class="mt-4 table-upload" id="verifikasi">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <div class="form-group">
                                                    <th><label for="formFile">Accept : </label></th>
                                                    <th>
                                                        <div class="row" id="formFile">
                                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                                <button class="btn btn-danger" onclick="aksi('tolak')" type="button"><span class="material-icons">close</span></button>
                                                            </div>
                                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                                <button class="btn btn-success" onclick="aksi('terima')" type="button"><span class="material-icons">check</span></button>
                                                            </div>
                                                            <!-- <button class="btn btn-primary" type="button">Button</button> -->
                                                            <!-- <div class="col-6">
                                                            <button type="button" onclick="tolak()" class="btn btn-danger rounded">Tolak</button>
                                                        </div>
                                                        <div class="col-6">
                                                            <button type="button" onclick="terima()" class="btn btn-success rounded">Terima</button>
                                                        </div> -->
                                                        </div>
                                                    </th>
                                                </div>
                                            </table>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="uploadBukti" tabindex="-1" aria-labelledby="uploadBuktiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadBuktiLabel">Upload Bukti</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('/panel/reservasi/submit-bukti') ?>" id="uploadBuktiTF" method="POST" enctype="multipart/form-data">
                <!-- <input type="hidden" name="_method" value="PUT"> -->
                <div class="modal-body">
                    <input type="text" class="form-control" name="kode_transaksi" id="kode" hidden>
                    <div class="mb-3">
                        <label for="fileImgEdit" class="form-label">Pilih File</label>
                        <input type="file" accept="image/*" name="nama_file" class="form-control-file" id="fileImgEdit" aria-describedby="fileImgEditHelp">
                        <div id="fileImgEditHelp" class="form-text"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" value="Submit" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function aksi(act) {
        $.ajax({
            type: 'post',
            url: '/panel/riwayat/verifikasi',
            data: {
                id: $('#idx').val(),
                // kode_transaksi: $('#kode_transaksi'),
                act: act
            },
            success: function(res) {
                var result = JSON.parse(res);
                Swal.fire({
                    icon: result.icon,
                    title: result.title,
                    text: result.text,
                });
                $('#detailTransaksi').modal('hide');
                showTable();
            }
        })
    }

    function showTable() {
        $.ajax({
            url: "<?= base_url("panel/riwayat/get") ?>",
            data: {
                table: true,
                ids: "<?= user()->username ?>"
            },
            dataType: "json",
            success: function(res) {
                $('#view-table').html(res.table)
            }
        });
    }

    $(document).ready(function() {
        showTable()

        $(document).on('click', '#uploadTf', function(e) {
            $('#kode').val($(this).attr('data-kode'));
        });

        $(document).on('click', '#showBukti', function(e) {
            var img = $(this).attr('data-img');
            Swal.fire({
                imageUrl: `<?= base_url('/document/bukti') ?>/${img}`,
                confirmButtonText: "OK!",
                // imageHeight: 1500,
                imageAlt: 'A tall image'
            })
        });

        $(document).on('click', '#detailData', function(e) {
            var lama = 0;
            let temp = 'success';
            $.ajax({
                url: '/panel/reservasi/payment-detail',
                type: 'post',
                data: {
                    lab_slug: $(this).attr('data-lab'),
                    kode_transaksi: $(this).attr('data-kode')
                },
                success: function(e) {
                    var res = JSON.parse(e)

                    if (res['status']['id'] != 2) {
                        $('#verifikasi').hide();
                    } else {
                        $('#verifikasi').show();
                    }
                    $('#idx').val(res['transaksi']['id']);
                    $('#kode_pembayaran').val(res['transaksi']['kode_transaksi']);
                    $('#user-bill').html(res['transaksi']['username']);
                    $('#date-bill').html(res['reservasi'][0]['created_at']);
                    $('#id-bill').html(res['transaksi']['kode_transaksi']);

                    if ($('#status-bill').hasClass('bg-warning')) {
                        $('#status-bill').removeClass('bg-warning')
                    }
                    if ($('#status-bill').hasClass('bg-success')) {
                        $('#status-bill').removeClass('bg-success')
                    }
                    if ($('#status-bill').hasClass('bg-danger')) {
                        $('#status-bill').removeClass('bg-danger')
                    }

                    $('#status-bill').html(res['status']['text_status'])
                    $('#status-bill').addClass(`bg-${res['status']['sign']}`)
                    // console.log(res['status']['text_status']);
                    $('#lab-bill').html(res['lab']['nama_lab']);
                    $('#tanggal-bill').html(res['reservasi']['tanggal']);
                    for (var key in res['time']) {
                        $('#in-bill').append(`<tr><td>Jam</td><td>${res['time'][key]['text']}</td></tr>`)
                        lama++;
                    }
                    $('#lama-bill').html(`${lama} Jam`);
                    $('#perjam-bill').html(`Rp${res['lab']['price_per_hour']}`);
                    $('#total-bill').html(`Rp${res['transaksi']['total']}`);

                    // console.log(res['transaksi']);

                }
            })
        });

        $('#uploadBuktiTF').submit(function(e) {
            e.preventDefault();
            // console.log((new FormData(this)).getAll);
            // for (var pair of (new FormData(this)).entries()) {
            //     console.log(pair[0] + ', ' + pair[1]);
            // }
            $.ajax({
                url: '/panel/reservasi/submit-bukti',
                data: new FormData(this),
                type: 'post',
                processData: false,
                contentType: false,
                success: function(res) {
                    var result = JSON.parse(res);
                    console.log(result);
                    Swal.fire({
                        icon: result.icon,
                        title: result.title,
                        text: result.text,
                    });
                    $('#uploadBukti').modal('hide');
                    showTable();
                    // window.location.href = '/panel/history';
                }
            });
        });

    });
</script>

<?= $this->endSection() ?>