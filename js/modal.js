    // Get the modal
    let modal = document.getElementById("myModal");

    // Get the button that opens the modal
    let triggers = document.getElementsByClassName("modal-trigger");
    
    
    // Get the <span> element that closes the modal
    let span = document.getElementsByClassName("close")[0];
    let modalImg = document.getElementById("modal-img");
    
    // When the user clicks on the button, open the modal
    for(t of triggers)
    {
        t.onclick = function() {
            modal.style.display = "block";
            let imgToDisplay = this.firstElementChild;
            console.log(imgToDisplay)
            modalImg.src = imgToDisplay.src;
        }
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    } 