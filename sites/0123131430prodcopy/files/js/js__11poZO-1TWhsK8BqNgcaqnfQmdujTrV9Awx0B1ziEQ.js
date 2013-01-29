(function ($) {

/**
 * A progressbar object. Initialized with the given id. Must be inserted into
 * the DOM afterwards through progressBar.element.
 *
 * method is the function which will perform the HTTP request to get the
 * progress bar state. Either "GET" or "POST".
 *
 * e.g. pb = new progressBar('myProgressBar');
 *      some_element.appendChild(pb.element);
 */
Drupal.progressBar = function (id, updateCallback, method, errorCallback) {
  var pb = this;
  this.id = id;
  this.method = method || 'GET';
  this.updateCallback = updateCallback;
  this.errorCallback = errorCallback;

  // The WAI-ARIA setting aria-live="polite" will announce changes after users
  // have completed their current activity and not interrupt the screen reader.
  this.element = $('<div class="progress" aria-live="polite"></div>').attr('id', id);
  this.element.html('<div class="bar"><div class="filled"></div></div>' +
                    '<div class="percentage"></div>' +
                    '<div class="message">&nbsp;</div>');
};

/**
 * Set the percentage and status message for the progressbar.
 */
Drupal.progressBar.prototype.setProgress = function (percentage, message) {
  if (percentage >= 0 && percentage <= 100) {
    $('div.filled', this.element).css('width', percentage + '%');
    $('div.percentage', this.element).html(percentage + '%');
  }
  $('div.message', this.element).html(message);
  if (this.updateCallback) {
    this.updateCallback(percentage, message, this);
  }
};

/**
 * Start monitoring progress via Ajax.
 */
Drupal.progressBar.prototype.startMonitoring = function (uri, delay) {
  this.delay = delay;
  this.uri = uri;
  this.sendPing();
};

/**
 * Stop monitoring progress via Ajax.
 */
Drupal.progressBar.prototype.stopMonitoring = function () {
  clearTimeout(this.timer);
  // This allows monitoring to be stopped from within the callback.
  this.uri = null;
};

/**
 * Request progress data from server.
 */
Drupal.progressBar.prototype.sendPing = function () {
  if (this.timer) {
    clearTimeout(this.timer);
  }
  if (this.uri) {
    var pb = this;
    // When doing a post request, you need non-null data. Otherwise a
    // HTTP 411 or HTTP 406 (with Apache mod_security) error may result.
    $.ajax({
      type: this.method,
      url: this.uri,
      data: '',
      dataType: 'json',
      success: function (progress) {
        // Display errors.
        if (progress.status == 0) {
          pb.displayError(progress.data);
          return;
        }
        // Update display.
        pb.setProgress(progress.percentage, progress.message);
        // Schedule next timer.
        pb.timer = setTimeout(function () { pb.sendPing(); }, pb.delay);
      },
      error: function (xmlhttp) {
        pb.displayError(Drupal.ajaxError(xmlhttp, pb.uri));
      }
    });
  }
};

/**
 * Display errors on the page.
 */
Drupal.progressBar.prototype.displayError = function (string) {
  var error = $('<div class="messages error"></div>').html(string);
  $(this.element).before(error).hide();

  if (this.errorCallback) {
    this.errorCallback(this);
  }
};

})(jQuery);
;
/* $Id: lightbox_video.js,v 1.1.4.20 2010/09/21 17:57:22 snpower Exp $ */

/**
 * Lightbox video
 * @author
 *   Stella Power, <http://drupal.org/user/66894>
 */
var Lightvideo;

