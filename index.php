
<?php
if (isset($_REQUEST["send"]))
{
$con=mysqli_connect("localhost","root","","monu");
if ($con)	
{
	
$sname=$_REQUEST["sname"];
$email=$_REQUEST["email"];
$view=$_REQUEST["view"];
$q=("insert into monu1 (sname,email,view) value('$sname','$email','$view')");

if (mysqli_query($con,$q))
{
echo"your reponse have been received";
}
else {
echo"sorry not received.Try again";
}
}
	
	
}

if (isset($_REQUEST["others"]))
{
$con=mysqli_connect("localhost","root","","monu");
if($con)
{
$q=("select * from monu1");
$result=mysqli_query($con,$q);
echo "<table border=1px solid red>";
while($row=mysqli_fetch_array($result))
{
echo "<tr><td>".$row["s.no"]."</td><td>".$row["sname"]."</td><td>".$row["email"]."</td><td>".$row["view"]."</td></tr>";

}

echo"</table>";

}
}






?>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  
  #id2
  {
  transition:height 8s; width 4s;margin-top:-250px;opacity:0.1; }
  #id2:hover{
  transform:rotate(-10deg);opacity:1;width:300px;height:200px;}
  #id3
  {
  transition:height 8s; width 4s;margin-top:-250px;opacity:0.1; }
  #id3:hover{
  transform:rotate(10deg);opacity:1;width:300px;height:200px;}
  #first{
	  display:none;font-size:70px;color:white;background-image: url('back3.jpeg')
  }
  #first2{
	  display:none;font-size:70px;color:red;background-image: url('back.jpg');
  }
  
  #first3{
	  font-size:70px;color:red;
	  #first3:hover{height:290px;width:290px;border-radius:140px}
  }
  #first8
  {
	  background-image: url('logo.jpg');height:200px;width:500px;
  }
  #bing
  {
	  background-image: url('back1.jpg');display:none;
  }
  #redmi{
	  
	  display:none;background-image: url('back2.jpeg');
  }
  #no
  {
	  
	 display:none;font-size:29px;
  }
  </style>
  
  <script> 

$(document).ready(function(){
    $("#yes").click(function(){
        $("#no").show("slow");
        $("#first1").hide("slow");
        $(".navbar").hide("slow");
        $("#first2").hide("slow");
        $("#first4").hide("slow");
        $("#first5").hide("slow");
        $("#bing").hide("slow");
        $("#redmi").hide("slow");
        
      
	
    });
});
</script>
 <script> 

$(document).ready(function(){
    $("#c4").click(function(){
        $("#first").show("slow");
        $("#first1").hide("slow");
        $(".navbar").hide("slow");
        $("#first2").hide("slow");
        $("#first4").hide("slow");
        $("#first5").hide("slow");
        $("#bing").hide("slow");
        $("#redmi").hide("slow");
        
      
	
    });
});
</script>
 <script> 

$(document).ready(function(){
    $("#c6").click(function(){
        $("#first5").show("slow");
        $("#first1").hide("slow");
        $(".navbar").hide("slow");
        $("#first2").hide("slow");
        $("#first4").hide("slow");
        $("#first").hide("slow");
        $("#bing").hide("slow");
        $("#redmi").hide("slow");
        
      
	
    });
});
</script>
<script> 

$(document).ready(function(){
    $("#c2").click(function(){
        $("#first2").show("slow");
        $("#first1").hide("slow");
        $(".navbar").hide("slow");
        $("#first").hide("slow");
        $("#first4").hide("slow");
        $("#first5").hide("slow");
        $("#bing").hide("slow");
        $("#redmi").hide("slow");
       
        
      
	
    });
});
</script>
<script> 

$(document).ready(function(){
    $("#c6").click(function(){
        $("#redmi").show("slow");
        $("#first1").hide("slow");
        $(".navbar").hide("slow");
        $("#first").hide("slow");
        $("#first4").hide("slow");
        $("#first5").hide("slow");
        $("#bing").hide("slow");
        $("#first2").hide("slow");
       
        
      
	
    });
});
</script>
<script> 

