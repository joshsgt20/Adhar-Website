
//Buttons to display menu items//
$(document).ready(function(){
    $("#SignLanguageButton").click(function(){
      $("#SignLanguageContainer").toggle();
    });
  });
  
  $(document).ready(function(){
    $("#Button").click(function(){
      $("#PDFS").toggle();
    });
  });
  
  



  
//Buttons to display menu items//
$(document).ready(function(){
    $("#button1").click(function(){
      $("#FoodItems").toggle();
    });
  });
  
  $(document).ready(function(){
    $("#button2").click(function(){
      $("#Drinks").toggle();
    });
  });
  

  
  
  //javascript for Modal Popups //
  
      var modalparent = document.getElementsByClassName("Modal");
  
      // Get the button that opens the modal
  
      var modal_btn_multi = document.getElementsByClassName("Modals");
  
      // Get the <span> element that closes the modal
      var span_close_multi = document.getElementsByClassName("close_multi");
  
      // When the user clicks the button, open the modal
      function setDataIndex() {
  
          for (i = 0; i < modal_btn_multi.length; i++)
          {
              modal_btn_multi[i].setAttribute('data-index', i);
              modalparent[i].setAttribute('data-index', i);
              span_close_multi[i].setAttribute('data-index', i);
          }
      }
      for (i = 0; i < modal_btn_multi.length; i++)
      {
          modal_btn_multi[i].onclick = function() {
              var ElementIndex = this.getAttribute('data-index');
              modalparent[ElementIndex].style.display = "block";
          };
  
          // When the user clicks on <span> (x), close the modal
          span_close_multi[i].onclick = function() {
              var ElementIndex = this.getAttribute('data-index');
              modalparent[ElementIndex].style.display = "none";
          };
      }
      window.onload = function() {
      setDataIndex();
      };
  
      window.onclick = function(event) {
          if (event.target === modalparent[event.target.getAttribute('data-index')]) {
              modalparent[event.target.getAttribute('data-index')].style.display = "none";
          }
  
  
          if (event.target === modal) {
              modal.style.display = "none";
          }
      };
  
  //When a box is clicked, the animation triggers//
  
  
  
  

  
        document.querySelectorAll("#SignLanguageButton").forEach(function(DisplaySignLanguage) {
            DisplaySignLanguage.addEventListener("click", function() {
          gsap.from(".SignLanguageModal", {
            scale: 0.5,
            duration: 1.2,
            scale: 0.5,
            opacity: 0,
            stagger: 0.2,
            ease: "power4",
        
          });
  
                });
              });
  
                    document.querySelectorAll("#Button").forEach(function(DisplayPDFS) {
                        DisplayPDFS.addEventListener("click", function() {
                      gsap.from("#PDFS img", {
                        scale: 0.5,
                        duration: 1.2,
                        scale: 0.5,
                        opacity: 0,
                        stagger: 0.2,
                        ease: "power4",
                      });
  
                            });
                          });
  