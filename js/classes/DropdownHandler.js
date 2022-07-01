"use strict";

class DropdownHandler {

  constructor(name) {
    this.button = document.getElementById(name + 'DropdownButton');
    this.dropdown = document.getElementById(name + 'Dropdown');
    this.arrow = document.getElementById(name + 'Arrow')
    this.button.addEventListener('click', () => this.toggleDropdown());
  }

  toggleDropdown() {
    if(window.getComputedStyle(this.dropdown).display === 'none') {
      this.dropdown.style.display = 'block';
      this.arrow.innerHTML = '▲';
    }
    else {
      this.dropdown.style.display = 'none';
      this.arrow.innerHTML = '▼';
    }
  }

}