<?php 
$articleText="Albert Einstein is known all over the world as a brilliant theoretical physicist and the founder of the theory of relativity. He is perhaps the greatest scientist of the 20th century. Some of his ideas made possible the atomic bomb, as well as television and other inventions.He was born in 1879 in a small German town. The Einstein family soon moved to Munich, where Albert went to school. Neither his parents, nor his school teachers thought much of his mental abilities. His uncle often joked: \" Not everybody is born to become a professor.\" In 1895 Albert failed the entrance examination to a technical college in Zurich. A year later, however, he managed to pass the exam and entered the college."; 
$articleLink=''; 
$articletmp= $articleText; 
$articletmp= mb_strimwidth($articletmp, 0, 200); 
$articletmp = rtrim($articletmp, "!,.-"); 
$massArticle=explode(" ",$articletmp);
$link=" ".$massArticle[count($massArticle)-3]." ".$massArticle[count($massArticle)-2]." ".$massArticle[count($massArticle)-1]."...";
$countSimbolsLink=strlen($link);
$articleLink= mb_strimwidth($articletmp, 0, (strlen($articletmp)-$countSimbolsLink)+2);
$articleLinkGET="article.php\?article=$articleText";
$articleLink=$articleLink."<a href='$articleLinkGET'>$link</a>";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h3> Сокращенный текст статьи </h3>
<?=$articleLink;?>
</body>
</html>