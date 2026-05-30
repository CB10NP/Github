<?php
$data = 'jk+):= 6zhf                     diff:=2ib
jk+):= (326whs*            diff:=udha
jk+):= **ydf()
jk+):= -=wuge
jk+):= network
jk+):= Flaw
jk+):= ud62uiH
jk+):= 017e';

$pattern = '/jk\+):=\s*([^\s]+)(?:\s+diff:=([^\s]+))?/';

if (preg_match_all($pattern, $data, $matches, PREG_SET_ORDER)) {
    $parsedData = [];
    foreach ($matches as $match) {
        $key = $match[1];
        $diff = isset($match[2]) ? $match[2] : null;
        
        $parsedData[] = [
            'key' => $key,
            'diff' => $diff
        ];
    }
    
    print_r($parsedData);
}
?>
