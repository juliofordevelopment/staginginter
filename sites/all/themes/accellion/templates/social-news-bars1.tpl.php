


<div id="banner-SBS">

<div style="clear: both">&nbsp;</div>

<div class="beta_banner_left" style="text-align:left;background:#c5c5c5;color:#000000;margin-bottom:-55px;font-size:15px;font-weight:normal;border: 0px solid #ccc;height:100px;">


<div class="grid-parent">
    <div class="grid-child grid-30">
        <span class="grid-30-t">Recent <b>News</b></span>
        <br><span style="word-wrap: break-word;"><?php
$view = views_get_view('press_release_view');
print $view->preview('social_news_pr_block');
?></span>
    </div>
    <div class="grid-child grid-30">
        <span class="grid-30-t">Customer <b>Case Studies</b></span>
        <br><span style="word-wrap: break-word;"><?php
$view = views_get_view('tab_views_ccs');
print $view->preview('block');
?></span>
    </div>
    <div class="grid-child grid-30">
        <span class="grid-30-t">Industry <b>Whitepapers</b></span>
        <br><span style="word-wrap: break-word;"><?php
$view = views_get_view('tab_views_whitepaper');
print $view->preview('default');
?></span>
    </div>
    <div class="grid-child grid-10"><a href="/company/events">
<img src="/sites/default/files/events/Accellion-Social-Bar-Banner-lg.png" border="0"></a>
    </div>
</div>


</div>
<div style="clear: both">&nbsp;</div>

</div>

