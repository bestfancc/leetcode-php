/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n),n为数组长度
 * 空间复杂度为O(1)
 *   
 **/
 
 class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $i = 1;
        foreach($nums as $k => $v) {
            if ($k > 0) {
                if ($v > $nums[$k-1]) {
                    $nums[$i] = $v;
                    $i++;
                }
            }
        }
        return $i;
        
    }
}
