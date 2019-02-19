/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {
    function addTwoNumbers($l1, $l2) {
        $return = array();
        $returnList;
        $node;
        if(!$l1) return $l2;
        if(!$l2) return $l1;
        while($l1 !== null || $l2 !== null) {
            $sum = $l1->val + $l2->val;
            if ($sum >= 10) {
                $l1->next->val = $l1->next->val + 1;
                $node = new ListNode($sum - 10);
            } else {
                $node = new ListNode($sum);
            }
            if (!$tmp) {
                $tmp = $node;
                $returnList = $tmp;
            }else{
                $tmp->next = $node;
                $tmp = $tmp->next;
            }
            $l1 = $l1->next;
            $l2 = $l2->next; 
        }
        return $returnList;
    }
}
