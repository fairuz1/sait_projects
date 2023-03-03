<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | SAIT PROJECTS</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body class="p-4">
    <!-- Database Connection -->
    <?php include 'connection.php';?>

    <!-- data -->
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card" style="min-width: 50%;">
                <!-- header -->
                <div class="card-header text-center">
                    SAIT Projects
                </div>

                <!-- content -->
                <div class="card-body">
                    <h5 class="card-title"><b>SAIT 20232402</b></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Displaying data from database server</h6>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mt-2 text-center">
                            <thead>
                                <tr class="table-dark" style="color: white;">
                                    <th scope="col">ID</th>
                                    <th class="m-auto" scope="col">Name</th>
                                    <th class="m-auto" scope="col">Major</th>
                                    <th class="m-auto" scope="col">City</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($db->query("SELECT * FROM $table") as $students) {
                                        $id = $students['id_mahasiswa'];
                                        $nama = $students['nama'];
                                        $prodi = $students['prodi'];
                                        $alamat = $students['alamat'];
                                        echo "
                                            <tr>
                                                <th scope='row'>{$id}</th>
                                                <td>{$nama}</td>
                                                <td>{$prodi}</td>
                                                <td>{$alamat}</td>
                                            </tr>
                                        ";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- footer -->
                <div class="card-footer text-muted text-center">
                    <i>Say Hi to the data that came from virtual machine server!</i>
                </div>
            </div>
        </div>
    </div>

    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>