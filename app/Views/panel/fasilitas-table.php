<button type="button" class="btn btn-primary mt-1 mb-3" id="addData" data-bs-toggle="modal" data-bs-target="#addFasilitas">Tambah Fasilitas</button>
<table id="datatables" style="width:100%;" class="pt-3">
    <!-- ['id', 'lab_slug', 'kode_fasilitas', 'nama_fasilitas', 'good', 'broken', 'file_image', 'created_at', 'updated_at']; -->
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Fasilitas</th>
            <th>Nama Fasilitas</th>
            <th>Lokasi Lab</th>
            <th>Dapat Dipakai</th>
            <th>Rusak</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="mb-5">
        <?php $i = 1;
        foreach ($fasilitas as $row) { ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['kode_fasilitas'] ?></td>
                <td><?= $row['nama_fasilitas'] ?></td>
                <td><?= $row['nama_lab'] ?></td>
                <td><?= $row['good'] ?></td>
                <td><?= $row['broken'] ?></td>
                <td><img class="rounded img-fluid" src="<?= base_url('assets/images/fasilitas/' . $row['file_image']) ?>" alt="gambar_fasilitas"></td>
                <td>
                    <button id="editData" data-bs-toggle="modal" data-bs-target="#editFasilitas" data-id="<?= $row['id'] ?>" class="btn btn-warning">Edit</button>
                    <button id="deleteData" data-id="<?= $row['id'] ?>" class="btn btn-danger">Delete</button>
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