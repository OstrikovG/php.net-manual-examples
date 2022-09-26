## A simple trick that can help you to guess what diff/intersect or sort function does by name.

* **[suffix] assoc** - additional index check. Compares both value and index.

    **Example**: array_diff_assoc, array_intersect_assoc.


* **[suffix] key** - index only check. Ignores value of array, compares only indexes.

    **Example**: array_diff_key, array_intersect_key.


* **[suffix] empty** - no "key" or "assoc" word in suffix. Compares values only. Ignores indexes of array.

    **Example**: array_diff, array_intersect.


* **[prefix] u** - will do comparison with user defined function. Letter u can be used twice in some functions (like array_udiff_uassoc), this means that you have to use 2 functions (one for value, one for index).

    **Example**: array_udiff_uassoc, array_uintersect_assoc.


### This also works with array sort functions:

* **[prefix] a** - associative. Will preserve keys.

    **Example**: arsort, asort.


* **[prefix] k** - key sort. Will sort array by keys.

    **Example**: uksort, ksort.


* **[prefix] r** - reverse. Will sort array in reverse order.

    **Example**: rsort, krsort.


* **[prefix] u** - sort by user defined function (same as for diff/intersect).

    **Example**: usort, uasort.