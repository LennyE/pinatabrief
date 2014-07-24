<?php

/* 	Borde dela upp dessa ännu mer, ex. MusikArtister, MusikForsaljning, etc.. */
$branch = [
	'Tidningar',
	//'qwe',
	'Musik'
];

////////  Företagsfakta  ////////
$business = [
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
	'Bogbox'
];

$selections = [

	'foretagsbeskrivining' => [
		'tidningar' => [
			'Tidn. @@insertForetagsnamn@@ distrubuerar morgontidningar i västra Blekinge ',
			'Tidn. @@insertForetagsnamn@@ trycker upp högkvalitativa livsstilsmagasin',
			'Tidn. @@insertForetagsnamn@@ konverterar gammelmedia till digitalt format'
		],

		'musik' => [
			'Musik @@insertForetagsnamn@@ marknadsför nya artister i den digitala marknaden', //GÄLLER FÖR ALLA I MUSIKKATEGORIN; vilken genre handlar det om (går att applicera på samtliga branscher)
			'Musik @@insertForetagsnamn@@ är en global konsertarrangör',
			'Musik @@insertForetagsnamn@@ trycker vinylskivor åt undergroundartister'
		],
	],

	'nuvarandePositionering' => [
		'I dagsläget finns inga direkta konkurrenter att mäta sig med',
		'Konkurrenssituationen gör det svårt att generera något mer än en marginell förtjänst',
		'Marknadssituationen ser ljus ut och en starkt positiv närvaro i sociala medier har etablerats',
		'Som det ser idag utgör nya konkurrenter ett ständigt hot',
		'Med en övergripande marknadsandel byggd på innovation besitter de en unik position',
		'Det finns idag ett antal direkt konkurrerande och mer etablerade företag att hävda sig gentemot',
		'Varumärket har idag tagit en del av den konkurrerande marknaden och uppfattas överlag som positivt'
	],

	'malsattning' => [
		'Visionen är att  @@insertForetagsnamn@@ inom tre år är ett etablert namn på den interationella marknaden',
		'Visionen är att inom den närmaste tiden skapa en positiv känsla för sitt varumärke',
		'Visionen är att den ekonomiska situationen inom en ett år ska vara vinstgivande',
		'Målet är att skapa en kultur där verksamhetens goda rykte sprids från person till person',
		'Målet är att göra människor utanför dagens målgrupp medvetna om verksamheten',
		'Framtidsdrömmen är att kunna utöka sin verksamhet under det nästkommande året',
		'Ett mål för det fortsatta arbetet är att kunna hävda sig mot konkurrenter och skeptiker'
	],

	'malsattningGenomforande' => [
		'tack vare implementation av långsiktiga lösningar',
		'genom att hitta en ny vinkel för sin image',
		'tack vare nyskapade behov hos konsumenten',
		'genom övertygande marknadsföring',
		//'genom att arbeta ',
		'genom att bredda marknadsföringen till en ny målgupp',
		'via viral marknadsföring',
		'med hjälp av en ny positionering',
		'vilket ska uppnås genom att skapa nya marknader med samarbetspartners',
	],

	'malsattningResultat' => [
		'något som i sin tur kan generera ytterligare affärsmöjligheter',
		'och på så sätt nå ut till en bredare målgrupp'
	],

	'usp' => [
		'@@insertForetagsnamn@@ lägger större fokus på personlig service än något annan i branschen',
		'@@insertForetagsnamn@@ utgår i sitt arbete från devisen att alla jobb och möten är av största värde',
		//INGEN USP 'arrangerar ett antal gånger per år evenemang där information blandas med underhållning i marknadsföringssyfte',
		/*     '@@insertForetagsnamn@@ bygger sitt namn på tillgänglighet, främst genom kontakt via sociala medier alla tider på dygnet', */
		'@@insertForetagsnamn@@ bygger sitt namn på närvaro, främst genom kontakt via sociala medier alla tider på dygnet',
		//INGEN USP '@@insertForetagsnamn@@ har frångått analog kommunikation använder sig idag uteslutande av digitala kommunikationsmetoder',//
		'@@insertForetagsnamn@@ arbetar på ett unikt sätt i nära relation till sina samarbetspartners för att säkerställa ett optimalt resultat', //tveksam
		'@@insertForetagsnamn@@  värnar om miljön på ett sätt som ingen konkurrent ens är nära att matcha i dagsläget',
		'@@insertForetagsnamn@@ har som motto att: "Vi kan inte allt om allt, men vi vet åtminstone vad vi håller på med"'
	],

	'preKarnvarde' => [
		'Allt arbete utgår från kärnvärdena',
		'I grunden finns värdeorden',
		'Hörnstenarna för @@insertForetagsnamn@@ är'
	],

	'karnvarde1' => [
		'Lojalitet',
		'Noggranhet',
		'Pålitlighet',
		'Stabilitet'
	],

	'karnvarde2' => [
		'Trygghet',
		'Explosivitet',
		'Modernism',
		'Effektivitet'
	],

	'karnvarde3' => [
		'Nyskapande',
		'Tidlöshet',
		'Frispråkighet',
		'Fulländning'
	],

	'postKarnvarde' => [
		'och ambitionen är att detta också förmedlas till utåt',
		'vilka i första hand är interna värden och därmed inte nödvändigtvis måste kommuniceras utåt',
		'vilket i dagsläget inte kommuniceras tillräckligt tydligt till målgruppen'
	],

	////////  Kunder  ////////
	'malgrupp' => [
		'Idag inriktar sig @@insertForetagsnamn@@ främst mot köpstarka personer i medelåldern',
		'I dagsläget vänder sig @@insertForetagsnamn@@ i största utsträckning till personer',
		'Sedan årsskiftet har @@insertForetagsnamn@@ valt att fokusera sin marknadsföring kring aktiva människor',
		'De personer som idag representerar målgruppen är medieintresserade människor',
		'Dagens målgrupp är diffrentierad, men @@insertForetagsnamn@@ har för denna produktion valt att inrikta sig på personer'
	],

	'malgruppPersona' => [
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
	],

	'malgruppErfarenhet' => [
		/*
		 'detta är en målgrupp också utan större kännedom om själva verksamheten',
		 'många är också benägna att resa, både i arbete och privat',
		 */
		'förutsättningarna mot denna målgrupp är mycket blandade, även om de flesta antas ha en positiv inställning till @@insertForetagsnamn@@'
	],

	'malgruppKunskap' => [
		//'Idag saknas fortfarande genomslagskraft på den utländska marknaden',// vilken typ av genomslagskraft är det som saknas?
		'Generellt sett har många inom målgruppen en relation till musik',
		'Målgruppen har visat sig vara svår att nå genom digitala kanaler',
		'I dagsläget skulle en jämnare fördelning mellan män och kvinnor i målgruppen vara att föredra då männen är kraftigt överrepresenterade',
		'De flesta positiva interaktioner mellan @@insertForetagsnamn@@ och målgruppen har varit genom sociala medier'
	],

	'preOnskadUppfattning' => [
		'därför är denna produktion även inriktad på',
		'därför är det långsiktiga målet',
		'på grund av detta finns det en idé kring'
	],

	'onskadUppfattning' => [
		'att på något sätt väcka intresse genom igenkänning',
		'att i någon form skapa en nostalgisk känsla kring produktionen',
		'att spela på mottagarens känslor i någon form',
		'att bryta mot traditionsenliga normer och på så sätt väcka intresse'
	],

	'preUppdrag' => [
		'Det är ditt uppdrag att',
		'Ditt uppdrag är att',
		'Just nu eftersöks någon med kunskapen att',
		'Din uppgift är att',
		'Som en del av en omfattande återetablering är din uppgift att',
		'Ditt mål är nu att',
		'Din uppgift blir att hjälp till med att',
		'Din arbetsuppgift är nu att'
	],

	'uppdrag' => [
		'tidningar' => [
			'(Tidn) ta fram en ny grafisk profil åt ett magasin som @@insertForetagsnamn@@ ska lansera',
			'(Tidn) introducera fler människor till de tjänster @@insertForetagsnamn@@ erbjuder genom en digital reklamkampanj',
			'(Tidn) tillsammans med @@insertForetagsnamn@@ ta fram och producera en reklamkampanj för den nya biltidningen Drive',
			'(Tidn) layouta ett magasin med en tonalitet anpassad för målgruppen'
			/* 	uppdragen måste vara lagom abstrakta, inte för begränsande men ändå erbjuda vissa ramar	 */
		],

		'musik' => [
			'(Musik) ta fram ett albumomslag åt @@insertForetagsnamn@@ som ska fungera i både analoga och digitala sammanhang',
			'(Musik) ta fram en serie affischer åt @@insertForetagsnamn@@ för att promota sina artister', //var stöter man på affischerna? hur ska de användas?
			'(Musik) arbeta fram ett koncept för en webbutik där artister hos @@insertForetagsnamn@@ kan sälja sin musik',
			'(Musik) producera en grafisk profil som knyter samman @@insertForetagsnamn@@s värderingar och mål med målgruppens intressen'
		]
	],

	'tillvagagangssatt' => [
		'Dramatisera kring idén och på vilket sätt budskapet enklast sprids',
		'Utnyttja de befintliga kärnvärdena och få dem att återspeglas till målgruppen'
	],

	'preKansla' => [
		'I stort ska resultatet av den övergripande helheten upplevas som både',
		'Resultatet ska upplevas som',
		'Mottagaren bör få en känsla av något'
	],

	'kansla1' => [
		'femenint',
		'traditionellt',
		'färgstarkt'
	],

	'kansla2' => [
		'maskulint',
		'fult',
		'tråkigt'
	],

	'problematisering' => [
		'Arbeta utifrån ett perspektiv där @@insertForetagsnamn@@ kan framhäva sitt varumärke',
		'@@insertForetagsnamn@@ ser också gärna att produktionen på något sätt står ut från konkurrensen',
		'Analysera kring vad det är som knyter @@insertForetagsnamn@@ till den färdiga produktionen',
		'@@insertForetagsnamn@@ ser det som en möjlighet att nyttja denna produktion till att testa något ovanligt',
		'Reflektera över vad det är som karakteriserar @@insertForetagsnamn@@',
	],

	'postProblematisering' => [
		'På vilket sätt kan reaktionerna från målgruppen komma att påverka resultatet och den almänna uppfattningen',
		'Finns det något som gör att det färdiga resultatet går att applicera även i ett längre perspektiv',
		'Vad definierar hållbarhet och hur länge kommer resultatet att upplevas modernt',
		'Bör det huvudsakliga fokuset ligga på helheten eller i detaljerna'
	],
];