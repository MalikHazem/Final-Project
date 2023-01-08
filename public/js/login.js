$(document).ready(function(){
    $('#email').focusout(function () {
        var x =$('#email').prop('value')
        if(x == "")
        {
            $('#email').css({border: '2px solid red', borderBottom: '3px solid red'})
            document.getElementById('emailnull').innerHTML = "يُرجى ملء هذا الفراغ";
        }
        else
        {
            $('#email').css({border: '2px solid'})
            $('#emailnull').empty();
        }
    });

    $('#password').focusout(function () {
        var x =$('#password').prop('value')
        if(x == "")
        {
            $('#password').css({height: '35%',border: '2px solid red', borderBottom: '3px solid red'})
            document.getElementById('passwordnull').innerHTML = "يُرجى ملء هذا الفراغ";
        }
        else
        {
            $('#password').css({height: '50%',border: '2px solid'})
            $('#passwordnull').empty();
        }
    });
})

