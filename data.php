<?php

////////  Bakgrund  ////////
$namn = array(
	'Sandgoat',
	'BeerBro',
	'Werngrenhs',
	'Garage 99',
	'Boga Jonito',
	'Flowa',
	'Unidribble',
	'Broow',
	'Axenote',
	'Peiwave',
	'Woophf',
	'NorthWest Hillside',
	'Mogart',
	'Bogbox',
'Widgetify',
'Warehousing',
'The Demo Company',
'Foo Bars',
'Vikingtelli',
'Fake Brothers',
'Allied Biscuit',
'Ankh-Sto Associates',
'Extensive Enterprise',
'Galaxy Corp',
'Globo-Chem',
'Mr. Sparkle',
'Globex Corporation',
'LexCorp',
'LuthorCorp',
'North Central Positronics',
'Omni Consimer Products',
'Praxis Corporation',
'Sombra Corporation',
'Sto Plains Holdings',
'Tessier-Ashpool',
'Wayne Enterprises',
'Wentworth Industries',
'ZiffCorp',
'Bluth Company',
'Strickland Propane',
'Thatherton Fuels',
'Three Waters',
'Water and Power',
'Western Gas & Electric',
'Mammoth Pictures',
'Mooby Corp',
'Gringotts',
'Thrift Bank',
'Flowers By Irene',
'The Legitimate Businessmens Club',
'Osato Chemicals',
'Transworld Consortium',
'Universal Export',
'United Fried Chicken',
'Virtucon',
'Kumatsu Motors',
'Keedsler Motors',
'Powell Motors',
'Industrial Automation',
'Sirius Cybernetics Corporation',
'U.S. Robotics and Mechanical Men',
'Colonial Movers',
'Corellian Engineering Corporation',
'Incom Corporation',
'General Products',
'Leeding Engines Ltd.',
'Blammo',
'Input, Inc.',
'Mainway Toys',
'Videlectrix',
'Zevo Toys',
'Ajax',
'Axis Chemical Co.',
'Barrytron',
'Carrys Candles',
'Cogswell Cogs',
'Spacely Sprockets',
'General Forge and Foundry',
'Duff Brewing Company',
'Dunder Mifflin',
'General Services Corporation',
'Monarch Playing Card Co.',
'Krustyco',
'Initech',
'Roboto Industries',
'Primatech',
'Sonky Rubber Goods',
'St. Anky Beer',
'Stay Puft Corporation',
'Vandelay Industries',
'Wernham Hogg',
'Gadgetron',
'Burleigh and Stronginthearm',
'BLAND Corporation',
'Nordyne Defense Dynamics',
'Petrox Oil Company',
'Roxxon',
'McMahon and Tate',
'Sixty Second Avenue',
'Charles Townsend Agency',
'Spade and Archer',
'Megadodo Publications',
'Rouster and Sideways',
'C.H. Lavatory and Sons',
'Globo Gym American Corp',
'The New Firm',
'SpringShield',
'Compuglobalhypermeganet',
'Data Systems',
'Gizmonic Institute',
'Initrode',
'Taggart Transcontinental',
'Atlantic Northern',
'Niagular',
'Plow King',
'Big Kahuna Burger',
'Big T Burgers and Fries',
'Chez Quis',
'Chotchkies',
'The Frying Dutchman',
'Klimpys',
'The Krusty Krab',
'Monks Diner',
'Milliways',
'Minuteman Cafe',
'Taco Grande',
'Tip Top Cafe',
'Moes Tavern',
'Central Perk',
'Chasers'
);
$foretagsnamn = $namn[array_rand($namn)];


//////////



$foretagskategori = array(
	'Tidningar',
	'Musik'
);
$rnd_foretagskategori = $foretagskategori[array_rand($foretagskategori)];

if ($rnd_foretagskategori == Tidningar) {
			$foretagsbeskrivining = array(
			'Tidn. '.$foretagsnamn.' distrubuerar morgontidningar i västra Blekinge',
			'Tidn. '.$foretagsnamn.' trycker upp högkvalitativa livsstilsmagasin',
			'Tidn. '.$foretagsnamn.' konverterar gammelmedia till digitalt format'
		);
		$rnd_foretagsbeskrivning = $foretagsbeskrivining[array_rand($foretagsbeskrivining)];
	
}
elseif ($rnd_foretagskategori == Musik) {
			$foretagsbeskrivining = array(
			'Musik '.$foretagsnamn.' marknadsför nya artister i den digitala marknaden', //GÄLLER FÖR ALLA I MUSIKKATEGORIN; vilken genre handlar det om (går att applicera på samtliga branscher)
			'Musik '.$foretagsnamn.' är en global konsertarrangör',
			'Musik '.$foretagsnamn.' trycker vinylskivor åt undergroundartister'
		);
		$rnd_foretagsbeskrivning = $foretagsbeskrivining[array_rand($foretagsbeskrivining)];
}

