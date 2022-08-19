<?= $this->extend("layout/layout_dashboard") ?>

<?= $this->section("content") ?>



<section class="">

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4" style="border-radius:20px 20px 0 0 !important;">
                <div class="card-body text-center">
                    <img src="/img/users/<?= user()->avatar ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-3">
                        <?php if (user()->name) {
                            echo user()->name;
                        } else {
                            echo "<b>Nama Belum Diedit!</b>";
                        } ?>
                    </h5>
                    <p class="text-muted mb-1"><?= "@" . user()->username ?></p>
                    <p class="text-muted mb-4"><?= user()->email; ?></p>
                    <div class="d-flex justify-content-center mb-2">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProfileModal">
                            Edit Profile
                        </button>
                    </div>
                </div>
            </div>
            <!-- <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fas fa-globe fa-lg text-warning"></i>
                            <p class="mb-0">https://mdbootstrap.com</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                            <p class="mb-0">mdbootstrap</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                            <p class="mb-0">@mdbootstrap</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                            <p class="mb-0">mdbootstrap</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                            <p class="mb-0">mdbootstrap</p>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
        <div class="col-lg-12">
            <div class="card mb-4" style="border-radius: 0 0 10px 10px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Nama Lengkap</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">
                                <?php if (user()->name) {
                                    echo user()->name;
                                } else {
                                    echo "<b>Nama Belum Diedit!</b>";
                                } ?>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Username</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?= user()->username; ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?= user()->email; ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Nomor HP</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?= user()->telepon; ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Level</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">
                                <?php foreach (user()->roles as $role) {
                                    echo $role;
                                } ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>




<!-- Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body text-center">
                    <img src="/img/users/<?= user()->avatar ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-3">
                        <?php if (user()->name) {
                            echo user()->name;
                        } else {
                            echo "<b>Nama Belum Diedit!</b>";
                        } ?>
                    </h5>
                </div>
                <form action="/panel/dashboard/edit-profile" id="formEdit" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id" id="id" value="<?= user()->id ?>" hidden>
                            <input type="text" aria-describedby="emailHelp" readonly class="form-control-plaintext" id="staticEmail" value="<?= user()->email ?>">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticUsername" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" aria-describedby="usernameHelp" readonly class="form-control-plaintext" id="staticUsername" value="<?= user()->username ?>">
                            <div id="usernameHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" aria-describedby="nameHelp" class="form-control" name="name" id="name" placeholder="Nama Lengkap" value="<?= user()->name ?>">
                            <div id="nameHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telepon" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="number" aria-describedby="teleponHelp" class="form-control" name="telepon" id="telepon" placeholder="Nomor HP" value="<?= user()->telepon ?>">
                            <div id="teleponHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="avatar" class="col-sm-2 col-form-label">Avatar</label>
                        <div class="col-sm-10">
                            <input type="file" accept="image/*" aria-describedby="avatarHelp" value="<?= user()->avatar ?>" class="form-control-file" style="padding: 2px;" name="avatar" id="avatar" placeholder="avatar">
                            <div id="avatarHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#formEdit').submit(function(e) {
                e.preventDefault();
                // var datas = {
                //     id: $('#id').val(),
                //     name: $('#id').val(),
                //     telepon: $('#telepon').val()
                // }
                $.ajax({
                    type: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        var respon = JSON.parse(res);
                        if (respon.error) {
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
                            Swal.fire({
                                icon: 'success',
                                title: 'Sukses Ubah Data',
                                text: respon.status,
                                // confirmButtonText: 'OK'
                                // footer: '<a href="">Why do I have this issue?</a>'
                            });
                            // $('#editProfileModal').modal('hide');
                            location.reload();
                        }
                    }
                });
            });
        });
    </script>

    <?= $this->endSection() ?>