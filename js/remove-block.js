document.onclick = function() {
    div = Array.from(document.querySelectorAll('.card'));
    div.forEach((e) => {
      e.onclick = function() {
        this.remove();
      }
    });
  }