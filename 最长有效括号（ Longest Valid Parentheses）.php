/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n),n为字符串的长度
 * 空间复杂度为O(n)
 *   
 **/
 
 class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestValidParentheses($s) {
        $res = 0;
        $start = 0;
        $length = strlen($s);
        $stack = new SplStack();
        for ($i = 0; $i < $length; $i++) {
            if ('(' == $s[$i]) {
                $stack->push($i);
            } else {
                if ($stack->isEmpty()) {
                    $start = $i + 1;
                } else {
                    $stack->pop();
                    $res = $stack->isEmpty() ? max($res, $i - $start + 1) : max($res, $i - $stack->top());
                }
            }
        }
        return $res;
    }
}
