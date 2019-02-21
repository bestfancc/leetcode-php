/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n * $numRows),n为字符串的长度  
 * 空间复杂度为O(n)
 *
 **/
 class Solution {
    function convert($s, $numRows) {
        $count = strlen($s);
        if($numRows < 2 || $count < $numRows) return $s;
        $return = '';
        $column = ceil($count/2);
        $cycle = 2 * $numRows - 2;
        for ($i = 0; $i < $numRows; $i++) {
            for ($j = 0; $j < $column; $j++) {
                $string = substr($s, $j * $cycle + $i,1);
                if ($string !== false) {
                    $return .= $string;
                }
                if ($key> $count) break;
                if ($i != $numRows - 1 && $i != 0) {
                    $string = substr($s,$j * $cycle + $cycle - $i,1);
                    if ($string !== false) {
                        $return .= $string;
                    }
                }
            }
        }
        return $return;
    }
}
