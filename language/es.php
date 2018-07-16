<?php
/*****************************************************************************************************************************/
/* BASIC                                                                                                                    */
/*****************************************************************************************************************************/
	$urlLOCAL="http://localhost/KRUGER/NOE/neweb/";
	$url="http://noesushibar.com/nuevo/";
	$nameCompany="Noe Sushi Bar";
	$descripCompany="El mejor sushi de la ciudad";
	$author="@jmanuelrangel";
	$botonVerMas="show me more...";
	$social=array(
		"instagram_link"=>"https://www.instagram.com/noesushibar/",
		"facebook_link"=>"https://www.facebook.com/noesushibar/",
		"twitter_link"=>"https://twitter.com/noesushibar",
		"tripadvisor_link"=>"https://www.tripadvisor.com/Restaurant_Review-g294308-d779794-Reviews-Noe_Sushi_Bar-Quito_Pichincha_Province.html",
		"youtube_link"=>"https://www.youtube.com/channel/UCuqqicPmZb7nPt1pPZf4vkg",
		);
	$rights=array(
		"text"=>"All Rights Reserved",
		"year"=>date('Y'),
		);
/*****************************************************************************************************************************/
/* MENU                                                                                                                      */
/*****************************************************************************************************************************/
	$menu_0=array("title"=>"Inicio","link"=>"es/",);
	$menu_1=array("title"=>"Menú","link"=>"es/menu/",);
	$menu_2=array("title"=>"Locales","link"=>"es/#locales",);
	$menu_3=array("title"=>"Nosotros","link"=>"es/nosotros",);
	$menu_4=array("title"=>"#Noesushilovers","link"=>"https://www.instagram.com/explore/tags/noesushilovers/?hl=es-la",);
	$menu_5=array("title"=>"Escríbenos","link"=>"es/escribenos",);
	
	$menu_6=array("title"=>"Trabaja en Noe","link"=>"http://www.sushicorp.ec/trabajaconnosotros/",);
/*****************************************************************************************************************************/
/* INDEX                                                                                                                     */
/*****************************************************************************************************************************/	
	$intro=array(
		"video"=>"media/video/rollo-guayas.mp4",
		"img"=>"media/video/rollo-guayas.jpg",
		"center"=>"",
	);
/*****************************************************************************************************************************/
/* LOCALES                                                                                                                 	*/
/*****************************************************************************************************************************/
	/*QUITO*/
	$local1=array(
		"nombre"=>"Mall El Jardin",
		"codigo"=>"mall-el-jardin",
		"direccion"=>"Centro Comercial Mall El Jardin Patio de Comida. Quito, Ecuador.",
		"horario"=>"Lunes a Jueves: 12h00 a 23h00 | Viernes y Sábado: 12h00 a 23h30 | Domingo: 12h00 a 22h00",
		"gps_link"=>"https://goo.gl/maps/CjegaBN4tRM2?utm_source=NoeSushiBarMallElJardin",
		"reservar_link"=>"#"
		);
	$local2=array(
		"nombre"=>"Cumbayá",
		"codigo"=>"cumbaya",
		"direccion"=>"Manabí 255 y Francisco de Orellana Parque Central. Cumbayá, Ecuador.",
		"horario"=>"Lunes a Jueves: 12h00 a 23h00 | Viernes y Sábado: 12h00 a 23h30 | Domingo: 12h00 a 22h00",
		"gps_link"=>"https://goo.gl/maps/nPMLqcLqjrr?utm_source=NoeSushiBarCumbaya",
		"reservar_link"=>"#"
		);
	$local3=array(
		"nombre"=>"Quicentro Shopping",
		"codigo"=>"quicentro",
		"direccion"=>"Centro Comercial Quicentro Shopping Patio de Comidas. Quito, Ecuador",
		"horario"=>"Lunes a Jueves: 12h00 a 23h00 | Viernes y Sábado: 12h00 a 23h30 | Domingo: 12h00 a 22h00",
		"gps_link"=>"https://goo.gl/maps/KixM6X6vf9A2?utm_source=NoeSushiBarQuicentro",
		"reservar_link"=>"#"
		);
	$local4=array(
		"nombre"=>"San Luis Shopping",
		"codigo"=>"sanluis",
		"direccion"=>"San Luis Shopping. San Rafael, Ecuador",
		"gps_link"=>"https://goo.gl/maps/pzLaKUiiK772?utm_source=NoeSushiBarSanRafael",
		"horario"=>"Lunes a Jueves: 12h00 a 23h00 |Viernes y Sábado: 12h00 a 23h30 | Domingo: 12h00 a 22h00",
		"reservar_link"=>"#"
		);
	$local5=array(
		"nombre"=>"Isabel La Católica",
		"codigo"=>"lacatolica",
		"direccion"=>"Isabel la Católica N24-6274 y Coruña. Quito, Ecuador.",
		"gps_link"=>"https://goo.gl/maps/zsas9WArHr72?utm_source=NoeSushiBarIsabelLaCatolica",
		"horario"=>"Lunes a Jueves: 12h00 a 23h00 | Viernes y Sábado: 12h00 a 23h30 | Domingo: 12h00 a 22h00",
		"reservar_link"=>"#"
		);
	$local6=array(
		"nombre"=>"Scala",
		"codigo"=>"scala",
		"direccion"=>"Centro Comercial Scala Shopping Local L151 Planta Baja. Cumbayá, Ecuador",
		"horario"=>"Lunes a Jueves: 12h00 a 23h00 | Viernes y Sábado: 12h00 a 23h30 | Domingo: 12h00 a 22h00",
		"gps_link"=>"https://goo.gl/maps/dABwgNS6Vpz?utm_source=NoeSushiBarScala",
		"reservar_link"=>"#"
		);
	$local7=array(
		"nombre"=>"Plaza las Américas",
		"codigo"=>"americas",
		"direccion"=>"Av. República y Naciones Unidas. Quito, Ecuador",
		"gps_link"=>"https://goo.gl/maps/UVTCvr9QodG2?utm_source=NoeSushiBarPlazaLasAmericas",
		"horario"=>"Lunes a Jueves: 12h00 a 23h00 | Viernes y Sábado: 12h00 a 23h30 | Domingo: 12h00 a 22h00",
		"reservar_link"=>"#"
		);
	/*GUAYAQUIL*/
	$local8=array(
		"nombre"=>"Mall Del Sol",
		"codigo"=>"mall-del-sol",
		"direccion"=>"Av. Juan Tanca Marengo y Joaquin Orrantia. Guayaquil, Ecuador",
		"gps_link"=>"https://goo.gl/maps/XxnPui75vZS2?utm_source=NoeSushiBarMallDelSol",
		"horario"=>"Lunes a Jueves: 12h00 a 23h00 | Viernes y Sábado: 12h00 a 23h30 | Domingo: 12h00 a 22h00",
		"reservar_link"=>"#"
		);
	$local9=array(
		"nombre"=>"San Marino Shopping",
		"codigo"=>"sanmarino",
		"direccion"=>"San Marino Shopping Local 31-32-33 Pb. Guayaquil, Ecuador",
		"gps_link"=>"https://goo.gl/maps/W4cHL7Ran852?utm_source=NoeSushiBarSanMarino",
		"horario"=>"Lunes a Jueves: 12h00 a 23h00 | Viernes y Sábado: 12h00 a 23h30 | Domingo: 12h00 a 22h00",
		"reservar_link"=>"#"
		);
	$local10=array(
		"nombre"=>"Bocca",
		"codigo"=>"bocca",
		"direccion"=>"Paseo Comercial Bocca via Samborondon. Guayaquil",
		"gps_link"=>"https://goo.gl/maps/QTxNU2VgKQL2?utm_source=NoeSushiBarBocca",
		"horario"=>"Lunes a Jueves: 12h00 a 23h00 |Viernes y Sábado: 12h00 a 23h30 | Domingo: 12h00 a 22h00",
		"reservar_link"=>"#"
		);
	$local11=array(
		"nombre"=>"Padre Julio Matovelle",
		"codigo"=>"matovelle",
		"direccion"=>"Padre Julio Matovelle 2-25 y Federico Proaño, esquina. Junto al Parque de Las Candelas. Cuenca, Ecuador.",
		"horario"=>"Lunes a Jueves: 12h00 a 23h00 | Viernes y Sábado: 12h00 a 23h30 | Domingo: 12h00 a 22h00",
		"gps_link"=>"https://goo.gl/maps/ypztPkTBAc82?utm_source=NoeSushiBarCuenca",
		"reservar_link"=>"#"
		);
/*****************************************************************************************************************************/
/* NOSOTROS                                                                                                                     */
/*****************************************************************************************************************************/	
	$nosotros=array(
		"video"=>"media/video/nosotros.mp4",
		"img"=>"media/video/nosotros.jpg",
		"center"=>"",
		"h1"=>"Nosotros",
		"p1"=>"Noe Carmona, Chef Ejecutivo y creador de más del 70% de los platos que presentamos, fusiona  de manera extraordinaria la tradicional gastronomía japonesa con el paladar ecuatoriano, complementado con una presentación verdaderamente creativa y visualmente artística.",
		
	);
