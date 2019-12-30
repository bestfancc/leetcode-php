/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 最大时间复杂度为O(n)，n为nums数组的长度
 * 空间复杂度为O(1)
 *   
 **/
 class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $count = count($nums);
        foreach ($nums as $k => $v) {
            if ($v == $target) {
                return $k;
            }
            if ($v > $target) {
                return $k;
            }
        }
        return $count;
    }
}
