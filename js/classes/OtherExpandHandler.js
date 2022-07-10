"use stric";

class OtherExpandHandler {

  constructor() {
    this.button = document.getElementById("fc-show-button");
    this.container = document.getElementById("fc-items");
    this.container.style.height = '136px';
    this.button.addEventListener('click', () => this.toggleDropdown());
  }

  toggleDropdown() {
    if(this.container.style.height === '136px') {
      this.container.style.height = 'auto';
      this.button.innerHTML = '▴ Show Less';
    }
    else {
      this.container.style.height = '136px';
      this.button.innerHTML = '▾ Show More';
    }
  }

}