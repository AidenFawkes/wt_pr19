function storeCookie(username, password) {
  var d=new Date();
  d.setTime(d.getTime()+24*60*60*1000)//1 day expiry
  document.cookie="user="+username+";pass="+password+";expires="d.UTCString();
}

function readUser() {
  var c=document.cookie;
  var cs=c.split(";");
  return cs[0].split("=")[1];
}

function readPass() {
  var c=document.cookie;
  var cs=c.split(";");
  return cs[1].split("=")[1];
}
