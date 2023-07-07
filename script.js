const talkButton = document.getElementById("talk");
const popup = document.getElementById("popup");
const closeButton = document.getElementById("close");

talkButton.addEventListener("click", function() {
  popup.style.display = "block";
});

closeButton.addEventListener("click", function() {
  popup.style.display = "none";
});
