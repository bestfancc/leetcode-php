/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n),n为数组的长度
 * 空间复杂度为O(1)
 *   
 **/

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $i = 0;
        foreach($nums as $k => $v) {
            if ($v != $val) {
                $nums[$i] = $v;
                $i++;
            }
        }
        return $i;
    }
}
