/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n),n为字符串的长度  
 * 空间复杂度为O(n)
 *
 **/
 
 class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0) return false;
        $rev = strrev($x);
        if ($rev == $x) return true;
        else return false;
    }
}
