
document.addEventListener("DOMContentLoaded", function(){ //Wacht tot heel het HTML document is geladen
  document.getElementById("hamburger-menu").addEventListener("click", function(){ //ALS er op het element hamburger-menu wordt geklikt
    document.getElementById("menu-navbar").classList.toggle("toggle-menu-bar"); //zet dan bij het element menu-navbar de class toggle-menu-bar
  });
  
})