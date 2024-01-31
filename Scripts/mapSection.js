var mapPositionArr = [60, -60, -600, -800];
var mapHrefArr = ["semenanjung", "semenanjung", "sarawak", "sabah"];
var currentIndex = 1;
// target element with id mys-img
var myImg = document.getElementById("mys-img");
var mapBtn = document.getElementById("map-btn");
var mapLocationHeading = document.getElementById("map-location-heading");

function mapGoRight() {
  currentIndex++;
  if (currentIndex > 3) {
    currentIndex = 0;
  }
  updateMap();
}

function mapGoLeft() {
  currentIndex--;
  if (currentIndex < 0) {
    currentIndex = 3;
  }
  updateMap();
}

function updateMap() {
  myImg.style.transform = "translateX(" + mapPositionArr[currentIndex] + "px)";
  mapBtn.href = "/page=event?location" + mapHrefArr[currentIndex];
  mapLocationHeading.innerHTML = mapHrefArr[currentIndex].toUpperCase();
}
