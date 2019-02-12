<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <link rel="icon" href="pic/old/favicon.ico">
    <title>The Restaurant</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" >

    <script src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

    <script>
    wow = new WOW(
    {
        animateClass: 'animated',
        offset:      0,
      
    }
    );
    wow.init();
    </script>

<style type="text/css">

    @media screen and (min-width: 1px) and (max-width: 800px) {

    .bigbox
    {   
    position:relative;
    overflow:hidden;
    display: inline-block;
    width: 170px;
    height: 170px;
    text-align: center;
    vertical-align: middle;

    }



    .boxword/*全向置中*//*文字層*/
    {

        position: absolute;
        text-align: center;
        width: 100%;
        height: 15%;
        top: 100%;
        font-size: 24px;
        font-weight: 600;
        font-family: Microsoft JhengHei,serif;


        opacity:0.1;

    }


    .box:hover +.boxword , .boxword:hover
    {
        color:#FFF;
        top:81%;
        opacity:1.0;
        filter:alpha(opacity=100); /* 针对 IE8 以及更早的版本 */
    }

    .contentimg /*圖片層*/
    {
        position: relative;
        width: 80%;
        height:auto;
    }

       .wow{
        animation-name: animated ;
        visibility: visible ;
    }

}    
    @media screen and (min-width: 800px)  {

    .bigbox
    {        
    position:relative;
    overflow:hidden;
    display: inline-block;
    width: 250px;
    height: 250px;
    text-align: center;
    vertical-align: middle;

    }



    .boxword/*全向置中*//*文字層*/
    {

        position: absolute;
        text-align: center;
        width: 100%;
        height: 15%;
        top: 100%;
        font-size: 24px;
        font-weight: 600;
        font-family: Microsoft JhengHei,serif;


        opacity:0.1;
        -webkit-transition: 1s all ease-in-out;
        -moz-transition: 1s all ease-in-out;
        -o-transition: 1s all ease-in-out;
        transition: 1s all ease-in-out;

    }


    .box:hover +.boxword , .boxword:hover
    {
        color:#FFF;
        top:84%;
        opacity:1.0;
        filter:alpha(opacity=100); /* 针对 IE8 以及更早的版本 */
    }
    .contentimg /*圖片層*/
    {
        position: relative;
    padding: 0 1%;
        width: 100%;
        height:auto;
    }
}

  
    #bg
    {
        width:100%;
        height:100%;
        overflow:auto;
        z-index: -1;

        content:"";
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        background: url(pic/old/kitchen_bg.jpg)no-repeat center;
        background-size: cover;/* 盡量全都看到 */

    }

#bg:before{
        content:"";
        width: 8%;
        
        height:100%;
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        background: url(pic/old/kitchen_slide1.png)no-repeat top left,
         url(pic/old/kitchen_slide2.png)no-repeat bottom left;
        background-size: contain;
}
#bg:after{
        content:"";
        width: 8%;
        height:100%;
        display: block;
        position: fixed;
        top: 0;
        right:0;
        background: url(pic/old/kitchen_slide3.png)no-repeat top right,
         url(pic/old/kitchen_slide4.png)no-repeat bottom right;
        background-size: contain;
}
    h1,h2,h3,h4,h5,h6
    {
        color:#FFFFFF;
        font-family: Rockwell;
        text-align: center;
        line-height: 200%;
    }

    .page
    {        
        position: relative;
        display: block;
        height: 100vh;
        color: #FFFFFF;
        text-align: center;
        overflow: hidden;
        padding-top: 8%;
    }
    .bigpage
    {        
        position: relative;
        display: block;
        height: 100vh;
        color: #FFFFFF;
        text-align: center;
    }

    #inline 
    {
        display: block;
        width: 100%;
        text-align: center;
        overflow: hidden;/*修復display: inline-block;的BUG*/

    }


    #content 
    {
        position:relative;
        top:10%;/*固定開始位置*/

        font-size: 0;
        display: inline-block;
        max-width: 100%;
        width: 100%;
        height: auto;

    }


  





    .box /*那層（圖片層）*/
    {
        background:rgba(100%, 100%, 100%, 0.3);   
        position:relative;
        overflow:hidden;
        margin: 1px;


        opacity:1.0;
        filter:alpha(opacity=100); /* 针对 IE8 以及更早的版本 */


        -webkit-transition: 3s; 
        -moz-transition: 3s; 
    }
    .box:hover 
    {

        transform: scale(1.2,1.2) ;
       /* background:#FFE4E1  ; */
        opacity:1.0;
        filter:alpha(opacity=100); /* 针对 IE8 以及更早的版本 */
    }
    .box:after 
    {
        padding-top: 100%;
        content:"";
        display: block;
    }


    .boximg /*圖片層*/
    {
        position:absolute;
        top:0;
        bottom:0;
        right:0;
        left:0;
        max-width:100%;
        margin:auto;
        z-index: 10;

        opacity:1.0;
        filter:alpha(opacity=100); /* 针对 IE8 以及更早的版本 */

        -webkit-transition: 1s; 
        -moz-transition: 1s; 
        /*max-height:100%;
        left:-44%;*/

    }    




    .foodcontent
    {
        position:absolute;
        background: rgba(77,31,0,0.8);
        color:#FFFFFF;
        font-family: Rockwell;
         width:100%;
    }


