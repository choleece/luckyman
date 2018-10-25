var lottery_datas = [];
var last_data = [];

var lottery_initial_datas =[
];

var award_config = {
    "award01": 1,
    "award02": 5,
    "award03": 10,
    "award04": 20
};

/**
 * 获取数据
 */
function getData() {
    $.ajax({
        type: 'GET',
        url: 'signer',
        data: {},
        dataType: 'json',
        success: function (res) {
            if (res.code === 0) {
                console.log(res);
                last_data = res.data;
                var award_1 = localStorage.getItem('award_1');
                var award_2 = localStorage.getItem('award_2');
                var award_3 = localStorage.getItem('award_3');
                var award_4 = localStorage.getItem('award_4');

                var awards = [];
                if (award_1) {
                    award_1 = JSON.parse(award_1);
                    awards = awards.concat(award_1);
                }
                if (award_2) {
                    award_2 = JSON.parse(award_2);
                    awards = awards.concat(award_2);
                }
                if (award_3) {
                    award_3 = JSON.parse(award_3);
                    awards = awards.concat(award_3);
                }
                if (award_4) {
                    award_4 = JSON.parse(award_4);
                    awards = awards.concat(award_4);
                }

                var arr = [];
                for (var i = 0; i < res.data.length; i++) {
                    var flag = false;
                    var item = res.data[i];
                    for (var j = 0; j < awards.length; i++) {
                        if (item.namezh === awards[j].namezh && item.nameen === awards[j].nameen) {
                            flag = true;
                            break;
                        }
                    }
                    // 去掉已经中将的人员
                    if (!flag) {
                        arr.push(item);
                    }
                }
                lottery_datas = arr;
                localStorage.setItem('lottery_initial', JSON.stringify(lottery_datas));
                console.log(lottery_datas);
                $('#lottery-wrap').html( _.template($('#lotterycon-tpl').html(), lottery_datas))
            }
        }
    })
}


if (!localStorage.getItem('award_initial')) {
    var award_str = JSON.stringify(award_config);
    localStorage.setItem('award_initial', award_str);
}

// 初始化数据
if (!localStorage.getItem('lottery_initial')) {
    var data_str = JSON.stringify(lottery_initial_datas);
    localStorage.setItem('lottery_initial', data_str);
}