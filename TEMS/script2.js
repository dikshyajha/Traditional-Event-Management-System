function validateform(){
    var a=document.myform2.name.value;
    var b=document.myform2.email.value;
    var atposition= b.indexOf("@");
    var dotposition=b.lastIndexOf(".");
    var c=document.myform2.password.value;
    // var d=document.myform2.number.value;
    if(a==null||a==""){

        alert("Name can't be blank");
        return false;
    }
    else if(atposition<1 || dotposition<atposition+2 || dotposition+2>=b.lenght){
    alert("please enter a valid e-mail address\n @ at:"+atposition+"\n.at:"+dotposition);
    return false;
    }
    else if(c.length<6){
        alert("password must be at least 6 character long.");
        return false;
        }
}
