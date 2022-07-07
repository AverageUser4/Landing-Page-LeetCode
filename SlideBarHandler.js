"use strict";

class SlideBarHandler {

  constructor(
      container_id = 'slideContainer',
      inner_container_id = 'slideInnerContainer',
      element_class = 'slideImage',
      left_button_id = 'left',
      right_button_id = 'right',
      aspect_ratio = 1 / 2,
      container_capacities = [{min: 0, max: 640, capacity: 2}, {min: 641, max: 999999, capacity: 3}]
    ) {
    this.aspect_ratio = aspect_ratio;
    this.container_capacities = container_capacities;
    this.slide_container = document.getElementById(container_id);
    this.inner_container = document.getElementById(inner_container_id);
    this.all_slide_images = document.getElementsByClassName(element_class);
    this.slide_images_count = this.all_slide_images.length;
    
    this.setUp();

    document.getElementById(left_button_id).addEventListener('click', () => this.moveLeft());
    document.getElementById(right_button_id).addEventListener('click', () => this.moveRight());
    window.addEventListener('resize', () => this.setUp());
  }

  setUp() {
    this.current_page = 1;
    this.state = [[], [], [], []];
    this.inner_container.style.left = '0px';

    // set amount of visible elements based on viewport width
    let vw = window.innerWidth;
    for(let val of this.container_capacities) {
      if(val.min <= vw && val.max >= vw) {
        this.container_capacity = val.capacity;
        break;
      }
    }

    this.pages = Math.ceil(this.slide_images_count / this.container_capacity);
    this.element_width = 90 / this.container_capacity;
    this.element_height = this.element_width * this.aspect_ratio;
    this.element_width_plus_margin = this.element_width + 10 / (this.container_capacity - 1);
    this.slide_amount = this.element_width_plus_margin * this.container_capacity;

    for(let val of this.all_slide_images) {
      val.style.width = this.element_width + '%';
    }

    this.slide_container.style.height = parseFloat(window.getComputedStyle(this.all_slide_images[0]).width) * this.aspect_ratio + 'px';

    let x = this.container_capacity;
    while(1) {
      if(x >= this.slide_images_count) {
        this.free_space_at_the_end = x - this.slide_images_count;
        break;
      }
      x += this.container_capacity;
    }    

    this.createStates();
    this.setState(0);
  }

  createStates() {
    let x;
    let y;

    // state_1
    for(let i = 0; i < this.slide_images_count; i++) {
      this.state[0].push(i * this.element_width_plus_margin);
    }
    // state_2
    x = this.free_space_at_the_end + (this.slide_images_count - this.container_capacity);
    for(let i = 0; i < this.slide_images_count; i++) {
      if(i < this.container_capacity)
        this.state[1].push(i * this.element_width_plus_margin);
      else  {
        this.state[1].push(x * -this.element_width_plus_margin)
        x--;
      }
    }
    // state_3
    x = this.slide_images_count - (this.container_capacity - this.free_space_at_the_end);
    for(let i = 0; i < this.slide_images_count; i++) {
        this.state[2].push(x * -this.element_width_plus_margin)
        x--;
    }
    // state_4
    x = 0;
    y = this.container_capacity;
    for(let i = 0; i < this.slide_images_count; i++) {
        if(i < this.slide_images_count - (this.container_capacity - this.free_space_at_the_end)) {
          this.state[3].push(y * this.element_width_plus_margin)
          y++;
        }
        else {
          this.state[3].push(x * this.element_width_plus_margin);
          x++;
        }
    }
  }

  setState(which) {
    for(let i = 0; i < this.slide_images_count; i++) {
      this.all_slide_images[i].style.left = 
        this.state[which][i] - parseInt(this.inner_container.style.left) + '%';
    }
  }

  moveLeft() {
    if(this.current_page === 1) {
      this.setState(1);
      this.current_page = this.pages;
    }
    else if(this.current_page === this.pages) {
      this.setState(2);
      this.current_page--;
    }
    else
      this.current_page--;    
  
    this.inner_container.style.left = 
      parseInt(this.inner_container.style.left) + this.slide_amount + '%';
  }
  
  moveRight() {
    if(this.current_page === 1) {
      this.setState(0);
      this.current_page++;
    }
    else if(this.current_page === this.pages) {
      this.setState(3);
      this.current_page = 1;
    }
    else
      this.current_page++;
  
    this.inner_container.style.left = 
      parseInt(this.inner_container.style.left) - this.slide_amount + '%';
  }

}


const slide_bar_handler = new SlideBarHandler();