
<div class="panel-display panel-customlayout2 clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-customlayout2-left-column">
    <div class="panel-customlayout2-H-one-title"><h1><?php print $content['first_title']; ?></h1></div>
    <div class="panel-customlayout2-row">
      <div class="panel-customlayout2-first-left"><?php print $content['first_left']; ?></div>
      <div class="panel-customlayout2-first-right"><?php print $content['first_right']; ?></div>
    </div>
    <div class="panel-customlayout2-H-two-title"><h2><?php print $content['second_title']; ?></h2></div>
    <div class="panel-customlayout2-row">
      <div class="panel-customlayout2-second-left"><?php print $content['second_left']; ?></div>
      <div class="panel-customlayout2-second-right"><?php print $content['second_right']; ?></div>
    </div>
    <div class="panel-customlayout2-H-two-title"><h2><?php print $content['third_title']; ?></h2></div>
    <div class="panel-customlayout2-row">
      <div class="panel-customlayout2-third-left"><?php print $content['third_left']; ?></div>
      <div class="panel-customlayout2-third-right"><?php print $content['third_right']; ?></div>
    </div>
    <div class="panel-customlayout2-H-one-title"><h1><?php print $content['fourth_title']; ?></h1></div>
    <div class="panel-customlayout2-row">
      <div class="panel-customlayout2-fourth-left"><?php print $content['fourth_left']; ?></div>
      <div class="panel-customlayout2-fourth-right"><?php print $content['fourth_right']; ?></div>
    </div>
    <div class="panel-customlayout2-H-two-title"><h2><?php print $content['fifth_title']; ?></h2></div>
    <div class="panel-customlayout2-row">
      <div class="panel-customlayout2-fifth-left"><?php print $content['fifth_left']; ?></div>
      <div class="panel-customlayout2-fifth-right"><?php print $content['fifth_right']; ?></div>
    </div>
  </div>
  <div class="panel-customlayout2-right-column">
    <?php print $content['right_column']; ?>
  </div>
</div>