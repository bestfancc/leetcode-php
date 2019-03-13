/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n),n为字符串的长度  
 * 空间复杂度为O(1)
 *
 **/
 class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function firstMissingPositive($nums) {
        $count = count($nums);
        for ($i = 1; $i <= $count; $i++) {
            if (!in_array($i, $nums)) {
                return $i;
            }
        }
        return max($nums) + 1;
    }
}
