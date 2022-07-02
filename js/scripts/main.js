"use strict";

const interview_dropdown_handler = new DropdownHandler(
  'interviewButton', 
  'interviewDropdown',
  'interviewArrow',
  '▲',
  '▼',
  0
);
const store_dropdown_handler = new DropdownHandler(
  'storeButton', 
  'storeDropdown',
  'storeArrow',
  '▲',
  '▼',
  0
);
const menu_handler = new DropdownHandler(
  'mobileMenuButton',
  'mobileMenu',
  'mobileMenuIcon',
  'X',
  '☰'
);
const bell_handler = new DropdownHandler('bell', 'notificationsWrapper');
const bell_2_handler = new DropdownHandler('bell2', 'notificationsWrapper');
const interview_dropdown_desktop = new DropdownHandler(
  'interviewButtonDesktop', 'interviewDropdownDesktop'
);
const store_dropdown_desktop = new DropdownHandler(
  'storeButtonDesktop', 'storeDropdownDesktop'
);