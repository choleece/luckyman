$(document).ready(function(){
    $("#submit_button").click(function(){
        var name = $('#name').val();
        if (isStrEmpty(name)) {
            alert("请填写正确姓名");
            return;
        }
        var gender = $('#gender').val();
        var tel = $('#tel').val();
        if (!isMobile(tel)) {
            alert("请填写正确的手机号");
            return;
        }
        var email = $('#email').val();
        if (!isEmail(email)) {
            alert("请填写正确的邮箱");
            return;
        }
        var school = $('#school').val();
        if (isStrEmpty(school)) {
            alert("请填写正确的学校");
            return;
        }
        var major = $('#major').val();
        if (isStrEmpty(major)) {
            alert("请填写正确的专业")
            return;
        }
        var graduation = $('#graduation').val();
        if (isStrEmpty(graduation)) {
            alert("请填写正确的毕业时间");
            return;
        }
        var params = {name: name, gender: gender, tel: tel, email: email, major: major, school: school, graduation: graduation};
        $.ajax({
            type: 'POST',
            url: 'sign',
            data: params,
            dataType: 'json',
            success: function (res) {
                if (res.code === 0) {
                    window.location.href = "done.html";
                } else {
                    alert(res.msg);
                }
            }
        });
    });
});

/**
 * 判断是不是邮箱
 * @param mobile
 * @returns {boolean}
 */
function isMobile(mobile) {
    var reg = /^[1][3,4,5,6,7,8,9][0-9]{9}$/;
    return reg.test(mobile);
};

/**
 * 判断是否是邮箱
 * @param email
 * @returns {boolean}
 */
function isEmail(email) {
    var reg = /^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/;
    return reg.test(email);
};

/**
 * 判断字符串是否为空
 * @param str
 * @returns {boolean}
 */
function isStrEmpty(str) {
    return str === null || str === '' || str === undefined || str.length === 0;
};
