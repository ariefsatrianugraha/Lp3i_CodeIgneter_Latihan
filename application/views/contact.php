<html>
    <head>
        <title>Halaman Contact</title>

        <!-- Memanggil fungsi dari bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

        <!-- Memanggil fungsi dari js -->
        <script rel="text/javascript" href="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" /
    </head>
    <body>
        <div class="container p-3 my-3 bg-dark text-white" >
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                        <br>
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                        <br>
                        <label for="komentar">komentar</label>
                        <input type="textarea" name="komentar" class="form-control" placeholder="Komentar">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>