/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n),php数组的底层是用散列表实现的，所以array_search函数的时间复杂度应该等同散列表取数据的时间复杂度O(1)  
 * 空间复杂度为O(1)
 *
 **/
class Solution {
    function twoSum($nums, $target) {
        $return = array();
        foreach($nums as $k => $v) {
            $key = array_search($target - $v, $nums);
            if ($key != $k && $key !== false) {
                $return =  array($k,$key);
                break;
            }
        }
        return $return;
    }
}
