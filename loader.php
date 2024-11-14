<!-- 
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);
 
    .preloader {
        background: #3F485B;
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 10000;
    }
    .back {
        margin: 1em auto;
        font-family: "Roboto";
    }
    .back span {
        font-size: 3em;
        color: #014EBC;
        background: #262B37;
        display: table-cell;
        box-shadow: inset 0 0 5px rgba(0,0,0,0.3), 0 5px 0 #ccc;
        padding: 0 15px;
        line-height: 100px;
        animation: jumb 2s infinite;
    }
    @keyframes jumb {
        0% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-30px);
            box-shadow: 0 15px 0 #014EBC;
        }
        100% {
            transform: translateY(0px);    
        }
    }
    .back span:nth-child(1) { animation-delay: 0s; }
    .back span:nth-child(2) { animation-delay: .1s; }
    .back span:nth-child(3) { animation-delay: .2s; }
    .back span:nth-child(4) { animation-delay: .3s; }
    .back span:nth-child(5) { animation-delay: .4s; }
    .back span:nth-child(6) { animation-delay: .5s; }
    .back span:nth-child(7) { animation-delay: .6s; }
</style>
<body>
<div class="preloader" id="preloader">
    <span class="back">
        <span>L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </span>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(window).on('load', function() {
        setTimeout(function() {
            $('#preloader').fadeOut('fast');
            $('html').css({'overflow-y':'auto'});
        }, 3000)
    });
</script> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loader with Video Background</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
 <style>
     /* body, html {
            margin: 0;
            padding: 0;
            overflow: hidden;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #000;
            font-family: Arial, sans-serif;
        } */
 
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #000;
            z-index: 10000;
        }
        .preloader video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        } 
        .logo-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            text-align: center;
            font-size: 5rem;
            color: white;
            position: relative;
        }
        .logo-wrapper::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-top: 5px solid white;
            border-radius: 50%;
            box-sizing: border-box;
            animation: spin 2s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        } 
/* HTML: <div class="loader"></div> */
.loader {
  width: 40px;
  height: 40px;
  position: relative;
  --c:no-repeat linear-gradient(#014EBC 0 0);
  background:
    var(--c) center/100% 10px,
    var(--c) center/10px 100%;
}
.loader:before {
  content:'';
  position: absolute;
  inset: 0;
  background:
    var(--c) 0    0,
    var(--c) 100% 0,
    var(--c) 0    100%,
    var(--c) 100% 100%;
  background-size: 15.5px 15.5px;
  animation: l16 1.5s infinite cubic-bezier(0.3,1,0,1);
}
@keyframes l16 {
   33%  {inset:-10px;transform: rotate(0deg)}
   66%  {inset:-10px;transform: rotate(90deg)}
   100% {inset:0    ;transform: rotate(90deg)}
}
 </style>
</head>
<body>
    <div class="preloader" id="preloader">
        <!-- <video autoplay muted loop>
        <source src="./assets/images/home/bg.mp4" type="video/mp4">
        </video> -->
        <!-- <div class="logo-wrapper">
            <span>Loading</span>
            <div class="preloader-circle"></div>

        </div> -->
<div class="loader"></div>

    </div>

    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('preloader').style.display = 'none';
            }, 3000); 
        });
        $(window).on('load', function() {
        setTimeout(function() {
            $('#preloader').fadeOut('fast');
            $('html').css({'overflow-y':'auto'});
        }, 3000)
    });
    </script>
</body>
</html>
