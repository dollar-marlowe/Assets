function session(name){
    var val="";
    $.post("../AJAX/JS_API.php",
    {
      command:"session",
      session_id:name  
    },
    function(data){
        val=data;
    });

    return val;
}