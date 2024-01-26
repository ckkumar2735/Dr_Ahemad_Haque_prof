<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="author" content=" ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="refresh" content="30"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Embedded Video</title>
  </head>
  <body onmousedown="return true" onselectstart="return false">
    <div class="">
    <button class="btn btn-primary"  onclick="openVideo()">DISCOVER NOW</button>
    </div>
    <div id="video-container"  ></div>
    <script>
      function openVideo() {
        // Your PHP code to get the video link and embed code
        <?php
          $video_link = "https://www.youtube.com/embed/YXxQPmxq56Y";
          $embed_code = '<iframe width="400" height="200" src="' . $video_link . '" frameborder="0" allow="accelerometer; autoplay;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen;></iframe>';
        ?>

        // Create a new div element to hold the embedded video
        var videoDiv = document.createElement("div");
        videoDiv.innerHTML = '<?php echo $embed_code; ?>';

        // Add the video div to the video container
        var videoContainer = document.getElementById("video-container");
        videoContainer.appendChild(videoDiv);
      }
    </script>
  </body>
</html>
