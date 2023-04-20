
function session(name,id){//the id is the id of input elemtn as this is the only way to get the data
  //passing the value os response.text wont work and returening its value won't work either
  //jquery might not work in this region so the usual $.post method wont execute
    let value="";
  
  //alert("test1");
    const xhttp= new XMLHttpRequest();//this is anothyer way of doing AJAX  
    //without using jquery
    xhttp.open("GET","../AJAX/mycodes.php?command=session&name="+name);
    xhttp.send();
    xhttp.onload=function(){
     // alert(this.responseText+"1");
      document.getElementById(id).value=this.responseText;
      //(value);
      //(value+"3");
      }
    }
    
function session1(){
  alert("test");
}
function session2(){
  alert("session2");
}
//this is the Jquery version of adding function to an event click
//this will work as long as there is a script src tag for jquery before the src for this file

/* $("#clearlogin").click(function(){
  alert("click");
}); */
