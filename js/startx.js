var events = document.getElementById("events");

events.addEventListener("click", function() {
    console.log(this.nextElementSibling);
    this.nextElementSibling.classList.toggle("show");
});

