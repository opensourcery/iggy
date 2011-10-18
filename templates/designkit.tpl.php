<style type="text/css">
body {
  <?php if ($background_image): ?>
  background-image: url("<?php print $background_image; ?>");
  <?php endif; ?>
  <?php if ($background_repeat): ?>
  background-repeat: <?php print $background_repeat; ?>;
  <?php endif; ?>
  <?php if ($background): ?>
  background-color: <?php print $background; ?>;
  <?php endif; ?>
}

#navigation {
  background-color: <?php print $primary; ?>;
}

a:link,
a:visited {
  color: <?php print $primary; ?>;
}

#user-tools-wrapper {
  background-color: <?php print designkit_colorshift($primary, '#000000', .15) ?>;
}

#block-views-my_shift_signups-block_1 h2.title {
  background-color: <?php print $primary; ?>;
}

#block-boxes-volunteer_shifts_welcome_message .item-list ul li .views-field-edit-node a:link,
#block-views-my_shift_signups-block_1 .item-list ul li .views-field-edit-node a:link {
  border: 1px solid <?php print designkit_colorshift($primary, '#000000', .5) ?>;
}

#block-views-my_shift_signups-block_1 .item-list ul li .views-field-edit-node a:link {
  color: <?php print (designkit_colorhsl($primary, 'l') > .5) ? '#fff' : '#000' ?>;
}

#block-views-my_shift_signups-block_1 .item-list ul li .views-field-delete-node a:link {
  color: <?php print (designkit_colorhsl($primary, 'l') > .5) ? '#fff' : '#000' ?>;
}

.calendar-calendar td.empty {
  background-color: #E1E1E1;
}
.calendar-calendar table td {
  background-color: #CBCBCB;
}
.calendar-calendar tr td.today,
.calendar-calendar tr.odd td.today,
.calendar-calendar tr.even td.today {
  background-color: <?php print $primary; ?>;
}
.calendar-calendar table th.days {
  color: white;
  background-color: <?php print $primary; ?>;
}

div#calpopup {
  border: 4px solid <?php print $primary; ?>;
}

#popup-close {
  background: <?php print $primary; ?>;
}

#calpopup-body .title a:link,
#calpopup-body .title a:visited {
  color: <?php print $primary; ?>;
}


#calpopup-body ul.links li a:link,
#calpopup-body ul.links li a:visited {
  background: <?php print $primary; ?>;
  color: <?php print designkit_colorshift($primary, '#FFFFFF', .85) ?>
}

.volunteer-shifts-remaining-capacity {
  background: <?php print $primary; ?>;
  color: <?php print designkit_colorshift($primary, '#FFFFFF', .85) ?>;
}

.calendar-calendar span.remaining-capacity {
  color: <?php print $primary; ?>;
}

span.remaining-capacity {
  color: <?php print designkit_colorshift($primary, '#FFFFFF', .85) ?>;
}

#block-boxes-volunteer_shifts_welcome_message h2.title,
#block-views-my_shift_signups-block_1 h2.title {
  background-color: <?php print designkit_colorshift($primary, '#000000', .5) ?>;
  color: <?php print designkit_colorshift($primary, '#FFFFFF', .85) ?>;
}

#block-boxes-volunteer_shifts_welcome_message .more-link, #block-views-my_shift_signups-block_1 .more-link {
  background: none repeat scroll 0 0 #FFFFFF;
}
.item-list ul li .views-field-edit-node a:link,
.item-list ul li .views-field-edit-node a:visited {
  background: <?php print $primary; ?>;
  color: <?php print designkit_colorshift($primary, '#FFFFFF', .85) ?>;
}

#user-toolbar #block-menu-secondary-links a {
  border-top: 5px solid <?php print designkit_colorshift($primary, '#FFFFFF', .5) ?>;
}

#user-toolbar #block-menu-secondary-links a:focus,
#user-toolbar #block-menu-secondary-links a:hover {
  border-top: 5px solid <?php print designkit_colorshift($primary, '#000000', .5) ?>;
}

#user-toolbar #block-menu-secondary-links ul {
  border-top: 5px solid <?php print designkit_colorshift($primary, '#000000', .5) ?>;
}

#user-toolbar #block-menu-secondary-links li {
  border-right: 1px solid <?php print designkit_colorshift($primary, '#000000', .5) ?>;
}

</style>


