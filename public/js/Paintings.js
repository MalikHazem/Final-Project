$(document).ready(function(){

    $('#p_name').focusout(function () {
        var x =$('#p_name').prop('value')
        if(x == "")
        {
            console.log("نص فارغ");
        }
    });
})
