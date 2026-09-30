const toggleButton = document.getElementById("sidebar-toggle");

if (toggleButton) {
    toggleButton.addEventListener("click", function () {
        document.body.classList.toggle("sidebar-collapsed");
    });
}