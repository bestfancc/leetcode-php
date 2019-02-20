/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n＾2) 
 * 空间复杂度为O(1)
 *
 **/
 
class Solution {
    function minDeletionSize($A) {
        $return = array();
        $count = strlen($A[0]);
        for ($i = 0; $i < $count; $i++) {
            for ($j = 0; $j < count($A) - 1; $j++) {
                if (ord($A[$j][$i]) > ord($A[$j + 1][$i]) && !in_array($i,$return)) {
                    $return[] = $i;
                    break;
                }
            }
        }
        return count($return);    
    }
}