/* pseudo-kod
	
1. slumpa bransh/kategori (tidningar, musiker, klädesmärken, biltilverkare etc.)
2. kolla om det finns ett valt yrke (designer, utvecklare, copywriter, ), annars slumpa ett
3. leverera uppdrag beroende på bransh/kategori OCH valt yrke
	
	if bransh/kategori = klädesmärken {
		if yrke = designer {
		
		}
		else if {
		
		}
		
	}
	else if yrkeskategori = musiker{
		use array of "musikeruppdrag"
	}
	else {
		use random yrkeskategori from array of yrken
	}


	



	///////////
	if bransh/kategori = designer {
		use array of "designeruppdrag"
	}
	else if yrkeskategori = musiker{
		use array of "musikeruppdrag"
	}
	else {
		use random yrkeskategori from array of yrken
	}
	///////////
	
	
	
	
*/


	////////  Företagsbeskrivning .old ////////
/*
		$foretagsbeskrivining_tidningar = array(
			'Tidn. '.$foretagsnamn.' distrubuerar morgontidningar i västra Blekinge',
			'Tidn. '.$foretagsnamn.' trycker upp högkvalitativa livsstilsmagasin',
			'Tidn. '.$foretagsnamn.' konverterar gammelmedia till digitalt format'
		);
		$rnd_foretagsbeskrivning_tidningar = $foretagsbeskrivining_tidningar[array_rand($foretagsbeskrivining_tidningar)];
*/

/*
		$foretagsbeskrivining_musik = array(
			'Musik '.$foretagsnamn.' marknadsför nya artister i den digitala marknaden', //GÄLLER FÖR ALLA I MUSIKKATEGORIN; vilken genre handlar det om (går att applicera på samtliga branscher)
			'Musik '.$foretagsnamn.' är en global konsertarrangör',
			'Musik '.$foretagsnamn.' trycker vinylskivor åt undergroundartister'
		);
*/

$nuvarandePositionering = array(
	'I dagsläget finns inga direkta konkurrenter att mäta sig med',
	'Konkurrenssituationen gör det svårt att generera något mer än en marginell förtjänst',
	'Marknadssituationen ser ljus ut och en starkt positiv närvaro i sociala medier har etablerats',
	'Som det ser idag utgör nya konkurrenter ett ständigt hot',
	'Med en övergripande marknadsandel byggd på innovation besitter de en unik position',
	'Det finns idag ett antal direkt konkurrerande och mer etablerade företag att hävda sig gentemot',
	'Varumärket har idag tagit en del av den konkurrerande marknaden och uppfattas överlag som positivt'
);
$rnd_nuvarandePositionering = $nuvarandePositionering[array_rand($nuvarandePositionering)];


$malsattning = array(
	'Visionen är att  '.$foretagsnamn.' inom tre år är ett etablert namn på den interationella marknaden',
	'Visionen är att inom den närmaste tiden skapa en positiv känsla för sitt varumärke',
	'Visionen är att den ekonomiska situationen inom en ett år ska vara vinstgivande',
	'Målet är att skapa en kultur där verksamhetens goda rykte sprids från person till person',
	'Målet är att göra människor utanför dagens målgrupp medvetna om verksamheten',
	'Framtidsdrömmen är att kunna utöka sin verksamhet under det nästkommande året',
	'Ett mål för det fortsatta arbetet är att kunna hävda sig mot konkurrenter och skeptiker'
);
$rnd_malsattning = $malsattning[array_rand($malsattning)];


$malsattningGenomforande = array(
	'tack vare implementation av långsiktiga lösningar',
	'genom att hitta en ny vinkel för sin image',
	'tack vare nyskapade behov hos konsumenten',
	'genom övertygande marknadsföring',
	//'genom att arbeta ',
	'genom att bredda marknadsföringen till en ny målgupp',
	'via viral marknadsföring',
	'med hjälp av en ny positionering',
	'vilket ska uppnås genom att skapa nya marknader med samarbetspartners',
);
$rnd_malsattningGenomforande = $malsattningGenomforande[array_rand($malsattningGenomforande)];


