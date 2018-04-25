<?php
if (isset($_POST['Enviar'])) {
  
  //Variaveis de POST, Alterar somente se necessário 
  //====================================================
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  //====================================================
  
  //REMETENTE --&gt; ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
  //==================================================== 
  $email_remetente = $email; // deve ser uma conta de email do seu dominio 
  //====================================================
  
  //Configurações do email, ajustar conforme necessidade
  //==================================================== 
  $email_destinatario = 'contato@labmellow.com.br'; // pode ser qualquer email que receberá as mensagens
  $email_reply = $email; 
  $email_assunto = "Contato de ".$_POST['nome']; // Este será o assunto da mensagem
  //====================================================
  
  //Monta o Corpo da Mensagem
  //====================================================
  $email_conteudo = "$nome \n"; 
  $email_conteudo .= "$email \n";
  $email_conteudo .= "$mensagem \n"; 
  //====================================================
  
  //Seta os Headers (Alterar somente caso necessario) 
  //==================================================== 
  $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
  //====================================================
  
  //Enviando o email 
  //==================================================== 
  if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ $msg = "E-mail enviado com sucesso!";  }else{  $msg = "Tivemos um problema ao enviar sua mensagem :-("; } 
  //====================================================
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IEMobile 7 ]> <html dir="ltr" lang="en-US"class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html dir="ltr" lang="en-US" class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="en-US" class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="en-US" class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/Organization" dir="ltr" lang="pt-BR" prefix="og: http://ogp.me/ns#" class="no-js"><!--<![endif]-->
<head>
	<title>We are Mellow. We build ideas.</title>
	
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" /> 
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />

	<link rel="canonical" href="http://www.labmellow.com.br" />

	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content=">We are Mellow. We build ideas." />
	<meta property="og:description" content="Mellow Agency specializes in software architecture, mobile app development services for iOS and Android, web dev, mobile design, and digital strategy." />
	<meta property="og:url" content="http://www.labmellow.com.br" />
	<meta property="og:site_name" content="Mellow" />
	<meta property="og:image" content="http://www.labmellow.com.br/facebook.png" />
	
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="HandheldFriendly" content="true" />

  <!--       <link rel="apple-touch-icon" sizes="57x57" href="favicon-57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon-114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon-72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon-144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon-60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon-120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon-76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon-152.png"> -->

        <!-- SEO -->

        <meta name="audience" content="all" />
        <meta name="keywords" content="mellow, labmellow, mellow studio, estúdio, desenvolvimento, website, e-commerce, website responsivo, sistemas, aplicativos, aplicações web" />
        <meta name="description" content="Mellow Agency specializes in software architecture, mobile app development services for iOS and Android, web dev, mobile design, and digital strategy." />
        <meta name="author" content="Mellow" />
        <meta name="copyright" content="Mellow" />
        <meta name="resource-type" content="Document" />
        <meta name="distribution" content="Global" />
        <meta name="robots" content="index, follow, ALL" />
        <meta name="GOOGLEBOT" content="index, follow" />
        <meta name="rating" content="General" />
        <meta name="revisit-after" content="2 Days" />
        <meta name="language" content="pt-br" />

<!--         <link rel="shortcut icon" href="" type="image/x-icon" />
	<link rel="apple-touch-icon" href=""> -->
	<link rel="shortcut icon" type="image/png" href="http://www.labmellow.com.br/favico.png" />

	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7&appId=599384393561456";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<link rel="stylesheet" href="http://www.labmellow.com.br/css/default.css" type="text/css" media="all" />
	<link rel="stylesheet" href="http://www.labmellow.com.br/style.css" type="text/css" media="all" />

	<script src="http://www.labmellow.com.br/js/jquery-latest.js"></script>
	<script src="http://www.labmellow.com.br/js/modernizr.js" type="text/javascript"></script>    
	<script src="http://www.labmellow.com.br/js/selectivizr.js" type="text/javascript"></script>  
	<script src="http://www.labmellow.com.br/js/html5shiv.js" type="text/javascript"></script>  
	<script src="http://www.labmellow.com.br/js/html5shiv-printshiv.js" type="text/javascript"></script>    
	<script src="http://www.labmellow.com.br/js/functions.js" type="text/javascript"></script>  

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-83246722-1', 'auto');
		ga('send', 'pageview');
	</script>

	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MXP4MN"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MXP4MN');</script>
	<!-- End Google Tag Manager -->
