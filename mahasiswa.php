<?php include 'partials/header.php' ?>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <header class="py-3 mb-4">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <h1 class="m-0">Data Mahasiswa</h1>
                            <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
                        </div>
                    </header>

                        <table id="tabel_mhs"   class="table table-bordered w-100 mt-3">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tgl Lahir</th>
                                <th>Jurusan</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            include 'koneksi.php';
    
                            $query = "SELECT * FROM tb_mahasiswa";
                            $result = mysqli_query($koneksi, $query);
                            $no = 1;
                            while ($data = mysqli_fetch_assoc($result)):
                            ?>
                                <tr>
                                    <td><?= $no ++ ?></td>
                                    <td><?= $data['nim'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
                                    <td><?= $data['Jurusan'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td>
                                        <a href="delete.php?id=<?= $data['nim'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah data ini akan di hapus?') ">Delete</a>
                                        <a href="edit.php?id=<?= $data['nim'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                //alert('tes');
                $('#tabel_mhs').DataTable();
            })
        </script>
<?php include 'partials/footer.php' ?>