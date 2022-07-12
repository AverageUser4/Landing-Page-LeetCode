"use strict";

class StickyHandler {

  constructor() {
    this.gap = 20;
    this.the_main = document.getElementById('theMain');
    this.the_aside = document.getElementById('theAside');
    this.calendar = document.getElementById('calendar-container');
    this.companies = document.getElementById('aside-companies-container');
    // featured container is right before calendar (this is important)
    this.featured = document.getElementById('featured-container');

    this.updateResize();

    window.addEventListener('scroll', () => this.updateScroll());
    window.addEventListener('resize', () => this.updateResize());
  }

  updateScroll() {
    /* note that element.offsetTop returns position relative to
       the closest non-statically positioned element */

    if(window.innerWidth < 680)
      return;

    if(window.scrollY < this.sticky_begin) {
      this.normalize();
    }
    else if(this.companies.getBoundingClientRect().bottom + window.scrollY <= this.main_end) { //window.scrollY < this.sticky_end
      this.calendar.style.position = 'fixed';
      this.calendar.style.top = this.gap + 'px';
      this.calendar.style.bottom = 'auto';
      this.calendar.style.width = this.element_width;

      this.companies.style.position = 'fixed';
      this.companies.style.top = this.companies_top;
      this.companies.style.bottom = 'auto';
      this.companies.style.width = this.element_width;
    }
    else {
      this.calendar.style.position = 'absolute';
      this.calendar.style.top = 'auto';
      this.calendar.style.bottom = this.calendar_bottom;
      this.calendar.style.width = this.element_width;

      this.companies.style.position = 'absolute';
      this.companies.style.top = 'auto';
      this.companies.style.bottom = '0px';
      this.companies.style.width = this.element_width;
    }
  }

  updateResize() {
    /* calendar.offsetTop in this.sticky_begin is problematic, if current 
       position is fixed or absolute and window gets resized it becomes useless */

    if(window.innerWidth < 680)
      this.normalize();

    this.element_width = this.featured.clientWidth + 'px';

    this.calendar_height = this.calendar.getBoundingClientRect().height;
    this.companies_height = this.companies.getBoundingClientRect().height;
  
    this.sticky_begin = this.the_aside.offsetTop + this.featured.offsetTop + this.featured.clientHeight;

    this.companies_top = (2 * this.gap) + this.calendar_height + 'px';
    this.calendar_bottom = this.gap + this.companies_height + 'px';

    this.main_end = this.the_main.offsetTop + this.the_main.getBoundingClientRect().height;
    // kiedy dół companies osiąga main_end
    console.log(this.companies.getBoundingClientRect());
    this.sticky_end = this.main_end - window.innerHeight - this.calendar_height;
  }

  normalize() {
    this.calendar.style.position = 'static';
    this.calendar.style.width = 'auto';
    this.companies.style.position = 'static';
    this.companies.style.width = 'auto';
  }

}