<?php include("lib/header.php");?>

<?php 
function getnews()
{
	global $bdd;
	$req=$bdd->prepare("SELECT * FROM news");
	$req->execute();
	$news = $req->fetchAll();
	return $news;
}
$news=getnews();
	foreach ($news as $new) { ?>
<div class="newsglobdiv">
	<h2><?php echo $new['news_title']; ?></h2>
	<h3><?php if($new['news_type']==1)
	{
		echo "S4league";
	}
	elseif ($new['news_type']==1) {
		echo "Minecraft";
	}
	?></h3>
	<p><?php echo $new['news_textmini'];?></p>
	<span>Postée le <?php echo $new['news_date'];?></span>
</div>
<?php
	
};
?>



</body>