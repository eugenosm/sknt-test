<?php
/* Smarty version 3.1.33, created on 2019-09-17 11:27:35
  from 'C:\Users\User\PhpstormProjects\tariff\includes\web\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d80c327de8349_73019946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16b650d1c86b708a109ebbe47515f9503aba20d8' => 
    array (
      0 => 'C:\\Users\\User\\PhpstormProjects\\tariff\\includes\\web\\templates\\index.tpl',
      1 => 1568719653,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5d80c327de8349_73019946 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tariff Selection</title>
        <link rel="stylesheet" href="web/css/bs-card.css">
    <link rel="stylesheet" href="web/css/bs-grid.css">

    <script src="web/js/bootstrap.js"></script>
    <link rel="stylesheet" href="web/css/awesome-all.css">

    <style type="text/css">
        .apply-button{
            background: #6fb316;
            color: white;
            width: 100%;
            border-style: solid;
            border-color: #6fb316;
            font-size: x-large;
            line-height: 2.5;
        }
        .fa.fa-chevron-right{
            color:lightgrey;
            float:right;
        }
        .fa.fa-chevron-left{
            color:#6fb316;
            float:left;
        }
        .speed-splash{
            margin-bottom: 0.2rem;
            margin-top: 0.2rem;
        }
    </style>
</head>
<body>
    <div class="row" id="screen-1" style="display:flex">
                <div class="col-xs-12 col-640-6 col-1k-4">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:#6fb316;">
                        Тариф Земля
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <div style="background-color:#70603e; color:white; display:inline-block;">
                                <h4 class="speed-splash" >&nbsp;&nbsp;50Мбит/с&nbsp;&nbsp;</h4>
                            </div>
                            <div><h4>350 - 480 &#8381;/мес</h4></div>
                                                    </div>
                        <div class="col-2 align-self-center">
                            <span class="fa fa-chevron-right" onclick="show_screen2('Земля')"></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="http://www.sknt.ru/tarifi_internet/in/1.htm">Узнать подробнее на сайте www.sknt.ru</a>
                </div>
            </div>
            <div><br></div>
        </div>
                <div class="col-xs-12 col-640-6 col-1k-4">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:#6fb316;">
                        Тариф Вода
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <div style="background-color:#0075d9; color:white; display:inline-block;">
                                <h4 class="speed-splash" >&nbsp;&nbsp;100Мбит/с&nbsp;&nbsp;</h4>
                            </div>
                            <div><h4>450 - 600 &#8381;/мес</h4></div>
                                                            <div>
                                                                            ТВ пакет "Социальный ТВ"<br>
                                                                            Антивирус Agnitum Outpost<br>
                                                                    </div>
                                                    </div>
                        <div class="col-2 align-self-center">
                            <span class="fa fa-chevron-right" onclick="show_screen2('Вода')"></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="http://www.sknt.ru/tarifi_internet/in/2.htm">Узнать подробнее на сайте www.sknt.ru</a>
                </div>
            </div>
            <div><br></div>
        </div>
                <div class="col-xs-12 col-640-6 col-1k-4">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:#6fb316;">
                        Тариф Огонь
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <div style="background-color:#EE4700; color:white; display:inline-block;">
                                <h4 class="speed-splash" >&nbsp;&nbsp;200Мбит/с&nbsp;&nbsp;</h4>
                            </div>
                            <div><h4>650 - 800 &#8381;/мес</h4></div>
                                                            <div>
                                                                            ТВ пакет "Социальный ТВ"<br>
                                                                            Антивирус Agnitum Outpost<br>
                                                                            Доменное имя в зоне sknt.ru<br>
                                                                    </div>
                                                    </div>
                        <div class="col-2 align-self-center">
                            <span class="fa fa-chevron-right" onclick="show_screen2('Огонь')"></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="http://www.sknt.ru/tarifi_internet/in/3.htm">Узнать подробнее на сайте www.sknt.ru</a>
                </div>
            </div>
            <div><br></div>
        </div>
                <div class="col-xs-12 col-640-6 col-1k-4">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:#6fb316;">
                        Тариф Вода HD
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <div style="background-color:#0075d9; color:white; display:inline-block;">
                                <h4 class="speed-splash" >&nbsp;&nbsp;100Мбит/с&nbsp;&nbsp;</h4>
                            </div>
                            <div><h4>650 - 800 &#8381;/мес</h4></div>
                                                            <div>
                                                                            ТВ пакет "ТВ"<br>
                                                                            Антивирус Agnitum Outpost<br>
                                                                            Доменное имя в зоне sknt.ru<br>
                                                                    </div>
                                                    </div>
                        <div class="col-2 align-self-center">
                            <span class="fa fa-chevron-right" onclick="show_screen2('Вода HD')"></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="http://www.sknt.ru/sky-tv/in/2.htm">Узнать подробнее на сайте www.sknt.ru</a>
                </div>
            </div>
            <div><br></div>
        </div>
                <div class="col-xs-12 col-640-6 col-1k-4">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:#6fb316;">
                        Тариф Огонь HD
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <div style="background-color:#EE4700; color:white; display:inline-block;">
                                <h4 class="speed-splash" >&nbsp;&nbsp;200Мбит/с&nbsp;&nbsp;</h4>
                            </div>
                            <div><h4>800 - 1000 &#8381;/мес</h4></div>
                                                            <div>
                                                                            ТВ пакет "ТВ"<br>
                                                                            Антивирус Agnitum Outpost<br>
                                                                            Доменное имя в зоне sknt.ru<br>
                                                                    </div>
                                                    </div>
                        <div class="col-2 align-self-center">
                            <span class="fa fa-chevron-right" onclick="show_screen2('Огонь HD')"></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="http://www.sknt.ru/sky-tv/in/3.htm">Узнать подробнее на сайте www.sknt.ru</a>
                </div>
            </div>
            <div><br></div>
        </div>
            </div>

    <div class="row" id="screen-2" style="display:none">

    </div>

    <div class="row" id="screen-3" style="display:none">
        <div class="col">
            <form method="POST" action="#">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-1 align-self-center">
                                <h4><span class="fa fa-chevron-left" style="color:#6fb316;" onclick="show_screen2(null)"></span></h4>
                            </div>
                            <div class="col-11">
                                <h4>Выбор тарифа</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h4 style="color:#6fb316;">
                                <span>Тариф </span><span id="tariff-h"></span>
                            </h4>
                            <input type="text" name="tariff" id="tariff" readonly hidden>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <h4>
                                <span>Период оплаты - </span><span id="period-h"></span><span> месяцев</span>
                            </h4>
                            <input type="text" name="pay_period" id="pay_period" readonly hidden>
                        </div>
                        <div>
                            <h4>
                                <span  id="price-h"></span><span> &#8381;/мес</span>
                            </h4>
                            <input type="text" name="price" id="price" readonly hidden>
                        </div>
                        <div>
                            <span>разовый платёж - </span><span id="payment"></span><span> &#8381;</span>
                        </div>
                        <div>
                            <span>со счёта спишется - </span><span id="account-reduce"></span><span> &#8381;</span>
                        </div>
                        <div><br></div>
                        <div style="color: grey">
                            вступит в силу - сегодня
                        </div>
                        <div style="color: grey">
                            <span>активно до - </span><span id="new_payday-h"></span>
                            <input type="text" name="new_payday" id="new_payday" readonly hidden>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="text" name="ID" id="ID" readonly hidden>
                        <input type="submit" class="apply-button" value="Выбрать">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <template id="tariff-title-sc2">
        <div class="col-xs-12 col-640-12 col-1k-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-1 align-self-center">
                            <h4><span class="fa fa-chevron-left" style="color:#6fb316;" onclick="show_screen1()"></span></h4>
                        </div>
                        <div class="col-11">
                            <h4><!--title--></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div><br><br></div>
        </div>
    </template>

    <template id="tariff-card-sc2">
        <div class="col-xs-12 col-640-6 col-1k-4">
            <div class="card">
                <div class="card-header">
                    <h3 style="color:#6fb316;">
                        <!--title-->
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <div><h4><!--cost--> &#8381;/мес</h4></div>
                            <div>разовый платеж <!--payment--> </div>
                            <div><!--discount--> </div>
                        </div>
                        <div class="col-2 align-self-center">
                            <span class="fa fa-chevron-right" onclick="show_screen3('tariff_id')"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div><br></div>
    </template>

</body>
<script>
    let tariffs = [{"title":"\u0417\u0435\u043c\u043b\u044f","tarifs":[{"ID":2,"title":"\u0417\u0435\u043c\u043b\u044f (3 \u043c\u0435\u0441\u044f\u0446\u0430)","price":1350,"price_add":0,"pay_period":"3","new_payday":"1452891600+0300","speed":50},{"ID":1,"title":"\u0417\u0435\u043c\u043b\u044f","price":480,"price_add":0,"pay_period":"1","new_payday":"1450213200+0300","speed":50},{"ID":3,"title":"\u0417\u0435\u043c\u043b\u044f (6 \u043c\u0435\u0441\u044f\u0446\u0435\u0432)","price":2460,"price_add":0,"pay_period":"6","new_payday":"1460754000+0300","speed":50},{"ID":4,"title":"\u0417\u0435\u043c\u043b\u044f (12 \u043c\u0435\u0441\u044f\u0446\u0435\u0432)","price":4200,"price_add":0,"pay_period":"12","new_payday":"1476565200+0300","speed":50}],"link":"http:\/\/www.sknt.ru\/tarifi_internet\/in\/1.htm","speed":50,"price_add":0,"min":350,"max":480,"color":"#70603e"},{"title":"\u0412\u043e\u0434\u0430","tarifs":[{"ID":5,"title":"\u0412\u043e\u0434\u0430","price":600,"price_add":0,"pay_period":"1","new_payday":"1450213200+0300","speed":100},{"ID":6,"title":"\u0412\u043e\u0434\u0430 (3 \u043c\u0435\u0441\u044f\u0446\u0430)","price":1650,"price_add":0,"pay_period":"3","new_payday":"1452891600+0300","speed":100},{"ID":7,"title":"\u0412\u043e\u0434\u0430 (6 \u043c\u0435\u0441\u044f\u0446\u0435\u0432)","price":3060,"price_add":0,"pay_period":"6","new_payday":"1460754000+0300","speed":100},{"ID":8,"title":"\u0412\u043e\u0434\u0430 (12 \u043c\u0435\u0441\u044f\u0446\u0435\u0432)","price":5400,"price_add":0,"pay_period":"12","new_payday":"1476565200+0300","speed":100}],"link":"http:\/\/www.sknt.ru\/tarifi_internet\/in\/2.htm","speed":100,"price_add":0,"free_options":["\u0422\u0412 \u043f\u0430\u043a\u0435\u0442 \"\u0421\u043e\u0446\u0438\u0430\u043b\u044c\u043d\u044b\u0439 \u0422\u0412\"","\u0410\u043d\u0442\u0438\u0432\u0438\u0440\u0443\u0441 Agnitum Outpost"],"min":450,"max":600,"color":"#0075d9"},{"title":"\u041e\u0433\u043e\u043d\u044c","tarifs":[{"ID":9,"title":"\u041e\u0433\u043e\u043d\u044c","price":800,"price_add":0,"pay_period":"1","new_payday":"1450213200+0300","speed":200},{"ID":10,"title":"\u041e\u0433\u043e\u043d\u044c (3 \u043c\u0435\u0441\u044f\u0446\u0430)","price":2250,"price_add":0,"pay_period":"3","new_payday":"1452891600+0300","speed":200},{"ID":11,"title":"\u041e\u0433\u043e\u043d\u044c (6 \u043c\u0435\u0441\u044f\u0446\u0435\u0432)","price":4260,"price_add":0,"pay_period":"6","new_payday":"1460754000+0300","speed":200},{"ID":12,"title":"\u041e\u0433\u043e\u043d\u044c (12 \u043c\u0435\u0441\u044f\u0446\u0435\u0432)","price":7800,"price_add":0,"pay_period":"12","new_payday":"1476565200+0300","speed":200}],"link":"http:\/\/www.sknt.ru\/tarifi_internet\/in\/3.htm","speed":200,"price_add":0,"free_options":["\u0422\u0412 \u043f\u0430\u043a\u0435\u0442 \"\u0421\u043e\u0446\u0438\u0430\u043b\u044c\u043d\u044b\u0439 \u0422\u0412\"","\u0410\u043d\u0442\u0438\u0432\u0438\u0440\u0443\u0441 Agnitum Outpost","\u0414\u043e\u043c\u0435\u043d\u043d\u043e\u0435 \u0438\u043c\u044f \u0432 \u0437\u043e\u043d\u0435 sknt.ru"],"min":650,"max":800,"color":"#EE4700"},{"title":"\u0412\u043e\u0434\u0430 HD","tarifs":[{"ID":13,"title":"\u0412\u043e\u0434\u0430 HD","price":800,"price_add":0,"pay_period":"1","new_payday":"1450213200+0300","speed":100},{"ID":14,"title":"\u0412\u043e\u0434\u0430 HD (3 \u043c\u0435\u0441\u044f\u0446\u0430)","price":2250,"price_add":0,"pay_period":"3","new_payday":"1452891600+0300","speed":100},{"ID":15,"title":"\u0412\u043e\u0434\u0430 HD (6 \u043c\u0435\u0441\u044f\u0446\u0435\u0432)","price":4260,"price_add":0,"pay_period":"6","new_payday":"1460754000+0300","speed":100},{"ID":16,"title":"\u0412\u043e\u0434\u0430 HD (12 \u043c\u0435\u0441\u044f\u0446\u0435\u0432)","price":7800,"price_add":0,"pay_period":"12","new_payday":"1476565200+0300","speed":100}],"link":"http:\/\/www.sknt.ru\/sky-tv\/in\/2.htm","speed":100,"price_add":0,"free_options":["\u0422\u0412 \u043f\u0430\u043a\u0435\u0442 \"\u0422\u0412\"","\u0410\u043d\u0442\u0438\u0432\u0438\u0440\u0443\u0441 Agnitum Outpost","\u0414\u043e\u043c\u0435\u043d\u043d\u043e\u0435 \u0438\u043c\u044f \u0432 \u0437\u043e\u043d\u0435 sknt.ru"],"min":650,"max":800,"color":"#0075d9"},{"title":"\u041e\u0433\u043e\u043d\u044c HD","tarifs":[{"ID":17,"title":"\u041e\u0433\u043e\u043d\u044c HD","price":1000,"price_add":0,"pay_period":"1","new_payday":"1450213200+0300","speed":200},{"ID":18,"title":"\u041e\u0433\u043e\u043d\u044c HD (3 \u043c\u0435\u0441\u044f\u0446\u0430)","price":2700,"price_add":0,"pay_period":"3","new_payday":"1452891600+0300","speed":200},{"ID":19,"title":"\u041e\u0433\u043e\u043d\u044c HD (6 \u043c\u0435\u0441\u044f\u0446\u0435\u0432)","price":5160,"price_add":0,"pay_period":"6","new_payday":"1460754000+0300","speed":200},{"ID":20,"title":"\u041e\u0433\u043e\u043d\u044c HD (12 \u043c\u0435\u0441\u044f\u0446\u0435\u0432)","price":9600,"price_add":0,"pay_period":"12","new_payday":"1476565200+0300","speed":200}],"link":"http:\/\/www.sknt.ru\/sky-tv\/in\/3.htm","speed":200,"price_add":0,"free_options":["\u0422\u0412 \u043f\u0430\u043a\u0435\u0442 \"\u0422\u0412\"","\u0410\u043d\u0442\u0438\u0432\u0438\u0440\u0443\u0441 Agnitum Outpost","\u0414\u043e\u043c\u0435\u043d\u043d\u043e\u0435 \u0438\u043c\u044f \u0432 \u0437\u043e\u043d\u0435 sknt.ru"],"min":800,"max":1000,"color":"#EE4700"}];
    let tz_offset = new Date().getTimezoneOffset();
    var dt_options = { year: 'numeric', month: '2-digit', day: '2-digit' };
    for(let i in tariffs){
        for(let j in tariffs[i].tarifs){
            let [dt, tz_offs] = tariffs[i].tarifs[j].new_payday.split('+');
            let payday = new Date();
            payday.setTime( (parseInt(dt, 10) - parseInt(tz_offs, 10) - tz_offset) * 1000 );
            tariffs[i].tarifs[j].new_payday_str = payday.toLocaleDateString('ru-RU', dt_options);
        }
    }

    let tarif_group = null;
    let tarif = null;

    

    function show_screen2(title)
    {
        if( title == null )
            title = tarif_group;
        else
            tarif_group = title;
        document.getElementById('screen-1').style.display = 'none';
        document.getElementById('screen-3').style.display = 'none';
        let screen2 = document.getElementById('screen-2');
        let html = '';
        let template = document.getElementById('tariff-card-sc2');
        for(let i in tariffs)
        {
            if( tariffs[i].title == title)
            {
                html = document.getElementById('tariff-title-sc2').innerHTML.replace('<!--title-->', `Тариф ${title}`);
                let cost1month = tariffs[i].tarifs[0].price;
                for(let j in tariffs[i].tarifs)
                {
                    let period = tariffs[i].tarifs[j].pay_period;
                    let price = tariffs[i].tarifs[j].price;
                    let cost = price / period;
                    let card = template.innerHTML.replace('<!--title-->', `${period} ${monther(period)}` )
                        .replace('<!--cost-->', cost)
                        .replace('<!--payment-->', `${price} &#8381;`)
                        .replace("'tariff_id'", tariffs[i].tarifs[j].ID);
                    if( j != 0 )
                    {
                        let discount = cost1month * period - price;
                        card = card.replace('<!--discount-->', `скидка ${discount} &#8381;` );
                    }
                    html = html + '\n' + card;
                }
            }
        }
        screen2.innerHTML = html;
        screen2.style.display = 'flex';
    }

    function monther(months)
    {
        if(months > 4 && months < 21)  return 'месяцев';
        let ones = months % 10;
        if( ones == 1) return 'месяц';
        if( ones == 2 || ones == 3 || ones == 4)  return 'месяца';
        return 'месяцев';
    }

    function show_screen1()
    {
        document.getElementById('screen-2').style.display = 'none';
        document.getElementById('screen-3').style.display = 'none';
        document.getElementById('screen-1').style.display = 'flex';
    }

    function findTariffById(id)
    {
        for(let i in tariffs)
        {
            for(let j in tariffs[i].tarifs)
            {
                if( tariffs[i].tarifs[j].ID == id ) return [i, j];
            }
        }
        return [null, null];
    }

    function show_screen3(id)
    {
        let [i, j] = findTariffById(id);
        if(i == null) {
            alert('Incorrect tariff selected or data corrupted!');
            return;
        }
        let tariff = tariffs[i].tarifs[j];
        let tariff_grp = tariffs[i];
        document.getElementById('screen-2').style.display = 'none';
        document.getElementById('screen-1').style.display = 'none';
        let screen3 = document.getElementById('screen-3');

        document.getElementById('tariff').value = tariff_grp.title;
        document.getElementById('tariff-h').innerText = `${tariff_grp.title}`;

        document.getElementById('pay_period').value = tariff.pay_period;
        document.getElementById('period-h').innerText = `${tariff.pay_period}`;

        document.getElementById('price').value = tariff.price;
        document.getElementById('price-h').innerText = `${tariff.price / tariff.pay_period}`;

        document.getElementById('payment').innerText = `${tariff.price}`;
        document.getElementById('account-reduce').innerText = `${tariff.price}`;

        document.getElementById('new_payday-h').innerText = `${tariff.new_payday_str}`;
        document.getElementById('new_payday').value = tariff.new_payday;
        document.getElementById('ID').value = id;

        screen3.style.display = 'flex';
    }

    
</script>
</html><?php }
}
