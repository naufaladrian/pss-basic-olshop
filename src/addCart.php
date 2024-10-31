<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $brg = $_GET['brg'];
    $hrg = $_GET['hrg'];
    $jml = $_GET['jml'];
    $pjk = $_GET['pjk'];

    // Inisialisasi $find agar tidak undefined saat cart kosong
    $find = false;

    if (!empty($_SESSION['cart']['arrCart'])) {
        $max = sizeof($_SESSION['cart']['arrCart']);
        for ($i = 0; $i < $max; $i++) {
            $cari = array_search($brg, $_SESSION['cart']['arrCart'][$i]);
            if ($cari !== false) {
                $_SESSION['cart']['arrCart'][$i]['jml'] += 1;
                $find = true;
                break;
            }
        }
    }

    // Tambahkan item jika tidak ditemukan di cart
    if (!$find) {
        $item = array(
            'nmBrg' => $brg,
            'jml' => $jml,
            'hrg' => $hrg,
            'pjk' => $pjk,
            'total' => (($pjk + 100) * $hrg / 100)
        );
        $_SESSION['cart']['arrCart'][] = $item; // Lebih singkat dengan []
    }
}

header("location:list-product.php?page=cart-disp");
?>