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
<div class="modal fade" id="addFasilitas" tabindex="-1" aria-labelledby="addFasilitasLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFasilitasLabel">Tambah Fasilitas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- ['id', 'lab_slug', 'kode_fasilitas', 'nama_fasilitas', 'good', 'broken', 'file_image', 'created_at', 'updated_at']; -->

                <form action="<?= base_url('panel/fasilitas/add') ?>" id="formAdd" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="namaFasilitas" class="form-label">Nama Fasilitas</label>
                            <input type="text" class="form-control" name="nama_fasilitas" id="namaFasilitas" aria-describedby="namaFasilitasHelp">
                            <div id="namaFasilitasHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="kodeFasilitas" class="form-label">Kode Fasilitas</label>
                            <input type="text" class="form-control" name="kode_fasilitas" id="kodeFasilitas" aria-describedby="kodeFasilitasHelp">
                            <div id="kodeFasilitasHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="labSlug" class="form-label">Lokasi Lab</label>
                            <select class="form-select" aria-label="Default select example" name="lab_slug" id="labSlug" aria-describedby="labSlugHelp">
                                <option selected>Pilih Lab</option>
                                <?php foreach ($listlab as $lab) : ?>
                                    <option value="<?= $lab['lab_slug'] ?>"><?= $lab['nama_lab']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div id="labSlugHelp" class="form-text"></div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="good" class="form-label">Dapat Dipakai</label>
                                <input type="number" class="form-control" name="good" id="good" aria-describedby="goodHelp">
                                <div id="goodHelp" class="form-text"></div>
                            </div>
                            <div class="col mb-3">
                                <label for="broken" class="form-label">Rusak</label>
                                <input type="number" class="form-control" name="broken" id="broken" aria-describedby="brokenHelp">
                                <div id="brokenHelp" class="form-text"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="fileImg" class="form-label">Tampilan Gambar</label>
                            <input type="file" accept="image/*" name="file_image" class="form-control-file" id="fileImg" aria-describedby="fileImgHelp">
                            <div id="fileImgHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Submit" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="editFasilitas" tabindex="-1" aria-labelledby="editFasilitasLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editFasilitasLabel">Edit Fasilitas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="<?= base_url('panel/fasilitas/edit') ?>" id="formedit" method="POST" enctype="multipart/form-data">
                <!-- <input type="hidden" name="_method" value="PUT"> -->
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <input type="text" class="form-control" name="id" id="idDataku" hidden>
                    <div class="mb-3">
                        <label for="namaFasilitasEdit" class="form-label">Nama Fasilitas</label>
                        <input type="text" class="form-control" name="nama_fasilitas" id="namaFasilitasEdit" aria-describedby="namaFasilitasEditHelp">
                        <div id="namaFasilitasEditHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="kodeFasilitasEdit" class="form-label">Kode Fasilitas</label>
                        <input type="text" class="form-control" name="kode_fasilitas" id="kodeFasilitasEdit" aria-describedby="kodeFasilitasEditHelp">
                        <div id="kodeFasilitasEditHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="labSlugEdit" class="form-label">Lokasi Lab</label>
                        <select class="form-select" aria-label="Default select example" name="lab_slug" id="labSlugEdit" aria-describedby="labSlugEditHelp">
                            <option selected>Pilih Lab</option>
                            <?php foreach ($listlab as $lab) : ?>
                                <option value="<?= $lab['lab_slug'] ?>"><?= $lab['nama_lab']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div id="labSlugEditHelp" class="form-text"></div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="goodEdit" class="form-label">Dapat Dipakai</label>
                            <input type="number" class="form-control" name="good" id="goodEdit" aria-describedby="goodEditHelp">
                            <div id="goodEditHelp" class="form-text"></div>
                        </div>
                        <div class="col mb-3">
                            <label for="brokenEdit" class="form-label">Rusak</label>
                            <input type="number" class="form-control" name="broken" id="brokenEdit" aria-describedby="brokenEditHelp">
                            <div id="brokenEditHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="fileImgEdit" class="form-label">Tampilan Gambar</label>
                        <input type="file" accept="image/*" name="file_image" class="form-control-file" id="fileImgEdit" aria-describedby="fileImgEditHelp">
                        <input type="text" class="form-control" name="img_old" id="old">
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
    function showTable() {
        $.ajax({
            url: "<?= base_url("panel/fasilitas/get") ?>",
            data: {
                table: true
            },
            dataType: "json",
            success: function(res) {
                $('#view-table').html(res.table)
            }
        });
    }

    $(document).ready(function() {
        showTable()

        // $('#editData').click(function() {
        $(document).on('click', '#editData', function() {
            let idData = $(this).attr('data-id');
            console.log(idData)
            $.ajax({
                url: "<?= base_url('panel/fasilitas/getData/') ?>",
                data: {
                    table: false,
                    ids: idData
                },
                dataType: "json",
                success: function(res) {
                    console.log(res.data);
                    var fasilitas = res.data.fasilitas[0];
                    $('#namaFasilitasEdit').val(fasilitas['nama_fasilitas']);
                    $('#kodeFasilitasEdit').val(fasilitas['kode_fasilitas']);
                    $('#labSlugEdit').val(fasilitas['lab_slug']);
                    $('#goodEdit').val(fasilitas['good']);
                    $('#brokenEdit').val(fasilitas['broken']);
                    // $('#fileImgEdit').val(fasilitas['email']);
                    $('#old').val(fasilitas['file_image']);
                    $('#idDataku').val(fasilitas['id']);
                }
            });
        });

        $(document).on('click', '#deleteData', function() {
            Swal.fire({
                title: 'Yakin Ingin Menghapus?',
                text: "Data Yang Dihapus Tak Dapat Dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    let idData = $(this).attr('data-id');
                    $.ajax({
                        url: "<?= base_url('/panel/fasilitas/delete') ?>",
                        type: "post",
                        data: {
                            id: idData
                        },
                        success: function(res) {
                            // var resp = JSON.parse(res);
                            Swal.fire(
                                'Terhapus!',
                                'Data Berhasil Terhapus',
                                'success'
                            )
                            showTable();
                        }
                    });
                }
            });
        });

        $('#formedit').submit(function(e) {
            e.preventDefault();
            let idData = $('#idDataku').val();
            let url = $(this).attr('action');
            console.log(url);
            $.ajax({
                type: "post",
                url: url,
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(res) {
                    var resp = JSON.parse(res);
                    Swal.fire({
                        icon: resp.icon,
                        title: resp.title,
                        text: resp.text,
                        confirmButtonText: 'OK'
                    });
                    $('#editFasilitas').modal('hide');
                    showTable();
                },
            });
        });

        $('#formAdd').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                processData: false,
                contentType: false,
                data: new FormData(this),
                success: function(res) {
                    var respon = JSON.parse(res);

                    if (respon.error) {
                        console.log(respon.error);
                        for (var key in respon.error) {
                            if (respon.error[key]) {
                                $(`#${key}`).addClass(`is-invalid`);
                                $(`#${key}Help`).addClass(`invalid-feedback`);
                                $(`#${key}Help`).html(respon.error[key]);
                            } else {
                                $(`#${key}`).removeClass(`is-invalid`);
                                $(`#${key}`).addClass(`is-valid`);

                                $(`#${key}Help`).removeClass(`invalid-feedback`);
                                $(`#${key}Help`).addClass(`valid-feedback`);
                                $(`#${key}Help`).html(`Nah gitu dong`);
                            }
                        }
                    } else {
                        $('#addFasilitas').modal('hide');
                        $('#namaFasilitas').val('');
                        $('#kodeFasilitas').val('');
                        $('#labSlug').val('');
                        $('#good').val('');
                        $('#broken').val('');
                        $('#fileImg').val('');
                        Swal.fire({
                            icon: respon.icon,
                            title: respon.title,
                            text: respon.text,
                            // footer: '<a href="">Why do I have this issue?</a>'
                        })
                        showTable();
                    }
                }
            });
        });

    });
</script>

<?= $this->endSection() ?>