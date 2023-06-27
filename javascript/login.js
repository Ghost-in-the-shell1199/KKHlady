document.getElementById("loginBtn").addEventListener("click", function() {
    document.getElementById("loginPopup").style.display = "block";
  });
  
  document.getElementById("loginPopup").addEventListener("click", function(event) {
    if (event.target === this) {
      this.style.display = "none";
    }
  });