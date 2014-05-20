<?php include("lib/header.php");?>
<?php function getnews($news_type)
{
	global $bdd;
	$req=$bdd->prepare("SELECT * FROM news WHERE id=1");
	$req->execute();
	$news = $req->fetchAll();
	return $news;
}
$news=getnews();
	foreach ($news as $new) { ?>
<div class="newsglobdiv">
	<h2><?php echo $new['news_title']; ?></h2>
	<h3><?php echo "S4league";
	?></h3>
	<p><?php echo $new['news_textmini'];?></p>
	<span>Postée le <?php echo $new['news_date'];?></span>
</div>
<?php
	
};
?>
</body>