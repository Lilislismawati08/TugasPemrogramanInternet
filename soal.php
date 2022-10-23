<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Soal Pilihan Ganda</title>
<body>
    <?php
    $ans1 = $_POST[ans1];
    $ans2 = $_POST[ans2];
    $ans3 = $_POST[ans3];
    $ans4 = $_POST[ans4];
    $correct = 0;
    if (!empty($_POST)){
        if ($pilihan1 =100) {
            $correct +=20;
        }
    }
?>
<h3>KERJAKAN SOAL PILIHAN GANDA DI BAWAH INI!</h3>
    <form action="soal.php" method="post">
        <p>1. Atribut penting yang harus dimiliki dari perangkat lunak yang baik, kecuali....</p>
        <input type="radio" name="ans1">a. Dependability and security<br> 
        <input type="radio" name="ans1">b. Failure<br> 
        <input type="radio" name="ans1">c. Maintainability<br> 
        <input type="radio" name="ans1">d. Efficiency<br> 

        <p>2. Apa itu Software Engineering....</p>
        <input type="radio" name="ans2" value="m">a. Sebuah program komputer dan dokumentasi terkait<br> 
        <input type="radio" name="ans2" value="m">b. Disiplin ilmu teknik yang berkaitan dengan semua aspek produksi
         perangkat lunak dari tahap awal spesifikasi sistem hingga pemeliharaan sistem setelah mulai digunakan<br> 
        <input type="radio" name="ans2" value="m">c. Semua aspek pengembangan sistem berbasis komputer termasuk perangkat keras, perangkat lunak dan rekayasa proses<br> 
        <input type="radio" name="ans2" value="m">d. Orang yang memproduksi perangkat lunak<br> 

        <p>3. Keadaan iklim di Indonesia dipengaruhi oleh tiga jenis iklim yang terjadi yaitu, kecuali....</p>
        <input type="radio" name="ans3" value="m">a. Iklim sub tropis<br> 
        <input type="radio" name="ans3" value="m">b. Iklim tropis<br> 
        <input type="radio" name="ans3" value="m">c. SIklim musim<br> 
        <input type="radio" name="ans3" value="m">d. Iklim laut<br>

        <p>4. Bentuk kerjasama yang ada dan sudah berlangsung lama pada masyarakat Indonesia biasa disebut dengan....</p>
        <input type="radio" name="ans4" value="m">a. Kerja kelompok<br> 
        <input type="radio" name="ans4" value="m">b.  Musyawarah dan mufakat<br> 
        <input type="radio" name="ans4" value="m">c. Gotong royong<br> 
        <input type="radio" name="ans4" value="m">d. Kooperatif<br>

        <p>5. Raja yang paling terkenal dari kerajaan Tarumanegara adalah....</p>
        <input type="radio" name="ans5" value="m">a. Raja Kundungga<br> 
        <input type="radio" name="ans5" value="m">b.  Raja Mulawarman<br> 
        <input type="radio" name="ans5" value="m">c. Raja Purnawarman<br> 
        <input type="radio" name="ans5" value="m">d. Raja Wurawari<br><br>

        <input type="submit">
</head>
</form>
</body>
<html>