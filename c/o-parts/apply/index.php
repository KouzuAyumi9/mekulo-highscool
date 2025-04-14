<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';
$cur_page = 'top';
include_once $company_base . '!data.php';
include_once $highschool_base . 'circle.php';

//====================
// ページのメタデータ
$title = $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$keywords = '';//メタキーワードをここに挿入
$description = '';//メタディスクリプションをここに挿入

$canonical_url = 'https://works.mekulo.jp/highschool/' . $co['slug'] . '/';

$og_image = 'https://works.mekulo.jp/ogp-image.png';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php //include $base . '../tracking.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $highschool_base ?>highschool.css?v=2">
<link rel="icon" href="<?= $base ?>mekulo-works-mark.png">
<link rel="canonical" href="<?= $canonical_url ?>">
<title><?= $title_with_site ?></title>
<?php if ($description) { ?>
<meta name="description" content="<?= $description ?>">
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?= $keywords ?>">
<?php } ?>
<meta property="og:type" content="article">
<meta property="og:title" content="<?= $title_with_site ?>">
<?php if ($description) { ?>
<meta property="og:description" content="<?= $description ?>">
<?php } ?>
<meta property="og:url" content="<?= $canonical_url ?>">
<meta property="og:image" content="<?= $og_image ?>">
<meta property="fb:app_id" content="534360210586966">
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [{
		"@type": "ListItem",
		"position": 1,
		"name": "めくろうワークス",
		"item": "https://works.mekulo.jp/"
	},{
		"@type": "ListItem",
		"position": 2,
		"name": "高卒特集",
		"item": "https://works.mekulo.jp/highschool/"
	},{
		"@type": "ListItem",
		"position": 3,
		"name": "<?= $co['company_name'] ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/"
	}]
}
</script>

</head>
<body class="highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
<main>
<div class="fv_wr">
	<img alt="" class="fv_image" src="../firstview.jpg">
	<div class="apply">
		<h1 class="catch"><?= $co['company_name'] ?></h1>
		<p class="tag">応募前見学ページ</p>
	</div>
</div>
<section id="visit1" class="content">
	<p class="catchcopy"><span>精密加工の世界を体感！オーパーツのものづくり見学ツアー</span></p>
	<p class="cont">
		オーパーツの応募前見学では、アーチェリーの照準器や高級オーディオ機器の部品、半導体製造装置のパーツなど、0.001mm（1000分の1ミリ）の精度が求められる超精密加工を行っている工場を見学できます。<br>
		その中で、ミクロン単位の精密加工の現場を見学し、繊細な職人技が光る加工の様子をじっくり観察できるほか、機械加工とプログラミングの関係を学び、どのようにプログラムを組んで機械を動かすのかをお伝えさせていただきます。<br>
		機械やものづくりに興味がある人、プログラミングにもチャレンジしたい人にぴったりの見学会！ぜひ、オーパーツの現場を訪れ、自分の未来を想像してみませんか？
	</p>
	<div class="opendate">
		<p>開催日時</p>
		<ul>
			<li>2025年8月4日 （月）13時00分～</li>
			<li>2025年8月5日 （火）13時00分～</li>
			<li>2025年8月6日 （水）13時00分～ </li>
			<li>2025年8月7日（金） 13時00分～</li>
		</ul>
	</div>
	<div class="flow">
		<p>見学の流れ</p>
		<ul>
			<li>会社説明<span>20分</span></li>
			<li>工場見学<span>20分</span></li>
			<li>ものづくり体験<span>30分</span></li>
		</ul>
	</div>
	<a href="../apply/#entry" class="entry-btn">
		<img src="../../../flag.png" class="flag">
		<span>応募前見学情報を見る</span>
		<img src="../../../arrow.svg">
	</a>
</section>
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="../tab.js"></script>
<script src="../page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<?php //include $base . '../footer.php' ?>
</body>
