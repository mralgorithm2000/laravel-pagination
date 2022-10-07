<?php
/* ersadid.com */

namespace Mralgorithm\LaravelPagination;

class Helper {
    public static function offset($pid, $num){
        if($pid == ''){
            $offset = 1;
        }else{
            $offset = ($pid -1) * $num;
        }
        return $offset;
    }
}
