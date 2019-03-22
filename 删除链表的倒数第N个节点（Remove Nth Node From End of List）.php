/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n),n为链表的长度
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
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $i = 0;
        $headA = $head;
        $headB = $head;
        while ($headA != null) {
            $i++;
            $headA = $headA->next;
            if ($n >= 0) {
                $n--;
            } else {
                $headB = $headB->next;
            }
        }
        if ($n == 0) return $head->next;
        $headB->next = $headB->next->next;
        return $head;
    }
}
