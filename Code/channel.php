<?php
/**
*真真真真真真真真�
*/
$channels = array(
    array('id'=>1,'name'=>"丗捲",'parId'=>0),
    array('id'=>2,'name'=>"慕汐",'parId'=>0),
    array('id'=>3,'name'=>"T偐",'parId'=>1),
    array('id'=>4,'name'=>"帥徨",'parId'=>1),
    array('id'=>5,'name'=>"亂徨",'parId'=>1),
    array('id'=>6,'name'=>"討亂",'parId'=>5),
    array('id'=>7,'name'=>"塰強亂",'parId'=>5),
    array('id'=>8,'name'=>"塚針",'parId'=>7),
    array('id'=>9,'name'=>"塚針",'parId'=>3),
    array('id'=>10,'name'=>"肴佛櫛針",'parId'=>7),
    array('id'=>11,'name'=>"弌傍",'parId'=>2),
    array('id'=>12,'name'=>"親暫弌傍",'parId'=>11),
    array('id'=>13,'name'=>"硬灸兆广",'parId'=>11),
    array('id'=>14,'name'=>"猟僥",'parId'=>2),
    array('id'=>15,'name'=>"膨慕励将",'parId'=>14)
);
$stack = array();  //協吶匯倖腎媚
$html = array();   //喘栖隠贋光倖生朕岻寂議購狼參式乎生朕議侮業
/*
 * 徭協吶秘媚痕方
 */
function pushStack(&$stack,$channel,$dep){
    array_push($stack, array('channel'=>$channel,'dep'=>$dep));
}
/*
 * 徭協吶竃媚痕方
 */
function popStack(&$stack){
    return array_pop($stack);
}
/*
 * 遍枠繍競雫生朕儿秘媚嶄
 */
foreach($channels as $key=>$val){
    if($val['parId'] == 0)
        pushStack($stack,$val,0);
}
/*
 * 繍媚嶄議圷殆竃媚��臥孀凪徨生朕
 */
do{
    $par = popStack($stack); //繍媚競圷殆竃媚
    /*
     * 臥孀參緩生朕葎幻雫生朕議id��繍宸乂生朕秘媚
     */
    for($i=0;$i<count($channels);$i++){
        if($channels[$i]['parId'] == $par['channel']['id']){
            pushStack($stack,$channels[$i],$par['dep']+1);
        }
    }
    /*
     * 繍竃媚議生朕參式乎生朕議侮業隠贋欺方怏嶄
     */
    $html[] = array('id'=>$par['channel']['id'],'name'=>$par['channel']['name'],'dep'=>$par['dep']);
}while(count($stack)>0);
