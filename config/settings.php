<?php 

/************************************/
// Configuração Geral do Site
/************************************/

// NÃO ALTERAR NENHUMA INFORMACAO
if($_GET['url'] === ''){
	$url = 'home';
}else{
	$url = $_GET['url'];
}
// $url = (isset()) ? $_GET['url'] : 'home';
$url = array_filter(explode('/',$url));
$classbody = $url[0];
$file = $url[0].'.php';
// NÃO ALTERAR NENHUMA INFORMACAO


/************************************/
// Textos Gerais
/************************************/
$title_page = 'JPW TechDigital - Sua solução para evolução digital';
$site_name = 'JPW TechDigital';
$site_description = 'Somos uma empresa de tecnologia digital e inovação, comprometida em entregar os melhores resultados aos nossos clientes.
Focados em entregar soluções multiplataformas e ajudar sua empresa a se focar em seus próprios clientes em busca de melhores resultados.
Desenvolvemos sua loja virtual, e-commerce, gerenciamos sua campanha google ads, aumentaremos suas vendas, gerenciamos toda sua campanha de marketing inbound,
criação seu logo, seu cartão de visita, impulsionamos suas redes sociais';
$site_keywords = 'jpw tech, jpw, tech, solucao, evolucao, digital, google ads, adsword, desenvolvimento de sites, SEO, marketing de conteudo, sites empresariais, venda mais, loja virutal, e-commerce';



/************************************/
// Dados de Contato
/************************************/
$show_address = 1; // 1= exibe endereço ou 0= não exibe endereço
$address = 'Rua Gastão do Rego Monteiro';
$number = '666';
$cep = '05594030';
$distric = 'Jd. Bonfiglioli';
$city = 'São Paulo';
$state = 'São Paulo';
$complement = 'ap 211';

$phone = '(11) 9.8144-1704';
$cellphone = ''; // opcional - caso não houver deixe em branco com aspas simples '';
$email = 'contato@jpwtechdigital.com.br';



/************************************/
// Redes Sociais
/************************************/
//caso não houver deixe em branco dentro das aspas simples '';
$facebook = 'https://facebook.com/page';
$twitter = '';
$instagram = 'https://instagrarm.com/page';



/************************************/
// Plugins Adicionais - Colocar junto a tag <script>
/************************************/

// Google Analytics - Estatísticas
$google_analytics = "UA-169354743-1";

// Tawk.To - Chat Online
$tawkto = "<!--Start of Tawk.to Script-->
<script type='text/javascript'>
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement('script'),s0=document.getElementsByTagName('script')[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ee119a99e5f694422905097/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->";

?>