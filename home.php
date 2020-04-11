<html>

<script src="https://unpkg.com/@vkontakte/vk-bridge/dist/browser.min.js"></script>

<script>
// Sends event to client
vkBridge.send('VKWebAppInit');
</script>
<script src="https://use.fontawesome.com/62c19fbfa6.js"></script>
<head>
<meta chareset="UTF–8"/>
<title>PointPlay</title>
</head>
<style type="text/css">
.button
{
margin: 10px;
text-decoration: none;
font: bold 1.5em 'Trebuchet MS',Arial, Helvetica; /*Можете изменить размер кнопки,шрифт и размер шрифта*/
display: inline-block;
text-align: center;
color: #fff;

border: 1px solid #9c9c9c; /* Fallback style */
border: 1px solid rgba(0, 0, 0, 0.3);

text-shadow: 0 1px 0 rgba(0,0,0,0.4);

box-shadow: 0 0 .05em rgba(0,0,0,0.4);
-moz-box-shadow: 0 0 .05em rgba(0,0,0,0.4);
-webkit-box-shadow: 0 0 .05em rgba(0,0,0,0.4);

}

.button, .button span
{
-moz-border-radius: .3em;
border-radius: .3em;
}

.button span
{
border-top: 1px solid #fff; /* Fallback style */
border-top: 1px solid rgba(255, 255, 255, 0.5);
display: block;
padding: 0.5em 2.5em;

/* The background pattern */

background-image: -webkit-gradient(linear, 0 0, 100% 100%,
color-stop(.25, rgba(0, 0, 0, 0.05)), color-stop(.25, transparent), to(transparent)),
-webkit-gradient(linear, 0 100%, 100% 0,
color-stop(.25, rgba(0, 0, 0, 0.05)), color-stop(.25, transparent), to(transparent)),
-webkit-gradient(linear, 0 0, 100% 100%,
color-stop(.75, transparent), color-stop(.75, rgba(0, 0, 0, 0.05))),
-webkit-gradient(linear, 0 100%, 100% 0,
color-stop(.75, transparent), color-stop(.75, rgba(0, 0, 0, 0.05)));
background-image: -moz-linear-gradient(45deg, rgba(0, 0, 0, 0.05)
25%, transparent 25%, transparent),
-moz-linear-gradient(-45deg, rgba
(0, 0, 0, 0.05) 25%, transparent 25%, transparent),
-moz-linear-gradient(45deg, transparent 75%,
rgba(0, 0, 0, 0.05) 75%),
-moz-linear-gradient(-45deg, transparent 75%,
rgba(0, 0, 0, 0.05) 75%);

/* Pattern настройки*/

-moz-background-size: 3px 3px;
-webkit-background-size: 3px 3px;
}

.button:hover
{
box-shadow: 0 0 .1em rgba(0,0,0,0.4);
-moz-box-shadow: 0 0 .1em rgba(0,0,0,0.4);
-webkit-box-shadow: 0 0 .1em rgba(0,0,0,0.4);
}

.button:active
{
/*При нажатии на кнопку,она опускается вниз 1px*/
position: relative;
top: 1px;
}
.button-blue
{
background: #4477a1;
background: -webkit-gradient(linear, left top, left bottom, from(#81a8cb), to(#4477a1) );
background: -moz-linear-gradient(-90deg, #81a8cb, #4477a1);
filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#81a8cb', endColorstr='#4477a1');
}

.button-blue:hover
{
background: #81a8cb;
background: -webkit-gradient(linear, left top, left bottom, from(#4477a1), to(#81a8cb) );
background: -moz-linear-gradient(-90deg, #4477a1, #81a8cb);
filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#4477a1', endColorstr='#81a8cb');
}

.button-blue:active
{
background: #4477a1;
}
#foot {
    position: fixed; /* Фиксированное положение */
    left: 0; bottom: 0; /* Левый нижний угол */
    padding: 10px; /* Поля вокруг текста */
    background: ; /* Цвет фона */
    color: ; /* Цвет текста */
    width: 100%; /* Ширина слоя */
   }
  .fixed-nav-bar {   position: fixed;  
  top: 0;   left: 0;  
  z-index: 9999;  
  width: 100%;  
  height: 50px; 
  background-color: #00a087; }
</style>
<body>
<div style="text-align: center;">
<nav class="fixed-nav-bar"><div id="footer">
<font size="6" color="black" face="Arial">PointPlay</font></div></nav>
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;
<p><a href="play.php" class="button button-blue">
<span>ИГРАТЬ!</span>
</a></p>
<p><a href="https://vk.me/pointvk" class="button button-blue">
<span>Пополнить/вывести</span>
</a></p>
<div id="foot">
<div id="footer">
<font size="3" color="blue" face="Arial"><i class="fa fa-vk" aria-hidden="true"></i> <a href="https://vk.com/pointvk">Группа ВКонтакте</a></font></div></p>
<p><div id="footer">
<font size="3" color="gray" face="Arial">Версия 2.0</font>
</div></p>
</div>
</div>
</div>
</body>

</html>
