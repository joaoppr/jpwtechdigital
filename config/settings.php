<?php 

/************************************/
// Configuração Geral do Site
/************************************/

// NÃO ALTERAR NENHUMA INFORMACAO
$url = (isset($_GET['url'])) ? $_GET['url']:'home';
$url = array_filter(explode('/',$url));

$classbody = $url[0];
$file = $url[0].'.php';
// NÃO ALTERAR NENHUMA INFORMACAO


/************************************/
// Textos Gerais
/************************************/
$title_page = 'JPW Tech - Sua solução para evolução digital';
$site_name = 'JPW Tech';
$site_description = 'Somos uma empresa de tecnologia digital e inovação, comprometida em entregar os melhores resultados aos nossos clientes.
Focados em entregar soluções multiplataformas e ajudar sua empresa a se focar em seus próprios clientes em busca de melhores resultados.';
$site_keywords = 'jpw tech, jpw, tech, solucao, evolucao, digital';



/************************************/
// Dados de Contato
/************************************/
$show_address = 1; // 1= exibe endereço ou 0= não exibe endereço
$address = 'Endereço Completo';
$number = '100';
$cep = '14077220';
$distric = 'Bairro';
$city = 'Ribeirão Preto';
$state = 'São Paulo';
$complement = 'Casa 1 - Ap 101';

$phone = '(16) 9.9274-7526';
$cellphone = ''; // opcional - caso não houver deixe em branco com aspas simples '';
$email = 'contato@innsystem.com.br';



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
$google_analytics = "";

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