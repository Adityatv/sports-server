<html>
  <head></head>
  <body class="vsc-initialized">
    <title>Join @TheTechieSiaOfficial</title>
    <meta content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style>
      .loading {
        margin-top: 0;
        font-weight: 700;
        vertical-align: middle;
        line-height: 150px;
        font-size: 25px;
        text-transform: uppercase;
        background: linear-gradient(to right, red 30%, rgb(10, 60, 215) 75%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      h1 {
        background-color: #000;
        margin: 0;
        text-align: center;
        padding: 5px
      }

      a {
        color: #fff;
        text-decoration: none
      }

      tr th {
        font-tvv-name: bold;
        background-color: green;
        padding: 1px
      }

      * {
        box-sizing: border-box
      }

      @keyframes fadein {
        0% {
          opacity: 0
        }

        66% {
          opacity: 0
        }

        100% {
          opacity: 1
        }
      }

      @-webkit-keyframes fadein {
        0% {
          opacity: 0
        }

        66% {
          opacity: 0
        }

        100% {
          opacity: 1
        }
      }

      .tvv-item {
        position: relative;
        display: inline-block;
        width: 120px;
        height: 150px;
        margin: 3px;
        padding: 10px;
        border: 1px solid green z-index: 1;
        background: White;
        box-shadow: 1px 2px 2px red;
        overflow: hidden;
        border-radius: 4px;
        filter: contrast(100%)
      }

      .tvv-item>* {
        margin: 0;
        padding: 0
      }

      .tvv-item .tvv-thumb {
        width: 100%;
        bottom: 10px;
        top: 0px;
        position: absolute;
        right: 0;
        float: center;
      }

      .tvv-item .tvv-thumb img {
        width: 100%;
        pointer-events: none
      }

      .tvv-item .tvv-name {
        position: absolute;
        left: 0;
        bottom: 0;
        font-size: 12px;
        display: block;
        text-align: center;
        width: 100%;
        color: black;
        padding: 5px;
        font-weight: 800;
        text-overflow: ellipsis;
        black-space: nowrap;
        overflow: hidden;
        background: linear-gradient(to bottom left, #ccffff 7%, #ffffff 100%);
        box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5);
        7px 7px 20px 0px rgba(0, 0, 0, .1),
        4px 4px 5px 0px rgba(0, 0, 0, .1);
        transition: all 0.3s ease;
      }

      .tvv-item img {
        width: 100%;
        pointer-events: none
      }

      .tvv-item:after {
        position: absolute;
        content: "";
        width: 100%;
        height: 0;
        top: 0;
        left: 0;
        z-index: -1;
        border-radius: 5px;
        border: 0px solid green;
        background-color: black;
        background-image: linear-gradient(to bottom left, #ccffff 7%, #ffffcc 100%);
        box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5);
        7px 7px 20px 0px rgba(0, 0, 0, .1),
        4px 4px 5px 0px rgba(0, 0, 0, .1);
        transition: all 0.3s ease;
      }

      .tvv-item:hover {
        color: #000;
      }

      .tvv-item:hover:after {
        top: auto;
        bottom: 0;
        height: 100%;
      }

      .tvv-item:active {
        top: 5px;
      }

      .tvv-name:hover {}

      .fin {
        width: 100%;
        margin-top: 1px;
        margin-bottom: 2px;
        float: center;
        height: 30px;
        font-size: small;
        background-color: rgb(40, 40, 40);
        color: black;
        border-radius: 10px;
        border: 3px solid greenoutline: none;
        text-align: center;
        font-family: "Poppins", sans-serif;
      }

      .fin,
      .dftr {
        width: 100%;
        margin-top: 1px;
        margin-bottom: 2px;
        float: center;
        height: 30px;
        font-style: bold;
        background-color: rgb(40, 40, 40);
        color: purple;
        background: linear-gradient(135deg, snow 0%, seashell 64%);
        border-radius: 0px;
        border: 2px solid red;
        outline: none;
        text-align: center;
        font-family: "Poppins", sans-serif;
      }

      .fin:hover,
      .dftr:hover {
        border: 3px solid rgb(255, 60, 140);
        color: red;
        background: linear-gradient(135deg, azure 0%, floralwhite 64%);
      }

      .tvv-item {
        width: calc(100%/20 - 10px)
      }
      }

      @media only screen and (max-width:2600px) {
        .tvv-item {
          width: calc(100%/19 - 10px)
        }
      }

      @media only screen and (max-width:2470px) {
        .tvv-item {
          width: calc(100%/18 - 10px)
        }
      }

      @media only screen and (max-width:2340px) {
        .tvv-item {
          width: calc(100%/17 - 10px)
        }
      }

      @media only screen and (max-width:2210px) {
        .tvv-item {
          width: calc(100%/16 - 10px)
        }
      }

      @media only screen and (max-width:2080px) {
        .tvv-item {
          width: calc(100%/15 - 10px)
        }
      }

      @media only screen and (max-width:1950px) {
        .tvv-item {
          width: calc(100%/14 - 10px)
        }
      }

      @media only screen and (max-width:1820px) {
        .tvv-item {
          width: calc(100%/13 - 10px)
        }
      }

      @media only screen and (max-width:1690px) {
        .tvv-item {
          width: calc(100%/12 - 10px)
        }
      }

      @media only screen and (max-width:1560px) {
        .tvv-item {
          width: calc(100%/11 - 10px)
        }
      }

      @media only screen and (max-width:1430px) {
        .tvv-item {
          width: calc(100%/10 - 10px)
        }
      }

      @media only screen and (max-width:1300px) {
        .tvv-item {
          width: calc(100%/9 - 10px)
        }
      }

      @media only screen and (max-width:1170px) {
        .tvv-item {
          width: calc(100%/8 - 10px)
        }
      }

      @media only screen and (max-width:1040px) {
        .tvv-item {
          width: calc(100%/7 - 10px)
        }
      }

      @media only screen and (max-width:910px) {
        .tvv-item {
          width: calc(100%/6 - 10px)
        }
      }

      @media only screen and (max-width:780px) {
        .tvv-item {
          width: calc(100%/5 - 10px)
        }
      }

      @media only screen and (max-width:650px) {
        .tvv-item {
          width: calc(100%/4 - 10px)
        }
      }

      @media only screen and (max-width:520px) {
        .tvv-item {
          width: calc(100%/3 - 10px)
        }
      }

      @media only screen and (max-width:390px) {
        .tvv-item {
          width: calc(100%/2 - 10px)
        }
      }

      .custom-btn {
        width: 130px;
        height: 40px;
        color: #fff;
        border-radius: 5px;
        padding: 10px 25px;
        font-family: 'Lato', sans-serif;
        font-weight: 500;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5), 7px 7px 20px 0px rgba(0, 0, 0, .1), 4px 4px 5px 0px rgba(0, 0, 0, .1);
        outline: none;
      }

      .btn-11 {
        border: white;
        background: green;
        background: linear-gradient(80deg, yellow 0%, teal 100%);
        color: #fff;
        overflow: hidden;
      }

      .btn-11:hover {
        text-decoration: none;
        color: #fff;
        background-image: linear-gradient(135deg, red 0%, purple 64%);
      }

      .btn-11:before {
        position: absolute;
        content: '';
        display: inline-block;
        top: -180px;
        left: 0;
        width: 30px;
        height: 100%;
        background-color: #fff;
        animation: shiny-btn1 3s ease-in-out infinite;
      }

      .btn-11:hover {
        opacity: .7;
        color: white;
      }

      .btn-11:active {
        box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .3), -4px -4px 6px 0 rgba(116, 125, 136, .2), inset -4px -4px 6px 0 rgba(255, 255, 255, .2), inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
      }

      @-webkit-keyframes shiny-btn1 {
        0% {
          -webkit-transform: scale(0) rotate(45deg);
          opacity: 0;
        }

        80% {
          -webkit-transform: scale(0) rotate(45deg);
          opacity: 0.5;
        }

        81% {
          -webkit-transform: scale(4) rotate(45deg);
          opacity: 1;
        }

        100% {
          -webkit-transform: scale(50) rotate(45deg);
          opacity: 0;
        }
      }

      @import url("https://fonts.googleapis.com/css?family=Roboto");

      @-webkit-keyframes come-in {
        0% {
          -webkit-transform: translatey(100px);
          transform: translatey(100px);
          opacity: 0;
        }

        30% {
          -webkit-transform: translateX(-50px) scale(0.4);
          transform: translateX(-50px) scale(0.4);
        }

        70% {
          -webkit-transform: translateX(0px) scale(1.2);
          transform: translateX(0px) scale(1.2);
        }

        100% {
          -webkit-transform: translatey(0px) scale(1);
          transform: translatey(0px) scale(1);
          opacity: 1;
        }
      }

      @keyframes come-in {
        0% {
          -webkit-transform: translatey(100px);
          transform: translatey(100px);
          opacity: 0;
        }

        30% {
          -webkit-transform: translateX(-50px) scale(0.4);
          transform: translateX(-50px) scale(0.4);
        }

        70% {
          -webkit-transform: translateX(0px) scale(1.2);
          transform: translateX(0px) scale(1.2);
        }

        100% {
          -webkit-transform: translatey(0px) scale(1);
          transform: translatey(0px) scale(1);
          opacity: 1;
        }
      }

      * {
        margin: 0;
        padding: 0;
      }

      html,
      body {
        background: #eaedf2;
        font-family: 'Roboto', sans-serif;
      }

      .stwBlurRainbow,
      .stwRainbow {
        position: fixed;
        width: 100%;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3px;
        z-index: 23;
        background: linear-gradient(-45deg, #4086f4, #31a952, #fbbe01, #eb4132, #4086f4, #31a952, #fbbe01, #eb4132);
        background-size: 200%;
        -webkit-animation: animeBar 5s linear infinite;
        animation: animeBar 5s linear infinite
      }

      .stwBlurRainbow {
        height: 10px;
        z-index: 22;
        filter: blur(10px);
        opacity: .7
      }

      @-webkit-keyframes animeBar {
        0% {
          background-position: 0 50%
        }

        50% {
          background-position: 100% 50%
        }

        100% {
          background-position: 0 50%
        }
      }

      @keyframes animeBar {
        0% {
          background-position: 0 50%
        }

        50% {
          background-position: 100% 50%
        }

        100% {
          background-position: 0 50%
        }
      }
    </style>
    <center>
      <button class="btn-11 custom-btn" style="width:100%;font-weight:100;height:60px;font-size:25px;position:top:0px;z-index:3; font-family: Lobster">TSSports +</button>
      <div class="no-items section" id="search_top" name="Search (Top)" style="z-index:3;position:top:44px;border-radius:10px"></div>
      <input class="fin" placeholder="Search here.." style="z-index:3;position:top:44px;border-radius:10px">
  <a href="https://verified.telegram.ind.in/s/TheTechieSiaOfficial">
         <div class="tvv-item">
           <img class="loading" src="https://img.freepik.com/premium-vector/join-us-telegram-3d-speech-bubble-with-render-telegram-icon-logo-contact-us-social-media-icons_248162-1471.jpg?w=2000">
           <div class="tvv-name">Join Us On Telegram</div>
         </div>
       </a>
       </div>
 <?php
$json = json_decode(file_get_contents('app/_data/channels') , true);
foreach ($json as $channel)
{
   
    printf("
							<a href=\"play.php?id=%s\">" . PHP_EOL, $channel['id']);
    
    echo '
								<div class="tvv-item">' . PHP_EOL;
    printf("
									<img class=\"loading\" src=\"%s\"\">" . PHP_EOL, $channel['logo']);
    printf("
										<div class=\"tvv-name\">%s</div>
									</div>
								</a>" . PHP_EOL, $channel['title']);
    
}
?>   
   
       <a href="player.php/?c=starhindi">
         <div class="tvv-item">
           <img class="loading" src="https://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Sports_3.png ">
           <div class="tvv-name">Star Sports 1 हिंदी</div>
         </div>
       </a>
       </div>
       <a href="player.php/?c=star1in">
         <div class="tvv-item">
           <img class="loading" src="https://www.tvchannelpricelist.com/wp-content/uploads/channels-logo-300/star-sports-hd-1-logo-300x300.jpg ">
           <div class="tvv-name">Star Sports 1</div>
         </div>
       </a>
       </div>
       <a href="player.php/?c=willowusa">
         <div class="tvv-item">
           <img class="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmzGuSDh0BzfQs_d_lUEuPBB3Bblbu-PhtvQ&amp;usqp=CAU">
           <div class="tvv-name"> Willow USA</div>
         </div>
       </a>
       </div>
       <a href="player.php/?c=willowextra">
         <div class="tvv-item">
           <img class="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvHXoodvGh35c3rgVRpkqq0owDdf9wZLjFLg&amp;usqp=CAU " style="height: 120px " "="">
			<div class=" tvv-name">Willow Xtra
         </div>
         </div>
         <a href="player.php/?c=tenspk">
           <div class="tvv-item">
             <img class="loading" src="https://gumlet.assettype.com/afaqs%2Fimport%2Fall%2Fnews%2Fimages%2Fnews_story_grfx%2F2015%2F44872_1_home_big.jpg ">
             <div class="tvv-name">Ten Sports</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=ptvpk">
           <div class="tvv-item">
             <img class="loading" src="https://is1-ssl.mzstatic.com/image/thumb/Purple114/v4/c2/9b/0a/c29b0adf-875f-37b0-3e08-7ee9b62b8b02/AppIcon-1x_U007emarketing-85-220-0-8.jpeg/1024x1024bb.png ">
             <div class="tvv-name">PTV Sports</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=asportshd">
           <div class="tvv-item">
             <img class="loading" src="https://is4-ssl.mzstatic.com/image/thumb/Purple116/v4/9e/9b/ec/9e9becc1-30db-632f-79b6-bdae80b80996/AppIcon-0-0-1x_U007emarketing-0-0-0-7-0-0-sRGB-0-0-0-GLES2_U002c0-512MB-85-220-0-0.png/1200x630wa.png ">
             <div class="tvv-name">Asports HD</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=wwe">
           <div class="tvv-item">
             <img class="loading" src="https://logos-world.net/wp-content/uploads/2021/11/World-Wrestling-Entertainment-WWE-Logo.png">
             <div class="tvv-name">WWE</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=hdchnl7">
           <div class="tvv-item">
             <img class="loading" src="https://logowik.com/content/uploads/images/premier-league3330.jpg">
             <div class="tvv-name">Premier League</div>
           </div>
         </a>
         </div>
          <?php
$json = json_decode(file_get_contents('app/_data/channelz') , true);
foreach ($json as $channel)
{
   
    printf("
							<a href=\"playx.php?%s\">" . PHP_EOL, $channel['id']);
    
    echo '
								<div class="tvv-item">' . PHP_EOL;
    printf("
									<img class=\"loading\" src=\"%s\"\">" . PHP_EOL, $channel['logo']);
    printf("
										<div class=\"tvv-name\">%s</div>
									</div>
								</a>" . PHP_EOL, $channel['title']);
    
}
?>   
         <a href="player.php/?c=premieruk">
           <div class="tvv-item">
             <img class="loading" src="https://frontend-assets.viaplay.com/sanity/footer_logo_160x180.png">
             <div class="tvv-name">ViaPlay 1</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=hdchnl2">
           <div class="tvv-item">
             <img class="loading" src="https://frontend-assets.viaplay.com/sanity/footer_logo_160x180.png">
             <div class="tvv-name">ViaPlay 2</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=hdchnl3">
           <div class="tvv-item">
             <img class="loading" src="https://frontend-assets.viaplay.com/sanity/footer_logo_160x180.png">
             <div class="tvv-name">ViaPlay Exta</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=espnusa">
           <div class="tvv-item">
             <img class="loading" src="https://espnpressroom.com/us/files/2018/03/App-Icon-Android-7.png">
             <div class="tvv-name">ESPN 1</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=espn2">
           <div class="tvv-item">
             <img class="loading" src="https://espnpressroom.com/us/files/2018/03/App-Icon-Android-7.png">
             <div class="tvv-name">ESPN 2</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=laligauk">
           <div class="tvv-item">
             <img class="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQN1sfb4ZRejIqqbKPeGuLR3cUXbKJRJ-sAdA&amp;usqp=CAU ">
             <div class="tvv-name">Laliga</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=mlaliga">
           <div class="tvv-item">
             <img class="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0FjCd65ieWIvN7AW8tBOKjAqDEFvOLDm5YA&amp;usqp=CAU" ">
					<div class=" tvv-name">LaLiga Tv 1 M
           </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=daznlaliga">
           <div class="tvv-item">
             <img class="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4OZfM4RGSk8VYPgKLVN-XHCT1fy-p2e5zcw&amp;usqp=CAU ">
             <div class="tvv-name">Dazn Laliga</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=daznes">
           <div class="tvv-item">
             <img class="loading" src="https://www.dthsat.com/images/Dazn-1-TV-Logo.png ">
             <div class="tvv-name">Dazn 1</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=hdchnl4">
           <div class="tvv-item">
             <img class="loading" src="https://upload.wikimedia.org/wikipedia/en/archive/1/1f/20221202173553%21ITV1_logo_%282022%29.svg">
             <div class="tvv-name">ITV 1</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=itv4">
           <div class="tvv-item">
             <img class="loading" src="https://static.wikia.nocookie.net/ukgameshows/images/5/5c/Itv4.jpg ">
             <div class="tvv-name">ITV 4 UK</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=fox501">
           <div class="tvv-item">
             <img class="loading" src="https://s3-eu-west-1.amazonaws.com/static.media.info/l/o/6/6550.1489224113.png ">
             <div class="tvv-name">Fox 501</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=fox5022">
           <div class="tvv-item">
             <img class="loading" src="https://static.wikia.nocookie.net/logopedia/images/a/ad/Fox_League_Logo.png">
             <div class="tvv-name">Fox 502</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=fox503">
           <div class="tvv-item">
             <img class="loading" src="https://s3-eu-west-1.amazonaws.com/static.media.info/l/o/6/6551.1489224386.png ">
             <div class="tvv-name">Fox 503</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=fox504">
           <div class="tvv-item">
             <img class="loading" src="https://i.imgur.com/n0YQEkz_d.webp?maxwidth=640&amp;shape=thumb&amp;fidelity=medium ">
             <div class="tvv-name">Fox 504</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=fox505">
           <div class="tvv-item">
             <img class="loading" src="https://s3-eu-west-1.amazonaws.com/static.media.info/l/o/6/6552.1489224687.png ">
             <div class="tvv-name">Fox 505</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=fox506">
           <div class="tvv-item">
             <img class="loading" src="https://s3-eu-west-1.amazonaws.com/static.media.info/l/o/6/6553.1489225082.png ">
             <div class="tvv-name">Fox 506</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=usafox1">
           <div class="tvv-item">
             <img class="loading" src="https://static.wikia.nocookie.net/logopedia/images/7/7a/Fox_Sports_Racing.svg" ">
					<div class=" tvv-name">Fox Sports racing
           </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=skyscric">
           <div class="tvv-item">
             <img class="loading" src="https://archive.org/download/SkySportsCricket_201708/sky%20sports%20cricket.png ">
             <div class="tvv-name">Sky Sports Cricket</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=skysprem">
           <div class="tvv-item">
             <img class="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcbHIjlwz-L_hTsJ4vZy7ZpkdLwwrDo0Cgig&amp;usqp=CAU ">
             <div class="tvv-name">Sky Sports Premier League</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=skysme">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/curN9Dfj2hV6BgP1O03ibSsf8nRhrUbdhJ6MyBwO_T73xT8yI00aJwWyT3_Io-MkQ6g69jzv=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name"> Sky Sports Main Event </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=skysact">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/curN9Dfj2hV6BgP1O03ibSsf8nRhrUbdhJ6MyBwO_T73xT8yI00aJwWyT3_Io-MkQ6g69jzv=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name"> Sky Sports Action </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=skysgol">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/curN9Dfj2hV6BgP1O03ibSsf8nRhrUbdhJ6MyBwO_T73xT8yI00aJwWyT3_Io-MkQ6g69jzv=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name"> Sky Sports Golf </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=skysprem">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/curN9Dfj2hV6BgP1O03ibSsf8nRhrUbdhJ6MyBwO_T73xT8yI00aJwWyT3_Io-MkQ6g69jzv=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name"> Sky Sports Premier </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=skysfott">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/curN9Dfj2hV6BgP1O03ibSsf8nRhrUbdhJ6MyBwO_T73xT8yI00aJwWyT3_Io-MkQ6g69jzv=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name"> Sky Sports Football </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=skysare">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/curN9Dfj2hV6BgP1O03ibSsf8nRhrUbdhJ6MyBwO_T73xT8yI00aJwWyT3_Io-MkQ6g69jzv=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name"> Sky Sports Arena </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=skysfor1">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/curN9Dfj2hV6BgP1O03ibSsf8nRhrUbdhJ6MyBwO_T73xT8yI00aJwWyT3_Io-MkQ6g69jzv=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name"> Sky Sports Formula 1 </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=skysmixx">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/curN9Dfj2hV6BgP1O03ibSsf8nRhrUbdhJ6MyBwO_T73xT8yI00aJwWyT3_Io-MkQ6g69jzv=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name"> Sky Sports Mix </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=skyspnews">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/curN9Dfj2hV6BgP1O03ibSsf8nRhrUbdhJ6MyBwO_T73xT8yI00aJwWyT3_Io-MkQ6g69jzv=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name"> Sky Sports News </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=superfotball">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/YBu6OjDGx91UwccqM5WUPDGBknJqPSDku4ImqwItg2NxfOHtb20vqTzfPP8FmUYEC-9afM4-=s900-c-k-c0x00ffffff-no-rj ">
             <div class="tvv-name"> Super Sports Football </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=superpremier">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/YBu6OjDGx91UwccqM5WUPDGBknJqPSDku4ImqwItg2NxfOHtb20vqTzfPP8FmUYEC-9afM4-=s900-c-k-c0x00ffffff-no-rj ">
             <div class="tvv-name"> Super Sports Premier </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=superlaliga">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/YBu6OjDGx91UwccqM5WUPDGBknJqPSDku4ImqwItg2NxfOHtb20vqTzfPP8FmUYEC-9afM4-=s900-c-k-c0x00ffffff-no-rj ">
             <div class="tvv-name"> Super Sports Laliga </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=supersrugby">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/YBu6OjDGx91UwccqM5WUPDGBknJqPSDku4ImqwItg2NxfOHtb20vqTzfPP8FmUYEC-9afM4-=s900-c-k-c0x00ffffff-no-rj ">
             <div class="tvv-name"> Super Sports Rugby </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=supergrandstand">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/YBu6OjDGx91UwccqM5WUPDGBknJqPSDku4ImqwItg2NxfOHtb20vqTzfPP8FmUYEC-9afM4-=s900-c-k-c0x00ffffff-no-rj ">
             <div class="tvv-name"> Super Sports Grandstand </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=supertennis">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/YBu6OjDGx91UwccqM5WUPDGBknJqPSDku4ImqwItg2NxfOHtb20vqTzfPP8FmUYEC-9afM4-=s900-c-k-c0x00ffffff-no-rj ">
             <div class="tvv-name"> Super Sports Tennis </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=superactions">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/YBu6OjDGx91UwccqM5WUPDGBknJqPSDku4ImqwItg2NxfOHtb20vqTzfPP8FmUYEC-9afM4-=s900-c-k-c0x00ffffff-no-rj ">
             <div class="tvv-name"> Super Sports Action </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=supergolf">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/YBu6OjDGx91UwccqM5WUPDGBknJqPSDku4ImqwItg2NxfOHtb20vqTzfPP8FmUYEC-9afM4-=s900-c-k-c0x00ffffff-no-rj ">
             <div class="tvv-name"> Super Sports Golf </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=supermeximo">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/YBu6OjDGx91UwccqM5WUPDGBknJqPSDku4ImqwItg2NxfOHtb20vqTzfPP8FmUYEC-9afM4-=s900-c-k-c0x00ffffff-no-rj ">
             <div class="tvv-name">Super Sports Meximo </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=superpsl">
           <div class="tvv-item">
             <img class="loading" src="https://img2.sport-tv-guide.live/images/tv-station-supersport-select-sa-303.png">
             <div class="tvv-name">Super Sports PSL</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=hdchnl6">
           <div class="tvv-item">
             <img class="loading" src="https://img2.sport-tv-guide.live/images/tv-station-supersport-one-291.png">
             <div class="tvv-name">Super Sports Variety 1</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=hdchnl9">
           <div class="tvv-item">
             <img class="loading" src="https://img.sport-tv-guide.live/images/stations/a294.png">
             <div class="tvv-name">Super Sports Variety 4</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=beinca">
           <div class="tvv-item">
             <img class="loading" src="https://dynamicmedia.zuza.com/zz/m/original_/c/4/c473a75b-019d-43db-8c44-92c3c09d8792/BeInSports_logo_29c87___Gallery.jpg" ">
					<div class=" tvv-name">Bein Sports Canada
           </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein1en">
           <div class="tvv-item">
             <img class="loading" src="https://img2.sport-tv-guide.live/images/tv-station-bein-sports-english-1-1166.png ">
             <div class="tvv-name">Bein Sports 1 English</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein2en">
           <div class="tvv-item">
             <img class="loading" src="https://img2.sport-tv-guide.live/images/tv-station-bein-sports-english-1-1166.png ">
             <div class="tvv-name">Bein Sports 2 English</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein3en">
           <div class="tvv-item">
             <img class="loading" src="https://img2.sport-tv-guide.live/images/tv-station-bein-sports-english-1-1166.png ">
             <div class="tvv-name">Bein Sports 3 English</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein1arab">
           <div class="tvv-item">
             <img class="loading" src="https://i.imgur.com/qmm1IQE.jpg ">
             <div class="tvv-name">Bein Sports 1 Arab</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein2arab">
           <div class="tvv-item">
             <img class="loading" src="https://i.imgur.com/EvWKIbv_d.webp?maxwidth=640&amp;shape=thumb&amp;fidelity=medium ">
             <div class="tvv-name">Bein Sports 2 Arab</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein3arab">
           <div class="tvv-item">
             <img class="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG1WKQtKI7ucE9_eRkt9voKGWKvu9FT-cJRA&amp;usqp=CAU ">
             <div class="tvv-name">Bein Sports 3 Arab</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein4arab">
           <div class="tvv-item">
             <img class="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjPd4bwB7TW5HZZBGAmcV6Mz2uVc4DUyTqjg&amp;usqp=CAU ">
             <div class="tvv-name">Bein Sports 4 Arab</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein5arab">
           <div class="tvv-item">
             <img class="loading" src="https://i.imgur.com/P8qWNgX_d.webp?maxwidth=640&amp;shape=thumb&amp;fidelity=medium ">
             <div class="tvv-name">Bein Sports 5 Arab</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein6arab">
           <div class="tvv-item">
             <img class="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrZkq4NQAbtRIxv4oa-XT4VJ3F6ckyRQzjEg&amp;usqp=CAU ">
             <div class="tvv-name">Bein Sports 6 Arab</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein7arab">
           <div class="tvv-item">
             <img class="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQc4rjD1o12vLUXj-JZpQEr-93h3VyCcQqsFQ&amp;usqp=CAU ">
             <div class="tvv-name">Bein Sports 7 Arab</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein1prem">
           <div class="tvv-item">
             <img class="loading" src="https://i.imgur.com/5CmAQje_d.webp?maxwidth=640&amp;shape=thumb&amp;fidelity=medium ">
             <div class="tvv-name">Bein Sports 1 Premium</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein2prem">
           <div class="tvv-item">
             <img class="loading" src="https://i.postimg.cc/ZKkj3jcB/download.png" ">
					<div class=" tvv-name">Bein Sports 2 Premium
           </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein3prem">
           <div class="tvv-item">
             <img class="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlOZaFiugEbpbTdQtYaQpeSd8i5F-MGQE-2g&amp;usqp=CAU" ">
					<div class=" tvv-name">Bein Sports 3 Premium
           </div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein1max">
           <div class="tvv-item">
             <img class="loading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMbq3X4mnfsSMqb2M1iXmMXpQpD5WRIz0GXQ&amp;usqp=CAU ">
             <div class="tvv-name">Bein 1 Max</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bein2max">
           <div class="tvv-item">
             <img class="loading" src="https://i.imgur.com/4vRH6Vi.jpg ">
             <div class="tvv-name">Bein 2 Max</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bbtsp1">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/ytc/AL5GRJUfL2Ia_0QSk09pkTxY0_GIBBmtVts21UeYK5VzVw=s900-c-k-c0x00ffffff-no-rj ">
             <div class="tvv-name">Bt Sports 1</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bbtsp2">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/ytc/AL5GRJUfL2Ia_0QSk09pkTxY0_GIBBmtVts21UeYK5VzVw=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name">Bt Sports 2</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bbtsp3">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/ytc/AL5GRJUfL2Ia_0QSk09pkTxY0_GIBBmtVts21UeYK5VzVw=s900-c-k-c0x00ffffff-no-rj ">
             <div class="tvv-name">Bt Sports 3</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=bbtsp4">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/ytc/AL5GRJUfL2Ia_0QSk09pkTxY0_GIBBmtVts21UeYK5VzVw=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name">Bt Sports 4</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=hdchnl10">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/ytc/AL5GRJUfL2Ia_0QSk09pkTxY0_GIBBmtVts21UeYK5VzVw=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name">BT Sports 5</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=hdchnl11">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/ytc/AL5GRJUfL2Ia_0QSk09pkTxY0_GIBBmtVts21UeYK5VzVw=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name">BT Sports 6</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=hdchnl12">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/ytc/AL5GRJUfL2Ia_0QSk09pkTxY0_GIBBmtVts21UeYK5VzVw=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name">BT Sports 7</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=hdchnl13">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/ytc/AL5GRJUfL2Ia_0QSk09pkTxY0_GIBBmtVts21UeYK5VzVw=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name">BT Sports 8</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=hdchnl14">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/ytc/AL5GRJUfL2Ia_0QSk09pkTxY0_GIBBmtVts21UeYK5VzVw=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name">BT Sports 9</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=hdchnl15">
           <div class="tvv-item">
             <img class="loading" src="https://yt3.googleusercontent.com/ytc/AL5GRJUfL2Ia_0QSk09pkTxY0_GIBBmtVts21UeYK5VzVw=s900-c-k-c0x00ffffff-no-rj">
             <div class="tvv-name">BT Sports 10</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=sky1nz">
           <div class="tvv-item">
             <img class="loading" src="  https://wpvip1.prd.footballapl.com/wel/wp-content/uploads/sites/11/2021/10/Sky-Sport.png">
             <div class="tvv-name">Sky Sports 1</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=sky2nz">
           <div class="tvv-item">
             <img class="loading" src="  https://wpvip1.prd.footballapl.com/wel/wp-content/uploads/sites/11/2021/10/Sky-Sport.png">
             <div class="tvv-name">Sky Sports 2</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=sky3nz">
           <div class="tvv-item">
             <img class="loading" src="  https://wpvip1.prd.footballapl.com/wel/wp-content/uploads/sites/11/2021/10/Sky-Sport.png">
             <div class="tvv-name">Sky Sports 3</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=sky4nz">
           <div class="tvv-item">
             <img class="loading" src="  https://wpvip1.prd.footballapl.com/wel/wp-content/uploads/sites/11/2021/10/Sky-Sport.png">
             <div class="tvv-name">Sky Sports 4</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=sky5nz">
           <div class="tvv-item">
             <img class="loading" src="  https://wpvip1.prd.footballapl.com/wel/wp-content/uploads/sites/11/2021/10/Sky-Sport.png">
             <div class="tvv-name">Sky Sports 5</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=sky6nz">
           <div class="tvv-item">
             <img class="loading" src="  https://wpvip1.prd.footballapl.com/wel/wp-content/uploads/sites/11/2021/10/Sky-Sport.png">
             <div class="tvv-name">Sky Sports 6</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=sky7nz">
           <div class="tvv-item">
             <img class="loading" src="  https://wpvip1.prd.footballapl.com/wel/wp-content/uploads/sites/11/2021/10/Sky-Sport.png">
             <div class="tvv-name">Sky Sports 7</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=sky8nz">
           <div class="tvv-item">
             <img class="loading" src="  https://wpvip1.prd.footballapl.com/wel/wp-content/uploads/sites/11/2021/10/Sky-Sport.png">
             <div class="tvv-name">Sky Sports 8</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=sky9nz">
           <div class="tvv-item">
             <img class="loading" src="  https://wpvip1.prd.footballapl.com/wel/wp-content/uploads/sites/11/2021/10/Sky-Sport.png">
             <div class="tvv-name">Sky Sports 9</div>
           </div>
         </a>
         </div>
         <a href="player.php/?c=sky10nz">
           <div class="tvv-item">
             <img class="loading" src="  https://wpvip1.prd.footballapl.com/wel/wp-content/uploads/sites/11/2021/10/Sky-Sport.png">
             <div class="tvv-name">Sky Sports 10</div>
           </div>
         </a>
         </div>
      <center></center>
      <div style="display:inline-block">
        <b>
          <a href="https://verified.telegram.ind.in/s/TheTechieSiaOfficial">
            <button class="btn-11 custom-btn" style="width:40vw;height:40px;margin-top:10px;font-size:10px">
              <b>Made By TheTechieSiaOfficial+</b>
            </button>
          </a>
          <b></b>
        </b>
      </div>
      <b>
        <b></b>
      </b>
    </center>
    <b>
      <b>
        <div class="stwRainbow"></div>
        <div class="stwBlurRainbow"></div>
        <script>
          $(document).ready(function() {
            var dftr = $('select.dftr'),
              headerCount = $('#headerCount');
            headerCount.html('select a filter or use search');
            dftr.on('change', function() {
              dftr.attr('disabled', 'disabled');
              var records = $('#tvvTable').find('.tvv-item');
              records.hide();
              var critriaAttributes = [];
              dftr.each(function() {
                var $this = $(this),
                  $selectedLength = $this.find(':selected').length,
                  $critriaAttribute = '';
                if ($selectedLength > 0 && $this.val() != '0') {
                  if ($selectedLength == 1) {
                    $critriaAttribute += '[data-' + $this.data('attribute') + '*="' + $this.val() + '"]';
                  } else {
                    var $startDataAttribute = '[data-' + $this.data('attribute') + '*="',
                      $endDataAttribute = '"]',
                      $selectedValues = $this.val().toString();
                    $critriaAttribute += $startDataAttribute + $selectedValues.replaceAll(',', ($endDataAttribute + ',' + $startDataAttribute)) + $endDataAttribute;
                  }
                  critriaAttributes.push($critriaAttribute);
                }
              });
              var $showRecords = records;
              if (critriaAttributes.length > 0) {
                $.each(critriaAttributes, function(i, filterValue) {
                  $showRecords = $showRecords.filter(filterValue);
                });
              }
              $showRecords.show();
              headerCount.html($showRecords.length + ' channels filtered');
              dftr.removeAttr('disabled');
              $(".fin").val('');
            });
            $(".fin").keyup(function() {
              var filter = $(this).val(),
                count = 0;
              $('select.dftr').prop('selectedIndex', 0);
              $(".tvv-item").each(function() {
                if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                  $(this).fadeOut();
                } else {
                  $(this).show();
                  count++;
                }
              });
            });
          });
        </script>
      </b>
    </b>
  </body>
</html>