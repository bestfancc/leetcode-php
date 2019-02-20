/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n)  
 * 空间复杂度为O(n)
 *
 **/
 
class Solution {
    function diStringMatch($S) {
        $array = $S;
        $min = 0;
        $max = $count = strlen($S);
        $array = explode($S);
        $return = array();
        for ($j = 0; $j < $count; $j++) {
            if ($S[$j] == 'D') {
                $return[] = $max;
                if ($j == $count - 1) {
                    $return[] = $max - 1;
                }
                $max--;
            } else {
                $return[] = $min;
                if ($j == $count - 1) {
                    $return[] = $min + 1;
                }
                $min++;
            }
        }
        return $return;
    }
}
