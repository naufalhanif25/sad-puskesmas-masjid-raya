const container = document.getElementById("tv-running-text-container");
let speed = 2;

container.innerHTML += container.innerHTML;

function slideText() {
    container.scrollLeft += speed;

    if (container.scrollLeft >= container.scrollWidth / 2) {
        container.scrollLeft = 0;
    }
}

setInterval(slideText, 16);
