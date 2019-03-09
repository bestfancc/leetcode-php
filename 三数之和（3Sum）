/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n＾2),n为数组的长度  
 * 空间复杂度为O(n)
 *
 **/
 class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        if (!$nums) return $nums;
        $return =array();
        sort($nums);
        $count = count($nums);
        for ($i = 0; $i < $count; $i++) {
            if ($i == 0 || $nums[$i] > $nums[$i-1]) {
                $left = $i + 1;
                $right = $count - 1;
                while ($left < $right) {
                    if ($nums[$left] + $nums[$right] + $nums[$i] == 0) {
                        $return[] = array($nums[$i], $nums[$left], $nums[$right]);
                        $left++;
                        $right--;
                        while ($left < $right && $nums[$left] == $nums[$left-1]) {
                            $left++;
                        }
                        while ($left < $right && $nums[$right] == $nums[$right+1]) {
                            $right--;
                        }
                    } elseif ($nums[$left] + $nums[$right] + $nums[$i] > 0) {
                        $right--;
                    } elseif ($nums[$left] + $nums[$right] + $nums[$i] < 0) {
                        $left++;
                    }
                } 
            }
        }
        return $return;
    }
}
