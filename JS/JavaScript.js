function openMenu() {
  const menuBtn = document.getElementById('menu-btn');
  const img = menuBtn.getAttribute('src');
  const newSrc = img === 'imagens/Menu_off.png' ? 'imagens/Menu_on.png' : 'imagens/Menu_off.png';
  menuBtn.setAttribute('src', newSrc);

  const linksElement = document.querySelector('.links');
  if (newSrc === 'imagens/Menu_off.png') {
      linksElement.style.display = 'none';
  } else {
      linksElement.style.display = 'flex';
  }
  window.addEventListener('resize', function() {
    if (window.innerWidth > 600) {
        linksElement.style.display = 'flex';
    }
  });

}

window.addEventListener('resize', function() {
  if (window.innerWidth < 600) {
      linksElement.style.display = 'none';
      menuBtn.setAttribute('src', 'imagens/Menu_off.png');
  }
});


let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

function showEsp() {
  const especialidades = document.getElementsByClassName('esp_sub');
  for (let i = 0; i < especialidades.length; i++) {
      if (especialidades[i].style.display === 'block') {
          especialidades[i].style.display = 'none'; // Se estiver visível, oculta
      } else {
          especialidades[i].style.display = 'block'; // Se estiver oculto, exibe
      }
  }
}


