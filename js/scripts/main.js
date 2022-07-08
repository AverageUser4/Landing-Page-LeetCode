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

const slide_bar_handler = new SlideBarHandler();
const slide_bar_handler_2 = new SlideBarHandler(
  'slideContainer2',
  'slideInnerContainer2',
  'slideImage2',
  'left2',
  'right2',
  1.6,
  [
    {min: 0, max: 600, capacity: 3},
    {min: 601, max: 700, capacity: 4},
    {min: 701, max: 920, capacity: 3},
    {min: 921, max: 999999, capacity:5}
  ]
)

const problem_types_container_handler = new ProblemTypesContainerHandler();
const problem_groups_links_handler = new ProblemGroupsLinksHandler();

const lists_dropdown_handler = new DropdownHandler('listsButton', 'listsDropdown');
const difficulty_dropdown_handler = new DropdownHandler('difficultyButton', 'difficultyDropdown');
const status_dropdown_handler = new DropdownHandler('statusButton', 'statusDropdown');
const tags_dropdown_handler = new DropdownHandler('tagsButton', 'tagsDropdown');
const expand_handler = new ExpandHandler();