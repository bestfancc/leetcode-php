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
     * @return Boolean
     */
    function isValid($s) {
        if ('' == $s) return true;
        $left = array('(', '{', '[');
        $count = strlen($s);
        $array = array();
        $k = 0;
        for ($i = 0; $i < $count; $i++) {
            $tmp = $s[$i];
            if (in_array($tmp, $left)) {
                $array[$k] = $tmp;
                $k++;
            } else {
                if (')' == $tmp) {
                    if ('(' == $array[$k-1]) {
                        $k--;
                    } else {
                        return false;
                    }
                } elseif ('}' == $tmp) {
                    if ('{' == $array[$k-1]) {
                        $k--;
                    } else {
                        return false;
                    }
                } else {
                    if ('[' == $array[$k-1]) {
                        $k--;
                    } else {
                        return false;
                    }
                }
            }
        }
        if ($k) return false;
        return true;
    }
}
