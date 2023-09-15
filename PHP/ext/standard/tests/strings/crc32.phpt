--TEST--
crc32() function
--FILE--
<?php
$input = array("foo", "bar", "baz", "grldsajkopallkjasd");
foreach($input AS $i) {
    printf("%u\n", crc32($i));
}
printf("%u\n", crc32("1234567890123456"));
printf("%u\n", crc32("1234567890123456abc"));
printf("%u\n", crc32("12345678901234561234567890123456"));
printf("%u\n", crc32("12345678901234561234567890123456abc"));
printf("%u\n", crc32("123456789012345612345678901234561234567890123456"));
printf("%u\n", crc32("123456789012345612345678901234561234567890123456abc"));
printf("%u\n", crc32("1234567890123456123456789012345612345678901234561234567890123456"));
printf("%u\n", crc32("1234567890123456123456789012345612345678901234561234567890123456abc"));
printf("%u\n", crc32("12345678901234561234567890123456123456789012345612345678901234561234567890123456"));
printf("%u\n", crc32("12345678901234561234567890123456123456789012345612345678901234561234567890123456abc"));
printf("%u\n", crc32("12345678901234561234567890123456123456789012345612345678901234561234567890123456123456789012345612345678901234561234567890123456"));
printf("%u\n", crc32("12345678901234561234567890123456123456789012345612345678901234561234567890123456123456789012345612345678901234561234567890123456abc"));
printf("%u\n", crc32("123456789012345612345678901234561234567890123456123456789012345612345678901234561234567890123456123456789012345612345678901234561234567890123456"));
printf("%u\n", crc32("123456789012345612345678901234561234567890123456123456789012345612345678901234561234567890123456123456789012345612345678901234561234567890123456abc"));
?>
--EXPECT--
2356372769
1996459178
2015626392
824412087
509595063
1890929711
156217630
941689929
1939457775
2213121284
522627406
3806880586
105010221
1135881371
640556525
3081003972
3751918510
1076024698