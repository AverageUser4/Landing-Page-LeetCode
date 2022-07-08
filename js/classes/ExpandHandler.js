"use stric";

class ExpandHandler {

  constructor() {
    this.button = document.getElementById("anotherProblemTypesButton");
    this.container = document.getElementById("anotherProblemTypesContainer");
    this.container.style.height = '93px';
    this.button.addEventListener('click', () => this.toggleDropdown());
  }

  toggleDropdown() {
    if(this.container.style.height === '93px') {
      this.container.style.height = 'auto';
      this.button.innerHTML = 'Collapse';
      this.button.style.margin = '4px 0 12px';
    }
    else {
      this.container.style.height = '93px';
      this.button.innerHTML = 'Expand';
      this.button.style.margin = '12px 0';
    }
  }

}