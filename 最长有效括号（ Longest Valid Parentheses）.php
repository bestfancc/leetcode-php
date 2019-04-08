/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n),n为字符串的长度
 * 空间复杂度为O(n)
 *   
 **/
 //1.栈的解法
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
  //2.动态规划的解法
  class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestValidParentheses($s) {
        $length = strlen($s);
        $maxLen = 0;
        $dp = array();
        for ($i = 1; $i <= $length; $i++) {
            $j = $i - 2 - $dp[$i-1];
            if ($s[$i-1] == '(' || $j < 0 || $s[$j] == ')') {
                $dp[$i] = 0;
            } else {
                $dp[$i] = $dp[$i-1] + 2 + $dp[$j];
                $maxLen = max($maxLen, $dp[$i]);
            }
        }
        return $maxLen;
    }
}
