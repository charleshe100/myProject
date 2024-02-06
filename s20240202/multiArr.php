<?php
function dd($data){
    echo "<pre>";
    echo print_r($data);
    echo "</pre>";
};

// 1. 先用假資料寫好一個一維陣列，dd沒問題後
// $mobileArr=[
//     's1' => 'amy',
//     's2' => 'bob',
//     's3' => 'cat',
// ];
// dd($mobileArr);

// 2. 再寫成多維陣列
$mobileArr=[
    [
        'id'=>1,
        'name'=>'iphone10',
        'price'=>10000,
        'location'=>['台北'],
    ],
    [
        'id'=>2,
        'name'=>'iphone11',
        'price'=>20000,
        'location'=>['台北','台中'],
    ],
    [
        'id'=>3,
        'name'=>'iphone12',
        'price'=>30000,
        'location'=>['高雄'],
    ],
    [
        'id'=>4,
        'name'=>'iphone13',
        'price'=>40000,
        'location'=>['台北','台中','高雄'],
    ]
];
// dd($mobileArr);
// 將之轉為json編碼，ajax才讀得到
echo json_encode($mobileArr);

// 這種寫法，就會是索引去對照
// $mobileArr = [
//     [1,'iphone10',10000,['台北']],
//     [2,'iphone11',10000,['台北','台中']],
//     [3,'iphone12',10000,['高雄']],
//     [4,'iphone13',10000,['台北','台中','高雄']],
//   ];  
// dd($mobileArr);
// echo json_encode($mobileArr);
?>