$(document).ready(function(){
    $("#c9").click(function(){
        $("#bing").show("slow");
        $("#first1").hide("slow");
        $(".navbar").hide("slow");
        $("#first").hide("slow");
        $("#first4").hide("slow");
        $("#first5").hide("slow");
        $("#first2").hide("slow");
       
        
      
	
    });
});
</script>
  <script>
  function send1()
  {
  a=document.getElementById("sname");
  b=document.getElementById("email");
  c=document.getElementById("view");
  if(a.value=="")
  {
  alert("Please write your name");
  }
  else if(b.value=="")
  {
  alert("Your email address is missing");
  }
  else if(c.value=="")
  {
  alert("please write your valuable views");
  }
  }
  function sname1()
  {
  a=document.getElementById("sname");
  b=document.getElementById("first");
  if(a.value=="")
  {
  b.style="display:block;";

  }
  else
  {
  b.style="display:none";
  }
  }
  function email1()
  {
  a=document.getElementById("email");
  b=document.getElementById("first1");
  if(a.value=="")
  {
  b.style="display:block";

  }
  else
  {
  b.style="display:none";
  }
  }
  function view1()
  {
  a=document.getElementById("email");
  b=document.getElementById("fil1");
  if(a.value=="")
  {
  b.style="display:block";

  }
  else
  {
  b.style="display:none";
  }
  }
  </script>
  </head>
  <body>
  <form enctype="multipart/form-data" action="index.php" method="post">
  <div>
        <nav class = "navbar navbar-default" style="background-color:darkgrey;height:100px;"
role = "navigation" >
<div class = "navbar-header" >  <a class="navbar-brand" style="color:white;font-size:30px;" href="#"><b>MONU SANGTIWALA</b></a>
<button type = "button"
class = "navbar-toggle" data-toggle = "collapse" data-target = ".navbar-collapse" >
<span class = "icon-bar"></span>
<span class = "icon-bar"></span >
<span class = "icon-bar" ></span>
</button >
</div>
<div class = "navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right" style="background-color:grey;color:white;border:none;font-size:27px;>
<li> <a href="#"  style="color:white;">RISING AND COMING FUTURE STAR OF INDIA</a></li>
</ul>
<ul class="nav navbar-nav navbar-right" style="background-color:grey;color:white;border:none;font-size:27px;margin-top:58px">
    
   <li id="c3" class="active"><a href="#"  style="color:white">HOME</a></li>
      <li id="c6"><a href="#" style="color:white">EARLY LIFE</a></li>
      <li id="c4"><a href="#" style="color:white">PERFORMANCES</a></li>
	    <li id="c2"><a href="#" style="color:white;">GALLERY</a></li>
		<li id="c9"><a href="#" style="color:white;">CONTACT</a></li>
    </ul>
	
  </div>
</nav>
</div>
</nav><div id="first4" class="container-fluid">

</div>
</div>
  <div id="first1"><div id="first5">
<div class="container-fluid" style="width:103%;margin-top:326px" >
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
     
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="1.jpg" alt="PUNJABI UNIVERSITY,PATIALA" style="width:70%;height:610px;">
		
      </div>

      <div class="item">
        <img src="3.jpg" alt="ENGINEER'S DAY WINNER" style="width:70%;height:610px;">
		
      </div>
    
      <div class="item">
        <img src="4.jpg" alt="New LOOK" style="width:70%;height:610px;">
		
      </div>
	  <div class="item">
	  <img src="5.jpg" alt="FRIENDS FOREVER" style="width:70%;height:610px;">
		
      </div>
    </div>
	

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 text-center" style="color:darkblue;font-size:35px">
<b>VIEW POINTS OF MONU SANGTIWALA?</b>
</div>
</div>
<div class="row">
<div class="col-md-4 text-center" style="margin-top:70px" >
<div style="position:abolute" ><img src="hehe.jpg" width="250px" height="250px"></div>
<div id="id2"><img src="game.png" width="250px" height="250px"></div>
</div>
<div class="col-md-4 text-center" style="margin-top:70px">
<div style="position:abolute"><img src="hehe.jpg" width="250px" height="250px"></div>
<div id="id3"><img src="game1.png" width="250px" height="250px"></div>
</div>
<div class="col-md-4 text-center" style="margin-top:70px">
<div style="position:abolute"><img src="hehe.jpg" width="250px" height="250px"></div>
<div id="id2"><img src="game3.png" width="250px" height="250px"></div>
</div>
</div>
<div class="row">
<div class="col-md-4 text-center" style="margin-top:70px" >
<div  ><img src="hehe.jpg" width="250px" height="250px"></div>
<div id="id2"><img src="game2.png" width="250px" height="250px"></div>
</div>
<div class="col-md-4 text-center" style="margin-top:70px" >
<div  ><img src="hehe.jpg" width="250px" height="250px"></div>
<div id="id3"><img src="game6.jpg" width="250px" height="250px"></div>
</div>
<div class="col-md-4 text-center" style="margin-top:70px" >
<div  ><img src="hehe.jpg" width="250px" height="250px"></div>
<div id="id2"><img src="game5.jpg" width="250px" height="250px"></div>
</div>
</div>
<div class="row" style="margin-top:52px">
<div class="col-md-4 text-center" style="margin-top:10px;color:blue;font-size:35px" ><b>FEEDBACK SECTION</b></div>
</div>
<div class="row">
<div class="col-md-6">


