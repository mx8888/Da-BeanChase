let menu= document.querySelector('#menu-icon');
let navlist= document.querySelector('.navlist');

menu.onclick= () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
    
}

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navlist.classList.remove('open');
    
}
document.querySelector('.google-btn').addEventListener('click', function(event) {
    event.preventDefault();

});

document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector('.slider');

    function autoScroll() {
        const slideWidth = slider.scrollWidth / slider.children.length;
        slider.scrollLeft += slideWidth;

        if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth) {
            slider.scrollLeft = 0;
        }
    }

    setInterval(autoScroll, 3000);

    // Optional: Pause auto-scroll on hover
    slider.addEventListener("mouseenter", function() {
        clearInterval(autoScrollInterval);
    });

    slider.addEventListener("mouseleave", function() {
        autoScrollInterval = setInterval(autoScroll, 3000);
    });
});
