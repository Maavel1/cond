document.addEventListener("DOMContentLoaded", function () {
    const myLink = document.getElementById("myLink");
    const enableLinkButton = document.getElementById("enableLinkButton");

    enableLinkButton.addEventListener("click", function () {
        myLink.style.pointerEvents = "auto";
    });
});

