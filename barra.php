<link rel="stylesheet" type="text/css" href="styles/google.css">


<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'pt', includedLanguages: 'de,en,es,fr,it,pt', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="col d-flex flex-row">
						<div style="float: left;">
								<span id="google_translate_element"></span>
							</div>
						<?php /*
						<div class="phone">+45 345 3324 56789</div>
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						*/ ?>
						<div class="user_box ml-auto">
								
							<?php 
							if (isset($_SESSION['login'])) {
							?>
							<div class="user_box_login user_box_link"><a href="painel.php">Painel</a></div>
							<div class="user_box_login user_box_link"><a href="logout.php">logout</a></div>
							<?php
							} else {
							?>
							<div class="user_box_login user_box_link"><a href="login.php">login</a></div>
							<?php 
							}
							?>
						</div>
					</div>