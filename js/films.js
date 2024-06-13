document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("modal");
    const modalImg = document.getElementById("modal-img");
    const closeBtn = document.getElementsByClassName("close")[0];

    document.querySelectorAll(".pics").forEach(image => {
        image.addEventListener("click", function() {
            const nav = document.querySelector("nav");
            nav.setAttribute("style","visibility: hidden;");
            modal.style.display = "block";
            modalImg.src = this.src;
        });
    });


    closeBtn.onclick = function() {
        modal.style.display = "none";
        const nav = document.querySelector("nav");
            nav.setAttribute("style","visibility: visible;");
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});


//SHOW MORE BUTTON SUMMARY

document.addEventListener('DOMContentLoaded', (event) => {
    const showMoreBtn = document.getElementById('show-more-btn');
    const moreText = document.querySelector('.more-text');

    const toggleShowMoreButton = () => {
        if (window.innerWidth <= 1000) {
            moreText.style.display = 'none';
            showMoreBtn.style.display = 'inline-block';
        } else {
            moreText.style.display = 'inline';
            showMoreBtn.style.display = 'none';
        }
    };

    // Initial check
    toggleShowMoreButton();

    // Add event listener for window resize
    window.addEventListener('resize', toggleShowMoreButton);

    showMoreBtn.addEventListener('click', () => {
        if (moreText.style.display === 'none' || moreText.style.display === '') {
            moreText.style.display = 'inline';
            showMoreBtn.textContent = 'Afficher moins';
        } else {
            moreText.style.display = 'none';
            showMoreBtn.textContent = 'Afficher plus';
        }
    });
});

