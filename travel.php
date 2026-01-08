<?php $tahun = date("Y"); ?>

<?php
include "koneksi.php";

if(isset($_POST['kirim'])){
    $nama  = htmlspecialchars($_POST['nama']);
    $pesan = htmlspecialchars($_POST['pesan']);

    mysqli_query($koneksi, "INSERT INTO komentar(nama,pesan) VALUES('$nama','$pesan')");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Echo Dolphin Lovina</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!-- ================= HERO SECTION ================= -->
<section class="bg-dark text-white text-center p-5">
    <h1>Experience the Magic of Lovina’s Sea with Echo Dolphin</h1>
    <p>Dolphin Watching, Swimming, and Snorkeling – Unforgettable Ocean Adventures</p>

    <a href="https://wa.me/6287751970305" class="btn btn-success">Book Now</a>
    <a href="#packages" class="btn btn-outline-light">View Tour Packages</a>
</section>

<!-- ================= ABOUT US ================= -->
<section class="container p-5">
    <h2>About Echo Dolphin Lovina</h2>
    <p>
        Echo Dolphin Lovina is inspired by the way dolphins communicate through echolocation — sounds that bounce back as their guide in the sea.
        Every journey with Echo brings you closer to nature and the breathtaking beauty of Lovina, Bali.
    </p>
    <p>
        We offer safe, enjoyable, and responsible marine tours, always respecting dolphins’ natural habitats.
        Working with experienced local fishermen, we ensure that every trip provides a memorable experience while supporting sustainable ocean conservation.
    </p>
</section>

<!-- ==== PHOTO GALLERY ==== -->
<section class="container p-5">
    <h2 class="text-center mb-4">Photo Gallery</h2>

    <div class="row g-3">

        <!-- Item -->
        <div class="col-md-4">
            <img src="Foto1.JPEG" class="gallery-img img-thumbnail" data-bs-toggle="modal" data-bs-target="#zoomModal">
        </div>

        <div class="col-md-4">
            <img src="Foto2.JPEG" class="gallery-img img-thumbnail" data-bs-toggle="modal" data-bs-target="#zoomModal">
        </div>

        <div class="col-md-4">
            <img src="Foto3.JPEG" class="gallery-img img-thumbnail" data-bs-toggle="modal" data-bs-target="#zoomModal">
        </div>

        <div class="col-md-4">
            <img src="Foto4.JPEG" class="gallery-img img-thumbnail" data-bs-toggle="modal" data-bs-target="#zoomModal">
        </div>

  

    </div>
</section>

<!-- ==== MODAL ZOOM ==== -->
<div class="modal fade" id="zoomModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark">
      <img id="modalImage" class="img-fluid rounded">
    </div>
  </div>
</div>

<!-- ==== SCRIPT CLICK ZOOM ==== -->
<script>
    const images = document.querySelectorAll(".gallery-img");
    const modalImage = document.getElementById("modalImage");

    images.forEach(img => {
        img.addEventListener("click", () => {
            modalImage.src = img.src;
        });
    });
</script>

<!-- ==== STYLE SQUARE PHOTO ==== -->
<style>
.gallery-img{
    width: 100%;
    height: 200px;          /* tinggi kotak gallery */
    object-fit: cover;      /* foto tidak terpotong penting */
    cursor: pointer;
}
</style>




<!-- ================= TOUR PACKAGES ================= -->
<section class="bg-light p-5" id="packages">
    <div class="container">
        <h2>Tour Packages</h2>

        <div class="row">

            <!-- Dolphin Watching -->
            <div class="col-md-4">
                <div class="card p-3">
                    <h4>🐬 Dolphin Watching</h4>
                    <p>Witness wild dolphins at sunrise.</p>
                    <p><b>Duration:</b> ± 2 hours</p>
                    <p><b>Highlights:</b> Sunrise, dolphin sightings, photography</p>
                    <a href="https://wa.me/6287751970305?text=I%20want%20a%20packages%20Dolphin%20Watching" class="btn btn-success">Book via WhatsApp</a>
                </div>
            </div>

            <!-- Swimming with Dolphins -->
            <div class="col-md-4">
                <div class="card p-3">
                    <h4>🏊 Swimming with Dolphins</h4>
                    <p>Swim alongside dolphins safely.</p>
                    <p><b>Duration:</b> ± 1.5 hours</p>
                    <p><b>Highlights:</b> Safe interaction, photo opportunity</p>
                    <a href="https://wa.me/6287751970305?text=I%20want%20a%20packages%20Swimming%20with%20Dolphins" class="btn btn-success">Book via WhatsApp</a>
                </div>
            </div>

            <!-- Snorkeling -->
            <div class="col-md-4">
                <div class="card p-3">
                    <h4>🤿 Snorkeling Adventure</h4>
                    <p>Explore coral reefs and marine life.</p>
                    <p><b>Duration:</b> ± 2 hours</p>
                    <p><b>Highlights:</b> Coral reefs, tropical fish</p>
                    <a href="https://wa.me/6287751970305?text=I%20want%20a%20packages%20Snorkeling" class="btn btn-success">Book via WhatsApp</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================= WHY CHOOSE US ================= -->
<section class="container p-5">
    <h2>Why Choose Echo Dolphin Lovina</h2>
    <ul>
        <li>🐬 Authentic and Responsible Experience</li>
        <li>🌿 Ocean Conservation & Sustainability</li>
        <li>🚤 Safe and Comfortable Boats</li>
        <li>📸 Photo & Video Opportunities</li>
    </ul>
</section>


<!-- ================= CONTACT & MAP ================= -->
<section class="container p-5">
    <h2>Contact & Location</h2>

    <p><b>Address:</b> Lovina, Bali, Indonesia</p>
    <p><b>Email:</b> info@echodolphinlovina.com</p>
    <p><b>Phone/WhatsApp:</b> +6287751970305</p>

    <a class="btn btn-success" href="https://wa.me/6287751970305">Contact via WhatsApp</a>

<section class="container p-5" id="komentar">

    <h2 class="mb-3 text-center">Visitor Comments</h2>

    <!-- FORM KOMENTAR -->
<form method="post" class="mb-4">

    <div class="mb-2">
        <label>Name</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-2">
        <label>Comments</label>
        <textarea name="pesan" class="form-control" rows="3" required></textarea>
    </div>

    <button name="kirim" class="btn btn-success">Send</button>

</form>

<hr>

<h3 class="mt-3">Latest comments</h3>

<?php
// tampilkan 5 komentar dulu
$data5 = mysqli_query($koneksi, "SELECT * FROM komentar ORDER BY id DESC LIMIT 5");
?>

<div id="komentar-awal">
<?php while($d = mysqli_fetch_array($data5)){ ?>
    <div class="card mt-2 p-2">
        <b><?php echo $d['nama']; ?></b>
        <span class="text-muted">(<?php echo $d['tanggal']; ?>)</span>
        <div><?php echo $d['pesan']; ?></div>
    </div>
<?php } ?>
</div>

<!-- tombol tampilkan semua -->
<button id="btnSemua" class="btn btn-primary mt-3">Show all comments</button>

<!-- semua komentar disembunyikan dulu -->
<div id="semua-komentar" style="display:none;">
    <?php
    $semua = mysqli_query($koneksi, "SELECT * FROM komentar ORDER BY id DESC");
    while($d = mysqli_fetch_array($semua)){ ?>
        <div class="card mt-2 p-2">
            <b><?php echo $d['nama']; ?></b>
            <span class="text-muted">(<?php echo $d['tanggal']; ?>)</span>
            <div><?php echo $d['pesan']; ?></div>
        </div>
    <?php } ?>
</div>

<script>
document.getElementById('btnSemua').onclick = function () {
    document.getElementById('komentar-awal').style.display = 'none';
    document.getElementById('semua-komentar').style.display = 'block';
    this.style.display = 'none';
};
</script>

</section>


</section>
<section class="container p-5">
    <h2 class="text-center mb-4">Location Echo Dolphin Lovina</h2>

    <div class="ratio ratio-16x9">

        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.505858430513!2d115.03609529999999!3d-8.1516792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd19b007d4bf897%3A0x313b6c13a238f244!2sJln%20laviana%20banyualit%20lovina!5e0!3m2!1sid!2sid!4v1767788361224!5m2!1sid!2sid"
            style="border:0;"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

    </div>

    <div class="text-center mt-3">
        <a href="https://maps.app.goo.gl/kfAQufrMthoe9DjJA" 
           class="btn btn-success" 
           target="_blank">
            📍Open in Google Maps
        </a>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<footer class="text-center p-3 bg-dark text-white">
    © <?php echo $tahun; ?> Echo Dolphin Lovina
</footer>

<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
