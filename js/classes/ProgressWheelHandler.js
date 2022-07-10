"use strict";

class ProgressWheelHandler {

  constructor(all_problems = 2338, solved_easy = 52, solved_medium = 16, solved_hard = 0) {
    this.arc_easy = document.getElementById('arc-easy');
    this.arc_medium = document.getElementById('arc-medium');
    this.arc_hard = document.getElementById('arc-hard');
    this.calculateAndDraw(all_problems, solved_easy, solved_medium, solved_hard);

    this.content_container = document.getElementById('pw-content-container');
    this.progress_wheel_container = document.getElementById('progressWheelContainer');
    this.progress_wheel_container.addEventListener('mouseenter', () => this.setContent('general'))
    this.progress_wheel_container.addEventListener('mouseleave', () => this.setContent('basic'))

    this.arc_easy.addEventListener('mouseenter', () => this.setContent('easy'));
    this.arc_medium.addEventListener('mouseenter', () => this.setContent('medium'));
    this.arc_hard.addEventListener('mouseenter', () => this.setContent('hard'));

    this.stats_easy_container = document.getElementById('stats-easy-container');
    this.stats_medium_container = document.getElementById('stats-medium-container');
    this.stats_hard_container = document.getElementById('stats-hard-container');

    this.stats_easy_container.addEventListener('mouseenter', () => this.setContent('easy'));
    this.stats_easy_container.addEventListener('mouseleave', () => this.setContent('basic'))

    this.stats_medium_container.addEventListener('mouseenter', () => this.setContent('medium'));
    this.stats_medium_container.addEventListener('mouseleave', () => this.setContent('basic'))

    this.stats_hard_container.addEventListener('mouseenter', () => this.setContent('hard'));
    this.stats_hard_container.addEventListener('mouseleave', () => this.setContent('basic'))
  }

  setContent(which) {
    switch(which) {
      case 'basic':
        this.content_container.innerHTML = 
          `<div class="pw-basic-view"><div>All</div>
          <div>68</div><div>2338</div></div>`;
        break;

      case 'general':
        this.content_container.innerHTML = 
          `<div class="pw-acceptance-view"><div>43<span>.7%</span>
          </div><div>Acceptance</div>`;
        break;

      case 'easy':
        this.content_container.innerHTML = 
          `<div class="pw-acceptance-view pw-easy-acceptance-view">
          <div>52<span>.2%</span></div><div>Acceptance</div></div>`;
        break;

      case 'medium':
        this.content_container.innerHTML = 
          `<div class="pw-acceptance-view pw-medium-acceptance-view">
          <div>24<span>.7%</span></div><div>Acceptance</div></div>`;
        break;

      case 'hard':
        this.content_container.innerHTML = 
          `<div class="pw-no-submission">No submission</div>`;
        break;
    }
  }

  calculateAndDraw(all_problems, solved_easy, solved_medium, solved_hard) {
    let easy_end, medium_end, hard_end;

    if(solved_easy !== 0) {
      let easy_start = 0;
      easy_end = (solved_easy / all_problems) * 360;
      this.arc_easy.setAttribute("d", this.describeArc(50, 50, 45, easy_start, easy_end));
    }

    if(solved_medium !== 0) {
      let medium_start = typeof easy_end !== 'undefined' ? easy_end : 0;
      medium_end = ((solved_medium / all_problems) * 360) + medium_start;
      this.arc_medium.setAttribute("d", this.describeArc(50, 50, 45, medium_start, medium_end));
    }

    if(solved_hard !== 0) {
      let hard_start = typeof medium_end !== 'undefined' ? medium_end : typeof easy_end !== 'undefined' ? easy_end : 0;
      hard_end = ((solved_hard / all_problems) * 360) + hard_start;
      this.arc_hard.setAttribute("d", this.describeArc(50, 50, 45, hard_start, hard_end));
    }
  }

  polarToCartesian(centerX, centerY, radius, angleInDegrees) {
    const angleInRadians = (angleInDegrees-90) * Math.PI / 180.0;

    return {
      x: centerX + (radius * Math.cos(angleInRadians)),
      y: centerY + (radius * Math.sin(angleInRadians))
    };
  }
  
  describeArc(x, y, radius, startAngle, endAngle) {
    const start = this.polarToCartesian(x, y, radius, endAngle);
    const end = this.polarToCartesian(x, y, radius, startAngle);

    const largeArcFlag = endAngle - startAngle <= 180 ? "0" : "1";

    const d = [
        "M", start.x, start.y, 
        "A", radius, radius, 0, largeArcFlag, 0, end.x, end.y
    ].join(" ");

    return d;       
  }

}