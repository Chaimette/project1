document.addEventListener("DOMContentLoaded", function(e) {
    let itemList = document.querySelector(".slider-wrapper .item-list");
    let slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
    let sliderScrollbar = document.querySelector(".carousel .slider-scrollbar");
    let scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
    let maxScrollLeft = itemList.scrollWidth - itemList.clientWidth;
    
    let initSlider = () =>{
        scrollbarThumb.addEventListener("mousedown", (e) => 
        {
            let startX = e.clientX;
            let thumbPosition = scrollbarThumb.offsetLeft;
            let maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;;
           
            let handleMouseMove = (e) => {
                let deltaX = e.clientX - startX;
                let newThumbPosition = thumbPosition + deltaX;
                // Ensure the scrollbar thumb stays within bounds
                let boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                let scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
                
                scrollbarThumb.style.left = `${boundedPosition}px`;
                itemList.scrollLeft = scrollPosition;
            }

            let handleMouseUp = () => {
                document.removeEventListener("mousemove", handleMouseMove);
                document.removeEventListener("mouseup", handleMouseUp);
            }
            // Add event listeners for drag interaction
            document.addEventListener("mousemove", handleMouseMove);
            document.addEventListener("mouseup", handleMouseUp);
        })        
    }
    
    for( let button of slideButtons)
    {
        button.addEventListener("click", () => {
            const direction = button.id === "left" ? -1 : 1;
            const scrollAmount = (itemList.clientWidth)* direction;  
            console.log(itemList.clientWidth);          
            itemList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });        
    }

    let handleSlideButtons = () => {
        slideButtons[0].style.display = itemList.scrollLeft <= 0 ? "none" : "flex";
        slideButtons[1].style.display = itemList.scrollLeft >= maxScrollLeft ? "none" : "flex";
    }
    console.log(itemList);
    initSlider();
    window.addEventListener("resize", initSlider);
    window.addEventListener("load", initSlider);
})