
function sub(){
var psswrd=document.getElementById("psswrd").value;//used to take the user inputed value
var repsswrd=document.getElementById("repsswrd").value;

  if(psswrd===repsswrd)
{
alert("password is Correct..");
return true;

}
else if (psswrd==NULL){
		alert("Password required")
	}
	
else
{
alert("Password Missmatched...");
return false;//to keep in the same page if wrong
}
}	
function enb(){
if(document.getElementById("cnfrm").checked)
{
document.getElementById("subb").disabled=false;//if it should be enable
}
else
{
document.getElementById("subb").disabled=true;//if it is disable

}
}
