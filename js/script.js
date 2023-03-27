function reveal() {
    var reveals = document.querySelectorAll(".reveal");
    var nav = document.getElementById("navbar");
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 30;
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
      if (elementTop < windowHeight - 50) {
        nav.style.background="#b6810fac";
        nav.classList.add("active"); 
      }
      else { 
        nav.style.background="transparent";
        nav.classList.remove("active"); 
      }
    }
    
  }

window.addEventListener("scroll", reveal);

// To check the scroll position on page load
reveal(); 