<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/
$fp = fopen($_SERVER['argv'][1], 'r');
$contents=[];
while(! feof($fp)){
    $content=fgets($fp);
    $contents[]=$content;
}
fclose($fp);

$fp = fopen($_SERVER['argv'][2], 'r');
$changes=[];
while(! feof($fp)){
    $changes[]=ucwords(trim(fgets($fp)));
}
fclose($fp);
$n=count($contents);

for ($i=0;$i<$contents;$i++){
$contents=str_ireplace($changes[$i], $changes[$i], $contents);
echo($contents[$i]);
};