document.addEventListener('DOMContentLoaded', function() {
  // Tu código JavaScript aquí
  var planE = document.querySelector('.planE');

  window.addEventListener('scroll', function() {
  console.log("Scrolling");
  if (window.scrollY > 100) {
    planE.classList.add('scrollDown');
  } else {
    planE.classList.remove('scrollDown');
  }
});
});










