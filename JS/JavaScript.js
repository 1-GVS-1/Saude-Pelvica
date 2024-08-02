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
