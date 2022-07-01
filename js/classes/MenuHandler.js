"use strict";

class MenuHandler {

  constructor(button_id, menu_id) {
    this.button = document.getElementById(button_id);
    this.menu = document.getElementById(menu_id);
    this.button.addEventListener('click', () => this.toggleMenu());
  }

  toggleMenu() {
    if(window.getComputedStyle(this.menu).display === 'none') {
      this.menu.style.display = 'block';
      this.button.firstChild.innerHTML = 'X';
    }
    else {
      this.menu.style.display = 'none';
      this.button.firstChild.innerHTML = '☰';
    }
  }

}