<table class="text-center bg-danger" border="1" border="collapse" style="border:pink;margin-left:40px;">
<tr><td>Name</td><td><input style="margin-left:10px;border-radius:40px" type="text" id="sname" name="sname" onclick="sname1()" placeholder="enter the name" value=""/></td></tr>
<tr><td>Email Address</td><td><input style="margin-left:10px;border-radius:40px" type="text" id="email" name="email" onclick="email1()" placeholder="enter your email id" value=""/></td></tr>
<tr><td>your views</td><td><input style="margin-left:10px;border-radius:40px;height:160px" type="text" id="view" name="view" onclick="view1()" placeholder="enter your views on this" value=""/></td></tr>
<tr><td colspan="2"><input style="background-color:green;color:white;width:100px;border-radius:40px" type="submit" id="send" name="send" onclick="send1()"  value="send"/></td></tr>
<tr><td colspan="2"><input style="background-color:green;color:white;width:100px;border-radius:40px" type="submit" id="others" name="others" onclick="others1()"  value="other's view"/></td></tr>
</table>

<input style="display:none" type="text" id="s.no" name="s.no" value=""/>
</div>
</div>
</div></div>
<div id="first" class="container-fluid">
<div class="row">
<div class="col-md-11 text-center"><u><b>Songs</b></u></div>
<div class="col-md-1 text-center"><u><b><a style="text:decoration:none;color:white;font-size:28px" href="index.php">Back</b></a></u></div>
</div>
<div class="row" style="margin-top:20px">
<div  class="col-md-6 text-center" >
<video width="400" height="260" controls>
<source src="tera.mp4" type="video/mp4">
<source src="tera.ogg" type="video/ogg">
</video>

