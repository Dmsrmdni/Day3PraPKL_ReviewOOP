<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../style_template1.css">
        <title>Home</title>
        <style>
            body{
                background-image: url(https://i.pinimg.com/236x/a0/47/39/a04739bddfbca4a72edfa6b7d4112d3d.jpg);
                background-size: cover;
                color: whitesmoke;
            }
            .card{
                background-image: url(https://i.pinimg.com/564x/68/ec/78/68ec78fe1c9ee1ebdf6104bff609aa7a.jpg); 
                border: 2px solid whitesmoke;
                box-shadow: inset 0px 5px 30px 10px black, 0px 0px 10px 2px black;
            }

            table th,h2{
                font-family: 'Times New Roman', Times, serif;
            }

            table thead,tbody{
                color: whitesmoke;
            }

            table thead{
                background-image: url(https://i.pinimg.com/736x/7f/22/d2/7f22d24d5e969a0dcc959859a28e521c.jpg);
                background-size: cover;
            }
            
            table tbody{
                background-image: url(https://i.pinimg.com/736x/63/f5/66/63f566eeb91c2d424a6627671b9b911f.jpg);
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <br><br>
        <!-- Content -->
        <div class="content">
            <div class="container-fluid">
                    <div class="card container-fluid">
                        <div class="card-header">
                        <h2 align="center">
                            Data Jurusan
                        </h2>
                            <span class="d-block w-50 bg-secondary rounded mx-auto" style="height: 2px"></span>
                            <a href="create.php" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                </svg> Tambah Data
                            </a>
                        </div>
                        <div class="card-body">
                            <!-- TABLE Jurusan -->
                            <table class="table table-bordered container table-sm mx-auto text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Jurusan</th>
                                        <th scope="col">Jurusan</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                        
                                <tbody>
                                    <?php
                                        include'../koneksi.php';
                                        $jurusan =  new jurusan();
                                        $no = 1;
                                        foreach ($jurusan->index() as $data){
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $data['kode_jurusan'] ?></td>
                                        <td><?= $data['jurusan'] ?></td>
                                        <td>
                                            <form action="proses.php" method="post">
                                                <a href="show.php?id=<?= $data['id']; ?>" class="btn btn-outline-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                    </svg> Show
                                                </a> ||
                                                <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-outline-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                    </svg> Edit
                                                </a> ||
                                                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                                <input type="hidden" name="aksi" value="delete">
                                                    <button type="submit" class="btn btn-outline-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                    </svg>
                                                        Delete
                                                    </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <!-- /TABLE Jurusan -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Content -->
        <br><br>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>