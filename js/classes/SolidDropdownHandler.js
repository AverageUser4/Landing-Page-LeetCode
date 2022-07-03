"use strict";

class SolidDropdownHandler {

  constructor(button_id, dropdown_id, inner_change_id, inner_open, inner_closed) {
    this.button = document.getElementById(button_id);
    this.dropdown = document.getElementById(dropdown_id);
    this.inner_change = document.getElementById(inner_change_id);
    this.open = inner_open;
    this.closed = inner_closed;

    this.button.addEventListener('click', (event) => this.toggleDropdown(event));
    this.dropdown.addEventListener('click', (event) => event.stopPropagation());
  }

  toggleDropdown(event) {
    event.stopPropagation();

    if(window.getComputedStyle(this.dropdown).display === 'none')
      this.openDropdown();
    else
      this.closeDropdown();
  }

  openDropdown() {
    this.dropdown.style.display = 'block';
    this.inner_change.innerHTML = this.open;
    window.addEventListener('click', () => this.closeDropdown());
    window.addEventListener('resize', () => this.closeDropdown());
  }

  closeDropdown() {
    this.dropdown.style.display = 'none';
    this.inner_change.innerHTML = this.closed;
    window.removeEventListener('click', () => this.closeDropdown());
    window.removeEventListener('resize', () => this.closeDropdown());
  }

}