<?php
session_start();
if (!isset($_SESSION['name'])) {
  header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>ISP CLUB | Tri ân D17</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="fonts.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark navbar-custom py-0">

    <div class="container">
      <a href="../Home/Home.php" class="navbar-brand">

        <img src="3.png" alt="" style="width:40px">

      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#base-navbars" aria-controls="base-navbars" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="base-navbars">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lời nhắn</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId" style="background-color: #e7471f;">
              <a class="dropdown-item" href="../Message/index.php">Gửi tin nhắn</a>
              <a class="dropdown-item" href="../Message/ShowMessage.php">Xem tin nhắn</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ảnh thành viên</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId" style="background-color: #e7471f;">
              <a class="dropdown-item" href="../Picture/see.php">Xem ảnh</a>
              <a class="dropdown-item" href="../Picture/up.php">Up ảnh</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tri ân D17</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-md-auto d-block d-sm-flex d-md-flex">

          <li class="nav-item">
            <a class="nav-link" href="../Home/UP_AVATAR/avatar.php">
              <span class="d-block" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Profile">
                <i class="fas fa-user-circle d-none d-md-block d-lg-none"></i>
              </span>
              <span class="d-sm-block d-md-none d-lg-block">
                <i class="fas fa-user-circle pr-1"></i>Profile
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Home/logout.php">
              <span class="d-block" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Logout">
                <i class="fas fa-sign-out-alt d-none d-md-block d-lg-none"></i>
              </span>
              <span class="d-sm-block d-md-none d-lg-block">
                <i class="fas fa-sign-out-alt pr-1"></i><span class="d-lg-none">Logout</span>
              </span>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <center>
    <p class="title">🎉 Tốt nghiệp rồi, về nhà ăn Tết thôi 🎉</p>
  </center>
  <div class="board">
    <div class="message">
      <p>Năm 2021 là một năm khó khăn với tất cả mọi người và đặc biệt, các anh chị D17 trong quá trình làm đồ án. Nhưng tuy khó khăn là vậy, các anh đều đã vượt qua và kết quả là những điểm 9, điểm 10 trong tấm bằng tốt nghiệp của mình. Chúng em tuy không thể đến chúc mừng các anh trực tiếp được nhưng đã lưu lại các kỉ niệm của các anh với ISP qua những tấm hình .<br>Hi vọng các anh sẽ tiếp tục vững bước trên con đường gian nan phía trước ❤</p>
    </div>
    <div class="click-area">
      <button type="button" class="button-TMN" id="myBtn-TMN">
        <div class="hidden-text">
          Anh<br>Trần Minh Nhật
        </div>
      </button>
      <button type="button" class="button-PHV" id="myBtn-PHV">
        <div class="hidden-text">
          Anh <br>Phạm Hải Vũ
        </div>
      </button>
      <button type="button" class="button-NDH" id="myBtn-NDH">
        <div class="hidden-text">
          Anh <br>Nguyễn Đức Hoằng
        </div>
      </button>
      <button type="button" class="button-NCT" id="myBtn-NCT">
        <div class="hidden-text">
          Anh <br>Nguyễn Công Thành
        </div>
      </button>
      <button type="button" class="button-DVH" id="myBtn-DVH">
        <div class="hidden-text">
          Anh <br>Đinh Viết Hải
        </div>
      </button>
      <button type="button" class="button-TTTH" id="myBtn-TTTH">
        <div class="hidden-text">
          Chị <br>Trịnh Thị Thu Hằng
        </div>
      </button>
      <button type="button" class="button-VTH" id="myBtn-VTH">
        <div class="hidden-text">
          Anh <br>Vũ Tiến Hòa
        </div>
      </button>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>

<script type='text/javascript'>
  var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  var transforms = ["transform", "msTransform", "webkitTransform", "mozTransform", "oTransform"];
  var transformProperty = getSupportedPropertyName(transforms);
  var snowflakes = [];
  var browserWidth;
  var browserHeight;
  var numberOfSnowflakes = 20;
  var resetPosition = false;

  function setup() {
    window.addEventListener("DOMContentLoaded", generateSnowflakes, false);
    window.addEventListener("resize", setResetFlag, false)
  }
  setup();

  function getSupportedPropertyName(b) {
    for (var a = 0; a < b.length; a++) {
      if (typeof document.body.style[b[a]] != "undefined") {
        return b[a]
      }
    }
    return null
  }

  function Snowflake(b, a, d, e, c) {
    this.element = b;
    this.radius = a;
    this.speed = d;
    this.xPos = e;
    this.yPos = c;
    this.counter = 0;
    this.sign = Math.random() < 0.5 ? 1 : -1;
    this.element.style.opacity = 0.5 + Math.random();
    this.element.style.fontSize = 4 + Math.random() * 30 + "px"
  }
  Snowflake.prototype.update = function() {
    this.counter += this.speed / 5000;
    this.xPos += this.sign * this.speed * Math.cos(this.counter) / 40;
    this.yPos += Math.sin(this.counter) / 40 + this.speed / 30;
    setTranslate3DTransform(this.element, Math.round(this.xPos), Math.round(this.yPos));
    if (this.yPos > browserHeight) {
      this.yPos = -50
    }
  };

  function setTranslate3DTransform(a, c, b) {
    var d = "translate3d(" + c + "px, " + b + "px, 0)";
    a.style[transformProperty] = d
  }

  function generateSnowflakes() {
    var b = document.querySelector(".snowflake");
    var h = b.parentNode;
    browserWidth = document.documentElement.clientWidth;
    browserHeight = document.documentElement.clientHeight;
    for (var d = 0; d < numberOfSnowflakes; d++) {
      var j = b.cloneNode(true);
      h.appendChild(j);
      var e = getPosition(50, browserWidth);
      var a = getPosition(50, browserHeight);
      var c = 5 + Math.random() * 40;
      var g = 4 + Math.random() * 10;
      var f = new Snowflake(j, g, c, e, a);
      snowflakes.push(f)
    }
    h.removeChild(b);
    moveSnowflakes()
  }

  function moveSnowflakes() {
    for (var b = 0; b < snowflakes.length; b++) {
      var a = snowflakes[b];
      a.update()
    }
    if (resetPosition) {
      browserWidth = document.documentElement.clientWidth;
      browserHeight = document.documentElement.clientHeight;
      for (var b = 0; b < snowflakes.length; b++) {
        var a = snowflakes[b];
        a.xPos = getPosition(50, browserWidth);
        a.yPos = getPosition(50, browserHeight)
      }
      resetPosition = false
    }
    requestAnimationFrame(moveSnowflakes)
  }

  function getPosition(b, a) {
    return Math.round(-1 * b + Math.random() * (a + 2 * b))
  }

  function setResetFlag(a) {
    resetPosition = true
  };
</script>

<script>
  var btn = document.getElementById('myBtn-TMN');
  btn.addEventListener('click', function() {
    document.location.href = '<?php echo "edit-img/AnhNhat.png"; ?>';
  });
  var btn = document.getElementById('myBtn-PHV');
  btn.addEventListener('click', function() {
    document.location.href = '<?php echo "edit-img/AnhVu.png"; ?>';
  });
  var btn = document.getElementById('myBtn-NDH');
  btn.addEventListener('click', function() {
    document.location.href = '<?php echo "edit-img/AnhHoang.png"; ?>';
  });
  var btn = document.getElementById('myBtn-NCT');
  btn.addEventListener('click', function() {
    document.location.href = '<?php echo "edit-img/AnhThanh.png"; ?>';
  });
  var btn = document.getElementById('myBtn-DVH');
  btn.addEventListener('click', function() {
    document.location.href = '<?php echo "edit-img/AnhHai.png"; ?>';
  });
  var btn = document.getElementById('myBtn-VTH');
  btn.addEventListener('click', function() {
    document.location.href = '<?php echo "edit-img/AnhHoa.png"; ?>';
  });
</script>