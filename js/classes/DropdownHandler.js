"use strict";

class DropdownHandler {

  constructor(button_id, dropdown_id, inner_change_id, inner_open, inner_closed, transition_time = 500) {
    this.button = document.getElementById(button_id);
    this.dropdown = document.getElementById(dropdown_id);
    this.dropdown.style.transition = transition_time + 'ms';
    this.dropdown.classList.add('opacity0');
    this.transition_time = transition_time;
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

    if(window.getComputedStyle(this.dropdown).display === 'none')
      this.openDropdown();
    else
      this.closeDropdown();
  }

  openDropdown() {
    this.dropdown.style.display = 'block';
    setTimeout(() => this.makeOpacityOne(), 1);
    window.addEventListener('click', () => this.closeDropdown());
    window.addEventListener('resize', () => this.closeDropdown());
    if(this.change_on)
      this.inner_change.innerHTML = this.open;
    this.button.classList.add('active');
  }

  closeDropdown() {
    this.dropdown.classList.add('opacity0');
    setTimeout(() => this.makeDisplayNone(), this.transition_time);
    window.removeEventListener('click', () => this.closeDropdown());
    window.removeEventListener('resize', () => this.closeDropdown());
    if(this.change_on)
      this.inner_change.innerHTML = this.closed;
    this.button.classList.remove('active');
  }

  makeOpacityOne() {
    this.dropdown.classList.remove('opacity0');
  }

  makeDisplayNone() {
    this.dropdown.style.display = 'none';
  }


}