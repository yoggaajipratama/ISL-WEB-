<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Simple WebAudioRecorder.js demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <p><a href="https://github.com/addpipe/simple-web-audio-recorder-demo" target="_blank"></a><a href="https://addpipe.com/blog/using-webaudiorecorder-js-to-record-audio-on-your-website/" target="_blank"></a></p>
	<select id="encodingTypeSelect" class="btn btn-warning">
	  <option value="wav">Waveform Audio (.wav)</option>
	  <option value="mp3">MP3 (MPEG-1 Audio Layer III) (.mp3)</option>
	  <option value="ogg">Ogg Vorbis (.ogg)</option>
	</select>
	</p>
	<div id="controls">
		<button id="recordButton" class="btn btn-danger">
			<i class="fa fa-microphone"></i>&nbsp;Record</button>
		<button id="stopButton" disabled class="btn">
			<i class="fa fa-stop-circle"></i>&nbsp;Stop</button>
	</div>
	<div id="formats"></div>
	<p>Log</p>
	<pre id="log"></pre>

	<p>Recordings</p>
	<ol id="recordingsList"></ol>
  
  	<!-- inserting these scripts at the end to be able to use all the elements in the DOM -->
	<script src="js/WebAudioRecorder.min.js"></script>
	<script src="js/app.js"></script>
  </body>
</html>