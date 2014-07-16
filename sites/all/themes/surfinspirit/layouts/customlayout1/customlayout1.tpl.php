
<div class="panel-display panel-customlayout1 clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-customlayout1-row clearfix">
    <div class="panel-customlayout1-top-left"><?php print $content['top_left']; ?></div>
    <div class="panel-customlayout1-top-right"><?php print $content['top_right']; ?></div>
  </div>
  <div class="panel-customlayout1-row clearfix">
    <div class="panel-customlayout1-middle-left"><?php print $content['middle_left']; ?></div>
    <div class="panel-customlayout1-middle-center"><?php print $content['middle_center']; ?></div>
    <div class="panel-customlayout1-middle-right"><?php print $content['middle_right']; ?></div>
  </div>
    <div class="panel-customlayout1-bottom"><?php print $content['bottom']; ?></div>
</div>