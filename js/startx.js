var events = document.getElementById("events");

events.addEventListener("click", function() {
    console.log(this.nextElementSibling);
    this.nextElementSibling.classList.toggle("show");
});

var acc = document.getElementsByClassName("accordion");
var i;


for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to display the panel that is clicked*/
        this.nextElementSibling.classList.toggle("active");        
    });
}