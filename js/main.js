
      // When the user scrolls the page, execute myFunction
      window.onscroll = function() {myFunction()};

      // Get the navbar
      var nav = document.getElementById("myNavbar");

      // Get the offset position of the navbar

      // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
      function myFunction() {
        if (window.scrollY > 50) {
          nav.classList.add("sticky");
          document.getElementById("slikaLogo").src = "http://localhost/iskra/wordpress/wp-content/uploads/2021/08/iskra-logo-2.png";
        } else {
          nav.classList.remove("sticky");
          document.getElementById("slikaLogo").src = "http://localhost/iskra/wordpress/wp-content/uploads/2021/08/iskra-logo-1.png";
        }
      } 

 