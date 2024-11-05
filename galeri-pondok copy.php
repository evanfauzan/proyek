<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
    <style>
      .gallery-item {
        width: 100%;
        height: 200px; /* Set a fixed height for the images */
        object-fit: cover; /* Ensures images cover the area without distortion */
        border-radius: 5px; /* Optional: for rounded corners */
        transition: transform 0.2s; /* Smooth scaling effect */
      }
      .gallery-item:hover {
        transform: scale(1.05); /* Scale effect on hover */
      }
      /* Custom styles for the modal */
      .modal-lg {
        max-width: 80%; /* Increase the modal size */
      }
      .modal-body {
        display: flex;
        justify-content: center;
        align-items: center;
      }
    </style>
    <title>Yayasan Darul Qur'an</title>
  </head>

  <body style="background-image: url(background.png)">
    <?php include "layout/navbar.html"; ?>
    <main class="container my-4 bg-light bg-gradient shadow p-3">
      <div class="text-center">
        <h2 class="judul2">Galeri Pondok</h2>
      </div>

      <div class="row">
        <script>
          for (let i = 102; i >= 1; i--) {
            document.write(`
                        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="400">
                            <div class="card border-0">
                                <img src="images/${i}.jpg" alt="Kegiatan ${i}" class="gallery-item img-fluid" onclick="openPopup('images/${i}.jpg')" />
                            </div>
                        </div>
                    `);
          }
        </script>
      </div>

      <!-- Bootstrap Modal -->
      <div
        class="modal fade"
        id="imageModal"
        tabindex="-1"
        aria-labelledby="imageModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="imageModalLabel">Gambar</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <img class="img-fluid" id="modalImage" />
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php include "layout/footer.html"; ?>
    <script>
      AOS.init(); // Inisialisasi AOS
      function openPopup(imageSrc) {
        const modalImage = document.getElementById("modalImage");
        modalImage.src = imageSrc;
        const imageModal = new bootstrap.Modal(
          document.getElementById("imageModal")
        );
        imageModal.show();
      }
    </script>
  </body>
</html>