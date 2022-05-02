// when window loads
window.onload = () => {
  //remove exit button, or "close-error", on click
  document.getElementById('close-error').onclick = function() {
    this.remove()
    return false;
  };
};
