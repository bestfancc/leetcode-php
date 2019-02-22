/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n),n为字符串的长度  
 * 空间复杂度为O(n)
 *
 **/
class Solution {
    function lengthOfLongestSubstring($s) {
        if ($s === '') return 0;
        $a = array();
        $b = 0;
        for($i = 0;$i < strlen($s);$i++) {
            if (!$a) {
                $a[] = $s[$i];
                $count = count($a);
                ($count > $b)? $b = $count: $b;
            } else {
                $index = array_search($s[$i],$a);
                if($index !== false) {
                    $count = count($a);
                    ($count > $b)? $b = $count: $b;
                    $a = array_slice($a, $index + 1);
                    $a[] = $s[$i];
                } else {
                    $a[] = $s[$i];
                    $count = count($a);
                    ($count > $b)? $b = $count: $b;
                }
            }
        }
        return $b;
    }
}