$malsattningResultat = array(
	'något som i sin tur kan generera ytterligare affärsmöjligheter',
	'och på så sätt även nå ut till en bredare målgrupp'
);
$rnd_malsattningResultat = $malsattningResultat[array_rand($malsattningResultat)];


$usp = array(
	''.$foretagsnamn.' lägger större fokus på personlig service än något annan i branschen',
	''.$foretagsnamn.' utgår i sitt arbete från devisen att alla jobb och möten är av största värde',
	//INGEN USP 'arrangerar ett antal gånger per år evenemang där information blandas med underhållning i marknadsföringssyfte',
	/*     ''.$foretagsnamn.' bygger sitt namn på tillgänglighet, främst genom kontakt via sociala medier alla tider på dygnet', */
	''.$foretagsnamn.' bygger sitt namn på närvaro, främst genom kontakt via sociala medier alla tider på dygnet',
	//INGEN USP ''.$foretagsnamn.' har frångått analog kommunikation använder sig idag uteslutande av digitala kommunikationsmetoder',//
	''.$foretagsnamn.' arbetar på ett unikt sätt i nära relation till sina samarbetspartners för att säkerställa ett optimalt resultat', //tveksam
	''.$foretagsnamn.'  värnar om miljön på ett sätt som ingen konkurrent ens är nära att matcha i dagsläget',
	''.$foretagsnamn.' har som motto att: "Vi kan inte allt om allt, men vi vet åtminstone vad vi håller på med"'
);
$rnd_usp = $usp[array_rand($usp)];


$preKarnvarde = array(
	'Allt arbete utgår från kärnvärdena',
	'I grunden finns värdeorden',
	'Hörnstenarna för '.$foretagsnamn.' är'
);
$rnd_preKarnvarde = $preKarnvarde[array_rand($preKarnvarde)];


$karnvarde1 = array(
	'Lojalitet',
	'Noggranhet',
	'Pålitlighet',
	'Stabilitet'
);
$rnd_karnvarde1 = $karnvarde1[array_rand($karnvarde1)];


$karnvarde2 = array(
	'Trygghet',
	'Explosivitet',
	'Modernism',
	'Effektivitet'
);
$rnd_karnvarde2 = $karnvarde2[array_rand($karnvarde2)];


$karnvarde3 = array(
	'Nyskapande',
	'Tidlöshet',
	'Frispråkighet',
	'Fulländning'
);
$rnd_karnvarde3 = $karnvarde3[array_rand($karnvarde3)];


$postKarnvarde = array(
	'och ambitionen är att detta också förmedlas till utåt',
	'vilka i första hand är interna värden och därmed inte nödvändigtvis måste kommuniceras utåt',
	'vilket i dagsläget inte kommuniceras tillräckligt tydligt till målgruppen'
);
$rnd_postKarnvarde = $postKarnvarde[array_rand($postKarnvarde)];




////////  Målgrupp  ////////
$malgrupp = array(
	'Idag inriktar sig '.$foretagsnamn.' främst mot köpstarka personer i medelåldern',
	'I dagsläget vänder sig '.$foretagsnamn.' i största utsträckning till personer',
	'Sedan årsskiftet har '.$foretagsnamn.' valt att fokusera sin marknadsföring kring aktiva människor',
	'De personer som idag representerar målgruppen är medieintresserade människor',
	'Dagens målgrupp är diffrentierad, men '.$foretagsnamn.' har för denna produktion valt att inrikta sig på personer'
);
$rnd_malgrupp = $malgrupp[array_rand($malgrupp)];


$malgruppPersona = array(
	'i övre tonåren',
	'i åldrarna 18 till 35',
	'med god ekonomi',
	'som befinner sig i en ålderskris',
	'i storstaden som är intresserade av kultur och konst',
	'med stor livsglädje och lust att upptäcka nya saker',
	'med stort intresse för musik och konserter',
	'med intresse för trender och livsstil',
	'som värderar sin personliga hälsa och välbefinnande högt',
	'med engagemang i organisationer och evenemang för goda ändamål',
	'som har en god finansiell situation'
);
$rnd_malgruppPersona = $malgruppPersona[array_rand($malgruppPersona)];


$malgruppErfarenhet = array(
	/*
	 'detta är en målgrupp också utan större kännedom om själva verksamheten',
	 'många är också benägna att resa, både i arbete och privat',
	 */
	'förutsättningarna mot denna målgrupp är mycket blandade, även om de flesta antas ha en positiv inställning till '.$foretagsnamn.''
);
$rnd_malgruppErfarenhet = $malgruppErfarenhet[array_rand($malgruppErfarenhet)];