.row{
    margin-right: 15px;
    margin-left: 15px;
}
h1{
    font-size: 2.1rem;
}
h2{
    font-size: 1.8rem;
}
img{
    margin: 0 auto;
}
hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee;
}
    </style>
  <style>
    .wow:first-child {
      visibility: hidden;
    }
  </style>
</head>

<?php
function getpic($i) {
    if($i>=1&&$i<=9)
        echo "00".$i;
    if($i>=10&&$i<=99)
        echo "0".$i;
    if($i>=100)
        echo $i;
}

function getanimate() {
    $animate=rand(0,3);
    switch ($animate)
    {
        case 0:
        echo "bounceInUp";
        break;
        case 1:
        echo "bounceInDown";
        break;
        case 2:
        echo "bounceInRight";
        break;
        case 3:
        echo "bounceInLeft";
        break;
    }
}

function getdelay() {
    $animate=rand(0,3);
    switch ($animate)
    {
        case 0:
        echo "0s";
        break;
        case 1:
        echo "0.3s";
        break;
        case 2:
        echo "0.7s";
        break;
        case 3:
        echo "1s";
        break;
    }
}
$name = array('法式海鮮湯','煎牛排','泰式椒麻雞','台式蚵仔煎','炒蟹腿肉',
'日式漢堡排','仿明太子烏龍麵','四川鍋巴','辣小魚乾炒飯','台式泡菜',
'鮮魚湯','番茄炒蛋','泡菜炒烏龍','洋蔥炒培根','培根三明治',
'泰式打拋豬','日式茶碗蒸','黃金炒飯','炒泡麵','一口小餅乾',
'台式滷肉飯','日式蛋包飯','日式冷麵','蔥爆中捲','烤培根捲蔥',
'奶油培根義大利麵','番茄肉醬義大利麵','辣味蒜香義大利麵','玉米濃湯','蜜汁雞排');




