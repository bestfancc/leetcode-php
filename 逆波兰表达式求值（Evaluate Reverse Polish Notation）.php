/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n),n为字符串的长度
 * 空间复杂度为O(n)
 *   
 **/
 
 class Solution {

    /**
     * @param String[] $tokens
     * @return Integer
     */
    function evalRPN($tokens) {
        $array = array();
        $i = 0;
        foreach ($tokens as $k => $v) {
            if (in_array($v, array('+', '-', '*', '/'))) {
                if ($v == '+') {
                    $tmp = $array[$i-2] + $array[$i-1];
                } elseif ($v == '-') {
                    $tmp = $array[$i-2] - $array[$i-1];
                } elseif ($v == '*') {
                    $tmp = $array[$i-2] * $array[$i-1];
                } else {
                    $tmp = intval($array[$i-2] / $array[$i-1]);
                }
                $array[$i - 2] = $tmp;
                $i = $i - 1;
            } else {
                $array[$i] = $v;
                $i++;
            }
            
        }
        return $array[0];
    }
}
