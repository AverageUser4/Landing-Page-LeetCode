"use strict";

class ProblemGroupsLinksHandler {

  constructor() {
    this.container = document.getElementById('problemGroupsLinksInner');
    this.button = document.getElementById('problemGroupsLinksButton');
    this.scrolled_to_end = false;

    this.checkIfShouldShowButton();

    window.addEventListener('resize', () => this.checkIfShouldShowButton());
    this.button.addEventListener('click', () => this.changeScrollPosition());
  }

  checkIfShouldShowButton() {
    this.button.innerHTML = '&gt;&gt;';

    if(this.container.scrollWidth > this.container.clientWidth + 60)
      this.button.style.display = 'block';
    else
      this.button.style.display = 'none';
  }

  changeScrollPosition() {
    if(this.scrolled_to_end) {
      this.container.scrollTo({top: 0, left: 0});
      this.button.innerHTML = '&gt;&gt;';
      this.scrolled_to_end = false;
      return;
    }

    this.container.scrollTo({top: 0, left: this.container.scrollLeft + this.container.clientWidth / 2});
    if(this.container.scrollLeft === this.container.scrollWidth - this.container.clientWidth) {
      this.button.innerHTML = '&lt;&lt;';
      this.scrolled_to_end = true;
    }
  }

}