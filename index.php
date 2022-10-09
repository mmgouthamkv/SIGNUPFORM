<html>
  <head>
<title>SIGNUP PG</title>
<style>
#myform{
text-align:center;
}
div {
  width: 320px;
  padding: 10px;
  border: 5px solid red;
   margin-top: 50px;
  margin-bottom: 50px;
  margin-right: 150px;
  margin-left: 480px;
  background-color:lightgreen;
}
.name{
    
    height:20px;
}
body{
background-color:lightblue;}
</style>
 <script>
function validatee() {
var name =document.forms["myform"]["fname"].value;
var email =document.forms["myform"]["email"].value;
var pass =document.forms["myform"]["pass"].value;
var dob =document.forms["myform"]["date"].value;
var gd=document.forms["myform"]["gender"];
if(name.length==0){
    window.alert("Name must contain only alphabets");
    return false;
}
else if( /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/ .test(email)==false || email=="")
{   window.alert("email format is not valid");
    return false;
}
else if( /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/.test(pass)==false || pass==""){
    window.alert("doesnt match password format");
    return false;
}
else if(dob == false){
    window.alert("select date");
   return false;
}
else if((gd[0].checked==false )&&(gd[1].checked==false))
{   alert("select gender");
    return false;
}
return true;
}</script>
  </head>
  <body>
<div id="div1">
        <form name="myform" method="post" onsubmit="return validatee()" action="db.php"  id="myform">
      <label>Full Name:</label><br /><br>
      <input type="text" name="fname" placeholder="Munaganuri Goutham" />
      <h5 id="nameerror" style="color:red"></h5>
      <label>E-Mail:</label><br>
      <br>
      <input type="text" name="email" placeholder="john@gmail.com" />
      <h5 id="emailerror" style="color:red"></h5> 
      
      <label>Password<br> (atleast 8 characters, atleast one special character,uppercase
        letter and number):<br></label>
        <br />
      <input type="password" name="pass"/>
      <h5 id="passerror" style="color:red" ></h5>
      <label>Date of birth:</label><br /><br>
      <input type="date" name="date" />
      <h5 id="dateerror" style="color:red"></h5>
      <br /><label>Gender:</label><br /><br>
      <input type="radio" value="Male" id="male" name="gender"><label for="male">Male</label> 
      <input type="radio" value="Female" id="female" name="gender"><label for="female">Female</label>  
      <br /><br>
      <input type="submit" value="submit" name="submit" onclick="C:\xampp\htdocs\ola\welcome.html"/>

    </form>
</div>
  </body>
</html>
