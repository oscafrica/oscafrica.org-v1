$(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
          $(".navbar").css("background-color", "#2a2f4a"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
          $(".fixed-top").css("top", "0");
          $(".navbar").css("border-bottom", "2px solid rgb(36,41,67)");
        } else {
          $(".navbar").css("background-color", "transparent"); // if not, change it back to transparent
          $(".fixed-top").css("top", "20px");
          $(".navbar").css("border-bottom", "0 solid rgb(36,41,67)");
        }
      });
    });
