<?= $this->extend('layout/page_layout'); echo $this->section('content') ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Film</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h1>Semua Film</h1>
                </div>
                <div class="col-md-6 text-end">
                    <a href="/film/add/" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>NO</th>
                    <th>COVER</th>
                    <th>NAMA FILM</th>
                    <th>GENRE</th>
                    <th>DURASI</th>
                    <th>ACTION</th>
                </tr>
                <?php $i = 1; foreach ($data_film as $film) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td>
                        <img style="width: 50px;" src="/assets/cover/<?= $film['cover'] ?>" alt="">
                        </td>
                        <td><?= $film['nama_film']?></td>
                        <td><?= $film['nama_genre']?></td>
                        <td><?= $film['duration']?></td>
                        <td>
                            <a href="/film/update/<?= encryptUrl($film["id"]); ?>" class="btn btn-success">Update</a>
                            <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- tambahkan dari sini  -->
    <script>
    function confirmDelete() {
        swal({
                title: "Apakah Anda yakin?",
                text: "setelah dihapus! data anda akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    window.location.href = "/film/destroy/<?= encryptUrl($film['id']) ?>";

                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>
  <!-- sampai sini -->
<?= $this->endSection() ?>
</body>
</html>