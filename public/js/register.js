$(document).ready(function(){
    $('#first_name').focusout(function () {
        var x =$('#first_name').prop('value')
        if(x == "")
        {
            $('#first_name').css({height: '45%',border: '2px solid red', borderBottom: '3px solid red'})
            document.getElementById('first_namenull').innerHTML = "يُرجى ملء هذا الفراغ";
        }
        else
        {
            $('#first_name').css({height: '60%',border: '2px solid'})
            $('#first_namenull').empty();
        }
    });

    $('#last_name').focusout(function () {
        var x =$('#last_name').prop('value')
        if(x == "")
        {last_name
            $('#last_name').css({height: '45%',border: '2px solid red', borderBottom: '3px solid red'})
            document.getElementById('last_namenull').innerHTML = "يُرجى ملء هذا الفراغ";
        }
        else
        {
            $('#last_name').css({height: '60%',border: '2px solid'})
            $('#last_namenull').empty();
        }
    });

    $('#email').focusout(function () {
        var x =$('#email').prop('value')
        if(x == "")
        {
            $('#email').css({height: '57%',border: '2px solid red', borderBottom: '3px solid red'})
            document.getElementById('emailnull').innerHTML = "يُرجى ملء هذا الفراغ";
        }
        else
        {
            $('#email').css({height: '90%',border: '2px solid'})
            $('#emailnull').empty();
        }
    });

    $('#password').focusout(function () {
        var x =$('#password').prop('value')
        if(x == "")
        {
            $('#password').css({height: '45%',border: '2px solid red', borderBottom: '3px solid red'})
            document.getElementById('passwordnull').innerHTML = "يُرجى ملء هذا الفراغ";
        }
        else
        {
            $('#password').css({height: '60%',border: '2px solid'})
            $('#passwordnull').empty();
        }
    });

    $('#password-confirm').focusout(function () {
        var x =$('#password-confirm').prop('value')
        if(x == "")
        {
            $('#password-confirm').css({height: '45%',border: '2px solid red', borderBottom: '3px solid red'})
            document.getElementById('password-confirmnull').innerHTML = "يُرجى ملء هذا الفراغ";
        }
        else
        {
            $('#password-confirm').css({height: '60%',border: '2px solid'})
            $('#password-confirmnull').empty();
        }
    });
})

