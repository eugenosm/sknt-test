<?php
/* Smarty version 3.1.33, created on 2019-09-17 11:27:35
  from 'C:\Users\User\PhpstormProjects\tariff\includes\web\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d80c327dd2838_66044444',
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
  'includes' => 
  array (
  ),
),false)) {
function content_5d80c327dd2838_66044444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10719881715d80c327d58d08_79031274';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
bs-card.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
bs-grid.css">

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
bootstrap.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
awesome-all.css">

    <style type="text/css">
        .apply-button{
            background: <?php echo $_smarty_tpl->tpl_vars['colors']->value['green'];?>
;
            color: white;
            width: 100%;
            border-style: solid;
            border-color: <?php echo $_smarty_tpl->tpl_vars['colors']->value['green'];?>
;
            font-size: x-large;
            line-height: 2.5;
        }
        .fa.fa-chevron-right{
            color:lightgrey;
            float:right;
        }
        .fa.fa-chevron-left{
            color:<?php echo $_smarty_tpl->tpl_vars['colors']->value['green'];?>
;
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tariffs']->value, 'tariff_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tariff_group']->value) {
?>
        <div class="col-xs-12 col-640-6 col-1k-4">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:<?php echo $_smarty_tpl->tpl_vars['colors']->value['green'];?>
;">
                        Тариф <?php echo $_smarty_tpl->tpl_vars['tariff_group']->value->title;?>

                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <div style="background-color:<?php echo $_smarty_tpl->tpl_vars['tariff_group']->value->color;?>
; color:white; display:inline-block;">
                                <h4 class="speed-splash" >&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['tariff_group']->value->speed;?>
Мбит/с&nbsp;&nbsp;</h4>
                            </div>
                            <div><h4><?php echo $_smarty_tpl->tpl_vars['tariff_group']->value->min;?>
 - <?php echo $_smarty_tpl->tpl_vars['tariff_group']->value->max;?>
 &#8381;/мес</h4></div>
                            <?php if (isset($_smarty_tpl->tpl_vars['tariff_group']->value->free_options)) {?>
                                <div>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tariff_group']->value->free_options, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
                                        <?php echo $_smarty_tpl->tpl_vars['option']->value;?>
<br>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>
                        </div>
                        <div class="col-2 align-self-center">
                            <span class="fa fa-chevron-right" onclick="show_screen2('<?php echo $_smarty_tpl->tpl_vars['tariff_group']->value->title;?>
')"></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['tariff_group']->value->link;?>
">Узнать подробнее на сайте www.sknt.ru</a>
                </div>
            </div>
            <div><br></div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                                <h4><span class="fa fa-chevron-left" style="color:<?php echo $_smarty_tpl->tpl_vars['colors']->value['green'];?>
;" onclick="show_screen2(null)"></span></h4>
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
                            <h4 style="color:<?php echo $_smarty_tpl->tpl_vars['colors']->value['green'];?>
;">
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
                            <h4><span class="fa fa-chevron-left" style="color:<?php echo $_smarty_tpl->tpl_vars['colors']->value['green'];?>
;" onclick="show_screen1()"></span></h4>
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
                    <h3 style="color:<?php echo $_smarty_tpl->tpl_vars['colors']->value['green'];?>
;">
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
<?php echo '<script'; ?>
>
    let tariffs = <?php echo json_encode($_smarty_tpl->tpl_vars['tariffs']->value);?>
;
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

    
<?php echo '</script'; ?>
>
</html><?php }
}
