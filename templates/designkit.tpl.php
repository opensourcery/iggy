<style type="text/css">

#navigation {
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
  color: <?php print designkit_colorshift($primary, '#FFFFFF', .75); ?>;
  background-color: <?php print $primary; ?>;
}

</style>
