


<div id="banner-SBS">

<div style="clear: both">&nbsp;</div>

<div class="beta_banner_left" style="text-align:left;background:#c5c5c5;color:#000000;margin-bottom:-55px;font-size:15px;font-weight:normal;border: 0px solid #ccc;height:100px;">


<div class="grid-parent">
    <div class="grid-child grid-30">
        Recent <b>News</b>
        <br><span style="word-wrap: break-word;"><?php
$view = views_get_view('tab_views_rn');
print $view->preview('default');
?></span>
    </div>
    <div class="grid-child grid-30">
        <span class="grid-30-t">Customer <b>Case Studies</b></span>
        <br><span style="word-wrap: break-word;"><?php
$view = views_get_view('tab_views_rn');
print $view->preview('default');
?></span>
    </div>
    <div class="grid-child grid-30">
        Industry <b>Whitepapers</b>
        <br><span style="word-wrap: break-word;"><?php
$view = views_get_view('tab_views_iw');
print $view->preview('default');
?></span>
    </div>
    <div class="grid-child grid-10">
Free Trial<br>Start Today
    </div>
</div>


</div>
<div style="clear: both">&nbsp;</div>

</div>

