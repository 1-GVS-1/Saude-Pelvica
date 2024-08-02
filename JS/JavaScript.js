function openMenu() {
    const menuBtn = document.getElementById('menu-btn');
    const img = menuBtn.getAttribute('src');
    const newSrc = img === 'imagens/Menu_off.png' ? 'imagens/Menu_on.png' : 'imagens/Menu_off.png';
    menuBtn.setAttribute('src', newSrc);

    const linksElement = document.querySelector('.links');
    if (newSrc === 'imagens/Menu_off.png') {
        linksElement.style.display = 'none';
    } else {
        linksElement.style.display = 'block';
    }
}
function currentDiv(n) {
    showDivs(slideIndex = n);
  }
  
  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " w3-opacity-off";
  }