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

		<!-- Five -->
		<!--
			<section id="five" class="main style1">
				<div class="container">
					<header class="major special">
						<h2>Elements</h2>
					</header>

					<section>
						<h4>Text</h4>
						<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
						This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
						This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
						<hr />
						<header>
							<h4>Heading with a Subtitle</h4>
							<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
						</header>
						<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
						<header>
							<h5>Heading with a Subtitle</h5>
							<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
						</header>
						<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
						<hr />
						<h2>Heading Level 2</h2>
						<h3>Heading Level 3</h3>
						<h4>Heading Level 4</h4>
						<h5>Heading Level 5</h5>
						<h6>Heading Level 6</h6>
						<hr />
						<h5>Blockquote</h5>
						<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
						<h5>Preformatted</h5>
						<pre><code>i = 0;

while (!deck.isInOrder()) {
print 'Iteration ' + i;
deck.shuffle();
i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
					</section>

					<section>
						<h4>Lists</h4>
						<div class="row">
							<div class="6u 12u$(medium)">
								<h5>Unordered</h5>
								<ul>
									<li>Dolor pulvinar etiam.</li>
									<li>Sagittis adipiscing.</li>
									<li>Felis enim feugiat.</li>
								</ul>
								<h5>Alternate</h5>
								<ul class="alt">
									<li>Dolor pulvinar etiam.</li>
									<li>Sagittis adipiscing.</li>
									<li>Felis enim feugiat.</li>
								</ul>
							</div>
							<div class="6u$ 12u$(medium)">
								<h5>Ordered</h5>
								<ol>
									<li>Dolor pulvinar etiam.</li>
									<li>Etiam vel felis viverra.</li>
									<li>Felis enim feugiat.</li>
									<li>Dolor pulvinar etiam.</li>
									<li>Etiam vel felis lorem.</li>
									<li>Felis enim et feugiat.</li>
								</ol>
								<h5>Icons</h5>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
								</ul>
							</div>
						</div>
						<h5>Actions</h5>
						<div class="row">
							<div class="6u 12u$(medium)">
								<ul class="actions">
									<li><a href="#" class="button special">Default</a></li>
									<li><a href="#" class="button">Default</a></li>
								</ul>
								<ul class="actions small">
									<li><a href="#" class="button special small">Small</a></li>
									<li><a href="#" class="button small">Small</a></li>
								</ul>
								<ul class="actions vertical">
									<li><a href="#" class="button special">Default</a></li>
									<li><a href="#" class="button">Default</a></li>
								</ul>
								<ul class="actions vertical small">
									<li><a href="#" class="button special small">Small</a></li>
									<li><a href="#" class="button small">Small</a></li>
								</ul>
							</div>
							<div class="6u 12u$(medium)">
								<ul class="actions vertical">
									<li><a href="#" class="button special fit">Default</a></li>
									<li><a href="#" class="button fit">Default</a></li>
								</ul>
								<ul class="actions vertical small">
									<li><a href="#" class="button special small fit">Small</a></li>
									<li><a href="#" class="button small fit">Small</a></li>
								</ul>
							</div>
						</div>
					</section>

					<section>
						<h4>Table</h4>
						<h5>Default</h5>
						<div class="table-wrapper">
							<table>
								<thead>
									<tr>
										<th>Name</th>
										<th>Description</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Item One</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Two</td>
										<td>Vis ac commodo adipiscing arcu aliquet.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Three</td>
										<td> Morbi faucibus arcu accumsan lorem.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Four</td>
										<td>Vitae integer tempus condimentum.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Five</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="2"></td>
										<td>100.00</td>
									</tr>
								</tfoot>
							</table>
						</div>

						<h5>Alternate</h5>
						<div class="table-wrapper">
							<table class="alt">
								<thead>
									<tr>
										<th>Name</th>
										<th>Description</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Item One</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Two</td>
										<td>Vis ac commodo adipiscing arcu aliquet.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Three</td>
										<td> Morbi faucibus arcu accumsan lorem.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Four</td>
										<td>Vitae integer tempus condimentum.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Five</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="2"></td>
										<td>100.00</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</section>

					<section>
						<h4>Buttons</h4>
						<ul class="actions">
							<li><a href="#" class="button special">Special</a></li>
							<li><a href="#" class="button">Default</a></li>
						</ul>
						<ul class="actions">
							<li><a href="#" class="button big">Big</a></li>
							<li><a href="#" class="button">Default</a></li>
							<li><a href="#" class="button small">Small</a></li>
						</ul>
						<ul class="actions fit">
							<li><a href="#" class="button fit">Fit</a></li>
							<li><a href="#" class="button special fit">Fit</a></li>
							<li><a href="#" class="button fit">Fit</a></li>
						</ul>
						<ul class="actions fit small">
							<li><a href="#" class="button special fit small">Fit + Small</a></li>
							<li><a href="#" class="button fit small">Fit + Small</a></li>
							<li><a href="#" class="button special fit small">Fit + Small</a></li>
						</ul>
						<ul class="actions">
							<li><a href="#" class="button special icon fa-download">Icon</a></li>
							<li><a href="#" class="button icon fa-download">Icon</a></li>
						</ul>
						<ul class="actions">
							<li><span class="button special disabled">Disabled</span></li>
							<li><span class="button disabled">Disabled</span></li>
						</ul>
					</section>

					<section>
						<h4>Form</h4>
						<form method="post" action="#">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
								</div>
								<div class="12u$">
									<div class="select-wrapper">
										<select name="demo-category" id="demo-category">
											<option value="">- Category -</option>
											<option value="1">Manufacturing</option>
											<option value="1">Shipping</option>
											<option value="1">Administration</option>
											<option value="1">Human Resources</option>
										</select>
									</div>
								</div>
								<div class="4u 12u$(small)">
									<input type="radio" id="demo-priority-low" name="demo-priority" checked>
									<label for="demo-priority-low">Low</label>
								</div>
								<div class="4u 12u$(small)">
									<input type="radio" id="demo-priority-normal" name="demo-priority">
									<label for="demo-priority-normal">Normal</label>
								</div>
								<div class="4u$ 12u$(small)">
									<input type="radio" id="demo-priority-high" name="demo-priority">
									<label for="demo-priority-high">High</label>
								</div>
								<div class="6u 12u$(small)">
									<input type="checkbox" id="demo-copy" name="demo-copy">
									<label for="demo-copy">Email me a copy</label>
								</div>
								<div class="6u$ 12u$(small)">
									<input type="checkbox" id="demo-human" name="demo-human" checked>
									<label for="demo-human">Not a robot</label>
								</div>
								<div class="12u$">
									<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
								</div>
								<div class="12u$">
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>

					<section>
						<h4>Image</h4>
						<h5>Fit</h5>
						<div class="box alt">
							<div class="row uniform 50%">
								<div class="12u"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
							</div>
						</div>
						<h5>Left &amp; Right</h5>
						<p><span class="image left"><img src="images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
						<p><span class="image right"><img src="images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
					</section>

				</div>
			</section>
		-->

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