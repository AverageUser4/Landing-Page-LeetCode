"use strict";

class ProblemTypesContainerHandler {

  constructor() {
    this.container = document.getElementById('problemTypesContainer');
    this.button = document.getElementById('problemTypesButton');

    this.container.style.height = '2rem';

    this.button.addEventListener('click', () => this.toggleDropdown());
  }

  toggleDropdown() {
    // open
    if(this.container.style.height === '2rem') {
      this.container.style.height = 'auto';
      this.container.style.overflow = 'visible';
      this.button.style.top = 'auto';
      this.button.style.bottom = '-32px';
      this.button.style.boxShadow = 'none';
      this.button.innerHTML = 'Collapse ▴';
    }
    // close
    else {
      this.container.style.height = '2rem';
      this.container.style.overflow = 'hidden';
      this.button.style.top = '0';
      this.button.style.bottom = 'auto';
      this.button.style.boxShadow = '-14px 0px 19px 14px rgba(26, 26, 26, 1)';
      this.button.innerHTML = 'Expand ▾';
    }
  }

}