/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n),n为单链表的长度
 * 空间复杂度为O(1)
 *   
 **/
 
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        //迭代方法
        if ($head == null || $head->next == null) {
            return $head;
        }
        $remain = NULL ;
        $pre = NULL;
        $cur = $head;
        $i = 0;
        while ($cur != null) {
            $remain = $cur->next;
            $cur->next = $pre;
            $pre = $cur;
            $cur = $remain;
        }
        return $pre;
        // 递归方法
        // if ($head == null || $head->next == null) {
        //     return $head;
        // }
        // return $this->getReverse($head, $new);
        
    }
    function getReverse($head, $new)
    {
        if ($head->next == null) {
            $head->next = $new;
            return $head;
        }
        $next = $head->next;
        $head->next = $new;
        $new = $head;
        $head = $next;
        return $this->getReverse($head, $new);
    }
}
