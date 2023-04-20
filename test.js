function display(source, destination){
$(destination).text($(source).val());
}
$("#bttnsubmit").click(function(){
    display("#input1","#data");
    
});