?>
<body> 
<div id="bg"></div>


    <div class="page ">
        <br> 
        <div class="wow bounceInUp" data-wow-duration="2s" style="font-size: 500%;">Welcome to Pingkin's Restaurant</div>
        <br><br>
        <h2 class="wow bounceInDown" data-wow-duration="2s">All delicious dishes from Pingkan's hands!!</h2>

    </div>
    <hr>
    <div class="page">
            <br>
            <div class="row">
             <div  class="col-md-7" >
                 <div class="wow fadeInLeft" data-wow-duration="2s">
                    <h1  style="font-family:Microsoft JhengHei;">你是否曾經垂涎精緻下午茶點心？</h1><br><br>
                    <h2  >Cookie.Cake.Macarone</h2>
                </div>
            </div>
            <div class="col-md-5" >
                <div class="wow fadeInRight" data-wow-duration="2s">
                    <img class="featurette-image img-responsive contentimg " src="pic/old/kitchen_content.jpg"  data-holder-rendered="true">
                </div>
            </div>
        </div>
    
    </div>
    <hr>
    <div class="page">
            <br>                    
            <div class="row">   
            <div class="col-md-5">
                <div class="wow flipInX" data-wow-duration="2s" >
                    <img class="featurette-image img-responsive contentimg"  src="pic/old/kitchen_content3.jpg"  data-holder-rendered="true">
                </div>  
            </div>           
            <div class="col-md-7">
                <div class="wow flipInY" data-wow-duration="2s">
                    <h1  style="font-family:Microsoft JhengHei;">最道地的古早台灣味，肉臊香氣乾淳而迷人</h1><br><br>
                    <h2  >Taiwanese Food</h2>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="page">
            <br>            
            <div class="row">
             <div class="col-md-7">
                    <div class="wow lightSpeedIn" data-wow-duration="2s" >
                    <h1  style="font-family:Microsoft JhengHei;">異國風情，來自地中海的香料與麵食</h1><br><br>
                    <h2  >Italia Pasta</h2>
                </div>
            </div>
            <div class="col-md-5">
                <div class="wow rotateIn" data-wow-duration="2s" >
                    <img class="featurette-image img-responsive contentimg"  src="pic/old/kitchen_content4.jpg"  data-holder-rendered="true">
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="page">
            <br>   
            <div class="row">
            <div class="col-md-5" >
                <div class="wow rotateInDownLeft" data-wow-duration="2s" >            
                    <img class="featurette-image img-responsive contentimg"  src="pic/old/kitchen_content2.jpg"  data-holder-rendered="true">
                </div>     
            </div>
        
            <div class="col-md-7">
                <div class="wow rotateInDownRight" data-wow-duration="2s" >
                    <h1  style="font-family:Microsoft JhengHei;">南洋風味，經典開胃</h1><br><br>
                    <h2  >Southeast Asian Cuisine</h2>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="page">       
                    <h1  style="font-family:Microsoft JhengHei;">這些食譜全都在</h1><br>
                    <h1  >PINGKAN's RESTAURANT !!!</h1><br>
                    <h1>▽</h1>
                    <h1>▽</h1>
                    <h1>▽</h1>

    </div>





    <div id="content">
     <hr>
        <div id="inline">
        <?php 

        $FileDir="pic/old/kitchen/"; 
        $FileNum=count(glob("$FileDir*.jpg*"));

        for($i=0;$i<$FileNum;$i++)
        { 
        ?>

             <div class="bigbox  <?php getanimate();?>   wow " data-wow-delay="<?php getdelay();?>" data-toggle="modal" data-target="#foodModal<?php echo $i;?>">
                <div class='box' >
                    <img class='boximg' src='pic/old/kitchen/<?php getpic($i+1);?>.jpg'/>
                </div>  
dddddddddddddddds
                <div class="boxword">
                        <?php  echo $name[$i];?>
                </div>
            </div>






<!-- Modal -->
<div class="modal fade  " id="foodModal<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content foodcontent modal-lg " >
            <div class="modal-header">
                <button type="button  " class="close" data-dismiss="modal"><span aria-hidden="true" >&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php  echo $name[$i];?></h4><p>
            </div>

            <div class="modal-footer">
                <img src='pic/old/kitchen/<?php getpic($i+1);?>.jpg'  style="width:100%;height:100%">
            </div>
            <hr><br>


        </div>
    </div>
</div>









        <?php        
        }
        ?>
        </div><br>  
    </div>


        <hr>
    
        <br>
        <h1  >Thanks for Watching!!</h1><br><br><br><br>
        <h3><a href="index.html"style="color:white;">Click me back to home</a></h3>
        <h5>Develop in 2015.08   · <a href=""style="color:gray;">Pingkan's home</a></p></h5>













</body>

</html>
