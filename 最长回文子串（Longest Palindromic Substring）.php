/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n＾2),n为字符串的长度  
 * 空间复杂度为O(1)
 *
 **/
 class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $count = strlen($s);
        if ($count <= 1) return $s;
        $return = '';
        $start = 0;
        $end = 0;
        for ($i = 0; $i < $count; $i++) {
            $len1 = $this->centerExtend($s,$i,$i);
            $len2 = $this->centerExtend($s,$i,$i+1);
            $len = max($len1,$len2);
            if ($len > $end - $start) {
                $start = $i - floor(($len - 1)/2);
                $end = $i + floor($len/2);
                // echo $i.' '.$len.' '.$start.' '.$end.'\r\n';
            }
        }
        return substr($s,$start,$end - $start + 1);
    }
    function centerExtend($s, $left, $right) {
        $count = strlen($s);
        while ($s[$left] == $s[$right] && $left >= 0 && $right < $count) {
            $left--;
            $right++;
        }
        return $right - $left - 1;
    }
}
