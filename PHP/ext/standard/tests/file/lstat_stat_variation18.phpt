--TEST--
Test lstat() and stat() functions: usage variations - dir/file name stored in object
--FILE--
<?php
/* test for stats of dir/file when their names are stored in objects */

$file_path = __DIR__;
require "$file_path/file.inc";


/* create temp file and directory */
mkdir("$file_path/lstat_stat_variation18/");  // temp dir
$fp = fopen("$file_path/lstat_stat_variation18.tmp", "w");  // temp file
fclose($fp);

echo "*** Testing stat() with filename & directory name stored inside an object ***\n";

class names {
  public $var_name;
  public function __construct($name) {
    $this->var_name = $name;
  }
}

// directory name stored in an object
$dir_name = new names("$file_path/lstat_stat_variation18");

// file name stored in an object
$file_name = new names("$file_path/lstat_stat_variation18.tmp");

echo "\n-- Testing stat() on filename stored inside an object --\n";
// dump the stat returned value
var_dump( stat($file_name->var_name) );

echo "\n-- Testing stat() on directory name stored inside an object --\n";
// dump the stat returned value
var_dump( stat($dir_name->var_name) );

echo "\n--- Done ---";
?>
--CLEAN--
<?php
$file_path = __DIR__;
unlink("$file_path/lstat_stat_variation18.tmp");
rmdir("$file_path/lstat_stat_variation18");
?>
--EXPECTF--
*** Testing stat() with filename & directory name stored inside an object ***

-- Testing stat() on filename stored inside an object --
array(26) {
  [0]=>
  int(%i)
  [1]=>
  int(%d)
  [2]=>
  int(%d)
  [3]=>
  int(%d)
  [4]=>
  int(%d)
  [5]=>
  int(%d)
  [6]=>
  int(%d)
  [7]=>
  int(%d)
  [8]=>
  int(%d)
  [9]=>
  int(%d)
  [10]=>
  int(%d)
  [11]=>
  int(%i)
  [12]=>
  int(%i)
  ["dev"]=>
  int(%i)
  ["ino"]=>
  int(%d)
  ["mode"]=>
  int(%d)
  ["nlink"]=>
  int(%d)
  ["uid"]=>
  int(%d)
  ["gid"]=>
  int(%d)
  ["rdev"]=>
  int(%i)
  ["size"]=>
  int(%d)
  ["atime"]=>
  int(%d)
  ["mtime"]=>
  int(%d)
  ["ctime"]=>
  int(%d)
  ["blksize"]=>
  int(%i)
  ["blocks"]=>
  int(%i)
}

-- Testing stat() on directory name stored inside an object --
array(26) {
  [0]=>
  int(%i)
  [1]=>
  int(%d)
  [2]=>
  int(%d)
  [3]=>
  int(%d)
  [4]=>
  int(%d)
  [5]=>
  int(%d)
  [6]=>
  int(%d)
  [7]=>
  int(%d)
  [8]=>
  int(%d)
  [9]=>
  int(%d)
  [10]=>
  int(%d)
  [11]=>
  int(%i)
  [12]=>
  int(%i)
  ["dev"]=>
  int(%i)
  ["ino"]=>
  int(%d)
  ["mode"]=>
  int(%d)
  ["nlink"]=>
  int(%d)
  ["uid"]=>
  int(%d)
  ["gid"]=>
  int(%d)
  ["rdev"]=>
  int(%i)
  ["size"]=>
  int(%d)
  ["atime"]=>
  int(%d)
  ["mtime"]=>
  int(%d)
  ["ctime"]=>
  int(%d)
  ["blksize"]=>
  int(%i)
  ["blocks"]=>
  int(%i)
}

--- Done ---
