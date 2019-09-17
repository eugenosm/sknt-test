<?php

define('JSON_DATA_URL', 'http://sknt.ru/job/frontend/data.json');

define('INCLUDES', str_replace("\\", "/", getcwd()).'/includes/');
define('SMARTY_DIR', INCLUDES.'smarty/libs/');
define('SMARTY_WORK_DIR', INCLUDES.'web/');
require_once(INCLUDES.'Smarty_Tariff.php');

/* tariff data loading */
ini_set("allow_url_fopen", 1);
$json = file_get_contents(JSON_DATA_URL);

$colors = array( 'green' => '#6fb316',
                 'brown' => '#70603e',
                 'blue' => '#0075d9',
                 'red' => '#EE4700',
                 'grey' => 'grey' );

function tariff_colors($title)
{
    global $colors;
    $selector = mb_split(' ', $title);
    $selector = empty($selector) ? mb_strtolower($title) : mb_strtolower($selector[0]);

    switch ( $selector )
    {
        case 'земля': return $colors["brown"];
        case 'вода': return  $colors["blue"];
        case 'огонь': return $colors["red"];
        default: return $colors["grey"];
    }
}

$tariff_data = json_decode($json);
foreach($tariff_data->tarifs as $idx => $val)
{
    $min = PHP_INT_MAX;
    $max = 0;
    foreach ($val->tarifs as $idx_i => $tariff )
    {
        $price = $tariff->price / $tariff->pay_period;
        if( $price < $min ) $min = $price;
        if( $price > $max ) $max = $price;
    }
    $tariff_data->tarifs[$idx]->min = $min;
    $tariff_data->tarifs[$idx]->max = $max;
    $tariff_data->tarifs[$idx]->color = tariff_colors($tariff_data->tarifs[$idx]->title);
}

/* page rendering */
$smarty = new Smarty_Tariff(SMARTY_WORK_DIR);
$smarty->assign('jdata_result', $tariff_data->result);
$smarty->assign('tariffs', $tariff_data->tarifs);
$smarty->assign('colors', $colors);


$smarty->display('index.tpl');

