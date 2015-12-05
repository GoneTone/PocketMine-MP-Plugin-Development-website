<!DOCTYPE HTML>
<!--
	Photon by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>PocketMine-MP 插件開發網 - REH.TW</title>
		<link rel="shortcut icon" href="favicon.ico" />
		<meta name="keywords" content="PocketMine-MP 插件開發網,phar 轉 zip,zip 轉 phar,反編譯phar,編譯phar,解編phar,[REH]改革旋風 - REH.TW,REH.TW,旋風之音,改革旋風" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		
		<meta name="og:description" content="輕鬆解包打包phar插件"/>
		<meta property="og:title" content="PocketMine-MP 插件開發網 - REH.TW"/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="http://pm.reh.tw"/>
		<meta property="og:image" content="http://www.reh.tw/image/logo.png"/>
		<meta property="og:site_name" content="PocketMine-MP 插件開發網 - REH.TW"/>
		
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<div class="inner">
					<span class="icon major fa-cloud"></span>
					<h1>PocketMine-MP 插件開發網 - REH.TW</h1>
					<p>輕鬆解包打包phar插件</p>
					<p>本網站由 <a href="http://twitter.com/PEMapModder" target="_blank">PEMapModder</a> 開發的 <a href="http://pmt.mcpe.me/" target="_blank">http://pmt.mcpe.me/</a> 修改。</p>
					<ul class="actions">
						<li><a href="#one" class="button scrolly">開始</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style1">
				<div class="container">
					<div class="row 150%">
						<div class="6u 12u$(medium)">
							<header class="major">
								<h2>phar打包器</h2>
							</header>
							<p>
							<h3>使用說明：</h3>
							    <ol>
							        <li>當然，首先要寫好你的插件</li>
							        <li>將你的文件整理成正確的結構</li>
							        <li>製作一個ZIP壓縮文件並將你的文件放進去</li>
							        <li>最後，開始上傳文件(注意，生成完畢後點擊藍色的here下載)</li>
							    </ol>
								<form method="post" action="http://pmt.mcpe.me/phar-result.php" enctype="multipart/form-data">
								    <p><input type="file" name="file"></p>
							</p>
						</div>
						<div class="6u$ 12u$(medium) important(medium)">
							<p>特殊 (保留默認值，除非特殊情況):
							<input type="text" name="stub" value="&lt;?php __HALT_COMPILER();" size="32">		</p>
							<p>使用以下方法的插件: <br>
							<div class="4u 12u$(small)">
							    <input type="checkbox" id="tune_top_namespace_optimization" name="tune_top_namespace_optimization">
								<label for="tune_top_namespace_optimization">
							    通過添加一個
							    <code>\</code> 前綴，以表明它是一個頂部空間參考優化函數調用和恆定參考。<br>
								</label>
						    </div>
							<div class="4u 12u$(small)">
							    <input type="checkbox" id="tune_obfuscation" name="tune_obfuscation"> <label for="tune_obfuscation">加密代碼</label>
							</div>
							</p>
							<p><font color="#8b0000">警告：使用任何的曲調條紋可以在你的
							代碼中 <em>除了</em> PHP文檔註釋
							或行註釋的所有註釋。</font></p>
							<p>
							進行下列檢查過： <br>
							<div class="4u 12u$(small)">
							    <input type="checkbox" id="inspection_classpath" name="inspection_classpath"> <label for="inspection_classpath">檢查類路徑</label>
							</div>
							<div class="4u 12u$(small)">
							    <input type="checkbox" id="inspection_bad_practice" name="inspection_bad_practice"> <label for="inspection_bad_practice">掃瞄壞習慣</label>
							</div>
							<div class="4u 12u$(small)">
							    <input type="checkbox" id="inspection_lint" name="inspection_lint"> <label for="inspection_lint">語法錯誤皮棉掃瞄</label>
							</div>
							</p>
							<p><input type="submit" value="打包"></p>
						</form>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="main style2">
				<div class="container">
					<div class="row 150%">
						<div class="6u$ 12u$(medium)">
							<header class="major">
								<h2>phar解包</h2>
							</header>
							<p>
							    <form method="post" action="http://pmt.mcpe.me/unpharResult.php" enctype="multipart/form-data">
							        <p>在這裡上傳phar文件：<br><input type="file" name="file" accept=".phar"></p>
							        <p><input type="submit" value="解包"></p>
							    </form>
							</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="main style1 special">
				<div class="container">
					<header class="major">
						<h2><code>var_dump</code> 調試輸出↓</h2>
					</header>
					<p>
					    <form action="http://pmt.mcpe.me/varDumpResult.php" method="post"><input type="submit">&nbsp;請粘貼你的 <code>var_dump</code> 輸出在下方，並點擊提交按鈕.<br>
					        <b>警告: </b>確保你不會從轉換行結束如： <code>\r\n</code> to <code>\n/\r</code> 或者開始，如： <code>\n/\r</code> to <code>\r\n</code>!<br>
					        <textarea name="jump" rows="30" cols="150"></textarea>
					    </form>
					</p>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="main style2 special">
				<div class="container">
					<header class="major">
						<h2>免責聲明</h2>
					</header>
					<p>
<p>這項服務是提供完全免費的，並不能保證始終可用。</p>
<p>本網站（http://pm.reh.tw）不以任何方式隸屬於PocketMine-MP（http://pocketmine.net），由PocketMine團隊開發了一個開源項目，或的Minecraft：PE，遊戲由軟件開發Mojang。</p>
<p>我們（這個網站的擁有者）不將舉行負責有關違反版權和其他違法違規行為的任何行為。在下載的文件中的所有內容，使用上傳文件或使用本網站的軟件要麼產生。</p>
				    </p>
					<ul class="actions uniform">
						<li><a href="http://www.reh.tw" class="button special" target="_blank">REH.TW 團隊官網</a></li>
						<li><a href="https://github.com/GoneTone/PocketMine-MP-Plugin-Development-website" class="button" target="_blank">GitHub</a></li>
					</ul>
				</div>
			</section>

		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="https://twitter.com/p290227161" class="icon alt fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/reh.tw.sw" class="icon alt fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
					<li><a href="https://github.com/GoneTone/PocketMine-MP-Plugin-Development-website" class="icon alt fa-github" target="_blank"><span class="label">GitHub</span></a></li>
					<li><a href="mailto:team@reh.tw" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li><?php include("http://www.reh.tw/php/copyright.php"); ?> <a href="http://reh.tw" target="_blank">REH.TW</a></li><li>All rights reserved.</li><br>
					本網站由 <a href="http://twitter.com/PEMapModder" target="_blank">PEMapModder</a> 開發的 <a href="http://pmt.mcpe.me/" target="_blank">http://pmt.mcpe.me/</a> 修改。
				</ul>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>