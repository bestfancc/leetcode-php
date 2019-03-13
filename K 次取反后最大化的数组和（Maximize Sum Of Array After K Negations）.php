/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n * K),n为字符串的长度,K为取反次数
 * 空间复杂度为O(1)
 *
 **/
 class Solution {

    /**
     * @param Integer[] $A
     * @param Integer $K
     * @return Integer
     */
    function largestSumAfterKNegations($A, $K) {
        $type = $K % 2;
        $a = array();
        $sum = 0;

        for ($i = 0; $i < $K; $i++) {
            foreach ($A as $k => $v) {
                if ($k == 0) {
                    $a[0] = $v;
                    $a[1] = $k;
                } else {
                    if ($a[0] > $v) {
                        $a[0] = $v;
                        $a[1] = $k;
                    }
                }     
            } 
            $A[$a[1]] = 0 - $a[0];
        }
        foreach ($A as $k => $v) {
            $sum = $sum + $v;   
        } 
        return $sum;
    }
}
