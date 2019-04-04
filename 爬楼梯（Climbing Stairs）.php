/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n),n为$n的大小
 * 空间复杂度为O(1)
 *   
 **/
 //动态规划方式
 class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        if (1 == $n) return 1;
        if (2 == $n) return 2;
        $k1 = 1;
        $k2 = 2;
        for ($i = 3; $i <= $n; $i++) {
            $k = $k1 + $k2;
            $k1 = $k2;
            $k2 = $k;
        }
        return $k;
    }

}
//递归加缓存方式
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $a = array();
        $m = $this->climb($n, $a);
        return $m;
    }
    function climb($n, &$a) {
        if (1 == $n) return 1;
        if (2 == $n) return 2;
        if (!isset($a[$n-2])) $a[$n-2] = $this->climb($n-2, $a);
        if (!isset($a[$n-1])) $a[$n-1] = $this->climb($n-1, $a);
        return ($a[$n-2] + $a[$n-1]);
    }
}
