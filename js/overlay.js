document.addEventListener('DOMContentLoaded', () => {
  const images = document.querySelectorAll('.preview-image');
  const imageHoverOverlay = document.getElementById('imageHoverOverlay');
  const hoverOverlayImage = document.getElementById('hoverOverlayImage');
  const imageClickOverlay = document.getElementById('imageClickOverlay');
  const clickOverlayImage = document.getElementById('clickOverlayImage');
  let activeImg = null;

  function positionHoverOverlay() {
    const rect = activeImg.getBoundingClientRect();
    const windowWidth = window.innerWidth;

    hoverOverlayImage.src = activeImg.src;
    imageHoverOverlay.classList.remove('hidden');

    imageHoverOverlay.style.top = `${rect.top}px`;
    imageHoverOverlay.style.left = `${rect.left}px`;
    imageHoverOverlay.style.width = `${rect.width}px`;
    imageHoverOverlay.style.height = `${rect.height}px`;

    hoverOverlayImage.style.width = `${rect.width}px`;
    hoverOverlayImage.style.height = `${rect.height}px`;

    if (rect.left < windowWidth / 2) {
    hoverOverlayImage.classList.remove('origin-bottom-right');
    hoverOverlayImage.classList.add('origin-bottom-left');
    } else {
    hoverOverlayImage.classList.remove('origin-bottom-left');
    hoverOverlayImage.classList.add('origin-bottom-right');
    }
  }

  function positionClickOverlay() {
    clickOverlayImage.src = activeImg.src;
    imageClickOverlay.classList.remove('hidden');
  }

  images.forEach(img => {
    let isHovered = false;

    img.addEventListener('mouseenter', () => {
      if (isHovered) return;
      isHovered = true;
      activeImg = img;

      positionHoverOverlay();

      requestAnimationFrame(() => {
        hoverOverlayImage.classList.add('scale-[1.6]');
      });
    });

    hoverOverlayImage.addEventListener('mouseleave', () => {
      isHovered = false;
      activeImg = null;
      hoverOverlayImage.classList.remove('scale-[1.6]');
      imageHoverOverlay.classList.add('hidden');
    });

    hoverOverlayImage.addEventListener('click', () => {
      isHovered = false;
      hoverOverlayImage.classList.remove('scale-[1.6]');
      imageHoverOverlay.classList.add('hidden');

      positionClickOverlay();
    });

  });

  imageClickOverlay.addEventListener('click', (event) => {
    if (!clickOverlayImage.contains(event.target)) {
      activeImg = null;
      imageClickOverlay.classList.add('hidden');
    }
  });

  imageClickOverlay.addEventListener('mousemove', (event) => {
    if (!clickOverlayImage.contains(event.target)) {
      imageClickOverlay.classList.add('cursor-zoom-out');
    } else {
      imageClickOverlay.classList.remove('cursor-zoom-out');
    }
  });

  window.addEventListener('scroll', () => {
      if (activeImg)
        positionHoverOverlay();
  });
});