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
                        <h4 class="card-title">Laboratory Management List</h4>
                        <h5 class="card-subtitle">Mangement laboratorium list</h5>
                    </div>
                </div>
                <div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table id='labTable' class='table table-hover display dataTable p-4'>

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Lab Slug</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editLabModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Laboratorium</h5>
            </div>
            <div class="modal-body">

                <form action="" id="formEdit" method="" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id" id="id" hidden>
                            <input type="number" name="price_per_hour" aria-describedby="emailHelp" class="form-control" id="price_per_hour">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" onclick="proses()">Save changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#labTable').DataTable({
                processing: true,
                lengthMenu: [
                    [10, 25, 50, -1],
                    ['10 rows', '25 rows', '50 rows', 'Show all']
                ],
                serverSide: true,
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5',
                    'pageLength'
                ],
                order: [],
                ajax: "<?php echo site_url('labmanagement/getLab') ?>",
                columnDefs: [{
                    targets: 0,
                    orderable: false
                }, ]
            });
        });


        function edit(id) {
            status = 'edit';
            $('#editLabModal').modal('show');
            $('#id').val(id);
            $.ajax({
                url: "<?php echo base_url('labmanagement/edit') ?>/" + id,
                type: 'GET',
                dataType: 'JSON',
                data: $('#formEdit').serialize(),
                success: function(x) {
                    if (x.sukses == true) {
                        $('#price_per_hour').val(x.data.price_per_hour);
                    }
                }
            });
        }



        function proses(id) {
            if (status == 'tambah') {
                url = " echo base_url('home/tambah'); ?>";
            } else if (status == 'edit') {
                url = "<?php echo base_url('labmanagement/update') ?>/" + id;
            } else {
                url = " echo base_url('home/hapus'); ?>";
            }

            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'JSON',
                data: $('#formEdit').serialize(),
                success: function(x) {
                    if (x.sukses == true) {
                        $('#editLabModal').modal('hide');
                        // document.getElementById("#userTable").contentWindow.location.reload(true);
                    }
                }
            });
        }
    </script>

    <?= $this->endSection() ?>