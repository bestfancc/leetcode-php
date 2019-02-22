/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(min(x,y)),n为字符串的长度  
 * 空间复杂度为O(1)
 *
 **/
 class Solution {

    /**
     * @param Integer $x
     * @param Integer $y
     * @param Integer $z
     * @return Boolean
     */
    function canMeasureWater($x, $y, $z) {
        $sum = $x + $y;
        if ($sum < $z) return false;
        if ($sum == $z || $x == $z || $y == $z) return true;
        $max = max($x, $y);
        $min = min($x, $y);
        if ($min == 0 && $max != $z) return false;
        while ($max % $min != 0) {
            $remain = $max % $min;
            $max = $min;
            $min = $remain;
        }
        return $z % $min == 0;
    }
}
