<?php
    include 'koneksidb.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR PESERTA DIDIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>

<?php
    $error_nopendaftaran = "";
    $error_jenis_pendaftaran = "";
    $error_tglmasuksekolah = "";
    $error_nis = "";
    $error_nopesujian = "";
    $error_appaud = "";
    $error_aptk = "";
    $error_noskhun = "";
    $error_noijazah = "";
    $error_hobi = "";
    $error_citacita = "";

    $nopendaftaran = "";
    $jenis_pendaftaran = "";
    $tglmasuksekolah = "";
    $nis = "";
    $nopesujian = "";
    $appaud = "";
    $aptk = "";
    $noserskhun = "";
    $noserijazah = "";
    $hobi = "";
    $citacita = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nis"])) {
            $error_nis = "NIS Tidak Boleh Kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "NIS Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nopesujian"])) {
            $error_nopesujian = "No Peserta Ujian Tidak Boleh Kosong";
        } else {
            $nopesujian = cek_input($_POST["nopesujian"]);
            if (!is_numeric($nopesujian)) {
                $error_nopesujian = "Nomor Peserta Ujian Hanya Boleh Angka";
            }
        }

        if (empty($_POST["noskhun"])) {
            $error_noskhun = "Nomor Seri SKHUN Tidak Boleh Kosong";
        } else {
            $noskhun = cek_input($_POST["noskhun"]);
            if (!is_numeric($noskhun)) {
                $error_noskhun = "Nomor Seri SKHUN Hanya Boleh Angka";
            }
        }

        if (empty($_POST["noserijazah"])) {
            $error_noijazah = "No Seri Ijazah Tidak Boleh Kosong";
        } else {
            $noijazah = cek_input($_POST["noijazah"]);
            if (!is_numeric($noijazah)) {
                $error_noijazah = "Nomor Seri Ijazah Hanya Boleh Angka";
            }
        }

    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                FORMULIR PESERTA DIDIK
                </div>
                <div class="card-footer">
                    1. FORM REGISTRASI
                </div>
                <div class="card-body">
                    <form method="post" action="prosesregist.php">

                    <div class="form-group row">
                        <label for="namanopendaftaran" class="col-sm-2 col-form-label">No. Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="text" name="nopendaftaran" id="nopendaftaran" class="form-control <?php echo ($error_nopendaftaran !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nopendaftaran; ?>"> <span class="warning"><?php echo $error_nopendaftaran ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="jenis_pendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jenis_pendaftaran" value="Siswa Baru">Siswa Baru</label>
                            <input type="radio" name="jenis_pendaftaran" value="Pindahan">Pindahan</label> 
                            <span class="warning" ><?php echo $error_jenis_pendaftaran; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="web" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                        <div class="col-sm-10">
                            <input type="text" name="tglmasuksekolah" id="tglmasuksekolah" class="form-control <?php echo ($error_tglmasuksekolah !="" ? "is-invalid" : ""); ?>" placeholder="XX - Bulan - XXXX" value="<?php echo $tglmasuksekolah; ?>"> <span class="warning"><?php echo $error_tglmasuksekolah ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="text" name="nis" id="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" placeholder="Nomor Induk Siswa" value="<?php echo $nis; ?>"> <span class="warning"><?php echo $error_nis ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nopesujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                        <div class="col-sm-10">
                            <input type="text" name="nopesujian" id="nopesujian" class="form-control <?php echo ($error_nopesujian !="" ? "is-invalid" : ""); ?>" placeholder="No Peserta Ujian" value="<?php echo $nopesujian; ?>"> <span class="warning"><?php echo $error_nopesujian ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="appaud" class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                        <div class="col-sm-10">
                            <input type="radio" name="appaud" value="Ya">Ya</label>
                            <input type="radio" name="appaud" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_appaud; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="aptk" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
                        <div class="col-sm-10">
                            <input type="radio" name="aptk" value="Ya">Ya</label>
                            <input type="radio" name="aptk" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_aptk; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="noskhun" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="noskhun" id="noskhun" class="form-control <?php echo ($error_noskhun !="" ? "is-invalid" : ""); ?>" placeholder="SKHUN Sebelumnya" value="<?php echo $noserskhun; ?>"> <span class="warning"><?php echo $error_noskhun ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="noijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="noijazah" id="noijazah" class="form-control <?php echo ($error_noijazah !="" ? "is-invalid" : ""); ?>" placeholder="Seri Ijazah Sebelumnya" value="<?php echo $noserijazah; ?>"> <span class="warning"><?php echo $error_noijazah ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="hobi">
                            <option value=""></option>
                            <option value="Olahraga"> Olahraga </option>
                            <option value="Kesenian"> Kesenian</option>
                            <option value="Membaca"> Membaca</option>
                            <option value="Menulis"> Menulis </option>
                            <option value="Traveling"> Traveling </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_hobi; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="citacita" class="col-sm-2 col-form-label "> Cita Cita </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="citacita">
                            <option value=""></option>
                            <option value="PNS"> PNS </option>
                            <option value="TNI/POLRI"> TNI/POLRI</option>
                            <option value="Guru/Dosen"> Guru/Dosen</option>
                            <option value="Dokter"> Dokter </option>
                            <option value="Politikus"> Politikus </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                            <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_citacita; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                    <br><div class="form-group row">
                        <div class="col-sm-20">
                            <a href="index.php" class="btn btn-primary">Back</a>
                        <style btn-primary="align right"></style>
                        </div> </br>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>