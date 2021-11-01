<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/style.css?v=1">
    <title>Form Pemesanan Kamar Hotel</title>
</head>

<body id="order-section">
    <div class="container wrapper">
        <div class="container w-75 h-100 mt-3 p-5">
            <h2 class="fs-5 text-center p-3 bg-primary mb-0 text-white">Form Pemesanan</h2>
            <form action="process.php" method="POST" class="border border-1 border-primary pt-4 ps-5 pe-5 bg-light">
                <!-- Nama -->
                <div class="mb-3 row">
                    <label for="name" class="col-sm-3 col-form-label text-end">Nama Pemesan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
                <!-- Jenis Kelamin -->
                <label for="gender" class="col-sm-3 col-form-label text-end pe-3">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki-laki" checked>
                    <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Perempuan">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
                <!-- Nomor Identitas -->
                <div class="mb-3 row">
                    <label for="identify-numb" class="col-sm-3 col-form-label text-end">Nomor Indentitas</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="identify-numb" maxlength="16" name="identify-numb" required>
                        <span class="text-danger text-start err-msg">
                            <?php
                            if (isset($_GET["error2"])) {
                                $errMsg = $_GET["error2"];
                                echo $errMsg;
                            }
                            ?>
                        </span>
                    </div>
                </div>
                <!-- Tipe Kamar -->
                <div class="mb-3 row">
                    <label for="type-room" class="col-sm-3 col-form-label text-end">Tipe Kamar</label>
                    <div class="col-sm-9">
                        <select class="form-select form-select-sm type-room" id="type-room" aria-label=".form-select-sm example" name="type-room" required>
                            <?php
                            // variables
                            $roomType = array('Standar', 'Deluxe', 'Family');
                            foreach ($roomType as $key => $value) {
                                echo '<option value=' . $value . '>' . $value . '</option>';
                            } ?>
                        </select>
                    </div>
                </div>
                <!-- Harga -->
                <div class="mb-3 row">
                    <label for="price" class="col-sm-3 col-form-label text-end">Harga</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="price" name="price" value="500000" readonly required>
                    </div>
                </div>
                <!-- Tanggal -->
                <div class="mb-3 row">
                    <label for="date" class="col-sm-3 col-form-label text-end">Tanggal Pesan</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                </div>
                <!-- Durasi Menginap -->
                <div class="mb-3 row">
                    <label for="days" class="col-sm-3 col-form-label text-end">Durasi Menginap</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="days" name="days" required>
                    </div>
                    <label for="days" class="col-sm-1 col-form-label text-start">Hari</label>
                    <span class="text-danger text-start err-msg col-sm-5 col-form-label text-start">
                        <?php
                        if (isset($_GET["error3"])) {
                            $errMsg = $_GET["error3"];
                            echo $errMsg;
                        }
                        ?>
                    </span>
                </div>
                <!-- Sarapan -->
                <label for="breakfast" class="col-sm-3 col-form-label text-end pe-3">Termasuk Breakfast</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="breakfast">
                    <label class="form-check-label" for="breakfast">Ya</label>
                </div>
                <!-- Total Bayar -->
                <div class="mb-3 row">
                    <label for="grand-total" class="col-sm-3 col-form-label text-end">Total Bayar</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="show-total" readonly required>
                        <input type="number" class="form-control" id="grand-total" name="grand-total" hidden readonly required>
                        <span class="text-danger text-start err-msg">
                            <?php
                            if (isset($_GET["error1"])) {
                                $errMsg = $_GET["error1"];
                                echo $errMsg;
                            }
                            ?>
                        </span>
                    </div>
                </div>
                <!-- Buttons -->
                <div class="mt-5 row action">
                    <button id="getTotal" class="btn btn-primary col-sm-3">Hitung Total Bayar</button>
                    <button type="submit" class="btn btn-primary col-sm-3" id="submit">Simpan</button>
                    <button class="btn btn-primary col-sm-3" id="cancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./assets/app.js?v=12"></script>
</body>

</html>