<? php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mirkartin62</title>
    <style type="text/css">
        h1 {  
         font-family: Times New Roman; 
         color: black;
        }
        .title-image {
            text-align: center;
        }
		#calatog_button {
			position: relative;
			display: inline-block;
			font-family: Arial,Helvetica,FreeSans,"Liberation Sans","Nimbus Sans L",sans-serif;
			font-size: 1.5em;
			font-weight: 700;
			color: rgb(245,245,245);
			text-shadow: 0 -1px rgba(0,0,0,.1);
			text-decoration: none;
			user-select: none;
			padding: .3em 1em;
			outline: none;
			border: none;
			border-radius: 3px;
			background: #0c9c0d linear-gradient(#82d18d, #0c9c0d);
			box-shadow: inset #72de26 0 -1px 1px, inset 0 1px 1px #98ff98, #3caa3c 0 0 0 1px, rgba(0,0,0,.3) 0 2px 5px;
			-webkit-animation: pulsate 1.2s linear infinite;
			animation: pulsate 1.2s linear infinite;
		}
		#calatog_button:hover {
			-webkit-animation-play-state: paused;
			animation-play-state: paused;
			cursor: pointer;
		}
		#calatog_button:active {
			top: 1px;
			color: #fff;
			text-shadow: 0 -1px rgba(0,0,0,.3), 0 0 5px #ffd, 0 0 8px #fff;
			box-shadow: 0 -1px 3px rgba(0,0,0,.3), 0 1px 1px #fff, inset 0 1px 2px rgba(0,0,0,.8), inset 0 -1px 0 rgba(0,0,0,.05);
		}
		@-webkit-keyframes pulsate {
			50% {color: #fff; text-shadow: 0 -1px rgba(0,0,0,.3), 0 0 5px #ffd, 0 0 8px #fff;}
		}
		@keyframes pulsate {
			50% {color: #fff; text-shadow: 0 -1px rgba(0,0,0,.3), 0 0 5px #ffd, 0 0 8px #fff;}
		}
       </style>
     </head>
     <body bgcolor="#e8e8e8">
     <div align="center">
     <h1>А вы уже нашли свою картину?</h1>
     </div>
     <br>
     <table align="center">
      <tr>
       <td> <img src="1.jpg" width="1000" height="500"> <br> </td>
      </tr>
      <tr>
       <td><div class="title-image"><h1>Розовые мечты</h1></div><br><br><br></td>
      </tr>
      <tr>
       <td> <img src="2.jpg" width="1000" height="500"> <br> </td>
      </tr>
      <tr>
       <td><div class="title-image"><h1>Огни города</h1></div><br><br><br></td>
      </tr>
      <tr>
       <td> <img src="3.jpg" width="1000" height="500"> <br> </td>
      </tr>
      <tr>
       <td><div class="title-image"><h1>Весна</h1></div><br><br><br></td>
      </tr>
      <tr>
       <td> <img src="4.jpg" width="1000" height="500""> <br> </td>
      </tr>
      <tr>
       <td><div class="title-image"><h1>Единение с природой</h1></div><br><br><br></td>
      </tr>
      <tr>
       <td> <img src="5.jpg" width="1000" height="500"> <br> </td>
      </tr>
      <tr>
       <td><div class="title-image"><h1>Одинокий маяк</h1></div><br><br><br></td>
      </tr>
      <tr>
       <td> <img src="6.jpg" width="1000" height="500"> <br> </td>
      </tr>
      <tr>
       <td><div class="title-image"><h1>Водный житель</h1></div><br><br><br></td>
      </tr>
      <tr>
       <td> <img src="7.jpg" width="1000" height="500"> <br> </td>
      </tr>
      <tr>
       <td><div class="title-image"><h1>Лесные просторы</h1></div><br><br><br></td>
      </tr>
      <tr>
       <td> <img src="8.jpg" width="1000" height="500"> <br> </td>
      </tr>
      <tr>
       <td><div class="title-image"><h1>Туманность</h1></div><br><br><br></td>
      </tr>
      <tr>
       <td> <img src="9.jpg" width="1000" height="500"> <br> </td>
      </tr>
      <tr>
       <td><div class="title-image"><h1>У причала</h1></div><br><br><br></td>
      </tr>
      <tr>
       <td> <img src="10.jpg" width="1000" height="500"> <br> </td>
      <tr>
       <td><div class="title-image"><h1>Водопад</h1></div><br><br><br></td>
      </tr>
     </table>
     <p style="text-align: center">
		<button id="calatog_button">Перейти к каталогу</button>
     </p>
     </body>
</html>';