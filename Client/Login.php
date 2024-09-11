<?php
  include '../Common/SQLconnection.php';
  include '../Common/htmlStructure.php';
?>
  <link rel="stylesheet" href="Login.css"/>
  </head>
  <body>
    <img src="../Pics/Symbol.png" alt="" />
    <span>
      <form>
        <h2>Sign In</h2>
        <div class="username">
          <input type="text" class="form-control" required />
          <label for="" class="form-label">Email or phone</label>
        </div>
        <div class="password">
          <input type="password" class="form-control" required />
          <label for="" class="form-label">Ender Your Password</label>
        </div>
        <div class="visiblty">
          <label class="showlabel">
            <input type="checkbox" name="" id="show" />Show password
          </label>
          <a href="#">Forgot password</a>
        </div>

        <input type="submit" value="Sign In" id="signin" />
      </form>
      <div class="SignUp">
        <h2>Hello, Friends</h2>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe
          reiciendis ducimus rem delectus assumenda. Perferendis.
        </p>
        <button class="SignUpBtn">Sign Up</button>
      </div>
    </span>
    <?php include '../Common/htmlscriptTag.php';?>