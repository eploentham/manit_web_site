<link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Selectmenu - Custom Rendering</title>
  <style type="text/css">
      /* select with CSS avatar icons */
    option.avatar {
      background-repeat: no-repeat !important;
      padding-left: 20px;
    }
    .avatar .ui-icon {
      background-position: left top;
    }
  </style>
</head>
<body>
 
<div class="demo">
 
<form action="#">
  <h2>Selectmenu with framework icons</h2>
  <fieldset>
    <label for="filesA">Select a File:</label>
    <select name="filesA" id="filesA">
      <option value="jquery" data-class="ui-icon-script">jQuery.js</option>
      <option value="jquerylogo" data-class="ui-icon-image">jQuery Logo</option>
      <option value="jqueryui" data-class="ui-icon-script">ui.jQuery.js</option>
      <option value="jqueryuilogo" selected="selected" data-class="ui-icon-image">jQuery UI Logo</option>
      <option value="somefile" disabled="disabled" data-class="ui-icon-help">Some unknown file</option>
    </select>
  </fieldset>
 
  <h2>Selectmenu with custom icon images</h2>
  <fieldset>
    <label for="filesB">Select a podcast:</label>
    <select name="filesB" id="filesB">
      <option value="mypodcast" data-class="podcast">John Resig Podcast</option>
      <option value="myvideo" data-class="video">Scott González Video</option>
      <option value="myrss" data-class="rss">jQuery RSS XML</option>
    </select>
  </fieldset>
 
  <h2>Selectmenu with custom avatar 16x16 images as CSS background</h2>
  <fieldset>
    <label for="people">Select a Person:</label>
    <select name="people" id="people">
        <option value="1" title="as">John Resig</option>
      <option value="2" >Tauren Mills</option>
      <option value="3" >Jane Doe</option>
    </select>
  </fieldset>
</form>
 
</div>
 
 
</body>
</html>