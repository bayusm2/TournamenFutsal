<?php
require_once('function/helper.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Peraturan Futsal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: white;
        }

        h1 {
            text-align: center;
        }

        ul {
            margin-left: 30px;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Peraturan Futsal</h1>

    <?php
    $peraturan = array(
        'Seriap Tim terdiri dari minimal 6 pemain dan maksimal 10 pemain',
        'Setiap pemain dalam satu Tim harus berada dalam satu Prodi',
        'Semua pemain dalam satu Tim harus berada di semester yang sama (tidak boleh gabungan antar semester)',
        'Setiap tim terdiri dari 5 pemain (4 pemain lapangan dan 1 penjaga gawang).',
        'Permainan berlangsung selama 2 babak dengan masing-masing babak berdurasi 10 menit.',
        'Dilarang memprovokasi lawan',
        'Pemain diperbolehkan menggunakan kaki, kepala, atau dada untuk mengontrol dan mengoper bola.',
        'Bola keluar dari lapangan akan diberikan lemparan ke dalam atau tendangan sudut, tergantung pada siapa yang terakhir menyentuh bola.',
        'Pemain yang melakukan pelanggaran akan diberikan tendangan bebas atau tendangan penalti, tergantung pada keparahan pelanggaran.',
        'Pemain yang mendapatkan 2 kartu kuning atau 1 kartu merah langsung akan dikeluarkan dari pertandingan.',
        'Jika terjadi hasil imbang setelah waktu normal, pertandingan akan dilanjutkan dengan perpanjangan waktu atau adu penalti.',
        'Pelanggaran yang dilakukan di area penalti akan diberikan tendangan penalti.',
        'Pemain yang bermain tidak fair atau melanggar peraturan dapat diberikan kartu kuning atau kartu merah oleh wasit.',
    );
    ?>

    <ul>
        <?php
        foreach ($peraturan as $aturan) {
            echo "<li>$aturan</li>";
        }
        ?>
    </ul>
</body>
</html>
