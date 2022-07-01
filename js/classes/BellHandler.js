"use strict";

class BellHandler {

  constructor(bell_id, dropdown_id) {
    this.bell = document.getElementById(bell_id);
    this.dropdown = document.getElementById(dropdown_id);
    this.bell.addEventListener('click', () => this.toggledropdown());
  }

  toggledropdown() {
    if(window.getComputedStyle(this.dropdown).display === 'none')
      this.dropdown.style.display = 'block';
    else
      this.dropdown.style.display = 'none';
  }
  
}