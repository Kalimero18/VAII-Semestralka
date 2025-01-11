document.addEventListener('DOMContentLoaded', function () {
    const logos = document.querySelectorAll('.kluby-obr img');

    logos.forEach(function (logo) {
        logo.addEventListener('mouseover', function () {
            logo.style.transform = 'scale(1.1) rotate(15deg)';
            logo.style.transition = 'transform 0.5s ease-in-out';
            logo.style.boxShadow = '0 0 20px rgba(255, 255, 255, 0.6)';
        });

        logo.addEventListener('mouseout', function () {
            logo.style.transform = 'scale(1) rotate(0deg)';
            logo.style.transition = 'transform 0.5s ease-in-out';
            logo.style.boxShadow = 'none';
        });

        logo.addEventListener('click', function () {
            logo.style.transform = 'scale(1.1)';
            logo.style.transition = 'transform 0.1s ease-in-out';

            setTimeout(function () {
                logo.style.transform = 'scale(1)';
            }, 100);
        });
    });
});

const text = "Vitaj na stránke Futbal v Londýne";
const typingElement = document.getElementById('typingText');
let index = 0;

function typeText() {
    if (index < text.length) {
        typingElement.textContent += text.charAt(index);
        index++;
        setTimeout(typeText, 100);
    }
}
typeText();

document.addEventListener("DOMContentLoaded", () => {
    const stars = document.querySelectorAll(".star-rating .star");

    stars.forEach((star, index) => {
        star.addEventListener("click", () => {
            stars.forEach((s, i) => {
                s.classList.toggle("active", i <= index);
            });
            alert(`Ohodnotili ste ${index + 1} hviezdičkami!`);
        });

        star.addEventListener("mouseover", () => {
            stars.forEach((s, i) => {
                s.classList.toggle("hover", i <= index);
            });
        });

        star.addEventListener("mouseout", () => {
            stars.forEach((s) => s.classList.remove("hover"));
        });
    });
});









