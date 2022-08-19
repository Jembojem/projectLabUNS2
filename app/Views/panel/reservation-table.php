<table id="datatables" style="width:100%;" class="pt-3 table table-bordered">
    <thead style="background-color: skyblue; font-weight: normal;">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Lab</th>
            <th>Status</th>
            <th>Kode Transaksi</th>
            <th>Bukti Pembayaran</th>
            <th>Invoice</th>
        </tr>
    </thead>
    <tbody class="mb-5">
        <?php $i = 1;
        $civitas = ['student.uns.ac.id', 'staff.uns.ac.id'];
        $is_civitas = in_array(explode("@", user()->email)[1], $civitas);
        foreach ($riwayat as $row) {
            $is_civitas2 = in_array(explode("@", $row['email'])[1], $civitas); ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['nama_lab'] ?></td>
                <td>
                    <h5><span class="badge rounded-pill bg-<?= $row['sign'] ?> col-12 text-light"><?= $row['text_status'] ?></span></h5>
                </td>
                <td><?= $row['kode_transaksi'] ?></td>
                <td>
                    <?php if ($row['nama_file']) {
                        echo "<h5 class='d-flex justify-content-center'><a type='button' id='showBukti' data-img='" . $row['nama_file'] . "' class='badge rounded-pill bg-success col-12 text-light'>Lihat</a></h5>";
                    } else {
                        if (in_groups('user') && !$is_civitas && $row['sign'] == 'danger') {
                            echo '<h5><span class="badge rounded-pill bg-danger col-12 text-light">Terlambat Upload Bukti</span></h5>';
                        } else if (in_groups('user') && !$is_civitas) {
                            echo '<h5 class="d-flex justify-content-center"><button class="btn rounded-pill btn-primary col-12 text-light" id="uploadTf" data-bs-toggle="modal" data-kode="' . $row["kode_transaksi"] . '" data-bs-target="#uploadBukti">Upload</button></h5>';
                        } else if (in_groups('user') && $is_civitas) {
                            echo '<h5><span class="badge rounded-pill bg-primary col-12 text-light">Tidak Perlu Upload</span></h5>';
                        } else if (in_groups('admin') && !$is_civitas2) {
                            echo '<h5><span class="badge rounded-pill bg-secondary col-12 text-light">Belum Upload Bukti</span></h5>';
                        } else {
                            echo '<h5><span class="badge rounded-pill bg-primary col-12 text-light">User Civitas UNS</span></h5>';
                        }
                    }  ?>
                </td>
                <td>
                    <button type='button' id="detailData" data-kode="<?= $row['kode_transaksi'] ?>" data-lab="<?= $row['lab_slug'] ?>" data-bs-toggle="modal" data-bs-target="#detailTransaksi" class="btn btn-primary">Lihat</button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#datatables').DataTable();
    });
</script>