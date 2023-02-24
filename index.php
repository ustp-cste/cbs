<!DOCTYPE html>
<html>
<head>
  <!-- Meta Header-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" />
  <link rel="icon" href="https://i.ibb.co/rdP64Np/plague3.png">
  <title>Domain Security Breached</title>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" /> 
  <!--Corsur-->
  <style type='text/css'>body, a:hover {cursor: url(http://cur.cursors-4u.net/cursors/cur-2/cur118.cur), progress;}</style><a href='http://www.cursors-4u.com/cursor/2008/12/17/cool-grey-outer-glow-pointer.html' target='_blank' title='Cool Grey Outer Glow Pointer'><img alt='Cool Grey Outer Glow Pointer' border='0' src='http://cur.cursors-4u.net/cursor.png' style='position:absolute; top: 0px; right: 0px;'/></a>
</head>
<!--Body-->
<body>
  <? echo $_SERVER["REMOTE_ADDR"]; ?>
  <body oncontextmenu="return false" onkeydown="return false" onmousedown="return false">
  <p style="text-align:center;"><img src="https://i.ibb.co/rdP64Np/plague3.png" alt="Logo"></p>
  <div class="container"><br><br><br><br><br><br>
  <div class="glitch" data-text="PLAGUESEC">PLAGUESEC</div>
  <div class="glow"></div>
  <p class="subtitle">SECURITY RESEARCHERS</p>
  <br><br><br><br>
  <div id="foter" class="foter" style="position: center; width: 500px; height: 14px; margin: 0px; padding: 5px; font-size: 12px; text-align: center; color: rgb(255, 255, 255); font-family: &quot;trebuchet ms&quot;, Courier new, courier new, sans-serif; transform: transform-origin: 50% 0px 0px; background-color: rgb(0, 0, 0); border: 1px solid rgb(170, 170, 170); opacity: 0.5; ">
    <font face="courier new"><marquee color="lime" behavior="Flip" scrollamount="5" width="95%" style="width: 95%;">Access denied for all server system. No files were harm or deleted. Please patch and secure your system immediately. Thank You!</marquee></font>
    <br><br><br><br><br><br><br>
    <footer>This domain has been seized by M435TR0 </footer></p></div></span><br><br>
  </div>
  <div class="scanlines"></div>
</body>
<!--CSS Style-->
<style>body {
  background: black;
  font-family: "Oswald", sans-serif;
  font-style: italic;
}

.container {
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
}

.glitch {
  color: rgb(223, 191, 191);
  position: relative;
  font-size: 9vw;
  // margin: 70px 200px;
  animation: glitch 5s 5s infinite;
}

.glitch::before {
  content: attr(data-text);
  position: absolute;
  left: -2px;
  text-shadow: -5px 0 magenta;
  background: black;
  overflow: hidden;
  top: 0;
  animation: noise-1 3s linear infinite alternate-reverse, glitch 5s 5.05s infinite;
}

.glitch::after {
  content: attr(data-text);
  position: absolute;
  left: 2px;
  text-shadow: -5px 0 lightgreen;
  background: black;
  overflow: hidden;
  top: 0;
  animation: noise-2 3s linear infinite alternate-reverse, glitch 5s 5s infinite;
}

@keyframes glitch {
  1%{
    transform: rotateX(10deg) skewX(90deg);
  }
  2%{
    transform: rotateX(0deg) skewX(0deg);
  }
}

@keyframes noise-1 {
  $steps: 30;
  @for $i from 1 through $steps {
    #{percentage($i*(1/$steps))} {
      $top: random(100);
      $bottom: random(101 - $top);
      clip-path: inset(#{$top}px 0 #{$bottom}px 0);
    }
  }
}

@keyframes noise-2 {
  $steps: 30;
  @for $i from 0 through $steps {
    #{percentage($i*(1/$steps))} {
      $top: random(100);
      $bottom: random(101 - $top);
      clip-path: inset(#{$top}px 0 #{$bottom}px 0);
    }
  }
}

.scanlines {
  overflow: hidden;
  mix-blend-mode: difference;
}

.scanlines::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;

  background: repeating-linear-gradient(
    to bottom,
    transparent 0%,
    rgba(255, 255, 255, 0.05) .5%,
    transparent 1%
  );

  animation: fudge 7s ease-in-out alternate infinite;
}


@keyframes fudge {
  from {
    transform: translate(0px, 0px);
  }
  to {
    transform: translate(0px, 2%);
  }
}

.glow {
  @extend .glitch;
  text-shadow: 0 0 1000px rgb(223, 191, 191);
  color: transparent;
  position: absolute;
  top: 0;
}

.subtitle {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 100;
  font-size: .8vw;
  color: rgba(165, 141, 141, .4);
  text-transform: uppercase;
  letter-spacing: 1em;
  text-align: center;
  position: absolute;
  left: 17%;
  animation: glitch-2 5s 5.02s infinite;
}

@keyframes glitch-2 {
  1%{
    transform: rotateX(10deg) skewX(70deg);
  }
  2%{
    transform: rotateX(0deg) skewX(0deg);
  }
}
</style>
</html>