</div>
<div class="col-md-6 text-center" style="font-size:31px;color:white;margin-top:50px"><a style="text-decoration:none;color:white"href="https://youtu.be/-otWVeg8TeE"><b>Tera mukh Song written by Monu Sangtiwala and sang by R-Nait</b></a></div>
</div>
<div class="row" style="margin-top:20px">
<div  class="col-md-6 text-center">
<video width="400" height="260" controls>
<source src="second.mp4" type="video/mp4">
<source src="second.ogg" type="video/ogg">
</video>
</div>
<div class="col-md-6 text-center" style="font-size:25px;color:white;margin-top:50px"><a style="text-decoration:none;color:white" href="https://youtu.be/5AfY2Gg0bRA"><b>Tera mukh Song written by Monu Sangtiwala which is being shared on sharechat app</b></a></div>
</div>
<div class="row" style="margin-top:20px">
<div  class="col-md-6 text-center">
<video width="400" height="260" controls>
<source src="one.mp4" type="video/mp4">
<source src="one.ogg" type="video/ogg">
</video>
</div>
<div class="col-md-6 text-center" style="font-size:25px;color:white;margin-top:50px"><a style="text-decoration:none;color:white" href="https://youtu.be/3Hsm4kpnKN8"><b>Tera mukh Song written by Monu Sangtiwala which is being shared on sharechat app</b></a></div>
</div>
<div class="row" style="margin-top:20px">
<div  class="col-md-6 text-center">
<video width="400" height="260" controls>
<source src="him.mp4" type="video/mp4">
<source src="him.ogg" type="video/ogg">
</video>
</div>
<div class="col-md-6 text-center" style="font-size:25px;color:white;margin-top:50px"><a style="text-decoration:none;color:white" href="https://m.facebook.com/video_redirect/?src=https%3A%2F%2Fvideo-sin6-2.xx.fbcdn.net%2Fv%2Ft42.9040-2%2F36264303_459292101183082_7278044729881657344_n.mp4%3F_nc_cat%3D0%26efg%3DeyJybHIiOjMwMCwicmxhIjo1MTIsInZlbmNvZGVfdGFnIjoic3ZlX3NkIn0%253D%26oh%3Daafcd2b3cc224747df42b5e627c8cd96%26oe%3D5B5A15BC&source=misc&id=2154755834770834&refid=52&ref=opera_speed_dial&_ft_=top_level_post_id.2154758871437197%3Atl_objid.2154758871437197%3Athrowback_story_fbid.2154758871437197%3Aphoto_id.2154755834770834%3Athid.100007093147936&__tn__=FH-R"><b>Song Wriiten and sang by Monu Sangtiwala</b></a></div>
</div>
<div class="row" style="margin-top:20px">
<div  class="col-md-6 text-center">
<video width="400" height="260" controls>
<source src="best.mp4" type="video/mp4">
<source src="best.ogg" type="video/ogg">
</video>
</div>
<div class="col-md-6 text-center" style="font-size:25px;color:white;margin-top:50px"><a style="text-decoration:none;color:white" href="https://m.facebook.com/video_redirect/?src=https%3A%2F%2Fscontent-sin6-2.xx.fbcdn.net%2Fv%2Ft42.1790-4%2F30155548_157918174876940_1116278827912265728_n.mp4%3F_nc_cat%3D0%26efg%3DeyJ2ZW5jb2RlX3RhZyI6InN2ZV9zZCJ9%26oh%3Dee51cda44e5cda8e7ab0a86713682c38%26oe%3D5B59FF23&source=misc&id=1689439947802592&refid=52&ref=opera_speed_dial&_ft_=og_action_id.2107107849535633%3Atop_level_post_id.2107107802868971%3Atl_objid.2107107802868971%3Aoriginal_content_id.1689439947802592%3Athrowback_story_fbid.2107107802868971%3Apage_id.1414740918605831%3Aphoto_id.1689439947802592%3Apage_insights.%7B%221414740918605831%22%3A%7B%22page_id%22%3A1414740918605831%2C%22role%22%3A1%2C%22actor_id%22%3A100007093147936%2C%22psn%22%3A%22EntStatusCreationStory%22%2C%22attached_story%22%3A%7B%22role%22%3A1%2C%22page_id%22%3A1414740918605831%2C%22post_context%22%3A%7B%22story_fbid%22%3A1689439947802592%2C%22publish_time%22%3A1522936381%2C%22story_name%22%3A%22EntVideoCreationStory%22%2C%22object_fbtype%22%3A1%7D%2C%22actor_id%22%3A1414740918605831%2C%22psn%22%3A%22EntVideoCreationStory%22%2C%22sl%22%3A4%2C%22dm%22%3A%7B%22isShare%22%3A0%2C%22originalPostOwnerID%22%3A0%7D%7D%2C%22sl%22%3A4%2C%22dm%22%3A%7B%22isShare%22%3A0%2C%22originalPostOwnerID%22%3A0%7D%2C%22targets%22%3A[%7B%22page_id%22%3A1414740918605831%2C%22actor_id%22%3A100007093147936%2C%22role%22%3A1%2C%22post_id%22%3A1689439947802592%2C%22share_id%22%3A0%7D]%7D%7D%3Athid.100007093147936&__tn__=FHH-R"><b>Song Wriiten and sang by Monu Sangtiwala</b></a></div>
</div>
<div class="row" style="margin-top:20px">
<div  class="col-md-6 text-center">
<video width="400" height="260" controls>
<source src="bhagat.mp4" type="video/mp4">
<source src="bhagat.ogg" type="video/ogg">
</video>
</div>
<div class="col-md-6 text-center" style="font-size:25px;color:white;margin-top:50px"><a style="text-decoration:none;color:white" href="https://m.facebook.com/video_redirect/?src=https%3A%2F%2Fscontent-sin6-2.xx.fbcdn.net%2Fv%2Ft42.1790-4%2F29363427_1189864314449377_999081166248083456_n.mp4%3F_nc_cat%3D0%26efg%3DeyJ2ZW5jb2RlX3RhZyI6InN2ZV9zZCJ9%26oh%3D280ef258d47bcc3b220c0c0c96965008%26oe%3D5B5A158E&source=misc&id=1671722959574291&ref=opera_speed_dial&_ft_=og_action_id.2099866803593071%3Atop_level_post_id.2099866776926407%3Atl_objid.2099866776926407%3Aoriginal_content_id.1671722959574291%3Athrowback_story_fbid.2099866776926407%3Apage_id.1414740918605831%3Aphoto_id.1671722959574291%3Apage_insights.%7B%221414740918605831%22%3A%7B%22page_id%22%3A1414740918605831%2C%22role%22%3A1%2C%22actor_id%22%3A100007093147936%2C%22psn%22%3A%22EntStatusCreationStory%22%2C%22attached_story%22%3A%7B%22role%22%3A1%2C%22page_id%22%3A1414740918605831%2C%22post_context%22%3A%7B%22story_fbid%22%3A1671722959574291%2C%22publish_time%22%3A1521375112%2C%22story_name%22%3A%22EntVideoCreationStory%22%2C%22object_fbtype%22%3A1%7D%2C%22actor_id%22%3A1414740918605831%2C%22psn%22%3A%22EntVideoCreationStory%22%2C%22sl%22%3A4%2C%22dm%22%3A%7B%22isShare%22%3A0%2C%22originalPostOwnerID%22%3A0%7D%7D%2C%22sl%22%3A4%2C%22dm%22%3A%7B%22isShare%22%3A0%2C%22originalPostOwnerID%22%3A0%7D%2C%22targets%22%3A[%7B%22page_id%22%3A1414740918605831%2C%22actor_id%22%3A100007093147936%2C%22role%22%3A1%2C%22post_id%22%3A1671722959574291%2C%22share_id%22%3A0%7D]%7D%7D%3Athid.100007093147936%3A306061129499414%3A2%3A1514793600%3A1546329599%3A5129115636109993531&__tn__=FHH-R"><b>Bhagat singh Song Wriiten and sang by Monu Sangtiwala</b></div>
</div>
<div class="row" style="margin-top:20px">
<div  class="col-md-6 text-center">
<video width="400" height="260" controls>
<source src="fresher.mp4" type="video/mp4">
<source src="fresher.ogg" type="video/ogg">
</video>
</div>
<div class="col-md-6 text-center" style="font-size:25px;color:darkgrey;margin-top:50px"><a style="text-decoration:none;color:white" href="https://m.facebook.com/video_redirect/?src=https%3A%2F%2Fscontent-sin6-2.xx.fbcdn.net%2Fv%2Ft42.1790-4%2F28317956_329758420869364_2677191817270657024_n.mp4%3F_nc_cat%3D0%26efg%3DeyJ2ZW5jb2RlX3RhZyI6InN2ZV9zZCJ9%26oh%3D6f6cb6e7da8da66a5a3c39a6834ea7ea%26oe%3D5B5A16E5&source=misc&id=1647542588658995&ref=opera_speed_dial&_ft_=top_level_post_id.2081757432070675%3Atl_objid.2081757432070675%3Aoriginal_content_id.1647542588658995%3Athrowback_story_fbid.2081757432070675%3Apage_id.1414740918605831%3Aphoto_id.1647542588658995%3Apage_insights.%7B%221414740918605831%22%3A%7B%22page_id%22%3A1414740918605831%2C%22role%22%3A1%2C%22actor_id%22%3A100007093147936%2C%22psn%22%3A%22EntStatusCreationStory%22%2C%22attached_story%22%3A%7B%22role%22%3A1%2C%22page_id%22%3A1414740918605831%2C%22post_context%22%3A%7B%22story_fbid%22%3A1647542588658995%2C%22publish_time%22%3A1519389477%2C%22story_name%22%3A%22EntVideoCreationStory%22%2C%22object_fbtype%22%3A1%7D%2C%22actor_id%22%3A1414740918605831%2C%22psn%22%3A%22EntVideoCreationStory%22%2C%22sl%22%3A4%2C%22dm%22%3A%7B%22isShare%22%3A0%2C%22originalPostOwnerID%22%3A0%7D%7D%2C%22sl%22%3A4%2C%22dm%22%3A%7B%22isShare%22%3A0%2C%22originalPostOwnerID%22%3A0%7D%2C%22targets%22%3A[%7B%22page_id%22%3A1414740918605831%2C%22actor_id%22%3A100007093147936%2C%22role%22%3A1%2C%22post_id%22%3A1647542588658995%2C%22share_id%22%3A0%7D]%7D%2C%2261291074590%22%3A%7B%22page_id%22%3A61291074590%2C%22role%22%3A4%2C%22actor_id%22%3A100007093147936%2C%22psn%22%3A%22EntStatusCreationStory%22%2C%22attached_story%22%3A%7B%22page_id%22%3A61291074590%2C%22role%22%3A4%2C%22actor_id%22%3A1414740918605831%2C%22psn%22%3A%22EntVideoCreationStory%22%2C%22sl%22%3A4%2C%22dm%22%3A%7B%22isShare%22%3A0%2C%22originalPostOwnerID%22%3A0%7D%7D%2C%22sl%22%3A4%2C%22dm%22%3A%7B%22isShare%22%3A0%2C%22originalPostOwnerID%22%3A0%7D%2C%22targets%22%3A[%7B%22page_id%22%3A61291074590%2C%22actor_id%22%3A100007093147936%2C%22role%22%3A4%7D]%7D%7D%3Athid.100007093147936%3A306061129499414%3A2%3A1514793600%3A1546329599%3A-2314756894318379202&__tn__=FHH-R"><b>Performance of Monu Sangtiwala & Harjinder naphry at fresher's party held in Punjabi
University,Patiala</b></a> </div>
</div>
<div class="row">


