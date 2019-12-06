/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n * m),n为haystack的长度，m为needle的长度
 * 空间复杂度为O(1)
 *   
 **/

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        if ($needle == "") return 0;
        // $return = strpos($haystack, $needle);
        // if ($return === false) return -1;
        // return $return
        $countH = strlen($haystack);
        $countN = strlen($needle);
        if ($countH < $countN) {
            return -1;
        }
        $j = 0;
        $i = 0;
        $status = 1;
        while ($i < $countH && $j < $countN) {
            if ($status == 1) {
                if ($haystack[$i] == $needle[$j]) {
                    if ($j == $countN - 1) {
                        return $i - $j;
                    } else {
                        $status = 2;
                        $i++;
                        $j++;
                    }
                } else {
                    $i++;
                }
            } elseif ($status == 2) {
                if ($haystack[$i] == $needle[$j]) {
                    if ($j == $countN - 1) {
                        return $i - $j;
                    } else {
                        $i++;
                        $j++;
                    }
                } else {
                    $status = 1;
                    $i = $i - $j + 1;
                    $j = 0;
                }
            }
        }  
        return -1;
    }
}
