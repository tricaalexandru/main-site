<?php
global $global;
require_once $global['systemRootPath'].'objects/ComingSoonEmail.php';

<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('/img/coming_soon.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}

.form__group {
  position: relative;
  padding: 15px 0 0;
  margin-top: 10px;
  width: 100%;
}

.form__field {
  font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid #9b9b9b;
  outline: 0;
  font-size: 1.3rem;
  color: white;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;

  &::placeholder {
    color: transparent;
  }

  &:placeholder-shown ~ .form__label {
    font-size: 1.3rem;
    cursor: text;
    top: 20px;
  }
}

.form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #9b9b9b;
}

.form__field:focus {
  ~ .form__label {
    position: absolute;
    top: 0;
    display: block;
    transition: 0.2s;
    font-size: 1rem;
    color: #11998e;
    font-weight:700;
  }
  padding-bottom: 6px;
  font-weight: 700;
  border-width: 3px;
  border-image: linear-gradient(to right, #11998e, #38ef7d);
  border-image-slice: 1;
}

</style>
<body>

<div class="bgimg">
  <div class="topleft">
    <p>Lolitas LIVE</p>
  </div>
  <div class="middle">
    <h1>COMING SOON</h1>
    <p style="margin-top: 20px;">60 days left</p>
  </div>
  <form action="ComingSoonEmail" metod="post">
    <div class="form__group field middle" style="width: 21em!important; color: white!important">
       <br/>
       <input type="email" id="email" name="email" class="form__field" placeholder="Enter your email here for 5 free credits" required />
       <input type="submit">
    </div>
  </form>
  <div class="bottomleft">
    <p>Enter your email above for free credits</p>
  </div>
</div>

</body>
</html>
