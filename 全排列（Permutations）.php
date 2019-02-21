
 解法一：递归
 /**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为 O(n!),n为数组长度
 * 空间复杂度为 O(n * n!)
 *
 **/
 
 class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {
        $count = count($nums);
        $return = array();
        $this->fullArray($nums, 0, $count - 1, $return);
        return $return;
    }
    function fullArray($nums, $cursor, $end, &$return) {
        if ($cursor == $end) {
            $return[] = $nums;
        } else {
            for ($i = $cursor; $i <= $end; $i++) {
                $tmp = $nums[$i];
                $nums[$i] = $nums[$cursor];
                $nums[$cursor] = $tmp;
                $this->fullArray($nums, $cursor + 1, $end, $return);
                $tmp = $nums[$i];
                $nums[$i] = $nums[$cursor];
                $nums[$cursor] = $tmp;
            }
        }
    }
}
解法二：
