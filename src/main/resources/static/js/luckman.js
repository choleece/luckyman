$(document).ready(function(){
    $("#submit_button").click(function(){
        var name = $('#name').val();
        var gender = $('#gender').val();
        var tel = $('#tel').val();
        var email = $('#tel').val();
        var school = $('#school').val();
        var major = $('#major').val();
        var graduation = $('#graduation').val();
        var params = {name: name, gender: gender, tel: tel, email: email, major: major, school: school, graduation: graduation};
        $.ajax({
            type: 'POST',
            url: 'sign',
            data: params,
            dataType: 'json',
            success: function (res) {
                if (res.code === 0) {
                    window.href("done.html")
                }
            }
        })
    });
});