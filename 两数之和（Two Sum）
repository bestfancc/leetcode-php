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
