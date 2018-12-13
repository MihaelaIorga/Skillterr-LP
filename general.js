// Get the container element
var linkContainer = document.getElementById("myDIV");

// Get all buttons with class="btn" inside the container
var btns = linkContainer.getElementsByClassName("linknav");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}



//smooth-scroll

// Scroll to specific values
// scrollTo is the same
window.scroll({
  top: 2500,
  left: 0,
  behavior: 'smooth' <pre rel="HTML"><code markup="tt" class="language-markup">
});

// Scroll certain amounts from current position
window.scrollBy({
  top: 100, // could be negative value
  left: 0,
  behavior: 'smooth'
});

// Scroll to a certain element
document.querySelector('.class').scrollIntoView({
  behavior: 'smooth'
});

