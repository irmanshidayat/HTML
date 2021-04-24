<!DOCTYPE html>
<html>
<head>
	<title>Link pada HTML</title>
	<style type="text/css">
	/*text decoration none digunakan unntuk menghilangkan underline pada link*/
		ul li a{
			text-decoration: none;
		}
	</style>
</head>
<body>

	<p>Tag a untuk membuat link</p>
	<a href="gambar.HTML">Link Satu</a>
	<a href="https://www.detik.com/" target="_blank">Link Dua</a>
	<a href="https://twitter.com/login?lang=en">Link Tiga</a>

	<!-- type="circle" digunakan jika tidak ingin ada ordered list bulat polos -->
	<div class="menu">
		<ul type="circle"> 
			<li><a href="">Home</a></li>
			<li><a href="">About</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Galery</a></li>
		</ul>
	</div>
</body>
</html>