// start jQuery block
(function ($) {

Lightvideo = {

  // startVideo()
  startVideo: function (href) {
    if (Lightvideo.checkKnownVideos(href)) {
      return;
    }
    else if (href.match(/\.mov$/i)) {
      if (navigator.plugins && navigator.plugins.length) {
        Lightbox.modalHTML ='<object id="qtboxMovie" type="video/quicktime" codebase="http://www.apple.com/qtactivex/qtplugin.cab" data="'+href+'" width="'+Lightbox.modalWidth+'" height="'+Lightbox.modalHeight+'"><param name="allowFullScreen" value="true"></param><param name="src" value="'+href+'" /><param name="scale" value="aspect" /><param name="controller" value="true" /><param name="autoplay" value="true" /><param name="bgcolor" value="#000000" /><param name="enablejavascript" value="true" /></object>';
      } else {
        Lightbox.modalHTML = '<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" width="'+Lightbox.modalWidth+'" height="'+Lightbox.modalHeight+'" id="qtboxMovie"><param name="allowFullScreen" value="true"></param><param name="src" value="'+href+'" /><param name="scale" value="aspect" /><param name="controller" value="true" /><param name="autoplay" value="true" /><param name="bgcolor" value="#000000" /><param name="enablejavascript" value="true" /></object>';
      }
    }
    else if (href.match(/\.wmv$/i) || href.match(/\.asx$/i)) {
      Lightbox.modalHTML = '<object NAME="Player" WIDTH="'+Lightbox.modalWidth+'" HEIGHT="'+Lightbox.modalHeight+'" align="left" hspace="0" type="application/x-oleobject" CLASSID="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6"><param name="allowFullScreen" value="true"></param><param NAME="URL" VALUE="'+href+'"></param><param NAME="AUTOSTART" VALUE="true"></param><param name="showControls" value="true"></param><embed WIDTH="'+Lightbox.modalWidth+'" HEIGHT="'+Lightbox.modalHeight+'" align="left" hspace="0" SRC="'+href+'" TYPE="application/x-oleobject" AUTOSTART="false"></embed></object>';
    }
    else {
      Lightbox.videoId = href;
      variables = '';
      if (!href.match(/\.swf$/i)) {
        href = Lightbox.flvPlayer + '?file=' + href;
        if (Lightbox.flvFlashvars.length) {
          variables = Lightbox.flvFlashvars;
        }
      }

      Lightvideo.createEmbed(href, "flvplayer", "#ffffff", variables);
    }
  },

  // createEmbed()
  createEmbed: function(href, id, color, variables) {
    var bgcolor = 'bgcolor="' + color + '"';
    var flashvars = '';
    if (variables) {
      flashvars = 'flashvars="' + variables + '"';

    }
    Lightbox.modalHTML = '<embed type="application/x-shockwave-flash" ' +
      'src="' + href + '" ' +
      'id="' + id + '" name="' + id + '" ' + bgcolor + ' ' +
      'quality="high" wmode="transparent" ' + flashvars + ' ' +
      'height="' + Lightbox.modalHeight + '" ' +
      'width="' + Lightbox.modalWidth + '" ' +
      'allowfullscreen="true" ' +
      '></embed>';
  },


  // checkKnownVideos()
  checkKnownVideos: function(href) {
    if (Lightvideo.checkYouTubeVideo(href) || Lightvideo.checkGoogleVideo(href) ||
      Lightvideo.checkMySpaceVideo(href) || Lightvideo.checkLiveVideo(href) ||
      Lightvideo.checkMetacafeVideo(href) ||
      Lightvideo.checkIFilmSpikeVideo(href)
      ) {
      return true;
    }
    return false;
  },


  // checkYouTubeVideo()
  checkYouTubeVideo: function(href) {
    var patterns = [
      'youtube.com/v/([^"&]+)',
      'youtube.com/watch\\?v=([^"&]+)',
      'youtube.com/\\?v=([^"&]+)'
      ];

    for (var i = 0; i < patterns.length; i++) {
      var pattern = new RegExp(patterns[i], "i");
      var results = pattern.exec(href);
      if (results !== null) {
        Lightbox.videoId = results[1];
        var href = "http://www.youtube.com/v/"+Lightbox.videoId;
        var variables = 'fs=1';
        if (Lightbox.flvFlashvars.length) {
          variables = variables + '&' + Lightbox.flvFlashvars;
          href = href + '&' + variables;
        }
        Lightvideo.createEmbed(href, "flvvideo", "#ffffff", variables);
        return true;
      }
    }
    return false;
  },

  // checkGoogleVideo()
  checkGoogleVideo: function(href) {
    var patterns = [
      'http://video.google.[a-z]{2,4}/googleplayer.swf\\?docId=(-?\\d*)',
      'http://video.google.[a-z]{2,4}/videoplay\\?docid=([^&]*)&',
      'http://video.google.[a-z]{2,4}/videoplay\\?docid=(.*)'
      ];

    for (var i = 0; i < patterns.length; i++) {
      var pattern = new RegExp(patterns[i], "i");
      var results = pattern.exec(href);
      if (results !== null) {
        Lightbox.videoId = results[1];
        var href = "http://video.google.com/googleplayer.swf?docId="+Lightbox.videoId+"&hl=en";
        var variables = 'fs=true';
        if (Lightbox.flvFlashvars.length) {
          variables = variables + '&' + Lightbox.flvFlashvars;
          href = href + '&' + variables;
        }
        Lightvideo.createEmbed(href, "flvvideo", "#ffffff", variables);
        return true;
      }
    }
    return false;
  },

  // checkMetacafeVideo()
  checkMetacafeVideo: function(href) {
    var patterns = [
      'metacafe.com/watch/(\.[^/]*)/(\.[^/]*)/',
      'metacafe.com/watch/(\.[^/]*)/(\.*)',
      'metacafe.com/fplayer/(\.[^/]*)/(\.[^.]*).'
      ];

    for (var i = 0; i < patterns.length; i++) {
      var pattern = new RegExp(patterns[i], "i");
      var results = pattern.exec(href);
      if (results !== null) {
        Lightbox.videoId = results[1];
        Lightvideo.createEmbed("http://www.metacafe.com/fplayer/"+Lightbox.videoId+"/.swf", "flvvideo", "#ffffff");
        return true;
      }
    }
    return false;
  },

  // checkIFilmSpikeVideo()
  checkIFilmSpikeVideo: function(href) {
    var patterns = [
      'spike.com/video/[^/&"]*?/(\\d+)',
      'ifilm.com/video/[^/&"]*?/(\\d+)',
      'spike.com/video/([^/&"]*)',
      'ifilm.com/video/([^/&"]*)'
      ];

    for (var i = 0; i < patterns.length; i++) {
      var pattern = new RegExp(patterns[i], "i");
      var results = pattern.exec(href);
      if (results !== null) {
        Lightbox.videoId = results[1];
        Lightvideo.createEmbed("http://www.spike.com/efp", "flvvideo", "#000", "flvbaseclip="+Lightbox.videoId+"&amp;");
        return true;
      }
    }
    return false;
  },

  // checkMySpaceVideo()
  checkMySpaceVideo: function(href) {
    var patterns = [
      'src="myspace.com/index.cfm\\?fuseaction=vids.individual&videoid=([^&"]+)',
      'myspace.com/index.cfm\\?fuseaction=vids.individual&videoid=([^&"]+)',
      'src="myspacetv.com/index.cfm\\?fuseaction=vids.individual&videoid=([^&"]+)"',
      'myspacetv.com/index.cfm\\?fuseaction=vids.individual&videoid=([^&"]+)'
      ];

    for (var i = 0; i < patterns.length; i++) {
      var pattern = new RegExp(patterns[i], "i");
      var results = pattern.exec(href);
      if (results !== null) {
        Lightbox.videoId = results[1];
        Lightvideo.createEmbed("http://lads.myspace.com/videos/vplayer.swf", "flvvideo", "#ffffff", "m="+Lightbox.videoId);
        return true;
      }
    }
    return false;
  },

  // checkLiveVideo()
  checkLiveVideo: function(href) {
    var patterns = [
      'livevideo.com/flvplayer/embed/([^"]*)"',
      'livevideo.com/video/[^/]*?/([^/]*)/',
      'livevideo.com/video/([^/]*)/'
      ];

    for (var i = 0; i < patterns.length; i++) {
      var pattern = new RegExp(patterns[i], "i");
      var results = pattern.exec(href);
      if (results !== null) {
        Lightbox.videoId = results[1];
        Lightvideo.createEmbed("http://www.livevideo.com/flvplayer/embed/"+Lightbox.videoId, "flvvideo", "#ffffff");
        return true;
      }
    }
    return false;
  }

};

//End jQuery block
}(jQuery));;
