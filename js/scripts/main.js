"use strict";

const interview_dropdown_handler = new SolidDropdownHandler(
  'interviewButton', 
  'interviewDropdown',
  'interviewArrow',
  '▲',
  '▼'
);
const store_dropdown_handler = new SolidDropdownHandler(
  'storeButton', 
  'storeDropdown',
  'storeArrow',
  '▲',
  '▼'
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
const profile_menu_desktop = new DropdownHandler(
  'profileMenuButtonDesktop', 'profileMenuDesktop'
);