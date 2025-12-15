document.addEventListener("DOMContentLoaded", () => {
  // EXISTING NAVIGATION LOGIC
  const currentPage = window.location.pathname.split("/").pop() || "index.html"
  const navLinks = document.querySelectorAll(".nav-links a")

  navLinks.forEach((link) => {
    const href = link.getAttribute("href")
    if (href === currentPage || (currentPage === "" && href === "index.html")) {
      link.classList.add("active")
    }
  })

  // EXISTING FEATURE MODALS (Menu / Speedtest)
  const modal = document.getElementById("imageModal");
  const modalImg = document.getElementById("modalImage");
  const closeBtn = document.querySelector(".close-modal");

  if (document.getElementById("coffeeFeature")) {
      document.getElementById("coffeeFeature").onclick = () => {
          modal.style.display = "flex";
          modalImg.src = "./images/menu.jpeg";
      };
  }

  if (document.getElementById("wifiFeature")) {
      document.getElementById("wifiFeature").onclick = () => {
          modal.style.display = "flex";
          modalImg.src = "./images/speedtest.jpg";
      };
  }

  // Close Feature Modal
  if (closeBtn) {
      closeBtn.onclick = () => {
          modal.style.display = "none";
      };
  }

  if (modal) {
      modal.onclick = (e) => {
          if (e.target === modal) modal.style.display = "none";
      };
  }

    //   NEW: GALLERY LIGHTBOX LOGIC
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const closeLightbox = document.querySelector('.lightbox .close-btn');
    const galleryImages = document.querySelectorAll('.gallery-item img');

    // Add click event to all gallery images
    galleryImages.forEach(img => {
        img.addEventListener('click', () => {
            lightbox.style.display = 'flex';

            lightboxImg.src = img.src; 
        });
    });

    // Close when clicking the X button
    if (closeLightbox) {
        closeLightbox.addEventListener('click', () => {
            lightbox.style.display = 'none';
        });
    }

    // Close when clicking on the background overlay
    if (lightbox) {
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                lightbox.style.display = 'none';
            }
        });
    }
});