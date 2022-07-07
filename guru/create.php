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
            background-image: url(https://images.unsplash.com/photo-1636953056323-9c09fdd74fa6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80);
            background-size: cover;
            color: whitesmoke;
        }
        
        
        h1,h4{
            font-family:  Georgia, 'Times New Roman', Times, serif;

        }
        
        .card{
            margin-top: 100px;
            color: whitesmoke;
            background-image: url(https://i.pinimg.com/564x/cc/74/36/cc74366f1e5960053bb01fb3d8a45f9c.jpg);
            background-size: cover;
            padding: 10px;
            border: 2px solid grey;
            box-shadow: inset 0px 5px 30px 10px black, 0px 0px 10px 2px gray;
        }

        </style>
    </head>
    <body>
        <!-- Content -->
        <div class="content">
            <div class="container-fluid">
                <!-- Cards -->
                <div class="row">
                    <div class="card w-50 mx-auto jurusan">
                        <h1 align="center">
                            Data Guru
                        </h1>
                            <span class="d-block w-50 bg-secondary rounded mx-auto" style="height: 2px"></span>
                        <form action="../guru/proses.php" method="POST" class="d-flex p-4">
                        <input type="hidden" name="aksi" value="create">
                            <div class="col">
                                    <h4 class="mx-auto">Tambah Data</h4>
                                    <span class="d-block w-25 bg-secondary rounded float-start" style="height: 2px"></span>
                                    <br>
                                <div class="mb-3">
                                        <label for="nip" class="form-label">NIP</label>
                                        <input type="text" class="form-control" id="nip" name="nip"  placeholder="NIP"  required>
                                </div>

                                <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Guru</label>
                                        <input type="text" class="form-control" id="nama" name="nama"  placeholder="Nama Guru"  required>
                                </div>

                                <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea name="alamat" class="form-control" id="alamat" cols="10" rows="2" placeholder="Alamat" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-outline-danger" name="save">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                                    </svg> Kirim
                                </button>
                                <a href="index.php" class="btn btn-outline-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
                                    <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
                                    </svg> Kembali
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- Akhir Content -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>