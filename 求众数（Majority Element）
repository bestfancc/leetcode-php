/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n),n为字符串的长度  
 * 空间复杂度为O(m),m为字符串种类数
 *
 **/
 class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $count = count($nums);
        $array = array();
        foreach ($nums as $v) {
            if (!isset($array[$v])) {
                $array[$v] = 0;
            } else {
                $array[$v]++;
                if ($array[$v] > $count/2) {
                    return $v;
                }
            }
        }
        $max = max($array);
        return array_search($max, $array);
    }
}
