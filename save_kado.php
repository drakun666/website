<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kado = htmlspecialchars($_POST['kado']); // Menghindari input berbahaya
    $file = 'doa_kamu.txt'; // Nama file untuk menyimpan data

    if (!empty($kado)) {
        // Menyimpan input ke file
        file_put_contents($file, $kado . PHP_EOL, FILE_APPEND);

        // Redirect ke link tujuan
        $link = "https://link.dana.id/kaget?c=s8rdx658z&r=hgv6TS";
        header("Location: $link");
        exit();
    } else {
        echo "Input tidak boleh kosong!";
    }
}
?>
