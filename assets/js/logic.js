var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 20,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    breakpoints: {
      576: {
        slidesPerView: 3
      },
      768: {
        slidesPerView: 4
      },
      992: {
        slidesPerView: 5
      }
    }
  });

   const cards = document.querySelectorAll('.testimonial-card-wrapper');
  let visibleCount = 0;

  function showNextCards() {
    const showLimit = 2;
    for (let i = visibleCount; i < visibleCount + showLimit && i < cards.length; i++) {
      cards[i].classList.remove('d-none');
    }
    visibleCount += showLimit;
    if (visibleCount >= cards.length) {
      document.getElementById('loadMore').style.display = 'none';
    }
  }

  document.getElementById('loadMore').addEventListener('click', showNextCards);

  // Initial load
  showNextCards();

    const slider = document.getElementById('review-slider');
  const cardWidth = 320; // card width + gap

  function slideLeft() {
    slider.scrollBy({ left: -cardWidth * 3, behavior: 'smooth' });
  }

  function slideRight() {
    slider.scrollBy({ left: cardWidth * 3, behavior: 'smooth' });
  }

  
  function openPopup() {
    document.getElementById("popupModal").style.display = "block";
  }

  function closePopup() {
    document.getElementById("popupModal").style.display = "none";
  }

  // Optional: Close when clicking outside the content
  window.onclick = function(event) {
    var modal = document.getElementById("popupModal");
    if (event.target === modal) {
      closePopup();
    }
  }

