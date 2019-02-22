/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(log n),n为树的最小深度  
 * 空间复杂度为O(n＾2)
 *
 **/
 
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function minDepth($root) {
        if (!$root) return 0;
        $depth = 1;
        $nodeArray = array($root);
        while (1) {
            $tmp = array();
            foreach ($nodeArray as $v) {
                if (!$v->left && !$v->right) {
                    return $depth;
                }
                if ($v->left) $tmp[] = $v->left;
                if ($v->right) $tmp[] = $v->right;
            }     
            $depth++;
            $nodeArray = $tmp;   
        }
    }
}
