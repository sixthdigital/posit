function mobileMenu() {

  // Look for .hamburger
  var hamburger = document.querySelector(".hamburger");
  var mobileMenu = document.querySelector(".mobile-menu");
  var mobileMenuLinks = mobileMenu.getElementsByTagName("a");
  // On click
  hamburger.addEventListener("click", function() {
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
    // Do something else, like open/close menu
    mobileMenu.classList.toggle("is-open");
  });

  //remove classes if browser width is above mobile viewport
  window.addEventListener('resize', function() {
  if (screen.width > 767 ) {
    if (hamburger.classList.contains('is-active')) {
      hamburger.classList.remove('is-active')
    }
    if (mobileMenu.classList.contains('is-open')) {
      mobileMenu.classList.remove('is-open')
    }
  }
});

  //close when menu link is clicked


  for(var i = 0; i < mobileMenuLinks.length; i++){

    mobileMenuLinks[i].addEventListener('click', function() {

      if (hamburger.classList.contains('is-active')) {
        hamburger.classList.remove('is-active')
      }
      if (mobileMenu.classList.contains('is-open')) {
        mobileMenu.classList.remove('is-open')
      }

  });
    
}

};

export {mobileMenu};