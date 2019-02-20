/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n)  
 * 空间复杂度为O(1)
 *
 **/
class Solution {
    function validMountainArray($A) {
        $status = 0;
        $is = true;
        $pre = null;
        $hasOn = false;
        $hasOff = false;
        foreach ($A as $k => $v) {
            if ($k == 0) {
                $pre = $v;
            } else {
                if ($status == 0) {
                    if ($pre > $v) {
                        $status = 1;
                        $hasOff = true;
                    } else {
                        $hasOn = true;
                    }
                } elseif ($status == 1) {
                    
                    if ($pre <= $v) {
                        $is = false;
                        $status = 2;
                        break;
                    } else {
                        $hasOff = true;
                    }
                }
            }
            $pre = $v;
        }
        if ($status == 1 && $is == true && $hasOn == true && $hasOff == true) {
            return true;
        } else {
            return false;
        }
    }
}
