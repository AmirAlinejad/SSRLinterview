<html>
<head>
<link rel="icon" href="sat2.jpg">
 

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title> Amir's Website</title>

<style>

*{
margin:0; padding:0; boxsizing:border-box;

}
header{
width: 100%; height: 100vh;
background-color: white;
background-repeat: no-repeat;
background-size: cover;
}
nav{
width: 100%; height: 15vh;
background: red;
display: flex; justify-content: space-between;
align-items: center;
}
nav .mainmenu{
width: 40%;
display: flex; justify-content: space-around;
font-size: 14px;
color: white;
}
main{
width: 100%; height: 85vh;
display: flex; justify-content: center;
align-items: left;
text-align: left;
background: #f5f5f5;
}
section h3{
letter-spacing: 3px; font-weight: 200;
}
section h1{
text-transform: uppercase;
}
section div{
animation:changeborder 10s infinite linear;

}
@keyframes changeborder{
0%
20%
40%
}
		   *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: black;
  display: flex;
  align-items: center;
  justify-content: center;
}
.container{
  width: 85%;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #afafb6;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}
.right-side .input-box{
  height: 75px;
  width: 100%;
  margin: 90px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #3e2093;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #5029bc;
}

@media (max-width: 950px) {
  .container{
	background-color:#f5f5f5;
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}

	.button {
		background-color: black;
		
		border: none;
		color: white;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 12px;
		cursor: pointer;
		height: auto;
		width: 25%;
		height: 100%;
	}

@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}
  img {
      height: auto;
      width: 25%;
	  height: 100%;
    }

</style>
</head>
<body>
<div class="container">

<header>
<nav>
<img src="uga1.jpg" alt="logo">


<div class = "mainmenu">


<a href="resume.php"class="button">My Resume</a>


</div>

</nav>

<main>
<h2> My Suggestions: </h2>

<section>
<br></br>
<br></br>
<a href="https://www.nasa.gov/content/undergraduate-student-instrument-project-usip/">Critiqued Nasa Website</a>
<br></br>
<ul>
  <li> Update the design to make it more modern using React and other CSS packages. Doing this would make the website more attractive to visitors and more intriguing.</li>
  <br></br>
  <li> Implement an autofill feature on the search bar with common searches to give the user experience more direction. Currently, it is confusing to navigate, and it is hard for the user to find what they want.
 </li>
  <br></br>
  <li>  Add Javascript to the website to make it more interactive and attention-grabbing. JavaScript allows the front end of an application to be a lot more dynamic, which is what the website is currently lacking.</li>
  <br></br>
  <li>   Implement a newsletter function on the website to keep visitors interested by sending weekly emails regarding updates. Emails can keep users in the loop about the developments of a program and have them keep coming back for exciting breakthroughs or news.</li>
  <br></br>
  <li>    Add relevant and current news to the front page with more images and captions to provide context for accomplishments. People like to look at images instead of dull words on a page. Pictures would be great for conveying more ideas or grabbing the user's attention.</li>
   <br></br>
  <li> Instead of using hyperlinks for the buttons on the page, I would use designed buttons to allow the buttons to pop out more. The HTML hyperlinks links are dull and not up to modern standards.</li>
   <br></br>
  <li> Build a notification feature to remind user to check the up and stay updated. This feature would allow the organization to let the users know the latest information faster. </li>
  
</ul>



</section>
</main>
</header>
</body>
</html>