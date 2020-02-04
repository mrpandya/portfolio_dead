function cleary()
{
   var name=document.getElementById("name").value;
   var email="mrpandya2017@gmail.com";
   var subject=document.getElementById("subject").value;
   var message=document.getElementById("message").value;
   console.log(name);
   console.log(email);
   console.log(subject);
   console.log(message);
   
   document.getElementById("subject").value = " ";
   document.getElementById("name").value = " ";
   document.getElementById("message").value = " ";
   document.getElementById("sendbutton").style="background-color:#7CE227";
   window.open(`mailto:${email}?subject=${subject}&body=${message}`)
   // setTimeout(location.reload(onclick(scrollTo=top)));
   // location.reload();
}
//correct ans
//background-color:#7CE227; email'nishitlimbani130@gmail.com'
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