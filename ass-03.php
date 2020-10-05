<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/
$fp = fopen($_SERVER['argv'][1], 'r');
$contents=[];
while(! feof($fp)){
    $content=fgets($fp);
    $content=trim($content);
    $contents[]=$content;
}
fclose($fp);
$content=implode(" ",$contents);


$fp = fopen($_SERVER['argv'][2], 'r');
$changes=[];
while(! feof($fp)){
    $changes[]=ucwords(trim(fgets($fp)));
}
fclose($fp);
$n=count($changes);

for ($i=0;$i<$n;$i++){
$content=str_ireplace($changes[$i],$changes[$i],$content);
};
echo($content);