$malgruppKunskap = array(
	//'Idag saknas fortfarande genomslagskraft på den utländska marknaden',// vilken typ av genomslagskraft är det som saknas?
	'Generellt sett har många inom målgruppen en relation till musik',
	'Målgruppen har visat sig vara svår att nå genom digitala kanaler',
	'I dagsläget skulle en jämnare fördelning mellan män och kvinnor i målgruppen vara att föredra då männen är kraftigt överrepresenterade',
	'De flesta positiva interaktioner mellan '.$foretagsnamn.' och målgruppen har varit genom sociala medier'
);
$rnd_malgruppKunskap = $malgruppKunskap[array_rand($malgruppKunskap)];


$preOnskadUppfattning = array(
	'därför är denna produktion även inriktad på',
	'därför är det långsiktiga målet',
	'på grund av detta finns det en idé kring'
);
$rnd_preOnskadUppfattning = $preOnskadUppfattning[array_rand($preOnskadUppfattning)];


$onskadUppfattning = array(
	'att på något sätt väcka intresse genom igenkänning',
	'att i någon form skapa en nostalgisk känsla kring produktionen',
	'att spela på mottagarens känslor i någon form',
	'att bryta mot traditionsenliga normer och på så sätt väcka intresse'
);
$rnd_onskadUppfattning = $onskadUppfattning[array_rand($onskadUppfattning)];



////////  Uppdrag  ////////
$preUppdrag = array(
	'Det är ditt uppdrag att',
	'Ditt uppdrag är att',
	'Just nu eftersöks någon med kunskapen att',
	'Din uppgift är att',
	'Som en del av en omfattande återetablering är din uppgift att',
	'Ditt mål är nu att',
	'Din uppgift blir att hjälpa till med att',
	'Din arbetsuppgift är nu att'
);
$rnd_preUppdrag = $preUppdrag[array_rand($preUppdrag)];



	////////  Uppdragsbeskrivning  ////////
		$uppdrag_tidningar = array(
			'(Tidn) ta fram en ny grafisk profil åt ett magasin som '.$foretagsnamn.' ska lansera',
			'(Tidn) introducera fler människor till de tjänster '.$foretagsnamn.' erbjuder genom en digital reklamkampanj',
			'(Tidn) tillsammans med '.$foretagsnamn.' ta fram och producera en reklamkampanj för den nya biltidningen Drive',
			'(Tidn) layouta ett magasin med en tonalitet anpassad för målgruppen'
			/* 	uppdragen måste vara lagom abstrakta, inte för begränsande men ändå erbjuda vissa ramar	 */
		);
		$rnd_uppdrag_tidningar = $uppdrag_tidningar[array_rand($uppdrag_tidningar)];


/*
		$uppdrag_musik = array(
			'(Musik) ta fram ett albumomslag åt '.$foretagsnamn.' som ska fungera i både analoga och digitala sammanhang',
			'(Musik) ta fram en serie affischer åt '.$foretagsnamn.' för att promota sina artister', //var stöter man på affischerna? hur ska de användas?
			'(Musik) arbeta fram ett koncept för en webbutik där artister hos '.$foretagsnamn.' kan sälja sin musik',
			'(Musik) producera en grafisk profil som knyter samman '.$foretagsnamn.'s värderingar och mål med målgruppens intressen'
		);
*/

$tillvagagangssatt = array(
	'Dramatisera kring idén och på vilket sätt budskapet enklast sprids',
	'Utnyttja de befintliga kärnvärdena och få dem att återspeglas till målgruppen'
);
$rnd_tillvagagangssatt = $tillvagagangssatt[array_rand($tillvagagangssatt)];


$preKansla = array(
	'I stort ska resultatet av den övergripande helheten upplevas som ',
	'Resultatet ska upplevas som',
	'Mottagaren bör få en känsla av något'
);
$rnd_preKansla = $preKansla[array_rand($preKansla)];


$kansla1 = array(
	'feminint',
	'traditionellt',
	'färgstarkt'
);
$rnd_kansla1 = $kansla1[array_rand($kansla1)];


$kansla2 = array(
	'men framförallt maskulint',
	'och vardagligt',
	'och fult',
	'och uppiggande',
	'men inte tråkigt'
);
$rnd_kansla2 = $kansla2[array_rand($kansla2)];


