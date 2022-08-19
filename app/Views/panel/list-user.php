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
                        <h4 class="card-title">User List</h4>
                        <h5 class="card-subtitle">Mangement user list</h5>
                    </div>
                </div>
                <div>
                    <!-- Table -->
                    <div class="table-responsive">
                        <table id='userTable' class='table table-hover display dataTable p-4'>

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Dibuat</th>
                                    <th>Di Banned</th>
                                    <th>Banned</th>
                                    <th>Detail</th>
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
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Profile</h5>
            </div>
            <div class="modal-body">

                <form action="" id="formEdit" method="" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id" id="id" hidden>
                            <input type="text" name="email" aria-describedby="emailHelp" class="form-control" id="email">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticUsername" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" aria-describedby="usernameHelp" class="form-control" id="username">
                            <div id="usernameHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" aria-describedby="nameHelp" class="form-control" name="name" id="name" placeholder="Nama Lengkap">
                            <div id="nameHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telepon" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="number" aria-describedby="teleponHelp" class="form-control" name="telepon" id="telepon" placeholder="Nomor HP">
                            <div id="teleponHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="unban" class="col-sm-2 col-form-label">Unbaned</label>
                        <div class="col-sm-10">
                            <input type="radio" id="banned" name="deleted_at" value="0000-00-00 00:00:00">
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
            $('#userTable').DataTable({
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
                ajax: "<?php echo site_url('userlist/getUser') ?>",
                columnDefs: [{
                    targets: 0,
                    orderable: false
                }, ]
            });
        });

        function delete_user(id) {
            if (confirm('Anda yakin ingin membaned user ini?')) {
                // ajax delete data from database
                $.ajax({
                    url: "<?php echo base_url('userlist/deleteUser') ?>/" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {

                        location.reload();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error deleting data');
                    }
                });

            }
        }


        function edit(id) {
            status = 'edit';
            $('#editProfileModal').modal('show');
            $('#id').val(id);
            $.ajax({
                url: "<?php echo base_url('userlist/edit') ?>/" + id,
                type: 'GET',
                dataType: 'JSON',
                data: $('#formEdit').serialize(),
                success: function(x) {
                    if (x.sukses == true) {
                        $('#email').val(x.data.email);
                        $('#username').val(x.data.username);
                        $('#name').val(x.data.name);
                        $('#telepon').val(x.data.telepon);
                    }
                }
            });
        }


        function proses(id) {
            if (status == 'tambah') {
                url = " echo base_url('home/tambah'); ?>";
            } else if (status == 'edit') {
                url = "<?php echo base_url('userlist/update') ?>/" + id;
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
                        $('#editProfileModal').modal('hide');
                        // document.getElementById("#userTable").contentWindow.location.reload(true);
                    }
                }
            });
        }

        function close() {
            $('#editProfileModal').modal('hide');
        }
    </script>

    <?= $this->endSection() ?>