class Solution {
    function lengthOfLongestSubstring($s) {
        if (!$s) return 0;
        $a = array();
        $b = 0;
        for($i = 0;$i < strlen($s);$i++) {
            if ($a === '') {
                $a[] = $s[$i];
            } else {
                $index = array_search($s[$i],$a);
                if($index !== false) {
                    $count = count($a);
                    ($count > $b)? $b = $count: $b;
                    $a = array_slice($a, $index + 1);
                    $a[] = $s[$i];
                } else {
                    $a[] = $s[$i];
                    $count = count($a);
                    ($count > $b)? $b = $count: $b;
                }
            }
        }
        return $b;
    }
}
