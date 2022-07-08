"use strict";

class DropdownHandler {

  static all_handlers = [];

  constructor(button_id, dropdown_id, inner_change_id, inner_open, inner_closed) {
    DropdownHandler.all_handlers.push(this);
    this.button = document.getElementById(button_id);
    this.dropdown = document.getElementById(dropdown_id);
    this.change_on = false;
    if(typeof inner_change_id !== 'undefined') {
      this.inner_change = document.getElementById(inner_change_id);
      this.open = inner_open;
      this.closed = inner_closed;
      this.change_on = true;
    }

    this.button.addEventListener('click', (event) => this.toggleDropdown(event));
    this.dropdown.addEventListener('click', (event) => event.stopPropagation());
  }

  toggleDropdown(event) {
    event.stopPropagation();

    if(window.getComputedStyle(this.dropdown).opacity === '0') {
      for(let val of DropdownHandler.all_handlers)
        val.closeDropdown();
      this.openDropdown();
    }
    else
      this.closeDropdown();
  }

  openDropdown() {
    this.dropdown.style.opacity = 1;
    this.dropdown.style.zIndex = 5;
    if(this.change_on)
      this.inner_change.innerHTML = this.open;
    this.button.classList.add('active');

    window.addEventListener('click', () => this.closeDropdown());
    window.addEventListener('resize', () => this.closeDropdown());
  }

  closeDropdown() {
    this.dropdown.style.opacity = 0;
    this.dropdown.style.zIndex = -1;
    if(this.change_on)
      this.inner_change.innerHTML = this.closed;
    this.button.classList.remove('active');

    window.removeEventListener('click', () => this.closeDropdown());
    window.removeEventListener('resize', () => this.closeDropdown());
  }

}