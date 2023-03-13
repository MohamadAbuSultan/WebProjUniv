<?php

$text = "I do not love Coder Shiyar";
echo strlen($text);

echo"<br>";

$text_count_word = str_word_count($text);
echo $text_count_word;

echo"<br>";

$text_strrev = strrev($text);
echo $text_strrev;

echo"<br>";

$text_strops = strpos($text,"Coder");
echo $text_strops;

echo"<br>";

$text_replace = str_replace('do not',"don't",$text);
echo $text_replace;

echo"<br>";

$text_trim = trim($text);
echo $text_trim;

echo"<br>";

// var_dump($text_strops);
echo $text;

/* شرح-تلخيص
 strlen(text)   يقوم بإعادة عدد احرف البيانات مخزنة ضمن متغير من نوع نصي
 str_word_count(text) من خلال هذا عنصر يمكنك معرفة عدد كلمات البيانات مخزنة ضمن متغير 
 strrev(text) هذا عنصر يقوم بعكس الأحرف ، عكس الكلمات
 من خلال هذا عنصر يمكنك بحث عن كلمة او جملة في بيانات مخزنة ضمن المتغير
 strops(text,search_value)

 من خلال هذا عنصر يمكنك استبدال كلمة او جملة من بيانات
  المخزنة ضمن المتغير بجملة او كلمة أخرى
str_replace()


هذا عنصر يقوم بحذف الفراغات في البداية والنهاية البيانات النصي
trim()
*/

?>