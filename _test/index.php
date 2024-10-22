<html> 
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Error</title>

  <style>
body {
  /* height: 100vh; */
  /* background-image: radial-gradient(closest-side, #2EA3F2, #2874B8); */
  text-align: center;
  color: #fff;
  font-family: "Helvetica Neue";
  font-size: 16px;
  line-height: 1.5;
  padding-top: 90px;
}

.logo {
  margin: 40px auto;
  display: block;
}

h1 {
  font-size: 24px;
  line-height: 40px;
  margin: 0 auto 16px;
  padding: 0 20px;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  letter-spacing: 0.5px;
  font-weight: 600;
  max-width: 600px;
}

p {
  color: #D6DCE0;
  font-weight: 300;
  max-width: 600px;
  margin: 0 auto 24px;
  text-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
  letter-spacing: 0.5px;
  padding: 0 20px;
}
p a {
  color: inherit;
}
p a:hover {
  color: #fff;
}

.button {
  color: #2EA3F2;
  background: #fff;
  border-radius: 3px;
  display: inline-block;
  padding: 12px 48px;
  text-decoration: none;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  transition: all 0.2s ease-out;
}
.button:hover {
  margin-top: -2px;
  box-shadow: 0 6px 24px rgba(0, 0, 0, 0.4);
}

.browser {
  width: 400px;
  min-width: 200px;
  min-height: 264px;
  background: #FFFFFF;
  box-shadow: 0 40px 80px 0 rgba(0, 0, 0, 0.25);
  border-radius: 3px;
  animation: bobble 1.8s ease-in-out infinite;
  position: relative;
  left: 50%;
  margin-left: -200px;
}
.browser .controls {
  width: 100%;
  height: 32px;
  background: #E8ECEF;
  border-radius: 3px 3px 0 0;
  box-sizing: border-box;
  padding: 10px 12px;
}
.browser .controls i {
  height: 12px;
  width: 12px;
  border-radius: 100%;
  display: block;
  float: left;
  background: #D6DCE0;
  margin-right: 8px;
}

.eye {
  position: absolute;
  left: 34%;
  top: 80px;
  width: 32px;
  height: 32px;
  opacity: 1;
}
.eye + .eye {
  right: 34%;
  left: auto;
}
.eye:before, .eye:after {
  position: absolute;
  left: 15px;
  content: " ";
  height: 40px;
  width: 3px;
  border-radius: 2px;
  background-color: #FF5E5B;
}
.eye:before {
  transform: rotate(45deg);
}
.eye:after {
  transform: rotate(-45deg);
}

.mouth {
  position: absolute;
  width: 250px;
  top: 178px;
  left: 50%;
  margin-left: -125px;
  height: 40px;
}
.mouth .lips {
  position: absolute;
  left: 15px;
  content: " ";
  height: 40px;
  width: 3px;
  border-radius: 2px;
  background-color: #FF5E5B;
  transform: rotate(-54deg);
}
.mouth .lips:nth-child(odd) {
  transform: rotate(54deg);
}
.mouth .lips:nth-child(n+2) {
  margin-left: 31px;
}
.mouth .lips:nth-child(n+3) {
  margin-left: 62px;
}
.mouth .lips:nth-child(n+4) {
  margin-left: 93px;
}
.mouth .lips:nth-child(n+5) {
  margin-left: 124px;
}
.mouth .lips:nth-child(n+6) {
  margin-left: 155px;
}
.mouth .lips:nth-child(n+7) {
  margin-left: 186px;
}
.mouth .lips:nth-child(n+8) {
  margin-left: 217px;
}
.mouth .lips:nth-child(n+9) {
  margin-left: 248px;
}

@keyframes bobble {
  0%, 100% {
    margin-top: 40px;
    margin-bottom: 48px;
    box-shadow: 0 40px 80px rgba(0, 0, 0, 0.24);
  }
  50% {
    margin-top: 54px;
    margin-bottom: 34px;
    box-shadow: 0 24px 64px rgba(0, 0, 0, 0.4);
  }
}
@media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
  .browser {
    width: 280px;
    margin-left: -140px;
  }
  .browser .eye {
    left: 30%;
  }
  .browser .eye + .eye {
    left: auto;
    right: 30%;
  }
}

</style>
</head>

<body style="transition: background 1.5s;">

<div class="browser">
  <div class="controls">
    <i></i>
    <i></i>
    <i></i>
  </div>
  
  <div class="eye"></div>
  <div class="eye"></div>
  <div class="mouth">
    <div class="lips"></div>
    <div class="lips"></div>
    <div class="lips"></div>
    <div class="lips"></div>
    <div class="lips"></div>
    <div class="lips"></div>
    <div class="lips"></div>
    <div class="lips"></div>
  </div>
</div>

<h1 style="font-family: calibri;font-size:30px;">Omaigat, something has gone wrong!</h1>
<!-- <p>We're unable to fulfill your request. Rest assured we have been notified and are looking into the issue.</p> -->

<button onclick="history.go(-1);" style="
    font-size: 40px;
    font-family: calibri;
    border: 5px solid #FFFFFF;
    background-color: rgba(255, 255, 255, 0);
    border-radius:7px;
    cursor: pointer;
    color: #ffffff;"><b>TRY AGAIN</b></button>
</body>

<script>
	const randomColor = () => '#' + Math.random().toString(16).substr(-6)
	const changeColor = () => document.body.style.backgroundColor = randomColor()

	setInterval(() => {
	  changeColor()
	}, 1500)

	// start color animation as soon as document is ready
	document.onreadystatechange = () => {
	  if (document.readyState === 'complete') {
		changeColor()
	  }
	}
</script>
</html>