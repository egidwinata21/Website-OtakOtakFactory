<?php include 'inc/header.php'; ?>

<!-- Halaman Produk -->
<section class="produk position-relative" style="background: url('img/bg-pattern.png') repeat, linear-gradient(to bottom, #ffffff 50%, #f97316 50%);">
    <div class="container py-5">
        <div class="row justify-content-center g-4">

            <?php
            $produk = [
                ["img" => "otak-keju.jpg",   "nama" => "OTAK - OTAK KEJU",   "harga" => "Rp.35.000 / 20 Pcs"],
                ["img" => "otak-pedas.jpg",  "nama" => "OTAK - OTAK PEDAS",  "harga" => "Rp.35.000 / 20 Pcs"],
                ["img" => "otak-ikan.jpg",   "nama" => "OTAK - OTAK IKAN",   "harga" => "Rp.35.000 / 20 Pcs"],
                ["img" => "otak-udang.jpg",  "nama" => "OTAK - OTAK UDANG",  "harga" => "Rp.35.000 / 20 Pcs"],
                ["img" => "otak-ayam.jpg",   "nama" => "OTAK - OTAK AYAM",   "harga" => "Rp.35.000 / 20 Pcs"],
                ["img" => "otak-sotong.jpg", "nama" => "OTAK - OTAK SOTONG", "harga" => "Rp.35.000 / 20 Pcs"],
            ];

            foreach ($produk as $p) {
                echo '
                <div class="col-md-4 text-center">
                    <div class="card border-0 shadow h-100 rounded-4 overflow-hidden bg-transparent">
                        <div class="bg-white rounded-4 border border-3 border-success p-2 h-100 d-flex flex-column justify-content-between">
                            <img src="img/' . $p['img'] . '" class="img-fluid rounded-3 mb-3" style="height: 200px; object-fit: cover;" alt="' . $p['nama'] . '">
                            <div class="text-success fw-bold">' . $p['nama'] . '</div>
                            <div class="mb-3">' . $p['harga'] . '</div>
                            <div>
                                <button class="btn btn-dark btn-sm fw-semibold px-4">BELI</button>
                                <button class="btn btn-outline-dark btn-sm ms-2"><i class="bi bi-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>';
            }
            ?>

        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>
