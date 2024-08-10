document.addEventListener('DOMContentLoaded', function() {
    let currentIndex = 0;
    const images = document.querySelectorAll('.carousel img');
    const totalImages = images.length;
    const labels = document.querySelectorAll('.carousel .labels label');

    function showImage(index) {
        images.forEach((img, i) => {
            img.classList.remove('active');
            if (i === index) {
                img.classList.add('active');
            }
        });
        labels.forEach((label, i) => {
            label.style.backgroundColor = i === index ? 'white' : 'rgba(0, 0, 0, 0.5)';
        });
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % totalImages;
        showImage(currentIndex);
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        showImage(currentIndex);
    }

    document.querySelector('.carousel .nav .next').addEventListener('click', nextImage);
    document.querySelector('.carousel .nav .prev').addEventListener('click', prevImage);

    labels.forEach((label, index) => {
        label.addEventListener('click', () => {
            currentIndex = index;
            showImage(currentIndex);
        });
    });

    setInterval(nextImage, 5000); // Muda a imagem a cada 3 segundos

    showImage(currentIndex);
});