<?php

$year = $_GET['year'] ?? '2023';
$month = $_GET['month'] ?? '2023';

// 上面的打包成下面的，比較方便查詢與閱讀
$originArr = [
    'year' => $year,
    'month' => $month,
];

// 上面的跟下面的，一樣是打包，但上面的比較方便變更變數
$originArr= compact("year", "month");

// 打包給別人，可以加註解
$originArr = [
    'data' => $data,
    'desc' => 'http:://images/',
];
