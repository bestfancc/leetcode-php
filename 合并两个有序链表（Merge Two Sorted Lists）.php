/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(min(m,n)),m为$l1链表的长度,n为$l2链表的长度，min()返回m和n的最小值
 * 空间复杂度为O(m+n)
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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        $l3 = new ListNode(0);
        $l4 = $l3;
        while ($l1 !== null || $l2 !== null) {
            if ($l1 === null) {
                echo 1;
                $l3->next = $l2;
                $l2 = null;
            } elseif ($l2 === null) {
                echo 2;
                $l3->next = $l1;
                $l1 = null;
            }
            if ($l1 === null && $l2 === null) return $l4->next;
            if ($l1->val >= $l2->val) {
                $node = $l2;
                $l2 = $l2->next;
                $node->next = null;
                $l3->next = $node;
                $l3 = $l3->next;
            } else {
                $node = $l1;
                $l1 = $l1->next;
                $node->next = null;
                $l3->next = $node;
                $l3 = $l3->next;
                
            } 
        }
        return $l4->next;
    }
    
}