</head>
<body>
	<div id="wrap">
		<header class="fixed">
			<?php include("./menu.php"); ?>
		</header>
		<header>
			<?php include("./menu.php"); ?>
		</header>
		<main>
			<section id="webdoor">
				<div class="flex">
					<div class="flex100">
						<div class="wrap">
							<h1>Hi! We are Mellow.</h1>
							<p>Mellow specializes in software architecture, mobile app development services for iOS and Android, web dev, mobile design, and digital strategy.</p>
							<a href="javascript:void(0)" rel="scroll" title="Conheça-nos" class="btn btn_default">know us better</a>
						</div>
					</div>
				</div>
				<a href="javscript:void(0)" rel="scroll">scroll down</a>
			</section>
			<style type="text/css">
				#webdoor::before{background-image:url(http://www.labmellow.com.br/img/banner.png);}
			</style>
			<section id="o-que-fazemos">
				<div class="wrap flex">
					<h2 class="flex100"><span>What we build?</span></h2>
					<ul class="flex flex100">
						<li class="flex33">
							<i class="mellow-iphone-streamline"></i>
							<h3>APPS</h3>
							<p>We build APPS that solve real problems on different platforms.</p>
						</li>
						<li class="flex33">
							<i class="mellow-computer-imac-2"></i>
							<h3>Systems</h3>
							<p>We build robust systems according to the needs of our customers.</p>
						</li>
						<li class="flex33">
							<i class="mellow-browser-streamline-window"></i>
							<h3>Websites</h3>
							<p>We build websites and e-commerce for all platforms.</p>
						</li>
					</ul>
				</div>
			</section>
<!-- 			<section id="nossos-trabalhos">
				<div class="wrap flex">
					<h2 class="flex100"><span>Nossos trabalhos</span></h2>
					<ul class="flex flex100">
						<li class="flex33">
							<a href=""><img src="http://www.labmellow.com.br/img/sassy_logo.png" alt="" /></a>
						</li>
						<li class="flex33">
							<a href=""><img src="http://www.labmellow.com.br/img/2014_colonial_logo.png" alt="" /></a>
						</li>
						<li class="flex33">
							<a href=""><img src="http://www.labmellow.com.br/img/mam_logo.png" alt="" /></a>
						</li>
						<li class="flex33">
							<a href=""><img src="http://www.labmellow.com.br/img/munchkin_logo.png" alt="" /></a>
						</li>
					</ul>
				</div>
			</section> -->
			<section id="contato">
				<div class="wrap flex">
					<h2 class="flex100"><span>Talk to us!</span></h2>
					<form class="flex100 form" action="<?php $PHP_SELF; ?>" method="POST" name="formulario" id="formulario">
						<div class="flex">
							<span class="flex100">
								<input name="nome" type="text" placeholder="Name" required="required" />
							</span>
							<span class="flex100">
								<input name="email" type="email" placeholder="E-mail" required="required" />
							</span>
							<span class="flex100">
								<textarea name="mensagem" placeholder="Message" required="required"></textarea>
							</span>
							<span class="flex100 flex">
								<input name="Enviar" type="submit" value="Send" />
							</span>                               
						</div>
						<?php if($msg){ echo "<p>".$msg."</p>"; } ?>
					</form>
				</div>
			</section>
		</main>
	</div>
	<footer>
		<div class="wrap flex">
			<div class="flex30">
				<a title="Mellow" href="javascript:void(0)" rel="home">
					<img src="http://www.labmellow.com.br/img/logo_g.png" alt="Mellow" />
				</a>
			</div>
			<div class="flex70 flex">
				<p>© <?php echo date("Y"); ?> Mellow _ All rights reserved.</p>
				<div class="fb-like" data-href="https://www.facebook.com/labmellow/" data-layout="button_count" data-action="recommend" data-size="large" data-show-faces="false" data-share="false"></div>
			</div>         
		</div>	
	</footer>
</body>
</html>