$problematisering = array(
	'Arbeta utifrån ett perspektiv där '.$foretagsnamn.' kan framhäva sitt varumärke',
	''.$foretagsnamn.' ser också gärna att produktionen på något sätt står ut från konkurrensen',
	'Analysera kring vad det är som knyter '.$foretagsnamn.' till den färdiga produktionen',
	''.$foretagsnamn.' ser det som en möjlighet att nyttja denna produktion till att testa något ovanligt',
	'Reflektera över vad det är som karakteriserar '.$foretagsnamn.'',
);
$rnd_problematisering = $problematisering[array_rand($problematisering)];


$postProblematisering = array(
	'På vilket sätt kan reaktionerna från målgruppen komma att påverka resultatet och den allmänna uppfattningen',
	'Finns det något som gör att det färdiga resultatet går att applicera även i ett längre perspektiv',
	'Vad definierar hållbarhet och hur länge kommer resultatet att upplevas modernt',
	'Bör det huvudsakliga fokus ligga på helheten eller i detaljerna'
);
$rnd_postProblematisering = $postProblematisering[array_rand($postProblematisering)];


/*test*/
echo 'category : '.$_GET['yrke'];
echo ('<hr>');


echo ($rnd_foretagskategori);
echo ('<br>');
echo ($rnd_foretagsbeskrivning.'. ');	
echo ('<hr>');
	
	
	
	echo ('<h3>Piñatabrief</h3>');
	echo ('<h4>Bakgrund</h4>');
	echo ('<span class="foretagsbeskrivning">');		echo ($rnd_foretagsbeskrivning.'. ');		echo ('</span>');	
	echo ('<span class="nuvarandepositionering">');		echo ($rnd_nuvarandePositionering.'. ');	echo ('</span>');
	echo ('<span class="malsattning">');				echo ($rnd_malsattning.' ');				echo ('</span>');
	echo ('<span class="malsattninggenomforande">');	echo ($rnd_malsattningGenomforande.' ');	echo ('</span>');
	echo ('<span class="malsattningresultat">');		echo ($rnd_malsattningResultat.'. ');		echo ('</span>');
	echo ('<span class="usp">');						echo ($rnd_usp.'. ');						echo ('</span>');
	echo ('<span class="prekarnvarde">');				echo ($rnd_preKarnvarde.' ');				echo ('</span>');
	echo ('<span class="karnvarde1">');					echo ($rnd_karnvarde1.', ');				echo ('</span>');
	echo ('<span class="karnvarde2">');					echo ($rnd_karnvarde2.' och ');				echo ('</span>');
	echo ('<span class="karnvarde3">');					echo ($rnd_karnvarde3.' ');					echo ('</span>');
	echo ('<span class="postkarnvarde">');				echo ($rnd_postKarnvarde.'.');				echo ('</span>');


	echo ('<h4>Målgrupp</h4>');
	echo ('<span class="malgrupp">');					echo ($rnd_malgrupp.' ');					echo ('</span>');
	echo ('<span class="malgrupppersona">');			echo ($rnd_malgruppPersona.' &ndash; ');	echo ('</span>');
	echo ('<span class="malgrupperfarenhet">');			echo ($rnd_malgruppErfarenhet.'. ');		echo ('</span>');
	echo ('<span class="malgruppkunskap">');			echo ($rnd_malgruppKunskap.', ');			echo ('</span>');
	echo ('<span class="preonskaduppfattning">');		echo ($rnd_preOnskadUppfattning.' ');		echo ('</span>');
	echo ('<span class="onskaduppfattning">');			echo ($rnd_onskadUppfattning.'.');			echo ('</span>');
	
	
	echo ('<h4>Uppdrag</h4>');
	echo ('<span class="preuppdrag">');					echo ($rnd_preUppdrag.' ');					echo ('</span>');
	echo ('<span class="uppdrag">');				echo ($rnd_uppdrag_tidningar.'. ');			echo ('</span>');
	echo ('<span class="tillvagagangssatt">');			echo ($rnd_tillvagagangssatt.'. ');			echo ('</span>');
	echo ('<span class="prekansla">');					echo ($rnd_preKansla .' ');					echo ('</span>');
	echo ('<span class="kansla1">');					echo ($rnd_kansla1.' ');					echo ('</span>');
	echo ('<span class="kansla2">');					echo ($rnd_kansla2.'. ');					echo ('</span>');
	echo ('<span class="problematisering">');			echo ($rnd_problematisering.'. ');			echo ('</span>');
	echo ('<span class="postproblematisering">');		echo ($rnd_postProblematisering.'.');		echo ('</span>');
	

?>