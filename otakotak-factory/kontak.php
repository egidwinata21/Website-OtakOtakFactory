<?php include 'inc/header.php'; ?>

<!-- Hero Section Kontak -->
<section class="text-center text-white" style="background: linear-gradient(rgba(73, 82, 71, 0.75), rgba(52, 59, 51, 0.73)),url('img/tim-dapur.jpg') center center / cover no-repeat; padding: 200px 0;">
    <h2 class="fw-bold">Contact Us</h2>
    <p class="mt-3">Kami siap menjawab pertanyaanmu<br>Jangan ragu untuk menghubungi kami kapan saja.</p>
</section>

<!-- Lokasi & Form -->
<section class="position-relative" style="background: url('img/bg-pattern.png') center center / cover no-repeat; padding: 100px 0;">
    <div class="container py-5">
        <h4 class="text-center mb-4"><i class="bi bi-geo-alt-fill text-warning me-2"></i>Where To Find Us</h4>
        
        <!-- Google Maps Embed -->
        <div class="mb-5 text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.149994323388!2d104.4780793!3d0.9171916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cf7128fd88e3d1%3A0x254489a377e3601e!2sUMRAH%20Dompak!5e0!3m2!1sid!2sid!4v1716205901184!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

        <div class="row g-4">
            <!-- Kiri: Info Kontak -->
            <div class="col-md-6 text-black">
                <h5 class="fw-bold mb-3">📍 Alamat Usaha</h5>
                <p>
                    Otak Otak Factory<br>
                    Pavilion Kios UMRAH, Lot K-12, Dompak,<br>
                    Tanjungpinang, Kepulauan Riau<br>
                    Kode Pos 29124
                </p>

                <h5 class="fw-bold mt-4 mb-2">✉ Email</h5>
                <p>contact@otakotakfactory.com</p>

                <h5 class="fw-bold mt-4 mb-2">📱 Sosial Media</h5>
                <p>
                    Instagram: @otakotakfactory<br>
                    Facebook: Otak Otak Factory<br>
                    TikTok: @otakotak.factory
                </p>

                <h5 class="fw-bold mt-4 mb-2">📞 Telepon / WhatsApp</h5>
                <p>(+62) 813-1234-5678</p>
            </div>

            <!-- Kanan: Form -->
            <div class="col-md-6">
                <div class="bg-white p-4 rounded shadow">
                    <h5 class="fw-bold text-center mb-4">CONTACT US</h5>
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nama" placeholder="Your name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="you@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Message</label>
                            <textarea class="form-control" id="pesan" rows="5" placeholder="Type your message..."></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-dark rounded-pill px-4">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>
