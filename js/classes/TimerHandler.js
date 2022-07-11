"use strict";

class TimerHandler {

  constructor() {
    this.counter = document.getElementById('cc-counter');
    setInterval(() => this.countDown(), 1000);
  }

  countDown() {
    const arr = this.counter.innerHTML.split(":");
    for(let i = 0; i < 3; i++) { arr[i] = parseInt(arr[i]); }

    arr[2]--;
    if(arr[2] < 0) {
      arr[2] = 59;
      arr[1]--;
      if(arr[1] < 0) {
        arr[1] = 59;
        arr[0]--;
      }
    }

    for(let i = 0; i < 3; i++) { if(arr[i] < 10) arr[i] = '0' + String(arr[i]); }
    
    this.counter.innerHTML = arr.join(':');
  }

}