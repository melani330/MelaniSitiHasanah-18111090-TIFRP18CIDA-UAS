<?php
// include 'session.php';
include 'config/data_register.php';
include 'header.php';
?>


<body style="background: url('image/asin.png');background-size: cover;">
        <nav aria-label="breadcrumb" class="main-breadcrumb" >
            <ol class="breadcrumb"style="background: rgba(77, 52, 5, 0.979)">
            <li class="breadcrumb-item"><a href="#"style="color:rgb(194, 153, 19)">Kripikku.co.id</a></li>
              <li class="breadcrumb-item"><a href="../halaman/halaman_utama/index.php"style="color:rgba(205, 149, 32, 0.979)">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">My Account</li>
            </ol>
          </nav>

    <div class="container">
    <div class="table-responsive">
		<table id="dataregister" class="table table-striped jambo_table bulk_action">
        <!-- <table id="dataregister" class="table table-striped table-bordered" style="width:100%"> -->
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $q->fetch()) :
                    $id = $row['id'];
                    $namadepan = $row['nama_depan'];
                    $namabelakang = $row['nama_belakang'];
                    $namalengkap = $namadepan . " " . $namabelakang;
                    $email = $row['email'];
                    $username = $row['username'];
                ?>
                    <tr>
                        <td><?php echo $namalengkap; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $username; ?></td>
                        <td>
                            <!-- form hapus -->
                            <form action="edit.php" method="POST">
                                <input type="hidden" name="id_reg" value="<?php echo $id; ?>" />
                                <input type="hidden" name="namadepan" value="<?php echo $namadepan; ?>" />
                                <input type="hidden" name="namabelakang" value="<?php echo $namabelakang; ?>" />
                                <input type="hidden" name="email" value="<?php echo $email; ?>" />
                                <input type="hidden" name="username" value="<?php echo $username; ?>" />
                                <button name="login" type="submit" class="btn btn-primary col-md-6" style=" background:rgba(186, 132, 32, 0.979)">Edit</button>
                                <!-- <button type="submit" class="btn btn-primary">Edit</button> -->
                            </form>

                            <!-- form view -->
                            <form action="view.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                <button name="login" type="submit" class="btn btn-primary col-md-6" style="background:rgba(160, 114, 28, 0.979)">Detail View</button>
                                <!-- <button type="submit" class="btn btn-success">Detail View</button> -->
                            </form>

                            <!-- form delete -->
                            <form action="config/hapus.php" method="POST">
                                <input type="hidden" name="id_reg" value="<?php echo $id; ?>" />
                                <button name="login" type="submit" class="btn btn-primary col-md-6"style="background: rgba(131, 101, 45, 0.979)" >Hapus</button>
                                <!-- <button type="submit" class="btn btn-danger">Hapus</button> -->
                            </form>
                        </td>
                        </form>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#dataregister').DataTable({
            "aLengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ],
            "iDisplayLength": 5
        });
    });
</script>

</html>