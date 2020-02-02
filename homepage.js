function cleary()
{
   var name=document.getElementById("name");
   var email=document.getElementById("email");
   var subject=document.getElementById("subject");
   var message=document.getElementById("message");
   document.getElementById("subject").value = " ";
   document.getElementById("name").value = " ";
   document.getElementById("email").value = " ";
   document.getElementById("message").value = " ";
   document.getElementById("sendbutton").style="background-color:#7CE227";
}
//correct ans
//background-color:#7CE227;
//
// function cleary()
// {
//    document.getElementById("subject").value = " ";
//    document.getElementById("name").value = " ";
//    document.getElementById("email").value = " ";
//    document.getElementById("message").value = " ";
// }
// function send()
// {

// }