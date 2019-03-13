/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度最好情况为O(n),最坏情况为O(n＾2)
 * 空间复杂度为O(n)
 *
 **/
 class Solution {
    function sortedSquares($A) {
        $a = array();
        $count = count($A);
        foreach ($A as $v) {
            $square = $v * $v;
            if (!$a) {
                $a[] = $square;
            } else {
                for ($i = 0; $i < $count; $i++) {
                    if($a[$i] > $square) {
                        $tmp = $a[$i];
                        $a[$i] = $square;
                        $square = $tmp;
                    } elseif ($i == $count - 1) {
                        $a[] = $square;
                    } 
                }
            }
        }
        return $a;
    }
}
