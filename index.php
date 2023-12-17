<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="<KEY>" crossorigin="anonymous">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="result.php" method="POST">
                <div class="d-flex justify-content-center mb-3">
                    <img src="image/gender.png" alt="" width="140" height="140">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tinggi(cm)</label>
                    <input type="number" class="form-control col-sm-2 col-md-3" id="exampleFormControlInput1"
                        placeholder="1-3 digit" minlength="1" maxlength="3" name="tinggi" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Berat(kg)</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="1-3 digit"
                        minlength="1" maxlength="3" name="berat" required>
                </div>
                <div class="mb-3">
                    <label for="">Jenis Kelamin</label>
                    <br>
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="Laki-laki" required>
                    <label class="form-check-label" for="Laki-laki" id="option">
                        Laki-laki
                    </label>
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="Perempuan" required>
                    <label class="form-check-label" for="Perempuan">
                        Perempuan
                    </label>
                </div>
                <div class="success d-grid gap-2">
                    <button type="submit" class="btn btn-outline-success">Cek BMI</button>
                </div>
            </form>
        </div>
        <div class="definition">
            <p>Body Mass Index (BMI) adalah nilai ukur untuk mengetahui status gizi seseorang berdasarkan berat dan
                tinggi
                badannya. Nilai BMI juga dapat menjadi alat pantauan awal untuk mengetahui risiko seseorang terhadap
                suatu
                penyakit.

                Nilai BMI yang tinggi menandakan bahwa Anda kelebihan berat badan (overweight atau obesitas). Sementara,
                nilai BMI yang rendah artinya Anda kekurangan gizi dan memiliki berat badan rendah.</p>

            <p>
                Menurut WHO, pengelompokkan BMI adalah sebagai berikut.<br>

                <br>~ Berat badan di bawah normal jika angka BMI di bawah 18,5<br>
                <br>~ Berat badan normal jika angka BMI di antara 18,5 – 24,9<br>
                <br>~ Berat badan berlebih jika angka BMI di antara 25 – 29,9<br>
                <br>~ Obesitas jika angka BMI adalah 30 atau lebih.<br>
            </p>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"> </script>

</html>