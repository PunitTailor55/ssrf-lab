<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="static/css/main.css" rel="stylesheet" />
  </head>

<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i');
html,body{
  margin:0;
  height:120%;
  font-family: 'Josefin Sans', sans-serif;

}
a{
  text-decoration:none
}
.header{
  position:relative;
  overflow:hidden;
  display:flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: flex-start;
  align-content: flex-start;
  height:50vw;
  min-height:400px;
  max-height:550px;
  min-width:300px;
  color:#eee;
}
.header:after{
  content:"";
  width:100%;
  height:100%;
  position:absolute;
  bottom:0;
  left:0;
  z-index:-1;
 background: linear-gradient(to bottom, rgba(0,0,0,0.12) 40%,rgba(27,32,48,1) 100%);
}
.header:before{
  content:"";
  width:100%;
  height:200%;
  position:absolute;
  top:0;
  left:0;
    -webkit-backface-visibility: hidden;
    -webkit-transform: translateZ(0); backface-visibility: hidden;
  scale(1.0, 1.0);
    transform: translateZ(0);
  background:#1B2030 url("static/images/Search_132.jpg") 50% 0 no-repeat;
  background-size:100%;
  background-attachment:fixed;
  animation: grow 360s  linear 10ms infinite;
  transition:all 0.4s ease-in-out;
  z-index:-2
}
.header a{
  color:#eee
}
.menu{
  display:block;
  width:40px;
  height:30px;
  border:2px solid #fff;
  border-radius:3px;
  position:absolute;
  right:20px;
  top:20px;
  text-decoration:none
}
.menu:after{
  content:"";
  display:block;
  width:20px;
  height:3px;
  background:#fff;
  position:absolute;
  margin:0 auto;
  top:5px;
  left:0;
  right:0;
  box-shadow:0 8px, 0 16px
}
.logo{
  border:2px solid #fff;
  border-radius:3px;
  text-decoration:none;
  display:inline-flex;
  align-items:center;
  align-content:center;
  margin:20px;
  padding:0px 10px;
  font-weight:900;
  font-size:1.1em;
  line-height:1;
  box-sizing:border-box;
  height:40px
}
.sides, .info{
  flex: 0 0 auto;
  width:50%
}
.info{
  width:100%;
  padding:15% 10% 0 10%;
  text-align:center;
  text-shadow:0 2px 3px rgba(0,0,0,0.2)
}
.author{
  display:inline-block;
  width:50px;
  height:50px;
  border-radius:50%;
  background:url("static/images/Search_132.jpg") center no-repeat;
  background-size:cover;
  box-shadow:0 2px 3px rgba(0,0,0,0.3);
  margin-bottom:3px
}
.info h4, .meta{
  font-size:0.7em
}
.meta{
  font-style:italic;
}
@keyframes grow{
  0% { transform: scale(1) translateY(0px)}
  50% { transform: scale(1.2) translateY(-400px)}
}
.content{  
  padding:5% 10%;
  text-align:justify
}
.btn{
  color:#333;
  border:2px solid;
  border-radius:3px;
  text-decoration:none;
  display:inline-block;
  padding:5px 10px;
  font-weight:600
}

.twtr{
  margin-top:100px
}.btn.twtr:after{content:"\1F426";padding-left:5px}

</style>
 <body>
     <?php
    error_reporting(0);
    function curl($url){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_exec($ch);
      curl_close($ch);
    }
  ?> 
<div class="header">
  <div class="sides">
    <a href="#" class="logo">Punit Darji</a>
  </div>
  <div class="sides"> <a href="#" class="menu"> </a></div>
  <div class="info">
  <h4><a href="#category">Punit Darji</a></h4>
    <h1>Pwnsystem EC2 Instance Attack Lab</h1>
     <div class="s131">
      <form method="POST">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input id="search" type="text" placeholder="What are you looking for?" name="url" />
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit">SEARCH</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<section class="content">
  <hr class="my-4">
       <?php
        $url = $_POST['url'];
        if($url){
          echo "<b>".$url." The content is as follows：</b><br><br>";
          echo "<pre>";
          curl($url);
          echo "</pre>";
        }
      ?> 
<p>Created By Punit Darji</p>
  <p align="center"><a href="https://www.youtube.com/@punitdarji1871" class="btn twtr" target="_b">Follow me on Twitter</a>
  </p>
</section>


  </body>
  </html>
