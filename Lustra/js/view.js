const imageList = document.getElementById("gallery");
const images = imageList.querySelectorAll("img");
const view = document.getElementById("view");
const viewContent = document.getElementById("view-content");

function openView(imageSrc) {
    view.style.display = "grid";
    view.style.placeItems = "center";
    viewContent.innerHTML = `<img src="${imageSrc}" />`;
}

function closeView() {
    view.style.display = "none";
    view.style.placeItems = "unset";
    viewContent.innerHTML = "";
}

// Open image on click
images.forEach((image) => {
    image.addEventListener("click", () => {
        openView(image.src);
    });
});

// Close on click outside the image
view.addEventListener("click", () => {
    closeView();
});

view.addEventListener("click", (event) => {
    event.stopPropagation();
});

// Close on ESC
window.onkeydown = function(event) {
    ESC = 27
    if (event.keyCode == ESC) {
        closeView();
    }
};
