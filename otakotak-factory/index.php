<?php include 'inc/header.php'; ?>
<body>
    
<!-- Hero Carousel -->
<section class="hero position-relative" style="background: url('img/bg-pattern.png') repeat;">
    <div class="container py-5">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded shadow">
                <div class="carousel-item active">
                    <img src="img/otaotak.png" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="img/hero2.jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="img/hero3.jpg" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
            </button>
        </div>

        <!-- Deskripsi -->
        <div class="text-center mt-4">
            <p class="lead px-4 py-2 bg-white rounded shadow" style="max-width: 800px; margin: auto;">
                Otak-otak khas Otak Otak Factory dibuat dari ikan segar pilihan yang dibalut dengan bumbu rempah tradisional dan dibungkus daun pisang, lalu dibakar hingga harum dan sedikit gosong sempurna.
            </p>
        </div>
    </div>
</section>

<!-- Produk Unggulan -->
<!-- Produk Unggulan -->
<section class="produk position-relative" style="background: url('img/bg-pattern.png') repeat;">
    <div class="container py-5">
        <div class="row justify-content-center g-4">

            <!-- Produk 1 -->
            <div class="col-md-4 text-center">
                <div class="card border-0 shadow h-100 rounded-4 overflow-hidden">
                    <img src="img/ikan.jpg" class="card-img-top" alt="OTAK - OTAK IKAN" style="height: 200px; object-fit: cover;">
                    <div class="card-body bg-success text-white rounded-bottom-4">
                        <h5 class="card-title fw-bold mb-1">OTAK - OTAK IKAN</h5>
                        <p class="card-text">Rp. 30.000 / 20 Pcs</p>
                    </div>
                </div>
            </div>

            <!-- Produk 2 -->
            <div class="col-md-4 text-center">
                <div class="card border-0 shadow h-100 rounded-4 overflow-hidden">
                    <img src="img/pedas.jpg" class="card-img-top" alt="OTAK - OTAK PEDAS" style="height: 200px; object-fit: cover;">
                    <div class="card-body bg-success text-white rounded-bottom-4">
                        <h5 class="card-title fw-bold mb-1">OTAK - OTAK PEDAS</h5>
                        <p class="card-text">Rp. 35.000 / 20 Pcs</p>
                    </div>
                </div>
            </div>

            <!-- Produk 3 -->
            <div class="col-md-4 text-center">
                <div class="card border-0 shadow h-100 rounded-4 overflow-hidden">
                    <img src="img/keju.jpg" class="card-img-top" alt="OTAK - OTAK KEJU" style="height: 200px; object-fit: cover;">
                    <div class="card-body bg-success text-white rounded-bottom-4">
                        <h5 class="card-title fw-bold mb-1">OTAK - OTAK KEJU</h5>
                        <p class="card-text">Rp. 35.000 / 20 Pcs</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Tombol Lihat Selengkapnya -->
        <div class="text-center mt-4">
            <a href="produk.php" class="btn btn-warning text-white fw-semibold px-4 py-2 rounded-pill shadow">LIHAT SELENGKAPNYA</a>
        </div>
    </div>
</section>


<?php include 'inc/footer.php'; ?>
