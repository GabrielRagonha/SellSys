window.onload = function() {
  const alert = document.querySelector('[role="alert"]');
          
  if (alert) {
      setTimeout(function() {
          alert.remove();
      }, 5000);
  }
};