</div>
</div>

<div id="first2" class="container-fluid">
<div class="row">
<div class="col-md-11 text-center" style="margin-top:20px;color:white;font-size:50px" ><u><b>GALLERY</b></u></div>
<div class="col-md-61 text-center" style="margin-top:20px;color:white;font-size:69px" ><u><b><a style="text-decoration:none;color:white;font-size:28px" href="index.php">BACK</b></a></u></div></div>
<div class="row">
<div class="col-md-4 text-center" style="margin-top:20px" >
<img  style="border-radius:130px" src="1.jpg" height="250px" width="250px">
</div>
<div class="col-md-4 text-center" style="margin-top:20px">
<img  style="border-radius:130px" src="4.jpg" height="250px" width="250px">
</div>
<div class="col-md-4 text-center" style="margin-top:20px">
<img  style="border-radius:130px" src="5.jpg" height="250px" width="250px">
</div>
</div>
<div class="row">
<div class="col-md-4 text-center" style="margin-top:20px" >
<img  style="border-radius:130px" src="3.jpg" height="250px" width="250px">
</div>
<div class="col-md-4 text-center" style="margin-top:20px">
<img  style="border-radius:130px" src="6.jpg" height="250px" width="250px">
</div>
<div class="col-md-4 text-center" style="margin-top:20px">
<img  style="border-radius:130px" src="7.jpg" height="250px" width="250px">
</div>
</div>
<div class="row">
<div class="col-md-4 text-center" style="margin-top:20px" >
<img  style="border-radius:130px" src="8.jpg" height="250px" width="250px">
</div>
<div class="col-md-4 text-center" style="margin-top:20px">
<img  style="border-radius:130px" src="9.jpg" height="250px" width="250px">
</div>
<div class="col-md-4 text-center" style="margin-top:20px">
<img  style="border-radius:130px" src="10.jpg" height="250px" width="250px">
</div>
</div>
<div class="row">
<div class="col-md-4 text-center" style="margin-top:20px" >
<img  style="border-radius:130px" src="11.jpg" height="250px" width="250px">
</div>
<div class="col-md-4 text-center" style="margin-top:20px">
<img  style="border-radius:130px" src="12.jpg" height="250px" width="250px">
</div>
<div class="col-md-4 text-center" style="margin-top:20px">
<img  style="border-radius:130px" src="13.jpg" height="250px" width="250px">
</div>
</div>
<div class="row">
<div class="col-md-4 text-center" style="margin-top:20px" >
<img  style="border-radius:130px" src="14.jpg" height="250px" width="250px">
</div>
<div class="col-md-4 text-center" style="margin-top:20px">
<img  style="border-radius:130px" src="15.jpg" height="250px" width="250px">
</div>
<div class="col-md-4 text-center" style="margin-top:20px">
<img  style="border-radius:130px" src="16.jpg" height="250px" width="250px">
</div>
</div>
</div>
<div class="container-fluid" id="bing">
<div class="row">
<div class="col-md-11 text-center" style="color:white;font-size:50px"><u><b>CONTACT</b></u></div>
<div class="col-md-1 text-center" style="color:white;font-size:50px"><u><b><a style="text-decoration:none;color:white;font-size:29px" href="index.php">BACK</b></a></u>
</div>
<div class="row">
<div class="col-md-12 text-center" style="color:white;font-size:30px;margin-top:40px"><i>Thanks you for visiting this website.<br>Hope you would had enjoyed seeing it.<br>
Do give your feedback in feedback section about<br>
this website.Monu Sangtiwala is young rising star.<br>
He had worked very hard for all his songs.<br>
If you want to contact him.<br>You can contact him as
</i></div>
</div>
<div class="row">
<div class="col-md-4 text-center"><a href="http://manpreetmonu781@gmail.com"><img style="margin-top:20px" src="gmail1.jpg" height="150px" width="200px"></a></div>
<div class="col-md-4 text-center"><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fmonu_sangtiwala%2F&h=AT04X8ZmE3sxMgKMIIX33DQpd26g4ZuA6HneehOArTJ96b7WRAmvaXSMC9-YU5U0qrGZs6ytBAcxRfLkGUkUstKSEu9TguAIw1BEjjPYC6znpDkzEjVsVAQLSFOZjQ37Ke28uhYVH6uMR0bBtoZ2xw"><img style="margin-top:20px" src="insta1.jpg" height="150px" width="200px"></a></div>
<div class="col-md-4 text-center"><a href="https://m.facebook.com/manpreet.monu.982/about?lst=100005034934206%3A100007093147936%3A1532617784&refid=17&ref=opera_speed_dial"><img style="margin-top:20px" src="fb.jpg" height="150px" width="200px"></a></div>
</div>
<div class="row">
<div class="col-md-4 text-center"><img id="yes" src="watsapp.png" height="150px" width="200px"></div>
<div class="col-md-4 text-center"><a href="github.com"><img style="margin-top:20px"src="github.png" height="150px" width="200px"></a></div>
</div>
</div>
</div>
<div class="container-fluid" id="redmi">
<div class="row">
<div class="col-md-11 text-center"><u style="color:white;font-size:68px">EARLY LIFE</u></div>
<div class="col-md-1 text-center"><u><a style="text-decoration:none;color:white;font-size:29px" href="index.php">BACK</a></u></div>
</div>
<div class="row">
<div class="col-md-12 text-center"><i style="color:white;font-size:38px">Manpreet Singh known as Monu Sangtiwala.<br>He is born on 29 may 1996.He belongs to<br>
Sangtiwala Pind which is located in Samane <br>(which is birth place of Shahid Udam Singh).<br> 
He is having natural talent of writing <br>songs,shayaris and inspirational thoughts.<br>
He worked very hard,enchance his skills<br> of his singing and writing and got award for <br>
his hardwork in the form of Tera Mukh<br> song which was song written by him<br>and sang by
Singer R-nait.Monu Sangtiwala<br> is very hardworking personality and<br> have great talent
in him.If he<br> keep on working hard he could be<br> the future superstar of India
</i></div>
</div>

</div>

</form>
  </body>
  </html>
