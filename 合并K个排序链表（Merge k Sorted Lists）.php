/**
 * by bestfancc<bestfancc@gmail.com>
 * 
 * 时间复杂度为O(n),n为链表中元素总个数  
 * 空间复杂度为O(n)
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
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists($lists)
    {
        $count = count($lists);
        if ($count == 0) return null;
        if ($count == 1) return $lists[0];
        $maxHeap = new SplMaxHeap();
        $return;
        foreach ($lists as $k => $v) {
            while ($v) {
                $maxHeap->insert($v->val);
                $v = $v->next;
            }
        }
        $head = new ListNode(0);
        foreach ($maxHeap as $k => $v) {
            $newNode
        }
        return $head->next;
    }
}
