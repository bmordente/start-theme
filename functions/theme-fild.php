<?php

/* 
Modo de uso:

<?php //Retrieve Theme Options Data
global $options;
$options = get_option('p2h_theme_options');

echo $options['feedurl'];
echo $options['cleanfeedurls'];
?>

*/

$p2h_options = array (

//Informações sobre
array("name" => "Sobre",
		"type" => "section"),

array("name" => "Informações sobre",
		"type" => "section-desc"),
	
array("type" => "open"),

array("name" => "Telefone",
		"desc" => "Número para contato",
		"id" => "telefone",
		"type" => "text",
		"std" => ""),
		
array("name" => "Endereço de E-mail",
		"desc" => "Endere&ccedil;o de E-mail",
		"id" => "email",
		"type" => "text",
		"std" => ""),				

array("name" => "Endereço",
		"desc" => "Endere&ccedil;o",
		"id" => "endereco",
		"type" => "text",
		"std" => ""),				
		
array("type" => "close"),

//Redes Sociais
array("name" => "Redes Sociais",
		"type" => "section"),

array("name" => "Endere&ccedil;os das redes sociais",
		"type" => "section-desc"),
	
array("type" => "open"),

array("name" => "Twitter",
		"desc" => "Endere&ccedil;o completo do Twitter",
		"id" => "twitter_url",
		"type" => "text",
		"std" => ""),
		
array("name" => "Facebook",
		"desc" => "Endere&ccedil;o do Facebook",
		"id" => "facebook_url",
		"type" => "text",
		"std" => ""),				

array("name" => "YouTube",
		"desc" => "Endere&ccedil;o do YouTube",
		"id" => "youtube_url",
		"type" => "text",
		"std" => ""),				
		
array("type" => "close"),

//Rodape
array("name" => "Rodapé",
		"type" => "section"),

array("name" => "Configurações do Rodapé",
		"type" => "section-desc"),
	
array("type" => "open"),

array("name" => "Texto do rodapé",
		"desc" => "Insira o texto que será exibido no rodapé",
		"id" => "footer_text",
		"type" => "textarea",
		"std" => ""),
		
array("type" => "close"),


//Codigos de Rastreio
array("name" => "Códigos de rastreamento",
		"type" => "section"),

array("name" => "Insira os códigos de scripts de rastreamento aqui",
		"type" => "section-desc"),
	
array("type" => "open"),

array("name" => "Códigos de rastreamento",
		"desc" => "Você pode inserir os códigos de rastreamento do Google Analytics neste campo",
		"id" => "google_code",
		"type" => "textarea",
		"std" => ""),	

array("type" => "close")
);
?>