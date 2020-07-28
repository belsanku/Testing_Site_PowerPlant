<!DOCTYPE html> 
<html> 

<head> 
	
	<title>ЮК ГРЭС</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon"> 
	<link rel ="stylesheet" type ="text/css" href="style.css">
	<meta charset="UTF-8">  
	<style>
		img{
			width:auto; 
			max-width:100%;
			height:auto;
		}

		a{
			text-decoration: none;
		}

		*{
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

h1{
  font-size: 2.5rem;
  font-family: 'Montserrat';
  font-weight: normal;
  color: #444;
  text-align: center;
  margin: 2rem 0;
}

.wrapper{
  width: 100%;
  margin: 0 auto;
  max-width: 100rem;
}

.cols{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.col{
  width: calc(30% - 2rem);
  margin: 1rem;
  cursor: pointer;
}

.container{
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
    -webkit-perspective: 1000px;
            perspective: 1000px;
}

.front,
.back{
  background-size: cover;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.8);
  border-radius: 20px;
    background-position: center;
    -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
    text-align: center;
    min-height: 280px;
    height: auto;
    border-radius: 10px;
    color: #fff;
    font-size: 1.5rem;
}

.back{
  background: #cedce7;
  background: -webkit-linear-gradient(45deg,  #cedce7 0%,#596a72 100%);
  background: -o-linear-gradient(45deg,  #cedce7 0%,#596a72 100%);
  background: linear-gradient(45deg,  #cedce7 0%,#596a72 100%);
}

.front:after{
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    content: '';
    display: block;
    opacity: .6;
    background-color: #000;
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
    border-radius: 10px;
}
.container:hover .front,
.container:hover .back{
    -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
}

.back{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}

.inner{
    -webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
            transform: translateY(-50%) translateZ(60px) scale(0.94);
    top: 50%;
    position: absolute;
    left: 0;
    width: 100%;
    padding: 2rem;
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    outline: 1px solid transparent;
    -webkit-perspective: inherit;
            perspective: inherit;
    z-index: 2;
}

.container .back{
    -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
    -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
}

.container .front{
    -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
    -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
}

.container:hover .back{
  -webkit-transform: rotateY(0deg);
          transform: rotateY(0deg);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}

.container:hover .front{
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}

.front .inner p{
  font-size: 2rem;
  margin-bottom: 2rem;
  position: relative;
}

.front .inner p:after{
  content: '';
  width: 4rem;
  height: 2px;
  position: absolute;
  background: #C6D4DF;
  display: block;
  left: 0;
  right: 0;
  margin: 0 auto;
  bottom: -.75rem;
}

.front .inner span{
  color: rgba(255,255,255,0.7);
  font-family: 'Montserrat';
  font-weight: 300;
}

@media screen and (max-width: 64rem){
  .col{
    width: calc(33.333333% - 2rem);
  }
}

@media screen and (max-width: 48rem){
  .col{
    width: calc(50% - 2rem);
  }
}

@media screen and (max-width: 32rem){
  .col{
    width: 100%;
    margin: 0 0 2rem 0;
  }
}

		.ruk{
			width: 900px;
			position:relative;
			right:1200px;
			top:165px;
			font-size: 2em;
			text-shadow: black 0 0 0.5px;
		}

		.bulletBlock:after{
			content:"";
			display:table;
			clear:both;
		}

		.bulletsBlock > div{
			width: 625.5px;
			height:200px;
			float:left;
			background:rgba(0,0,0,0.08);
			margin-left:10%;
			text-align:center;
			position:relative;
			right: 258px;
			padding-bottom:27%;
			cursor:pointer;
			-webkit-transition:all 0.35s linear;
			transition:all 0.35s linear;
		}

		.bulletsBlock > div:first-child{
			margin-left:0;
		}

		.bulletsBlock > div:hover{
			-webkit-box-shadow: 0 35px 35px -35px #000000;
			-moz-box-shadow:0 35px 35px -35px #000000;
			box-shadow: 0 35px 35px -35px #000000;
		}

		.bullet-item span{
			line-height: 1em;
			font-size:12.5em;
			color:#fff;
			position:absolute;
			top:0;
			left:0;
			display:block;
			width:99%;
			-webkit-transition: all 0.35s ease;
			transition: all 0.35s ease;
		}

		.bulletsBlock > div:hover span.iconBullet{
			line-height:1em;
			font-size: 10.625em;
			top:-2.7%;
		}

		.titleBullet, .hideText{
			position:absolute;
			left:0;
			bottom:0px;
			text-align: center;
			width:100%;
			margin:0;
			color: #fff;
			-webkit-transition:all 0.35s ease;
			transition: all 0.35s ease;
		}

		.titleBullet{
			line-height:2.3em;
			font-size:2.19em;
			background:#3b3b3b;
			z-index:10;
		}

		.hideText{
			line-height:1.5em;
			font-size:1.5em;
			padding:1.2em 0;
			background:#3b3b3b;
			font-weight:700;
			z-index:7;
			height:80px;
			-webkit-transition:all 0.35s linear 0.2s;
			transition: all 0.35s linear 0.2s;
		}

		.bulletsBlock > div:hover p.titleBullet{
			bottom:80px;
		}

		.bulletsBlock > div:hover p.hideText{
			background:#454545;
		}

		body{
			background:#87CEEB;
		}

		.wrapper{
			margin:0 auto;
			width:900px;
			overflow:hidden;
			margin-top:20px;
		}

		@keyframes fade{
			0%{opacity: 0;}
			10%{opacity:1;}
			20%{opacity:1;}
			30%{opacity:1;}
			40%{opacity:0;}
			50%{opacity:0;}
			60%{opacity:0;}
			70%{opacity:0;}
			80%{opacity:0;}
			90%{opacity:0;}
			100%{opacity:0;}
		}

		.wrapper img{
			position:absolute;
			top:210px;
			border-style:groove;
			border-width:3px;
			right:300px;
			margin:0 auto;
			width:620px;
			overflow:hidden;
			opacity:0;
			animation-name:fade;
			animation-duration:20s;
			animation-iteration-count:infinite;
		}

		.wrapper img:nth-child(1){animation-delay:0s;}
		.wrapper img:nth-child(2){animation-delay:5s;}
		.wrapper img:nth-child(3){animation-delay:10s;}
		.wrapper img:nth-child(4){animation-delay:15s;}
		body {
			font-synthesis: family:Arial, sans-serif;
		}

		.letter{
			color:red;
			font-size: 70%;
			font-family:serif;
			position:relative;
			top:1px;
		}

		body {
			font-synthesis: family:Arial, sans-serif;
		}

		.bltext{
			color:blue;
			font-size:150%;
			font-family:serif;
			position:relative;
			top:0.5px;
		}
	</style>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script type="text/javascript">$(window).on('load', function () {
    var $preloader = $('#p_prldr'),
        $svg_anm   = $preloader.find('.svg_anm');
    $svg_anm.fadeOut();
    $preloader.delay(500).fadeOut('slow');
});</script>
</head> 

<body style ="background-image: url(image/wallpaper_test.jpg); background-size:100%; background-repeat:no-repeat; background-position: bottom; bottom:100px; width:100%; max-width:100%; overflow-x:hidden"> 
	<div id = "p_prldr"><div class="contpre"><span class = "svg_anm"></span><br>Подождите<br><small>Идет загрузка<small></div></div>
		<div style ="text-shadow:black 0 0 3px">
	<header style="background-image: url(image/ukgres1.jpg); background-size: 100%; background-color:lightcyan; opacity: 100%; height:400px">
	</header>
</div>
	<div style = "position:relative; left:-35px; bottom: 460px">
		<h1 align ="center" style="color:white"><span class = "ukgres">Южно-Кузбасская</span></h1>
	</div>
		<div style ="position:relative; bottom:430px; left:-35px">
		<h1 align ="center" style="color:white"><span class = "ukgres">ГРЭС</span></h1>
	</div>
<div style ="position: relative; bottom:400px; left: -8px">
	<div class="wrapper">
		<p><img src="image/gres.jpg" width ="200" height ="250" alt = "first"></p>
		<img src="image/gres1.jpg" width ="200" height ="250" alt = "second">
		<img src="image/gres2.jpg" width ="200" height ="250" alt = "third">
		<img src="image/gres3.jpg" width ="200" height ="250" alt = "fourth">
	</div>
</div>
<div style ="position: relative; bottom: 220px; left: 590px">
<div class = "bulletsBlock">
	<div class = "bullet-item">
		<span class="iconBullet fa fa-cog"></span>
		<p class="titleBullet">С 1951 года</p>
		<p class="hideText">Первая в Сибири электростанция, где было начато освоение<br>отечественного оборудования на высоких параметрах пара.</p>
	</div>
</div>
</div>
<div style ="position: relative; bottom: 160px">
<div class ="ruk">
	<div style ="width:830px; height:600px; position: relative; top: 500px">
	Руководство:
</div>
</div>
<div style ="position:relative; right:600px; bottom: 360px; width: 300px; height: 700px">
	<div>
		<img src = "image/ruk.png">
	</div>
</div>
</div>
<div style = "position: absolute; top: 900px; left: 185px">
<div class="wrapper">
  <h1 style = "display:flex; align-items:center;justify-content:center;font-family:Georgia; font-size:50px; font-weight:normal; cursor:pointer; text-shadow:-1px -1px #000, 0 1px 0 #444; color:#4b4b4b; transition:all 1s; color: #4b4b4b">ДЛЯ ВАС</h1>
  <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(image/mechel_hub.jpg)">
                        <div class="inner">
                            <p>О компании</p>
              <span>Подробнее</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                          <p><a href ="http://www.ukgres.ru/managers" target="_blank"><div style = "text-shadow: -1px 0 1px white, 0 -1px 1px white, 0 1px 1px white, 1px 0 1px white, 0 0 8px white, 0 0 8px white, 0 0 8px white, 2px 2px 3px black">Руководство</div></a></p>
                          <p><a href ="http://www.ukgres.ru/contacts" target="_blank"><div style = "text-shadow: -1px 0 1px white, 0 -1px 1px white, 0 1px 1px white, 1px 0 1px white, 0 0 8px white, 0 0 8px white, 0 0 8px white, 2px 2px 3px black">Контакты</div></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(image/last_hub.jpg)">
                        <div class="inner">
                            <p>Пресс-центр</p>
              <span>Подробнее</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p><a href ="http://www.ukgres.ru/razdely/novosti" target="_blank"><div style = "text-shadow: -1px 0 1px white, 0 -1px 1px white, 0 1px 1px white, 1px 0 1px white, 0 0 8px white, 0 0 8px white, 0 0 8px white, 2px 2px 3px black">Новости</div></a></p>
                            <p><a href ="http://www.ukgres.ru/razdely/smi-o-nas" target ="_blank"><div style = "text-shadow: -1px 0 1px white, 0 -1px 1px white, 0 1px 1px white, 1px 0 1px white, 0 0 8px white, 0 0 8px white, 0 0 8px white, 2px 2px 3px black">СМИ о нас</div></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(image/siba_hub1.jpg)">
                        <div class="inner">
                            <p>Акционерам и инвесторам</p>
              <span>Подробнее</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p><a href ="http://www.ukgres.ru/razdely/ustav" target="_blank"><div style = "text-shadow: -1px 0 1px white, 0 -1px 1px white, 0 1px 1px white, 1px 0 1px white, 0 0 8px white, 0 0 8px white, 0 0 8px white, 2px 2px 3px black">Устав</div></a></p>
                            <p><a href ="http://www.ukgres.ru/razdely/soobshcheniya" target="_blank"><div style = "text-shadow: -1px 0 1px white, 0 -1px 1px white, 0 1px 1px white, 1px 0 1px white, 0 0 8px white, 0 0 8px white, 0 0 8px white, 2px 2px 3px black">Сообщения</div></a></p>
                            <p><a href ="http://www.ukgres.ru/razdely/affilirovannye-lica" target="_blank"><div style = "text-shadow: -1px 0 1px white, 0 -1px 1px white, 0 1px 1px white, 1px 0 1px white, 0 0 8px white, 0 0 8px white, 0 0 8px white, 2px 2px 3px black">Аффилированные лица</div></a></p>
                            <p><a href ="http://www.ukgres.ru/razdely/otchety" target="_blank"><div style = "text-shadow: -1px 0 1px white, 0 -1px 1px white, 0 1px 1px white, 1px 0 1px white, 0 0 8px white, 0 0 8px white, 0 0 8px white, 2px 2px 3px black">Отчеты</div></a></p>
                            <p><a href ="http://www.ukgres.ru/razdely/polozheniya" target="_blank"><div style = "text-shadow: -1px 0 1px white, 0 -1px 1px white, 0 1px 1px white, 1px 0 1px white, 0 0 8px white, 0 0 8px white, 0 0 8px white, 2px 2px 3px black">Положения</div></a></p>
                            <p><a href ="http://www.ukgres.ru/razdely/rynok-cennyh-bumag" target="_blank"><div style = "text-shadow: -1px 0 1px white, 0 -1px 1px white, 0 1px 1px white, 1px 0 1px white, 0 0 8px white, 0 0 8px white, 0 0 8px white, 2px 2px 3px black">Раскрытие информации</div></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(image/siba_hub2.jpg)">
                        <div class="inner">
                            <p>Потребителям</p>
              <span>Подробнее</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p><a href = "http://www.ukgres.ru/razdely/rynok-elektricheskoy-energii" target ="_blank"><div style = "text-shadow: -1px 0 1px white, 0 -1px 1px white, 0 1px 1px white, 1px 0 1px white, 0 0 8px white, 0 0 8px white, 0 0 8px white, 2px 2px 3px black">Рынок электрической энергии</div></a></p>
                            <p><a href = "http://www.ukgres.ru/razdely/rynok-teplovoy-energii" target ="_blank"><div style = "text-shadow: -1px 0 1px white, 0 -1px 1px white, 0 1px 1px white, 1px 0 1px white, 0 0 8px white, 0 0 8px white, 0 0 8px white, 2px 2px 3px black">Рынок тепловой энергии</div></a></p>
                        </div>
                    </div>
                </div>
            </div>                          
</div>
</div>
<div style = "background-size: 100px; opacity: 100%; height:100px; width:115px; position:absolute; bottom:800px; left: -140px">

<div style="position:absolute;left: 40px; bottom: 97px">
	<h1 align ="center" style="color:white"><span class = "painting">11</span></h1>
</div>

<div style="position:absolute; left:45px; top:30px">
	<h1 align ="center" style="color:white; position:relative; left:-30px; bottom:30px"><span class = "painting"><br>котлов<br></span></h1>
</div>

	</div>

	<div style = "background-size: 100px; opacity: 100%; height:100px; width:115px; position:absolute; bottom:800px; left: 75px">

	<div style ="position:absolute; left: 45px; bottom: 99px">
		<h1 align ="center" style="color:white"><span class = "painting">8</span></h1>
	</div>

	<div style = "position: absolute;right: 131px; top:30px">
		<h1 align ="center" style="color:white; position:relative; left:-30px; bottom:30px"><span class = "painting"><br>турбогенераторов<br></span></h1>
	</div>

<div style = "background-size: 100px; opacity: 100%; height:100px; width:115px; position:absolute; left: 210px">

	<div style = "position:absolute; left:26px; bottom:100px">
<h1 align ="center" style="color:white; position:relative; left:-30px; bottom:30px"><span class = "painting"><br>28.04.1951<br></span></h1>
</div>

	<div style ="position:absolute; left:5px; top: 30px">
		<h1 align ="center" style="color:white; position:relative; left:-30px; bottom:30px"><span class = "painting"><br>дата ввода в эксплуатацию<br></span></h1>
</div>

<div style = "background-size: 100px; opacity: 100%; height:100px; width:115px; position:absolute; left: 210px">

<div style = "position: absolute; left:35px; bottom:74px; white-space:nowrap">
	<h1 align ="center" style="color:white; position:relative; left:-30px; bottom:30px"><span class = "painting">554 МВт</span></h1>
</div>

<div style = "position: absolute; top:30px; right:115px">
	<h1 align ="center" style="color:white; position:relative; left:-30px; bottom:30px"><span class = "painting"><br>электрическая мощность<br></span></h1>
</div>


<div style = "background-size: 100px; opacity: 100%; height:100px; width:115px; position:absolute; left: 210px">

<div style = "position:absolute; left:23px; bottom:103px; white-space: nowrap">
	<h1 align ="center" style="color:white; position:relative; left:-30px; bottom:30px"><span class = "painting"><br>581 Гкал/ч<br></span></h1>

<div style="position:absolute;top:65px;left:2px;white-space:normal">
	<h1 align ="center" style="color:white; position:relative; left:-30px; bottom:30px"><span class = "painting"><br>тепловая мощность<br></span></h1>
</div>

<div style = "background-size: 100px; opacity: 100%; height:100px; width:115px; position:absolute; left: 190px">

	<div style = "position:absolute; right:130px; bottom:100px">
	<h1 align ="center" style="color:white; position:relative; left:-30px; bottom:30px"><span class = "painting"><br>Кузнецкий уголь<br></span></h1>

	<div style = "position:absolute; left:40px; top:65px; ;white-space:normal">
	<h1 align ="center" style="color:white; position:relative; left:-30px; bottom:30px"><span class = "painting"><br>основное топливо<br></span></h1>
</div>

</body> 
</html>