<?php
//課題１
function double($number) {
    $result = $number * 2;
    return $result;
}
echo double(500) . "\n";
?>
<?php
//課題２
function add($a, $b){
    $result = $a + $b;
    return $result;
}
echo add(3, 5) . "\n";
?>
<?php
//課題３
function times($arr){
    $result = array_product( $arr ) ;
    return $result;
}
$array = array(1, 3, 5, 7, 9);
echo times($array) . "\n";
?>
<?php
//課題４
function max_array($arr){
$max_number = $arr[0];
foreach($arr as $a){
if($max_number < $a){
$max_number = $a;}
}
return $max_number;
}
//配列の指定がないので（）内には適当な数字を入れています。
$array = array(623,-329,7265,0);
echo max_array($array) . "\n";
?>
<?php
//課題５
//strip_tags　HTMLタグを取り除く
$text = '<a herf="http//www.yahoo.co.jp">Yahoo!JAPAN</a>';
echo strip_tags($text) . "\n";
//array_push 配列の末尾に要素を追加する
$fruits = array("りんご","みかん");
array_push($fruits,"さくらんぼ");
print_r($fruits) . "\n";
//array_merge ひとつまたは複数の配列を結合する
$array1 = [1,2,3];
$array2 = [11,12,13];
$array3 = array_merge($array1,$array2);
print_r($array3) . "\n";
//time 現在のUNIXタイムスタンプを取得
echo '現在のUnixタイムスタンプ：'.time();
echo "\n";
//mktiime 指定した日時のUNIXタイム スタンプを取得
//2020年4月1日12時34分56秒で指定
$mktimestamp =mktime(12,34,56,4,1,2020);
echo $mktimestamp . "\n";
//date 日付を出力
echo date("Y/m/d",$mktimestamp) "\n";
//第２引数を省略すると現在時刻を出力する
echo date("Y/m/d");
?>
