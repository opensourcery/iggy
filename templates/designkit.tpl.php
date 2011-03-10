<style type="text/css">

#navigation {
  background-color: <?php print $primary; ?>;
}

a:link,
a:visited {
  color: <?php print $primary; ?>;
}

#user-tools-wrapper {
  background-color: <?php print $primary; ?>;
}

#block-views-my_shift_signups-block_1 h2.title {
  background-color: <?php print $primary; ?>;
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


#calpopup-body ul.links li a:link {
  background: <?php print $primary; ?>;
}

.volunteer-shifts-remaining-capacity {
  background: <?php print $primary; ?>;
}

span.remaining-capacity {
  color: <?php print designkit_colorshift($primary, '#FFFFF', .85) ?>;
}

#block-views-my_shift_signups-block_1 h2.title {
  color: <?php print (designkit_colorhsl($primary, 'l') > .5) ? '#fff' : '#000' ?>;
}

.item-list ul li .views-field-edit-node a:link {
  background: <?php print $primary; ?>;
}

</style>
