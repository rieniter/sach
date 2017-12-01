var slideIndex = 0;
newjv();

function newjv() {
    var i;
    var x = document.getElementsByClassName("imgs");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(newjv, 2000); 
}