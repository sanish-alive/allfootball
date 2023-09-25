function namevalid(){
    var regexa = /^[A-Za-z]*$/;
    var a = document.getElementById("name").value;
    if(a==""){
        document.getElementById("nm").innerHTML="Enter Username";
        return false;
    }
    else if(a.length<3){
        document.getElementById("nm").innerHTML="Must be more than 3 characters";
        return false;
    }
    else if(a.length>50){
        document.getElementById("nm").innerHTML="Must be less than 50 characters";
        return false;
    }
    else if(!a.match(regexa)){
        document.getElementById("nm").innerHTML="Only alphabets are allowed";
        return false;
    }
    else{
        document.getElementById("nm").innerHTML="";
        return true;
    }
}

function emailvalid(){
    var regexb = /^[a-zA-Z\d\s\._]+@[a-z\.]+\.[a-z]{2,3}$/;
    var b = document.getElementById("email").value;
    if(b==""){
        document.getElementById("em").innerHTML="Enter a valid Email";
        return false;
    }
    else if(!b.match(regexb)){
        document.getElementById("em").innerHTML="Invalid Email";
        return false;
    }
    else{
        document.getElementById("em").innerHTML="";
        return true;
    }
} 

function passvalid(){
    var d = document.getElementById("confirm").value;
    var c = document.getElementById("pass").value;
    if(c==""){
        document.getElementById("pw").innerHTML="Enter Password";
        return false;
    }
    else if(c.length<8 || c.length>20){
        document.getElementById("pw").innerHTML="8 to 20 characters";
        return false;
    }
    else{
        document.getElementById("pw").innerHTML="";
        return true;
    }
}

function confirmvalid(){
    var c = document.getElementById("pass").value;
    var d = document.getElementById("confirm").value;
    if(d!=c){
        document.getElementById("cpw").innerHTML="Password doesn't match";
        return false;
    }
   else{
        document.getElementById("cpw").innerHTML="";
        return true;
    }
    
} 
function dobvalid(){
var e = document.getElementById("dob").value;
if(e==""){
    document.getElementById("bd").innerHTML="Enter valid date";
    return false;
}
else{
    document.getElementById("bd").innerHTML="";
    return true;

}
}