/*****************************************************************************************************************************/
/* MENU                                                                                                                     	*/
/*****************************************************************************************************************************/
	/*CLASES*/
	$cartaClase=array(
		"1"=>"Sugerencias del Chef",
		"1-link"=>"sugerencias-del-chef",
		"2"=>"Ensaladas",
		"2-link"=>"ensaladas",
		"3"=>"Entradas Frías",
		"3-link"=>"entradas-frias",
		"4"=>"Sopas",
		"4-link"=>"sopas",
		"5"=>"Entradas Calientes",
		"5-link"=>"entradas-calientes",
		"6"=>"Rollos Tradicionales",
		"6-link"=>"rollos-tradicionales",
		"7"=>"Rollos Especiales",
		"7-link"=>"rollos-especiales",
		"8"=>"Conos",
		"8-link"=>"conos",
		"9"=>"Sushi - Sashimi",
		"9-link"=>"sushi-sashimi",
		"10"=>"Sushi Especial",
		"10-link"=>"sushi-especial",
		"11"=>"Combinaciones Especiales",
		"11-link"=>"combinaciones-especiales",
		"12"=>"Bonsai Sushi Sashimi",
		"12-link"=>"bonsai-sushi-sashimi",
		"13"=>"Carnes",
		"13-link"=>"carnes",
		"14"=>"Teriyaki",
		"14-link"=>"teriyaki",
		"15"=>"Tepanyaki",
		"15-link"=>"tepanyaki",
		"16"=>"Mariscos",
		"16-link"=>"mariscos",
		"17"=>"Acompañantes",
		"17-link"=>"acompanantes",
		"18"=>"Postres",
		"18-link"=>"postres",
		);
	$toolTipCarta="Haz clic para conocer mas sobre este plato y sus opciones";
	/*SUGERENCIAS DEL CHEF*/
	$carta1=array(
			"link"=>"es/sugerencias-del-chef/gyozas-tako-ebi/1/",
			"clase"=>"Sugerencias del Chef",
			"nombre"=>"Gyozas Tako Ebi",
			"descripcion"=>"Dumplings rellenos de pulpo y camarones, aderezados con finas hierbas, jengibre y soya. Levemente doradas a la parrilla y bañadas con una salsa cítrica japonesa y sésamo negro.",
			"img"=>"media/img/menu/sugerencias-del-chef/gyozas-tako-ebi/",
			"precioRegular"=>"7.90",
			"status"=>"Activo",
			);
	$carta2=array(
			"link"=>"es/sugerencias-del-chef/ramen-marino/2/",
			"clase"=>"Sugerencias del Chef",
			"nombre"=>"Ramen Marino",
			"descripcion"=>"Presentamos una ligera sopa japonesa, elaborada con fideos orientales, mejillón importado y exquisitos camarones. El exótico toque spicy lo da el jengibre rallado.",
			"img"=>"media/img/menu/sugerencias-del-chef/ramen-marino/",
			"precioRegular"=>"9.90",
			"status"=>"Activo",
			);
	$carta3=array(
			"link"=>"es/sugerencias-del-chef/rollo-sake-kani-kimiyaki/3/",
			"clase"=>"Sugerencias del Chef",
			"nombre"=>"Rollo Sake Kani Kimiyaki",
			"descripcion"=>"Delicioso rollo preparado con salmón a la parrilla y aguacate, cubierto con cangrejo y caviar. Degústelo acompañado con una delicada salsa de mostaza y anguila.",
			"img"=>"media/img/menu/sugerencias-del-chef/rollo-sake-kani-kimiyaki/",
			"precioRegular"=>"10.90",
			"status"=>"Activo",
			);
	$carta4=array(
			"link"=>"es/sugerencias-del-chef/rollo-kani-unagui/4/",
			"clase"=>"Sugerencias del Chef",
			"nombre"=>"Rollo Kani Unagui",
			"descripcion"=>"Nos gusta crear sabores nuevos para ti. Por eso tomamos los mejores granos de café y les agregamos jugo de maracuyá para obtener una salsa energizante destinada a bañar un rollo elaborado con kani, anguila crocante, maqueño dorado en su punto y un toque de queso gratinado con kimiyaki. ",
			"img"=>"media/img/menu/sugerencias-del-chef/rollo-kani-unagui/",
			"precioRegular"=>"7.90",
			"status"=>"Activo",
			);
	$carta5=array(
			"link"=>"es/sugerencias-del-chef/udon-sake-yaki/5/",
			"clase"=>"Sugerencias del Chef",
			"nombre"=>"Udon Sake Yaki",
			"descripcion"=>"Jugoso salmón al grill con camarones y salsa de cebollín, servido sobre udon salteado al wok con verduras al estilo japonés.",
			"img"=>"media/img/menu/sugerencias-del-chef/udon-sake-yaki/",
			"precioRegular"=>"21.55",
			"status"=>"Activo",
			);
	$carta6=array(
			"link"=>"es/plato/6/",
			"clase"=>"Sugerencias del Chef",
			"nombre"=>"Dulce Degustación",
			"descripcion"=>"Te invitamos a deleitar esta exquisita variedad: trufa de chocolate orgánico rellena de almendra tostada y bañada en salsa de chocolate coronada con nueces; delicado bocado de cheesecake; cono de wantán relleno de banana caramelizada y manjar  con nueces; el exótico sabor del maracuyá  en helado y el perfecto cierre con un irresistible pie de limón",
			"img"=>"media/img/menu/sugerencias-del-chef/dulce-degustacion/",
			"precioRegular"=>"6.90",
			"status"=>"Activo",
			);
	$carta7=array(
			"link"=>"es/sugerencias-del-chef/aperol-gin-spritz/7/",
			"clase"=>"Sugerencias del Chef",
			"nombre"=>"Aperol Gin Spritz",
			"descripcion"=>"Cierra los ojos, toma un bocado y déjalo en tu boca un momento para sentir el sabor de la naranja ligeramente amarga y la canela. Lo disfrutas como quien da un beso en el aeropuerto a esos amores que despedimos sin fecha de retorno.",
			"img"=>"media/img/menu/sugerencias-del-chef/aperol-gin-spritz/",
			"precioRegular"=>"9.90",
			"status"=>"Activo",
			);
	$carta8=array(
			"link"=>"es/sugerencias-del-chef/aperol-gin/8/",
			"clase"=>"Sugerencias del Chef",
			"nombre"=>"Aperol Gin",
			"descripcion"=>"¡Un splash de sabores! Frutos rojos bañados  en aperol, ginebra y agua mineral saborizada con cedrón de nuestro huerto.",
			"img"=>"media/img/menu/sugerencias-del-chef/aperol-gin/",
			"precioRegular"=>"9.90",
			"status"=>"Activo",
			);
	$carta9=array(
			"link"=>"es/sugerencias-del-chef/gin-mandarin/9/",
			"clase"=>"Sugerencias del Chef",
			"nombre"=>"Gin Mandarín",
			"descripcion"=>"Nos fuimos hasta Ambato en busca de las mandarinas más pequeñas, dulces y coquetas. Las fusionamos con la mejor selección de ginebra y le dimos vida a un nuevo consentido.",
			"img"=>"media/img/menu/sugerencias-del-chef/gin-mandarin/",
			"precioRegular"=>"9.90",
			"status"=>"Activo",
			);
	
	/*ENSALADAS*/

	$carta11=array(
		"link"=>"es/ensaladas/de-la-casa/11/",
		"clase"=>"Ensaladas",
		"nombre"=>"De la Casa con frutos del Mar",
		"descripcion"=>"Espectacular mezcla de mar y tierra servida con una exótica salsa del chef",
		"img"=>"media/img/menu/ensaladas/de-la-casa-con-frutos-del-mar/",
		"precioRegular"=>"18.50",
		"status"=>"Activo",
		);
	$carta12=array(
		"link"=>"es/ensaladas/kani-seaweed/12/",
		"clase"=>"Ensaladas",
		"nombre"=>"Kani Seaweed Salad",
		"descripcion"=>"Fresca y crujiente combinación de cangrejo, algas, achogchas marinadas, aguacate toragashi y caviar servido con salsa de mostaza y miel.",
		"img"=>"media/img/menu/ensaladas/kani-seaweed-salad/",
		"precioRegular"=>"9.90",
		"status"=>"Activo",
		);
	$carta13=array(
		"link"=>"es/ensaladas/oriental/13/",
		"clase"=>"Ensaladas",
		"nombre"=>"Oriental",
		"descripcion"=>"Fresca variedad de lechugas, combinadas con pollo o salmón a la parilla, aderezada con una delicada salsa de frutas al estilo japonés.",
		"img"=>"media/img/menu/ensaladas/oriental/",
		"precioRegular"=>"14.15",
		"status"=>"Activo",
		);
	$carta14=array(
		"link"=>"es/ensaladas/taco-salad/14/",
		"clase"=>"Ensaladas",
		"nombre"=>"Taco Salad",
		"descripcion"=>"Exquisita ensalada con pulpo. Extraordinario sabor y textura para disfrutar de principio a fin.",
		"img"=>"media/img/menu/ensaladas/taco-salad/",
		"precioRegular"=>"11.95",
		"status"=>"Activo",
		);
	$carta15=array(
		"link"=>"es/ensaladas/tuna-salad/15/",
		"clase"=>"Ensaladas",
		"nombre"=>"Tuna Salad",
		"descripcion"=>"Nutritivos cortes de atún o salmón macerado a la parilla, sobre frescas lechugas y aderezado con una salsa única de especies orientales.",
		"img"=>"media/img/menu/ensaladas/tuna-salad/",
		"precioRegular"=>"15.85",
		"status"=>"Activo",
		);	
	/*Entradas Frias*/
	$carta21=array(
		"link"=>"es/entradas-frias/atun-tataki/21/",
		"clase"=>"Entradas Frías",
		"nombre"=>"Atún Tataki",
		"descripcion"=>"Delicadas láminas del mejor atún y la exótica salsa que lo acompaña.",
		"img"=>"media/img/menu/entradas-frias/atun-tataki/",
		"precioRegular"=>"12.55",
		"status"=>"Activo",
		);
	$carta22=array(
		"link"=>"es/entradas-frias/ebi-kimitsu/22/",
		"clase"=>"Entradas Frías",
		"nombre"=>"Ebi Kimitsu",
		"descripcion"=>"Creep oriental de arroz relleno de langostinos a la parilla, vegetales salteados a su punto perfecto y aderezado con una salsa hecha de togarashi, soya y ajonjolí.",
		"img"=>"media/img/menu/entradas-frias/ebi-kimitsu/",
		"precioRegular"=>"11.15",
		"status"=>"Activo",
		);
	$carta23=array(
		"link"=>"es/entradas-frias/kani-tartar/23/",
		"clase"=>"Entrada Fría",
		"nombre"=>"Kani Tartar",
		"descripcion"=>"Fresca entrada de pangora, sazonada con exóticas especias orientales, acompañada de salsa soya, aceite de oliva y servida sobre una base de aguacate.",
		"img"=>"media/img/menu/entradas-frias/kani-tartar/",
		"precioRegular"=>"19.90",
		"status"=>"Activo",
		);
	$carta24=array(
		"link"=>"es/entradas-frias/lomo-tataki/24/",
		"clase"=>"Entradas Frías",
		"nombre"=>"Lomo Tataki",
		"descripcion"=>"Delicioso y colorido plato hecho con lomo fino macerado y semiasado, servido con salsa del chef.",
		"img"=>"media/img/menu/entradas-frias/lomo-tataki/",
		"precioRegular"=>"9.95",
		"status"=>"Activo",
		);
	$carta25=array(
		"link"=>"es/entradas-frias/noe-tataki/25/",
		"clase"=>"Entradas Frías",
		"nombre"=>"Noe Tataki",
		"descripcion"=>"Pescado, mariscos y lomo fino semiasados y macerados, servidos con una ligera salsa del chef.",
		"img"=>"media/img/menu/entradas-frias/noe-tataki/",
		"precioRegular"=>"16.95",
		"status"=>"Activo",
		);
	$carta26=array(
		"link"=>"es/entradas-frias/tako-tataki/26/",
		"clase"=>"Entradas Frías",
		"nombre"=>"Tako Tataki",
		"descripcion"=>"Pulpo macerado con salsa de soya, vinagre, sake, togarashi y cebollín.",
		"img"=>"media/img/menu/entradas-frias/tako-tataki/",
		"precioRegular"=>"10.55",
		"status"=>"Activo",
		);
	$carta27=array(
		"link"=>"es/entradas-frias/toni-doki/27/",
		"clase"=>"Entradas Frías",
		"nombre"=>"Toni - Doki",
		"descripcion"=>"Finas rebanadas de atún, salmón y pesca blanca, glaseadas con aceite de olvia,y especias joponesas.",
		"img"=>"media/img/menu/entradas-frias/toni-doki/",
		"precioRegular"=>"13.75",
		"status"=>"Activo",
		);


	
	/*SOPAS*/
	$carta31=array(
		"link"=>"es/sopas/kamazuki/31/",
		"clase"=>"Sopas",
		"nombre"=>"Kamazuki",
		"descripcion"=>"La mezcla perfecta de langostino, calamar y salmón, perfumando con coco y un toque de caviar.",
		"img"=>"media/img/menu/sopas/kamazuki/",
		"precioRegular"=>"12.90",
		);
	$carta32=array(
		"link"=>"es/sopas/kani-soup/32/",
		"clase"=>"Sopas",
		"nombre"=>"Kani Soup",
		"descripcion"=>"Directo de las altas palmeras de la costa ecuatoriana hemos extraído el agua de coco para crear una sopa donde los camarones danzan con cortes delicados de salmón, adornados con finas hierbas orientales. Un dulce final, salsa de anguila, te dejarán deseando más.",
		"img"=>"media/img/menu/sopas/kani-soup/",
		"precioRegular"=>"12.90",
		);
	$carta33=array(
		"link"=>"es/sopas/masakari/33/",
		"clase"=>"Sopas",
		"nombre"=>"Masakari",
		"descripcion"=>"Clásica sopa de mariscos al estilo japonés.",
		"img"=>"media/img/menu/sopas/masakari/",
		"precioRegular"=>"12.50",
		);
	$carta34=array(
		"link"=>"es/sopas/mizono/34/",
		"clase"=>"Sopas",
		"nombre"=>"Mizono",
		"descripcion"=>"Ligera sopa al estilo Noe con frutos del mar, champiñones y togarahi.",
		"img"=>"media/img/menu/sopas/mizono/",
		"precioRegular"=>"9.90",
		);
	$carta35=array(
		"link"=>"es/sopas/suimono/35/",
		"clase"=>"Sopas",
		"nombre"=>"Suimono",
		"descripcion"=>"Sutil mezcla de pollo,chamipiñones y wakame en fondo de dashi.",
		"img"=>"media/img/menu/sopas/suimono/",
		"precioRegular"=>"6.95",
		"status"=>"Activo",
		);
	$carta36=array(
		"link"=>"es/sopas/sumashi/36/",
		"clase"=>"Sopas",
		"nombre"=>"Sumashi",
		"descripcion"=>"Fusión japonesa-ecuatoriana, hecha con pangora, pesca blanca, calamar, pulpo y langostino.",
		"img"=>"media/img/menu/sopas/sumashi/",
		"precioRegular"=>"9.90 (Desde)",
		"precio2"=>"13.90 (Grande)",
		);
	$carta37=array(
		"link"=>"es/sopas/yosenabe/37/",
		"clase"=>"Sopas",
		"nombre"=>"Yosenabe",
		"descripcion"=>"Sopa desarrollada a nuestro estilo, con vegetales frescos, salmón, frutos de m ar y fideos cristalinos. La cocción perfecta en fondo dashi, perfumada con ajonjolí y togarashi.",
		"img"=>"media/img/menu/sopas/yosenabe/",
		"precioRegular"=>"11.50",
		);

	
	/*ENTRADAS CALIENTES*/
	$carta41=array(
		"link"=>"es/entradas-calientes/by-fay-tu/41/",
		"clase"=>"Entradas Calientes",
		"nombre"=>"By Fay Tu",
		"descripcion"=>"Un estilo oriental de saltear y gratinar con salsa de caviar.",
		"img"=>"media/img/menu/entradas-calientes/by-fay-tu/",
		"precioRegular"=>"8.85 (Desde)",
		"precioRegular2"=>"
		<table class='col-12 col-sm-6 mt-4 text-light'>
			<tbody>
				<tr>
				  <th scope='row'>Camarón</th>
				  <td>8.85</td>
				  <td>14.75</td>
				</tr>
				<tr>
				  <th scope='row'>Pulpo</th>
				  <td>9.55</td>
				  <td>15.90</td>
				</tr>
				<tr>
				  <th scope='row'>Pangora</th>
				  <td>11.70</td>
				  <td>19.50</td>
				</tr>
			</tbody>
		</table>
		",
		);
	$carta42=array(
		"link"=>"es/entradas-calientes/ebi-yaki-amai/42/",
		"clase"=>"Entradas Calientes",
		"nombre"=>"Ebi Yaki Amai",
		"descripcion"=>"Insuperables camarones crujientes pankonizados, recubiertos con papa al estilo oriental y servido sobre bastoncitos de vegetales salteados.",
		"img"=>"media/img/menu/entradas-calientes/ebi-yaki-amai/",
		"precioRegular"=>"8.75",
		);
	$carta43=array(
		"link"=>"es/entradas-calientes/mizutako/43/",
		"clase"=>"Entradas Calientes",
		"nombre"=>"Mizutako",
		"descripcion"=>"Para los amantes del pulpo pueden disfrutarlo macerado en especias orientales y al grill, acompañado de vegetales salteados y una salsa avinagrada de soya.",
		"img"=>"media/img/menu/entradas-calientes/mizutako/",
		"precioRegular"=>"9.55 (Desde)",
		);
	$carta44=array(
		"link"=>"es/entradas-calientes/kobe-yaki/44/",
		"clase"=>"Entradas Calientes",
		"nombre"=>"Kobe Yaki",
		"descripcion"=>"Rollo a la parilla hecho con lomo fino relleno de langostino semipicante, servido con una suave salsa teriyaki y vegetales salteados.",
		"img"=>"media/img/menu/entradas-calientes/kobe-yaki/",
		"precioRegular"=>"16.65",
		);
	$carta45=array(
		"link"=>"es/entradas-calientes/crepe-ebi-yaki/45/",
		"clase"=>"Entradas Calientes",
		"nombre"=>"Crepe Ebi Yaki",
		"descripcion"=>"Frescos y jugosos camarones salteados a las finas hierbas, envueltos en una crepe y gratinados con nuestra salsa de ajonjolí y soya.",
		"img"=>"media/img/menu/entradas-calientes/crepe-ebi-yaki/",
		"precioRegular"=>"10.75",
		);
	$carta46=array(
		"link"=>"es/entradas-calientes/sal,om-tamanegui/46/",
		"clase"=>"Entradas Calientes",
		"nombre"=>"Salmón Tamanegui",
		"descripcion"=>"Dorados medallones de salmón fresco tipo tataki, servidos con una salsa de almendras y cebollitas crocantes.",
		"img"=>"media/img/menu/entradas-calientes/salmon-tamanegui/",
		"precioRegular"=>"11.55",
		);
	/*ROLLO TRADICIONALES*/
	$carta51=array(
		"link"=>"es/rollos-tradicionales/california/51/",
		"clase"=>"Rollos Tradicionales",
		"nombre"=>"California",
		"descripcion"=>"El conocido rollo California, preparado a nuestro estilo.",
		"img"=>"media/img/menu/rollos-tradicionales/california/",
		"precioRegular"=>"5.55 (Desde)",
		);
	$carta52=array(
		"link"=>"es/rollos-tradicionales/filadelfia/52/",
		"clase"=>"Rollos Tradicionales",
		"nombre"=>"Filadelfia",
		"descripcion"=>"Salmón, espárragos, aguacate y un toque de queso crema.",
		"img"=>"media/img/menu/rollos-tradicionales/filadelfia/",
		"precioRegular"=>"6.10 (Desde)",
		);
	$carta53=array(
		"link"=>"es/rollos-tradicionales/sake-maki/53/",
		"clase"=>"Rollos Tradicionales",
		"nombre"=>"Sake Maki",
		"descripcion"=>"Tradicional rollo de salmón fresco.",
		"img"=>"media/img/menu/rollos-tradicionales/sake-maki/",
		"precioRegular"=>"5.15 (Desde)",
		);
	$carta54=array(
		"link"=>"es/rollos-tradicionales/tekka-maki/54/",
		"clase"=>"Rollos Tradicionales",
		"nombre"=>"Tekka Maki",
		"descripcion"=>"Tradicional rollo de atún fresco.",
		"img"=>"media/img/menu/rollos-tradicionales/tekka-maki/",
		"precioRegular"=>"6.30 (Desde)",
		);
	$carta55=array(
		"link"=>"es/rollos-tradicionales/yasai-maki/55/",
		"clase"=>"Rollos Tradicionales",
		"nombre"=>"Yasai Maki",
		"descripcion"=>"Crocante rollo de vegetales y queso crema a su elección.",
		"img"=>"media/img/menu/rollos-tradicionales/yasai-maki/",
		"precioRegular"=>"4.65 (Desde)",
		);
	/*ROLLO ESPECIALES*/
	$carta61=array(
		"link"=>"es/rollos-especiales/ebi-yaki-roll/61/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Ebi Yaki Roll",
		"descripcion"=>"Camarón a la parrilla combinado con algas marinas, sobre una cobertura crocante que encierra los sabores del salmón ahumado, cangrejo y caviar. Acompañado con salsa de kiwi y naranja.",
		"img"=>"media/img/menu/rollos-especiales/ebi-yaki-roll/",
		"precioRegular"=>"16.25",
		);
	$carta62=array(
		"link"=>"es/rollos-especiales/kanebi/62/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Kanebi",
		"descripcion"=>"Delicioso y exótico rollo elaborado con langostino, cangrejo, pulpo salteado y caviar. Sobre una delicada salsa de naranja, soya y miso.",
		"img"=>"media/img/menu/rollos-especiales/kanebi/",
		"precioRegular"=>"9.20 (Desde)",
		);
	$carta63=array(
		"link"=>"es/rollos-especiales/anguila-especial/63/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Anguila Especial",
		"descripcion"=>"Elaborado con anguila crocante, cubierto con una fina capa de aguacate, acompañado con nuestra espectacular salsa de anguila.",
		"img"=>"media/img/menu/rollos-especiales/anguila-especial/",
		"precioRegular"=>"9.40 (Desde)",
		);
	$carta64=array(
		"link"=>"es/rollos-especiales/kani-kama-especial/64/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Kani-Kama Especial",
		"descripcion"=>"Novedoso y espectacular rollo hecho con salmón a la parrilla, cubierto con puré de papa al estilo japonés y gratinado con kanikama. Acompañado de una ligera salsa de mostaza.",
		"img"=>"media/img/menu/rollos-especiales/kani-kama-especial/",
		"precioRegular"=>"13.75",
		);
	$carta65=array(
		"link"=>"es/rollos-especiales/atun-especial/65/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Atún Especial",
		"descripcion"=>"Para los amantes del atún, este insuperable rollo de atún fresco a la parrilla, relleno de cangrejo. Todo esto gratinado y acompañado de una salsa especial de la casa.",
		"img"=>"media/img/menu/rollos-especiales/atun-especial/",
		"precioRegular"=>"9.10 (Desde)",
		);
	$carta66=array(
		"link"=>"es/rollos-especiales/ebi-hirame-roll/66/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Ebi Hirame Roll",
		"descripcion"=>"Camarón semipicante llevado al grill y gratinado con salsa kimiyaki, acompañado de duo de salsas de anguila y maracuyá.",
		"img"=>"media/img/menu/rollos-especiales/ebi-hirame-roll/",
		"precioRegular"=>"9.35",
		);
	$carta67=array(
		"link"=>"es/rollos-especiales/ebi-katsuo/67/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Ebi Katsuo",
		"descripcion"=>"Maki crocante relleno de langostino semipicante , ikura con un toque de queso crema. Cubierto con katsuo y bañado con salsa especial de la casa.",
		"img"=>"media/img/menu/rollos-especiales/ebi-katsuo/",
		"precioRegular"=>"8.45 (Desde)",
		);
	$carta68=array(
		"link"=>"es/rollos-especiales/flambe-roll/68/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Flambé Roll",
		"descripcion"=>"Langostinos crocantes, aguacate y queso crema. Toda esta novedad, flambeada con sake en su mesa.",
		"img"=>"media/img/menu/rollos-especiales/flambe-roll/",
		"precioRegular"=>"7.35 (Desde)",
		);
	$carta69=array(
		"link"=>"es/rollos-especiales/ebi-sakana-yaki/69/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Ebi Sakana Yaki",
		"descripcion"=>"Rollo especial con camarones gratinados, merito empanizado y nuestra insuperable salsa de maracuyá.",
		"img"=>"media/img/menu/rollos-especiales/ebi-sakana-yaki/",
		"precioRegular"=>"10.55",
		);
	$carta70=array(
		"link"=>"es/rollos-especiales/sake-sakana-yaki/70/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Sake Sakana Yaki",
		"descripcion"=>"Rollo de salmón fresco relleno con cangrejo, aguacate y lenguado marinado pankonizado, servido con una deliciosa salsa japonesa.",
		"img"=>"media/img/menu/rollos-especiales/sake-sakana-yaki/",
		"precioRegular"=>"9.35",
		);
	$carta71=array(
		"link"=>"es/rollos-especiales/ebi-takoshi/71/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Ebi Takoshi",
		"descripcion"=>"Rollo de pulpo a la plancha relleno de langostino crocante con ajonjoli negro, cubierto con masago y tobiko, acompañado de salsa de maracuyá.",
		"img"=>"media/img/menu/rollos-especiales/ebi-takoshi/",
		"precioRegular"=>"8.45 (Desde)",
		);
	$carta72=array(
		"link"=>"es/rollos-especiales/tokio-roll/72/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Tokio Roll",
		"descripcion"=>"Rollo a nuestro estilo, tempurizado y relleno con langostino semipicante.",
		"img"=>"media/img/menu/rollos-especiales/tokio-roll/",
		"precioRegular"=>"6.80 (Desde)",
		);
	$carta73=array(
		"link"=>"es/rollos-especiales/centolla-kimi-yaki/73/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Centolla Kimi-Yaki",
		"descripcion"=>"La mejor forma para degustarla es este rollo elaborado con salmón a la parrilla, cubierto con centolla y gratinado. Acompañado de una delicada salsa de mostaza y miel.",
		"img"=>"media/img/menu/rollos-especiales/centolla-kimi-yaki/",
		"precioRegular"=>"18.75",
		);
	$carta74=array(
		"link"=>"es/rollos-especiales/ebi-kino-yaki/74/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Ebi Kino Yaki",
		"descripcion"=>"Espectacular rollo elaborado con camarones salteados en salsa de la casa, cubierto con crepes y gratinado con salsa de ajonjolí y quinua.",
		"img"=>"media/img/menu/rollos-especiales/ebi-kino-yaki/",
		"precioRegular"=>"10.45",
		);
	$carta75=array(
		"link"=>"es/rollos-especiales/filadelfia-especial/75/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Filadelfia Especial",
		"descripcion"=>"Salmón fresco, espárragos, aguacate, queso crema y cubierto con caviar.",
		"img"=>"media/img/menu/rollos-especiales/filadelfia-especial/",
		"precioRegular"=>"6.30 (Desde)",
		);
	$carta76=array(
		"link"=>"es/rollos-especiales/kani-kiuri-maki/76/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Kani Kiuri Maki",
		"descripcion"=>"Rollo hecho con láminas de pepinillo, cangrejo, caviar masago y aguacate (6 bocados).",
		"img"=>"media/img/menu/rollos-especiales/kani-kiuri-maki/",
		"precioRegular"=>"11.65",
		);
	$carta77=array(
		"link"=>"es/rollos-especiales/kumbaya/77/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Kumbayá",
		"descripcion"=>"Fusión ecuatoriana-japonesa con kani-kama, salmón fresco, aguacate, langostino y queso crema.",
		"img"=>"media/img/menu/rollos-especiales/kumbaya/",
		"precioRegular"=>"6.80 (Desde)",
		);
	$carta78=array(
		"link"=>"es/rollos-especiales/kokonattsu-roll/78/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Kokonattsu Roll",
		"descripcion"=>"Una delicia cubierta con un jugoso salteado oriental de frutos de mar y un toque crocante de coco.",
		"img"=>"media/img/menu/rollos-especiales/kokonattsu-roll/",
		"precioRegular"=>"8.80",
		);
	$carta79=array(
		"link"=>"es/rollos-especiales/sake-kani-yaki/79/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Sake Kani Yaki",
		"descripcion"=>"Un delicioso rollo de salmón fresco, queso crema y pangora salteada con nuestra deliciosa salsa de mostaza al estilo oriental y gratinado con salsa kimiyaki (6 bocados).",
		"img"=>"media/img/menu/rollos-especiales/sake-kani-yaki/",
		"precioRegular"=>"14.35",
		);
	$carta80=array(
		"link"=>"es/rollos-especiales/jukushi-tako/80/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Jukushi Tako",
		"descripcion"=>"Exótico rollo japones-ecuatoriano, elaborado con pulpo, cangrejo tempura y queso crema, cubierto con algas marinas y maduro crocante. Bañado en salsa de anguila.",
		"img"=>"media/img/menu/rollos-especiales/jukushi-tako/",
		"precioRegular"=>"8.85 (Desde)",
		);
	$carta81=array(
		"link"=>"es/rollos-especiales/rock-and-roll/81/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Rock & Roll",
		"descripcion"=>"Maki de cangrejo con queso crema y aguacate, cubierto con anguila, servido con salsa especial del chef.",
		"img"=>"media/img/menu/rollos-especiales/rock-and-roll/",
		"precioRegular"=>"10.55 (Desde)",
		);
	$carta82=array(
		"link"=>"es/rollos-especiales/rollo-shinkai/82/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Rollo Shinkai",
		"descripcion"=>"Suave, caliente y único, cangrejo salteado con champiñones envuelto en una crepe y gratinado, acompañado de una salsa de la casa.",
		"img"=>"media/img/menu/rollos-especiales/rollo-shinkai/",
		"precioRegular"=>"11.35",
		);
	$carta83=array(
		"link"=>"es/rollos-especiales/kani-seaweed/83/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Kani Seaweed",
		"descripcion"=>"Colorido y crocante rollo de langostino, cubierto con algas marinas, cangrejo y caviar.",
		"img"=>"media/img/menu/rollos-especiales/kani-swaweed/",
		"precioRegular"=>"9.10 (Desde)",
		);
	$carta84=array(
		"link"=>"es/rollos-especiales/kaori-roll/84/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Kaori Roll",
		"descripcion"=>"Rollo de pulpo y langostino, cubierto con pesca blanca, salmón, tobiko y salsa de ajonjolí, acompañado de vegetales tempura.",
		"img"=>"media/img/menu/rollos-especiales/kaori-roll/",
		"precioRegular"=>"8.75 (Desde)",
		);
	$carta85=array(
		"link"=>"es/rollos-especiales/mushitako/85/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Mushitako",
		"descripcion"=>"Cristalizando sabores, déjese tentar por este rollo de juliana de pulpo y ajonjolí, con un toque agridulce de taxo (6 bocados).",
		"img"=>"media/img/menu/rollos-especiales/mushitako/",
		"precioRegular"=>"10.85",
		);
	$carta86=array(
		"link"=>"es/rollos-especiales/nori-roll/86/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Nori Roll",
		"descripcion"=>"Rollo tempurizado relleno con langostino, salmón y un toque de queso crema, acompañado de su salsa especial de Nori.",
		"img"=>"media/img/menu/rollos-especiales/nori-roll/",
		"precioRegular"=>"12.65",
		);
	$carta87=array(
		"link"=>"es/rollos-especiales/noe-especial/87/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Noe Especial (El de la Casa)",
		"descripcion"=>"Rollo original al grill, relleno con langostino semipicante, queso crema, cubierto con salmón, cebollín y gratinado con salsa de caviar.",
		"img"=>"media/img/menu/rollos-especiales/noe-especial/",
		"precioRegular"=>"8.35 (Desde)",
		);
	$carta88=array(
		"link"=>"es/rollos-especiales/guayas/88/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Guayas",
		"descripcion"=>"Elaborado con lenguado pankonizado, banano gratinado, pangora caviar y queso crema, acompañado de nuestras insuperables salsas de anguila y maracuyá. ¡Una verdadera delicia!.",
		"img"=>"media/img/menu/rollos-especiales/guayas/",
		"precioRegular"=>"8.55",
		);
	$carta89=array(
		"link"=>"es/rollos-especiales/sake-kani-especial/89/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Sake-kani Especial",
		"descripcion"=>"Elaborado con una cobertura de salmón, relleno de cangrejo, aguacate y caviar tobiko.",
		"img"=>"media/img/menu/rollos-especiales/sake-kani-especial/",
		"precioRegular"=>"11.95",
		);
	$carta90=array(
		"link"=>"es/rollos-especiales/harusame-roll/90/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Harusame Roll",
		"descripcion"=>"Incomparable rollo tempurizado relleno de cangrejo y aguacate, cubierto con harusame y masago, bañado con una delicada salsa de la casa.",
		"img"=>"media/img/menu/rollos-especiales/harusame-roll/",
		"precioRegular"=>"8.05 (Desde)",
		);
	$carta91=array(
		"link"=>"es/rollos-especiales/passion-roll/91/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Passion Roll",
		"descripcion"=>"Maki Espectacular rollo relleno de camarón tempurizado, espárragos gratinados y pulpo bañado con una salsa de maracuyá.",
		"img"=>"media/img/menu/rollos-especiales/passion-roll/",
		"precioRegular"=>"8.05 (Desde)",
		);
	$carta92=array(
		"link"=>"es/rollos-especiales/kani-mizutaki/92/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Kani Mizutaki",
		"descripcion"=>"Rollo semipicante relleno de pangora, cubierto con finas láminas de salmón y gratinado con una salsa de ajonjolí especial.",
		"img"=>"media/img/menu/rollos-especiales/kani-mizutaki/",
		"precioRegular"=>"12.55 (Desde)",
		);
	$carta93=array(
		"link"=>"es/rollos-especiales/pangora-especial/93/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Pangora Especial",
		"descripcion"=>"Rollo relleno de scallops, cola amarilla, cubierto con pangora, cebollín, especias orientales y caviar tobiko.",
		"img"=>"media/img/menu/rollos-especiales/pangora-especial/",
		"precioRegular"=>"11.65 (Desde)",
		);
	$carta94=array(
		"link"=>"es/rollos-especiales/sake-yama/94/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Sake-Yama",
		"descripcion"=>"Espectacular rollo elaborado con cangrejo, aguacate y salmón gratinado, sobre salsa de maracuyá y anguila.",
		"img"=>"media/img/menu/rollos-especiales/sake-yama/",
		"precioRegular"=>"11.95",
		);
	$carta95=array(
		"link"=>"es/rollos-especiales/nubori/95/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Nubori",
		"descripcion"=>"Una deliciosa combinación de anguila y langostinos tempurizados, cubierta con kani-kama; acompañado de sus dos salsas: anguila y salsa de pimiento verde con miel.",
		"img"=>"media/img/menu/rollos-especiales/nubori/",
		"precioRegular"=>"9.55 (Desde)",
		);
	$carta96=array(
		"link"=>"es/rollos-especiales/sake-especial/96/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Sake Especial",
		"descripcion"=>"Delicioso rollo al grill cubierto con salmón. Relleno de Ebi semipicante, aguacate, queso, gratinado con una salsa de ajonjolí y kani- kama. Acompañado de una salsa de mostaza.",
		"img"=>"media/img/menu/rollos-especiales/sake-especial/",
		"precioRegular"=>"9.75 (Desde)",
		);
	$carta97=array(
		"link"=>"es/rollos-especiales/tako-picante/97/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Tako Picante",
		"descripcion"=>"Una forma especial de disfrutar el sabor del pulpo al estilo japonés, sazonado con salsa togarashi y cebollín.",
		"img"=>"media/img/menu/rollos-especiales/tako-picante/",
		"precioRegular"=>"7.15 (Desde)",
		);
	$carta98=array(
		"link"=>"es/rollos-especiales/california-especial/98/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"California Especial",
		"descripcion"=>"Rollo California cubierto con masago y ajonjolí.",
		"img"=>"media/img/menu/rollos-especiales/california-especial/",
		"precioRegular"=>"5.90 (Desde)",
		);
	$carta99=array(
		"link"=>"es/rollos-especiales/california-estilo-noe/99/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"California al estilo NOE",
		"descripcion"=>"Rollo California super especial cubierto con kani-kama.",
		"img"=>"media/img/menu/rollos-especiales/california-noe/",
		"precioRegular"=>"13.15",
		);
	$carta100=array(
		"link"=>"es/rollos-especiales/boston-roll/101/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Boston Roll",
		"descripcion"=>"Crocante y colorido rollo elaborado con caviar, perfumado con wasabi, langostino tempurizado, cangrejo, aguacate, queso y un toque de togarashi.",
		"img"=>"media/img/menu/rollos-especiales/boston-roll/",
		"precioRegular"=>"8.75 (Desde)",
		);
	$carta101=array(
		"link"=>"es/rollos-especiales/tempura-roll/101/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Tempura Roll",
		"descripcion"=>"Langostino tempurizado, espárragos y aguacate, cubierto con caviar tobiko.",
		"img"=>"media/img/menu/rollos-especiales/tempura-roll/",
		"precioRegular"=>"7.55 (Desde)",
		);
	$carta102=array(
		"link"=>"es/rollos-especiales/samurai/102/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Samurai",
		"descripcion"=>"Rollo crocante relleno de (salmón, kani kama, langostino o pangora) un toque de queso crema y caviar, gratinado con salsa de Kimiyaki.",
		"img"=>"media/img/menu/rollos-especiales/samurai/",
		"precioRegular"=>"9.00 (Desde)",
		);
	$carta103=array(
		"link"=>"es/rollos-especiales/shogui/103/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Shogui",
		"descripcion"=>"Cangrejo, salmón y queso crema, cubierto con espinaca, servido en salsa de anguila y ajonjolí.",
		"img"=>"media/img/menu/rollos-especiales/shogui/",
		"precioRegular"=>"12.65",
		);
	$carta104=array(
		"link"=>"es/rollos-especiales/yokohama/104/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Yokohama",
		"descripcion"=>"Delicioso rollo elaborado con langostino marinado y crocante, cubierto con caviar, aguacate y kani-kama, servido con una salsa de anjonjolí y togarashi.",
		"img"=>"media/img/menu/rollos-especiales/yokohama/",
		"precioRegular"=>"6.45 (Desde)",
		);
	$carta105=array(
		"link"=>"es/rollos-especiales/arcoiris/105/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Arcoiris",
		"descripcion"=>"Arcoíris de sabores y colores en un solo bocado, tienes que probarlo!.",
		"img"=>"media/img/menu/rollos-especiales/arcoiris/",
		"precioRegular"=>"9.95 (Desde)",
		);
	$carta106=array(
		"link"=>"es/rollos-especiales/atlantic-roll/106/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Atlantic Roll",
		"descripcion"=>"Rollo de cangrejo, salsa de anguila, aguacate, hamachi, caviar y cebollín.",
		"img"=>"media/img/menu/rollos-especiales/atlantic-roll/",
		"precioRegular"=>"7.35 (Desde)",
		);
	$carta107=array(
		"link"=>"es/rollos-especiales/dragon-roll/107/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"Dragon Roll",
		"descripcion"=>"Espectacular rollo hecho con langostino, atún, cubierto con masago y un toque de aguacate.",
		"img"=>"media/img/menu/rollos-especiales/dragon-roll/",
		"precioRegular"=>"15.30",
		);
	$carta108=array(
		"link"=>"es/rollos-especiales/yasai-tempura-roll/108/",
		"clase"=>"Rollos Especiales",
		"nombre"=>"YASAI TEMPURA ROLL (Vegetariano)",
		"descripcion"=>"Hecho con vegetales tempurizados, queso crema (opcional) y cebollín.",
		"img"=>"media/img/menu/rollos-especiales/yasai-tempura-roll/",
		"precioRegular"=>"4.85",
		);
	/*CONOS*/
	$carta111=array(
		"link"=>"es/conos/kobe/111/",
		"clase"=>"Conos",
		"nombre"=>"Kobe",
		"descripcion"=>"Cono de cangrejo, aguacate, salmón, caviar masago y ajonjolí.",
		"img"=>"media/img/menu/conos/kobe/",
		"precioRegular"=>"7.15",
		);
	$carta112=array(
		"link"=>"es/conos/lasgostino-picante/112/",
		"clase"=>"Conos",
		"nombre"=>"Langostino Picante",
		"descripcion"=>"Cono de langostinos semipicantes, caviar y cebollín.",
		"img"=>"media/img/menu/conos/langostino-picante/",
		"precioRegular"=>"9.30",
		);
	$carta113=array(
		"link"=>"es/conos/tako-picante/113/",
		"clase"=>"Conos",
		"nombre"=>"Tako Picante",
		"descripcion"=>"Elaborado con pulpo finamente picado, sazonado con togarashi, cebollín, caviar y salsa de ajonjolí.",
		"img"=>"media/img/menu/conos/tako-picante/",
		"precioRegular"=>"8.45",
		);
	$carta114=array(
		"link"=>"es/conos/tempura/114/",
		"clase"=>"Conos",
		"nombre"=>"Tempura",
		"descripcion"=>"Cono hecho con langostino tempurizado, espárragos, aguacate, pasta de ajonjolí y caviar.",
		"img"=>"media/img/menu/conos/tempura/",
		"precioRegular"=>"8.45",
		);
	/*SUSHI SASHIMI*/
	$carta121=array(
		"link"=>"es/sushi-sashimi/ebi/121/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"EBI",
		"descripcion"=>"Langostino.",
		"img"=>"media/img/menu/sushi-sashimi/ebi/",
		"precioRegular"=>"3.55 (Desde)",
		);
	$carta122=array(
		"link"=>"es/sushi-sashimi/hamachi/122/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"Hamachi",
		"descripcion"=>"Cola Amarilla.",
		"img"=>"media/img/menu/sushi-sashimi/hamachi/",
		"precioRegular"=>"4.65 (Desde)",
		);
	$carta123=array(
		"link"=>"es/sushi-sashimi/ikura/123/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"Ikura",
		"descripcion"=>"Caviar de salmón.",
		"img"=>"media/img/menu/sushi-sashimi/ikura/",
		"precioRegular"=>"5.95",
		);
	$carta124=array(
		"link"=>"es/sushi-sashimi/kai/124/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"Kai",
		"descripcion"=>"Concha canadiense.",
		"img"=>"media/img/menu/sushi-sashimi/kai/",
		"precioRegular"=>"3.85 (Desde)",
		);
	$carta125=array(
		"link"=>"es/sushi-sashimi/kani/125/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"Kani",
		"descripcion"=>"Pangora.",
		"img"=>"media/img/menu/sushi-sashimi/kani/",
		"precioRegular"=>"4.15 (Desde)",
		);
	$carta126=array(
		"link"=>"es/sushi-sashimi/maguro/126/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"Maguro",
		"descripcion"=>"Atún.",
		"img"=>"media/img/menu/sushi-sashimi/maguro/",
		"precioRegular"=>"2.85 (Desde)",
		);
	$carta127=array(
		"link"=>"es/sushi-sashimi/masago/127/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"Masago",
		"descripcion"=>"Caviar esperlano.",
		"img"=>"media/img/menu/sushi-sashimi/masago/",
		"precioRegular"=>"3.10 (Desde)",
		);
	$carta128=array(
		"link"=>"es/sushi-sashimi/otate/128/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"Otate",
		"descripcion"=>"Scallops",
		"img"=>"media/img/menu/sushi-sashimi/otate/",
		"precioRegular"=>"3.85 (Desde)",
		);
	$carta129=array(
		"link"=>"es/sushi-sashimi/pesca-blanca/129/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"Pesca Blanca",
		"descripcion"=>"",
		"img"=>"media/img/menu/sushi-sashimi/pesca-blanca/",
		"precioRegular"=>"2.55 (Desde)",
		);
	$carta130=array(
		"link"=>"es/sushi-sashimi/kani-kama/130/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"Kani Kama",
		"descripcion"=>"Barritas de cangrejo",
		"img"=>"media/img/menu/sushi-sashimi/kani-kama/",
		"precioRegular"=>"3.30 (Desde)",
		);
	$carta131=array(
		"link"=>"es/sushi-sashimi/sake/131/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"Sake",
		"descripcion"=>"Salmón",
		"img"=>"media/img/menu/sushi-sashimi/sake/",
		"precioRegular"=>"2.85 (Desde)",
		);
	$carta132=array(
		"link"=>"es/sushi-sashimi/tako/132/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"Tako",
		"descripcion"=>"Pulpo",
		"img"=>"media/img/menu/sushi-sashimi/tako/",
		"precioRegular"=>"2.90 (Desde)",
		);
	$carta133=array(
		"link"=>"es/sushi-sashimi/tamago/133/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"Tamago",
		"descripcion"=>"Omelet japonés",
		"img"=>"media/img/menu/sushi-sashimi/tamago/",
		"precioRegular"=>"2.55 (Desde)",
		);
	$carta134=array(
		"link"=>"es/sushi-sashimi/tobiko/134/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"Tobiko",
		"descripcion"=>"Caviar de pez volador",
		"img"=>"media/img/menu/sushi-sashimi/tobiko/",
		"precioRegular"=>"4.75",
		);
	$carta135=array(
		"link"=>"es/sushi-sashimi/unagui/135/",
		"clase"=>"Sushi - Sashimi",
		"nombre"=>"Unagui",
		"descripcion"=>"Anguila",
		"img"=>"media/img/menu/sushi-sashimi/unagui/",
		"precioRegular"=>"3.95",
		);
	/*SUSHI ESPECIAL*/
	$carta141=array(
		"link"=>"es/sushi-especial/defgustacion-senzey-sushi/141/",
		"clase"=>"Sushi Especial",
		"nombre"=>"Degustación Senzey Sushi",
		"descripcion"=>"Una deliciosa combinación de pangora, ascallops salteados, kanikama al ajonjolí, sushi de atún, sushi de salmón y sushi de pez espada en salsa togarashi y champiñones. ¡Un bocado de sushi imperdible!.",
		"img"=>"media/img/menu/sushi-especial/degustacion-senzey-sushi/",
		"precioRegular"=>"12.65",
		);
	$carta142=array(
		"link"=>"es/sushi-especial/tako-especial/142/",
		"clase"=>"Sushi Especial",
		"nombre"=>"Tako Semipicante",
		"descripcion"=>"La mejor forma de disfrutar el sabor del pulpo, macerado con nuestra deliciosa salsa de la casa y cebollín.",
		"img"=>"media/img/menu/sushi-especial/tako-semipicante/",
		"precioRegular"=>"3.95",
		);
	$carta143=array(
		"link"=>"es/sushi-especial/kai-semipicante/143/",
		"clase"=>"Sushi Especial",
		"nombre"=>"Kai Semipicante",
		"descripcion"=>"Un bocado de concha canadiense al estilo NOE, con salsa de caviar, togarashi, ajonjolí y cebollín.",
		"img"=>"media/img/menu/sushi-especial/kai-semipicante/",
		"precioRegular"=>"4.15",
		);
	$carta144=array(
		"link"=>"es/sushi-especial/ebi-semipicante/144/",
		"clase"=>"Sushi Especial",
		"nombre"=>"Ebi Semipicante",
		"descripcion"=>"Langostinos finamente picados en salsa de caviar, togarashi y cebollín.",
		"img"=>"media/img/menu/sushi-especial/ebi-semipicante/",
		"precioRegular"=>"4.35",
		);
	$carta145=array(
		"link"=>"es/sushi-especial/kani-kama-especial/145/",
		"clase"=>"Sushi Especial",
		"nombre"=>"Kani Kama Especial",
		"descripcion"=>"Barritas de cangrejo sazonadas con salsa togarashi, caviar y cebollín.",
		"img"=>"media/img/menu/sushi-especial/kani-kama-especial/",
		"precioRegular"=>"4.75",
		);
	$carta146=array(
		"link"=>"es/sushi-especial/atun-semipicante/146/",
		"clase"=>"Sushi Especial",
		"nombre"=>"Atún Semipicante",
		"descripcion"=>"Atún macerado con salsa de caviar, togarashi y cebollín.",
		"img"=>"media/img/menu/sushi-especial/atun-semipicante/",
		"precioRegular"=>"3.95",
		);
	$carta147=array(
		"link"=>"es/sushi-especial/arcoiris/147/",
		"clase"=>"Sushi Especial",
		"nombre"=>"Arcoiris",
		"descripcion"=>"Sushi de cangrejo y tres diferentes caviares japoneses.",
		"img"=>"media/img/menu/sushi-especial/arcoiris/",
		"precioRegular"=>"4.55",
		);
	$carta148=array(
		"link"=>"es/sushi-especial/toki-atun/148/",
		"clase"=>"Sushi Especial",
		"nombre"=>"Toki Atún",
		"descripcion"=>"Atún con cangrejo macerado en salsa de ajonjolí.",
		"img"=>"media/img/menu/sushi-especial/toki-atun/",
		"precioRegular"=>"3.95",
		);
	$carta149=array(
		"link"=>"es/sushi-especial/scallops-semipicantes/149/",
		"clase"=>"Sushi Especial",
		"nombre"=>"Scallops Semipicantes",
		"descripcion"=>"Scallops macerados con salsa japonesa, cebollín y togarashi.",
		"img"=>"media/img/menu/sushi-especial/scallops-semipicantes/",
		"precioRegular"=>"4.35",
		);
	$carta150=array(
		"link"=>"es/sushi-especial/toki-salmon/150/",
		"clase"=>"Sushi Especial",
		"nombre"=>"Toki Salmón",
		"descripcion"=>"Salmón con cangrejo macerado en salsa de ajonjolí.",
		"img"=>"media/img/menu/sushi-especial/toki-salmon/",
		"precioRegular"=>"3.95",
		);
	/*COMBINACIONES ESPECIALES*/
	$carta161=array(
		"link"=>"es/combinaciones-especiales/bonsai-rollos/161/",
		"clase"=>"Combinaciones Especiales",
		"nombre"=>"Bonsai Rollos",
		"descripcion"=>"Combinación de rollos especiales del chef.",
		"img"=>"media/img/menu/combinaciones-especiales/bonsai-rollos/",
		"precioRegular"=>"12.70 (Desde)",
		);
	$carta162=array(
		"link"=>"es/plato/162/",
		"clase"=>"Combinaciones Especiales",
		"nombre"=>"Chirasi Sushi",
		"descripcion"=>"Una exquisita mezcla de arroz gohan con champiñones macerados, acompañado de omelet japonés y algas, cubierto por una generosa combinación de: anguila, salmón, kani kama, langostino, pulpo, atún rojo, pangora y 3 tipos de caviar (masago, tobiko y wasabi).",
		"img"=>"media/img/menu/combinaciones-especiales/chirasi-sushi/",
		"precioRegular"=>"27.95",
		);
	$carta163=array(
		"link"=>"es/combinaciones-especiales/sashimi-platter/163/",
		"clase"=>"Combinaciones Especiales",
		"nombre"=>"Sashimi Platter",
		"descripcion"=>"Un deleite de pescados y mariscos de la casa acompañado de arroz japonés al vapor.",
		"img"=>"media/img/menu/combinaciones-especiales/sashimi-platter/",
		"precioRegular"=>"30.60",
		);
	$carta164=array(
		"link"=>"es/combinaciones-especiales/bonsari-satori/164/",
		"clase"=>"Combinaciones Especiales",
		"nombre"=>"Bonsai Satori (32 bocados)",
		"descripcion"=>"½ rollo Harusame, ½ rollo Boston, ½ rollo Kani Seaweed, ½ rollo California Especial, ½ rollo Samurai Kani. 2 By Fay Tu de Pulpo, 2 cortes Kani Kama, 2 cortes Atún, 2 cortes Salmón, 2 sushi Salmón Picante y 2 sushi Ebi Picante.",
		"img"=>"media/img/menu/combinaciones-especiales/bonsai-satori/",
		"precioRegular"=>"54.90",
		);
	$carta165=array(
		"link"=>"es/combinaciones-especiales/bonsai-kaiko/165/",
		"clase"=>"Combinaciones Especiales",
		"nombre"=>"Bonsai Kaiko",
		"descripcion"=>"½ rollo Kanebi, ½ rollo Kumbayá, ½ rollo Samurai Langostino, medio rollo California Especial, medio rollo Anguila Especial, 2 sushi Kani Kama Especial, 2 sushi Tako Picante, 2 cortes Salmón, 2 cortes Atún Rojo, 2 cortes Pesca Blanca, 2 bocados Kani Maguro y 2 sushi Toki Salmón.",
		"img"=>"media/img/menu/combinaciones-especiales/bonsai-kaiko/",
		"precioRegular"=>"54.90",
		);
	$carta166=array(
		"link"=>"es/combinaciones-especiales/bonsai-minato/166/",
		"clase"=>"Combinaciones Especiales",
		"nombre"=>"Bonsai Minato (32 Bocados)",
		"descripcion"=>"½ rollo Flambé, ½ rollo Tempura, ½2 rollo Atlantic, 4 bocados Kani Kiuri Maki,2 bocados Shogui, 2 mini crepes Kani Kama, 2 conos Tako Picante, 6 cortes sashimi hecho Tataki, 2 sushi Toki Salmón y 2 bocados Tamago.",
		"img"=>"media/img/menu/combinaciones-especiales/bonsai-minato/",
		"precioRegular"=>"43.15",
		);
	$carta167=array(
		"link"=>"es/combinaciones-especiales/bonsai-sanakku/167/",
		"clase"=>"Combinaciones Especiales",
		"nombre"=>"Bonsai Sanakku",
		"descripcion"=>"½ rollo Kani Kama Especial, medio rollo Filadelfia Especial, medio rollo Yokohama, medio rollo Kumbayá cubierto de masago, 4 bocados Suki Ebi, 2 By Fay Tu de Scallops, 2 conos wantan de salmón ahumado y 2 mini crepes de salmón.",
		"img"=>"media/img/menu/combinaciones-especiales/bonsai-sanakku/",
		"precioRegular"=>"42.90",
		);
	$carta168=array(
		"link"=>"es/combinaciones-especiales/bonsai-takumi/168/",
		"clase"=>"Combinaciones Especiales",
		"nombre"=>"Bonsai Takumi",
		"descripcion"=>"½ rollo Kanebi, ½ rollo Yokohama, medio rollo Hokaido, medio rollo Kani Seaweed, 2 By Fay Tu de Pulpo, 2 sushi Kani Kama Especial, 2 sushi Salmón Semipicante y 4 cortes sashimi Salmón.",
		"img"=>"media/img/menu/combinaciones-especiales/bonsai-takumi/",
		"precioRegular"=>"48.05",
		);
	$carta169=array(
		"link"=>"es/combinaciones-especiales/bonsai-yuniko/169/",
		"clase"=>"Combinaciones Especiales",
		"nombre"=>"Bonsai Yuniko (14 bocados)",
		"descripcion"=>"½ Rollo Samurai de Salmón, ½ rollo California Especial, Zuki-Merito, Ebi Kimitzu, Sushi de Salmón y Sushi Pulpo Picante.",
		"img"=>"media/img/menu/combinaciones-especiales/bonsai-yuniko/",
		"precioRegular"=>"16.25",
		);
	/*BONSAI SUSHI SASHIMI*/
	$carta181=array(
		"link"=>"es/bonsai-sushi-shashimi/idividual/181/",
		"clase"=>"Bonsai Sushi Shashimi",
		"nombre"=>"Individual",
		"descripcion"=>"½ rollo California Especial, ½ rollo Tokyo y 4 variedades de sushi especiales.",
		"img"=>"media/img/menu/bonsai-sushi-y-sashimi/individual/",
		"precioRegular"=>"16.65",
		);
	$carta182=array(
		"link"=>"es/bonsai-sushi-shashimi/2personas/182/",
		"clase"=>"Bonsai Sushi Shashimi",
		"nombre"=>"2 Personas",
		"descripcion"=>"½ rollo de Anguila Especial, ½ rollo Samurai de Ebi, ½ rollo California Especial, ½ rollo Sake Sakana Yaki, 4 unidades de sushi especiales y 4 cortes sashimi de atún y salmón.",
		"img"=>"media/img/menu/bonsai-sushi-y-sashimi/2-personas/",
		"precioRegular"=>"27.45",
		);
	$carta183=array(
		"link"=>"es/bonsai-sushi-shashimi/2-3personas/183/",
		"clase"=>"Bonsai Sushi Shashimi",
		"nombre"=>"2-3 Personas",
		"descripcion"=>"4 variedades de medios rollos, incluidos especiales, 6 unidades de sushi y 6 unidades de sashimi.",
		"img"=>"media/img/menu/bonsai-sushi-y-sashimi/2-3-personas/",
		"precioRegular"=>"48.05",
		);
	$carta184=array(
		"link"=>"es/bonsai-sushi-shashimi/3-4personas/184/",
		"clase"=>"Bonsai Sushi Shashimi",
		"nombre"=>"3-4 Personas",
		"descripcion"=>"Una generosa combinación de bocados, donde encontrarás 2 rollos, 2 medios rollos, 9 sushis y 6 piezas de sashimi.",
		"img"=>"media/img/menu/bonsai-sushi-y-sashimi/3-4-personas/",
		"precioRegular"=>"64.45",
		);
	$carta185=array(
		"link"=>"es/bonsai-sushi-shashimi/4-5personas/185/",
		"clase"=>"Bonsai Sushi Shashimi",
		"nombre"=>"4-5 Personas",
		"descripcion"=>"Una exuberante combinación donde encontrarás rollos especiales, variedad de sushi y sashimi.",
		"img"=>"media/img/menu/bonsai-sushi-y-sashimi/4-5-personas/",
		"precioRegular"=>"84.25",
		);
	/*CARNES*/
	$carta191=array(
		"link"=>"es/carnes/lomo-kubay/191/",
		"clase"=>"Carnes",
		"nombre"=>"Lomo Kubay",
		"descripcion"=>"Lomo fino al grill, sobre bastoncitos de arroz crocante y servido con salsa de jengibre.",
		"img"=>"media/img/menu/carnes/lomo-kubay/",
		"precioRegular"=>"19.05",
		);
	$carta192=array(
		"link"=>"es/carnes/lomo-takatama/192/",
		"clase"=>"Carnes",
		"nombre"=>"Lomo Takatama",
		"descripcion"=>"Lomo fino al grill, relleno de langostino en salsa de Pernod y soya, acompañado de aguacate tempura.",
		"img"=>"media/img/menu/carnes/lomo-takatama/",
		"precioRegular"=>"24.05",
		);
	$carta193=array(
		"link"=>"es/carnes/lomo-noe/193/",
		"clase"=>"Carnes",
		"nombre"=>"Lomo Noe",
		"descripcion"=>"De la casa, lomo fino macerado al grill, acompañado con salsa de aceitunas y pasta oriental.",
		"img"=>"media/img/menu/carnes/lomo-noe/",
		"precioRegular"=>"19.05",
		);
	$carta194=array(
		"link"=>"es/carnes/lomo-togarashi/194/",
		"clase"=>"Carnes",
		"nombre"=>"Lomo Togarashi",
		"descripcion"=>"Jugoso lomo fino cortado en delicados medallones, cubiertos con un toque de Togarashi. Acompañado de puré de zanahoria blanca y frituras de cebolla, con el toque de una salsa de alcaparras y soya.",
		"img"=>"media/img/menu/carnes/lomo-togarashi/",
		"precioRegular"=>"17.45",
		);
	$carta195=array(
		"link"=>"es/carnes/bife-noe/195/",
		"clase"=>"Carnes",
		"nombre"=>"Bife Noe",
		"descripcion"=>"Seleccionado bife al grill, servido a nuestro estilo.",
		"img"=>"media/img/menu/carnes/bife-noe/",
		"precioRegular"=>"29.95",
		);
	$carta196=array(
		"link"=>"es/carnes/cerdito-tonkatsu/196/",
		"clase"=>"Carnes",
		"nombre"=>"Cerdito Tonkatsu",
		"descripcion"=>"Cerdito tierno cocinado a fuego lento en hierbas nas, servido con salsa tonkatsu ahumada hecha en casa.",
		"img"=>"media/img/menu/carnes/cerdito-tonkatsu/",
		"precioRegular"=>"19.95",
		);
	$carta197=array(
		"link"=>"es/carnes/yaki-udon-con-lomo-fino/197/",
		"clase"=>"Carnes",
		"nombre"=>"Yaki Udon con Lomo Fino",
		"descripcion"=>"La mejor combinación de udon(pasta fresca japonesa) con lomo fino y vegetales crujientes, salteada al estilo oriental.",
		"img"=>"media/img/menu/carnes/yaki-undon/",
		"precioRegular"=>"22.95",
		);
	$carta198=array(
		"link"=>"es/carnes/pollo-kubay/198/",
		"clase"=>"Carnes",
		"nombre"=>"Pollo Kubay",
		"descripcion"=>"Jugosa pechuga de pollo a la parrilla, servida sobre bastoncitos de arroz crocante, cubierto con una delicada salsa de jengibre.",
		"img"=>"media/img/menu/carnes/pollo-kubay/",
		"precioRegular"=>"17.95",
		);
	$carta199=array(
		"link"=>"es/carnes/tory-hada/199/",
		"clase"=>"Carnes",
		"nombre"=>"Tory Hada",
		"descripcion"=>"Pechuga de pollo rellena con salmón ahumado y espinaca oriental, servida con puré de papa, salsa de naranja y soya.",
		"img"=>"media/img/menu/carnes/tory-hada/",
		"precioRegular"=>"18.95",
		);
	$carta200=array(
		"link"=>"es/carnes/cordero-habu-yaki/200/",
		"clase"=>"Carnes",
		"nombre"=>"Cordero Habu Yaki",
		"descripcion"=>"Tiernos medallones de lomo de cordero a la parrilla en su salsa, acompañados con kinotto al estilo oriental y champiñones salteados.",
		"img"=>"media/img/menu/carnes/cordero-habu-yaki/",
		"precioRegular"=>"19.55",
		);
	/*TERIKAYI*/
	$carta211=array(
		"link"=>"es/terikayi/atun/211/",
		"clase"=>"Terikayi",
		"nombre"=>"Atún",
		"descripcion"=>"Preparado al grill con salsa teriyaki especial y acompañado de legumbres, arroz japonés o puré de papa.",
		"img"=>"media/img/menu/teriyaki/teriyaki-atun/",
		"precioRegular"=>"22.85",
		);
	$carta212=array(
		"link"=>"es/terikayi/langostinos/212/",
		"clase"=>"Terikayi",
		"nombre"=>"Langostinos",
		"descripcion"=>"Preparado al grill con salsa teriyaki especial y acompañado de legumbres, arroz japonés o puré de papa.",
		"img"=>"media/img/menu/teriyaki/teriyaki-langostinos/",
		"precioRegular"=>"26.45",
		);
	$carta213=array(
		"link"=>"es/terikayi/lomo/213/",
		"clase"=>"Terikayi",
		"nombre"=>"Lomo",
		"descripcion"=>"Preparado al grill con salsa teriyaki especial y acompañado de legumbres, arroz japonés o puré de papa.",
		"img"=>"media/img/menu/teriyaki/teriyaki-lomo/",
		"precioRegular"=>"17.85",
		);
	$carta214=array(
		"link"=>"es/terikayi/pollo/214/",
		"clase"=>"Terikayi",
		"nombre"=>"Pollo",
		"descripcion"=>"Preparado al grill con salsa teriyaki especial y acompañado de legumbres, arroz japonés o puré de papa.",
		"img"=>"media/img/menu/teriyaki/teriyaki-pollo/",
		"precioRegular"=>"15.20",
		);
	$carta215=array(
		"link"=>"es/terikayi/salmon/215/",
		"clase"=>"Terikayi",
		"nombre"=>"Salmón",
		"descripcion"=>"Preparado al grill con salsa teriyaki especial y acompañado de legumbres, arroz japonés o puré de papa.",
		"img"=>"media/img/menu/carnes/teriyaki-salmon/",
		"precioRegular"=>"19.65",
		);
	/*TEPANYAKI*/
	$carta221=array(
		"link"=>"es/tepanyaki/lomo/221/",
		"clase"=>"Tepanyaki",
		"nombre"=>"Lomo",
		"descripcion"=>"Preparado a la parrilla con salsas y especias, acompañado de verduras salteadas y arroz frito.",
		"img"=>"media/img/menu/tepanyaki/tepanyaki-lomo/",
		"precioRegular"=>"19.65",
		);
	$carta222=array(
		"link"=>"es/tepanyaki/lomo-y-langostinos/222/",
		"clase"=>"Tepanyaki",
		"nombre"=>"Lomo y Langostinos",
		"descripcion"=>"Preparado a la parrilla con salsas y especias, acompañado de verduras salteadas y arroz frito.",
		"img"=>"media/img/menu/tepanyaki/tepanyaki-lomo-langostinos/",
		"precioRegular"=>"24.75",
		);
	$carta223=array(
		"link"=>"es/tepanyaki/lomo-salmon-ebi/223/",
		"clase"=>"Tepanyaki",
		"nombre"=>"Lomo, Salmón y Ebi",
		"descripcion"=>"Preparado a la parrilla con salsas y especias, acompañado de verduras salteadas y arroz frito.",
		"img"=>"media/img/menu/tepanyaki/tepanyaki-lomo-salmon-ebi/",
		"precioRegular"=>"25.95",
		);
	$carta224=array(
		"link"=>"es/tepanyaki/pollo/224/",
		"clase"=>"Tepanyaki",
		"nombre"=>"Pollo",
		"descripcion"=>"Preparado a la parrilla con salsas y especias, acompañado de verduras salteadas y arroz frito.",
		"img"=>"media/img/menu/tepanyaki/tepanyaki-pollo/",
		"precioRegular"=>"16.55",
		);
	$carta225=array(
		"link"=>"es/tepanyaki/pollo-y-langostinos/225/",
		"clase"=>"Tepanyaki",
		"nombre"=>"Pollo y Langostinos",
		"descripcion"=>"Preparado a la parrilla con salsas y especias, acompañado de verduras salteadas y arroz frito.",
		"img"=>"media/img/menu/tepanyaki/tepanyaki-pollo-langostinos/",
		"precioRegular"=>"28.05",
		);
	$carta226=array(
		"link"=>"es/tepanyaki/lagostinos/226/",
		"clase"=>"Tepanyaki",
		"nombre"=>"Langostinos",
		"descripcion"=>"Preparado a la parrilla con salsas y especias, acompañado de verduras salteadas y arroz frito.",
		"img"=>"media/img/menu/tepanyaki/tepanyaki-langostinos/",
		"precioRegular"=>"28.05",
		);
	$carta227=array(
		"link"=>"es/tepanyaki/salmon/227/",
		"clase"=>"Tepanyaki",
		"nombre"=>"Salmón",
		"descripcion"=>"Preparado a la parrilla con salsas y especias, acompañado de verduras salteadas y arroz frito.",
		"img"=>"media/img/menu/tepanyaki/tepanyaki-salmon/",
		"precioRegular"=>"21.15",
		);
	/*MARISCOS*/
	$carta231=array(
		"link"=>"es/mariscos/paella-yaki-noe/231/",
		"clase"=>"Mariscos",
		"nombre"=>"Paella Yaki Noe",
		"descripcion"=>"Jugoso arroz japonés salteado con vegetales y frutos de mar.",
		"img"=>"media/img/menu/mariscos/paella-yaki-noe/",
		"precioRegular"=>"21.15",
		);
	$carta232=array(
		"link"=>"es/mariscos/mero-orshsi-yaki/232/",
		"clase"=>"Mariscos",
		"nombre"=>"Mero Oishsi Yaki",
		"descripcion"=>"Fresco y jugoso lete de mero al grill sobre vegetales crocantes y deliciosas croquetas de yuca al ajonjolí. Todo esto servido con una salsa de hierbas finas y soya.",
		"img"=>"media/img/menu/mariscos/mero-oishi-yaki/",
		"precioRegular"=>"21.15",
		);
	$carta233=array(
		"link"=>"es/mariscos/udon-sake-yaki/233/",
		"clase"=>"Mariscos",
		"nombre"=>"Udon Sake Yaki",
		"descripcion"=>"Jugoso salmón al grill con camarones y salsa de cebollín, servido sobre udon salteado al wok con verduras al estilo japonés.",
		"img"=>"media/img/menu/mariscos/udon-sake-yaki/",
		"precioRegular"=>"21.55",
		);
	$carta234=array(
		"link"=>"es/mariscos/shioyaki/234/",
		"clase"=>"Mariscos",
		"nombre"=>"Shioyaki",
		"descripcion"=>"Filete de pescado al grill servido con salsa de la casa, acompañado de vegetales salteados y arroz frito. Salmón, atún, corvina o pez espada.",
		"img"=>"media/img/menu/mariscos/shioyaki/",
		"precioRegular"=>"21.75 (Desde)",
		);
	$carta235=array(
		"link"=>"es/mariscos/corvina-itamae/235/",
		"clase"=>"Mariscos",
		"nombre"=>"Corvina Itamae",
		"descripcion"=>"Seleccionado filete de corvina fresca a la parrilla, servido con salsa de almejas y camarones.",
		"img"=>"media/img/menu/mariscos/corvina-itamae/",
		"precioRegular"=>"19.80",
		);
	$carta236=array(
		"link"=>"es/mariscos/salmon-reisui/236/",
		"clase"=>"Mariscos",
		"nombre"=>"Salmón Reisui",
		"descripcion"=>"Delicioso filete de salmón chileno al grill, sobre kinoto y vegetales salteados; bañado con una delicada salsa de pimiento rojo.",
		"img"=>"media/img/menu/mariscos/salmon-reisui/",
		"precioRegular"=>"19.95",
		);
	$carta237=array(
		"link"=>"es/mariscos/sudado-de-mero-al-grill/237/",
		"clase"=>"Mariscos",
		"nombre"=>"Sudado de Mero al Grill",
		"descripcion"=>"Fresco lomito de Mero al grill, con verduras al vapor, crocantes. Servido en caldo oriental de algas, jenjibre y soya.",
		"img"=>"media/img/menu/mariscos/sudado-de-mero/",
		"precioRegular"=>"19.50",
		);
	$carta238=array(
		"link"=>"es/mariscos/salmon-tasakamy/238/",
		"clase"=>"Mariscos",
		"nombre"=>"Salmón Tasakamy",
		"descripcion"=>"Filete de salmón gratinado con pangora, servido con puré japonés y salsa de mostaza.",
		"img"=>"media/img/menu/mariscos/salmon-tasakamy/",
		"precioRegular"=>"25.15",
		);
	$carta239=array(
		"link"=>"es/mariscos/salmon-sakatomi/239/",
		"clase"=>"Mariscos",
		"nombre"=>"Salmón Sakatomi",
		"descripcion"=>"Espectacular salmón fresco al horno, relleno de pangora, acompañado de camarones a la parrilla y una delicada salsa de maracuyá.",
		"img"=>"media/img/menu/mariscos/salmon-sakatomi/",
		"precioRegular"=>"26.85",
		);
	$carta240=array(
		"link"=>"es/mariscos/crepes-gratinadas-de-pangora/240/",
		"clase"=>"Mariscos",
		"nombre"=>"Crepes gratinadas de Pangora",
		"descripcion"=>"Jugosas crepes rellenas de pangora, gratinadas con salsa de ajonjolí y soya.",
		"img"=>"media/img/menu/mariscos/crepes-pangora/",
		"precioRegular"=>"28.05",
		);
	/*ACOMPAÑANTES*/
	$carta251=array(
		"link"=>"es/acompanantes/gohan/251/",
		"clase"=>"Acompañantes",
		"nombre"=>"Gohan",
		"descripcion"=>"Arroz japonés al vapor.",
		"img"=>"media/img/menu/acompanantes/gohan/",
		"precioRegular"=>"5.05",
		);
	$carta252=array(
		"link"=>"es/acompanantes/gohan-teriyaki/252/",
		"clase"=>"Acompañantes",
		"nombre"=>"Gohan Teriyaki",
		"descripcion"=>"Cubitos de pechuga de pollo o lomo a la parrilla, sobre arroz japonés y aderezados con salsa teriyaki y ajonjolí.",
		"img"=>"media/img/menu/acompanantes/gohan-teriyaki/",
		"precioRegular"=>"8.05 (Desde)",
		);
	$carta253=array(
		"link"=>"es/acompanantes/yakimeshi/253/",
		"clase"=>"Acompañantes",
		"nombre"=>"Yakimeshi",
		"descripcion"=>"Arroz salteado, relleno con legumbres, mezclado con salsa japonesa especial.",
		"img"=>"media/img/menu/acompanantes/yakimeshi/",
		"precioRegular"=>"6.80",
		);
	$carta254=array(
		"link"=>"es/acompanantes/yakimeshi-especial/254/",
		"clase"=>"Acompañantes",
		"nombre"=>"Yakimeshi Especial",
		"descripcion"=>"Arroz salteado con mariscos y legumbres frescas , sazonado con salsa japonesa espcial.",
		"img"=>"media/img/menu/acompanantes/yakimeshi-especial/",
		"precioRegular"=>"9.55",
		);
	/*POSTRES*/
	$carta261=array(
		"link"=>"es/postres/cheesecake-de-higo/261/",
		"clase"=>"Postres",
		"nombre"=>"Cheesecake de Higo",
		"descripcion"=>"Incomparable chesse cake elaborado con higos. Acompañado de una variedad de frutas fresca.",
		"img"=>"media/img/menu/postres/cheesecake-higo/",
		"precioRegular"=>"7.40",
		);
	$carta262=array(
		"link"=>"es/postres/tiramisu/262/",
		"clase"=>"Postres",
		"nombre"=>"Tiramisú",
		"descripcion"=>"Para los amantes del tiramisú, la versión que NOE ofrece.",
		"img"=>"media/img/menu/postres/tiramisu/",
		"precioRegular"=>"6.00",
		);
	$carta263=array(
		"link"=>"es/postres/pasion-de-chocolate/263/",
		"clase"=>"Postres",
		"nombre"=>"Pasión de Chocolate",
		"descripcion"=>"La mejor forma de degustar un bocado de chocolate y Oreo acompañado de helado vainilla.",
		"img"=>"media/img/menu/postres/pasion-de-chocolate/",
		"precioRegular"=>"7.00",
		);
	$carta264=array(
		"link"=>"es/postres/brownie-al-estilo-noe/264/",
		"clase"=>"Postres",
		"nombre"=>"Brownie al Estilo Noe",
		"descripcion"=>"Brownie caliente, cubierto con helado de vainilla y salsa de chocolate.",
		"img"=>"media/img/menu/postres/brownie-noe/",
		"precioRegular"=>"3.45 (Desde)",
		);
	$carta265=array(
		"link"=>"es/postres/chocoretto/265/",
		"clase"=>"Postres",
		"nombre"=>"Chocoretto",
		"descripcion"=>"Delicioso volcán de chocolate caliente al estilo NOE, acompañado de helado de vainilla.",
		"img"=>"media/img/menu/postres/chocoretto/",
		"precioRegular"=>"6.00",
		);
	$carta266=array(
		"link"=>"es/postres/banana-con-helado-de-canela/266/",
		"clase"=>"Postres",
		"nombre"=>"Banana con Helado de Canela",
		"descripcion"=>"Gloriosos plátanos ecuatorianos salteados, servidos en masa de hojaldre con helado de canela y bañados con salsa de naranja.",
		"img"=>"media/img/menu/postres/banana-helado-canela/",
		"precioRegular"=>"6.00",
		);
	$carta267=array(
		"link"=>"es/postres/choko-maki/267/",
		"clase"=>"Postres",
		"nombre"=>"Choco Maki",
		"descripcion"=>"Delicado rollito con fruto de temporada acompañado de una salsa templada de chocolate ecuatoriano.",
		"img"=>"media/img/menu/postres/choco-maki/",
		"precioRegular"=>"6.00",
		);
	$carta268=array(
		"link"=>"es/postres/dulce-trilogia/268/",
		"clase"=>"Postres",
		"nombre"=>"Dulce Trilogía",
		"descripcion"=>"Brownie, pie de limón y cheese cake acompañados con helado; perfecto para compartir y disfrutar.",
		"img"=>"media/img/menu/postres/dulce-trilogia/",
		"precioRegular"=>"6.30",
		);
	$carta269=array(
		"link"=>"es/postres/cheesecake/269/",
		"clase"=>"Postres",
		"nombre"=>"Cheesecake",
		"descripcion"=>"Disfrute el cheese cake a nuestro estilo.",
		"img"=>"media/img/menu/postres/cheesecake/",
		"precioRegular"=>"3.45 (Desde)",
		);
	$carta270=array(
		"link"=>"es/postres/crema-de-limon/270/",
		"clase"=>"Postres",
		"nombre"=>"Crema de Limón",
		"descripcion"=>"Crema de limón, rellena de frutas.",
		"img"=>"media/img/menu/postres/crema-limon/",
		"precioRegular"=>"3.45 (Desde)",
		);
	$carta271=array(
		"link"=>"es/postres/pie-de-limon/271/",
		"clase"=>"Postres",
		"nombre"=>"Pie de Limón",
		"descripcion"=>"Con nuestro toque exclusivo para usted.",
		"img"=>"media/img/menu/postres/pie-limon/",
		"precioRegular"=>"3.45 (Desde)",
		);
	$carta272=array(
		"link"=>"es/postres/helado-frito/272/",
		"clase"=>"Postres",
		"nombre"=>"Helado Frito",
		"descripcion"=>"Crocante helado tempurizado sobre salsa de frutas.",
		"img"=>"media/img/menu/postres/helado-frito/",
		"precioRegular"=>"6.00",
		);
	$carta273=array(
		"link"=>"es/postres/merengon-de-guanabana/273/",
		"clase"=>"Postres",
		"nombre"=>"Merengón de Guanábana",
		"descripcion"=>"Guanábana fresca mezclada en su punto con merengue y manjar.",
		"img"=>"media/img/menu/postres/merengon-guanabana/",
		"precioRegular"=>"6.00",
		);
	$carta274=array(
		"link"=>"es/postres/crepes/274/",
		"clase"=>"Postres",
		"nombre"=>"Crepes",
		"descripcion"=>"Crepes (chocolate, manjar y suzette) acompañadas de helado de vainilla.",
		"img"=>"media/img/menu/postres/crepes/",
		"precioRegular"=>"6.00",
		);
	$carta275=array(
		"link"=>"es/postres/mousse-de-chocolate/275/",
		"clase"=>"Postres",
		"nombre"=>"Mousse de Chocolate",
		"descripcion"=>"Mousse de chocolate a nuestro estilo.",
		"img"=>"media/img/menu/postres/mousse-chocolate/",
		"precioRegular"=>"5.85",
		);
	$carta276=array(
		"link"=>"es/postres/monte-fuji/276/",
		"clase"=>"Postres",
		"nombre"=>"Monte Fuji",
		"descripcion"=>"Helado de vainilla y frutas, cubierto con merengue flambeado en su mesa.",
		"img"=>"media/img/menu/postres/monte-fuji/",
		"precioRegular"=>"12.55",
		);
	$carta277=array(
		"link"=>"es/postres/choco-maki/277/",
		"clase"=>"Postres",
		"nombre"=>"Choco Maki",
		"descripcion"=>"Delicado rollito con frutos de temporada acompañado de una salsa templada de chocolate ecuatoriano.",
		"img"=>"media/img/menu/postres/choco-maki/",
		"precioRegular"=>"6.00",
		);
?>
