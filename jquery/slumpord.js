$(window).load(function(){
	
	
	
/* 	Borde dela upp dessa ännu mer, ex. MusikArtister, MusikForsaljning, etc.. */
var BranschUrval = [
    'Tidningar',
	//'qwe',
    'Musik'
    ],
	
	
	////////  Företagsfakta  ////////

    //randomName = "",
    ForetagsnamnUrval = [
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
    ],
	maxForetagsnamnUrval = ForetagsnamnUrval.length;
    
	Test = [
	'Test ett',
	'Test två',
	'Test tre'
    ],
	maxTest = Test.length;
	
	NuvarandePositioneringUrval = [
    'I dagsläget finns inga direkta konkurrenter att mäta sig med',
    'Konkurrenssituationen gör det svårt att generera något mer än en marginell förtjänst',
    'Marknadssituationen ser ljus ut och en starkt positiv närvaro i sociala medier har etablerats',
    'Som det ser idag utgör nya konkurrenter ett ständigt hot',
    'Med en övergripande marknadsandel byggd på innovation besitter de en unik position',
	'Det finns idag ett antal direkt konkurrerande och mer etablerade företag att hävda sig gentemot',
    'Varumärket har idag tagit en del av den konkurrerande marknaden och uppfattas överlag som positivt'
	],
	maxNuvarandePositioneringUrval = NuvarandePositioneringUrval.length;
 
    MalsattningUrval = [
    'Visionen är att  @@insertForetagsnamn@@ inom tre år är ett etablert namn på den interationella marknaden',
    'Visionen är att inom den närmaste tiden skapa en positiv känsla för sitt varumärke',
    'Visionen är att den ekonomiska situationen inom en ett år ska vara vinstgivande',
	'Målet är att skapa en kultur där verksamhetens goda rykte sprids från person till person',
	'Målet är att göra människor utanför dagens målgrupp medvetna om verksamheten',
	'Framtidsdrömmen är att kunna utöka sin verksamhet under det nästkommande året',
	'Ett mål för det fortsatta arbetet är att kunna hävda sig mot konkurrenter och skeptiker'
	],
    maxMalsattningUrval = MalsattningUrval.length; 

	MalsattningGenomforandeUrval = [
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
    maxMalsattningGenomforandeUrval = MalsattningGenomforandeUrval.length; 

	MalsattningResultatUrval = [
	'något som i sin tur kan generera ytterligare affärsmöjligheter',
	'och på så sätt nå ut till en bredare målgrupp'
	],
    maxMalsattningResultatUrval = MalsattningResultatUrval.length; 

	UspUrval = [
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
    maxUspUrval = UspUrval.length; 

	PreKarnvardeUrval = [
	'Allt arbete utgår från kärnvärdena',
	'I grunden finns värdeorden',
	'Hörnstenarna för @@insertForetagsnamn@@ är'
	],
    maxPreKarnvardeUrval = PreKarnvardeUrval.length; 
	
	Karnvarde1Urval = [
	'Lojalitet',
	'Noggranhet',
	'Pålitlighet',
	'Stabilitet'
	],
    maxKarnvarde1Urval = Karnvarde1Urval.length; 

	Karnvarde2Urval = [
    'Trygghet',
    'Explosivitet',
    'Modernism',
	'Effektivitet'
	],
    maxKarnvarde2Urval = Karnvarde2Urval.length; 

	Karnvarde3Urval = [
    'Nyskapande',
    'Tidlöshet',
    'Frispråkighet',
	'Fulländning'
	],
    maxKarnvarde3Urval = Karnvarde3Urval.length; 

	PostKarnvardeUrval = [
	'och ambitionen är att detta också förmedlas till utåt',
	'vilka i första hand är interna värden och därmed inte nödvändigtvis måste kommuniceras utåt',
	'vilket i dagsläget inte kommuniceras tillräckligt tydligt till målgruppen'
	],
    maxPostKarnvardeUrval = PostKarnvardeUrval.length; 
	
	
	////////  Kunder  ////////
	MalgruppUrval = [
	'Idag inriktar sig @@insertForetagsnamn@@ främst mot köpstarka personer i medelåldern',
	'I dagsläget vänder sig @@insertForetagsnamn@@ i största utsträckning till personer',
	'Sedan årsskiftet har @@insertForetagsnamn@@ valt att fokusera sin marknadsföring kring aktiva människor',
	'De personer som idag representerar målgruppen är medieintresserade människor',
	'Dagens målgrupp är diffrentierad, men @@insertForetagsnamn@@ har för denna produktion valt att inrikta sig på personer'
	],
    maxMalgruppUrval = MalgruppUrval.length; 

	MalgruppPersonaUrval = [
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
    maxMalgruppPersonaUrval = MalgruppPersonaUrval.length;
	
	MalgruppErfarenhetUrval = [
/*
	'detta är en målgrupp också utan större kännedom om själva verksamheten',
	'många är också benägna att resa, både i arbete och privat',
*/
	'förutsättningarna mot denna målgrupp är mycket blandade, även om de flesta antas ha en positiv inställning till @@insertForetagsnamn@@'
	],
    maxMalgruppErfarenhetUrval = MalgruppErfarenhetUrval.length;
	
	
	MalgruppKunskapUrval = [
	//'Idag saknas fortfarande genomslagskraft på den utländska marknaden',// vilken typ av genomslagskraft är det som saknas?
	'Generellt sett har många inom målgruppen en relation till musik',
	'Målgruppen har visat sig vara svår att nå genom digitala kanaler',
	'I dagsläget skulle en jämnare fördelning mellan män och kvinnor i målgruppen vara att föredra då männen är kraftigt överrepresenterade',
	'De flesta positiva interaktioner mellan @@insertForetagsnamn@@ och målgruppen har varit genom sociala medier'
	],
    maxMalgruppKunskapUrval = MalgruppKunskapUrval.length;


	PreOnskadUppfattningUrval = [
/*
	'därför är denna produktion även inriktad på',
	'därför är målet med denna produktion',
	'på grund av detta finns det en idé kring'
*/
	'därför är denna produktion även inriktad på',
	'därför är det långsiktiga målet',
	'på grund av detta finns det en idé kring'

	],
    maxPreOnskadUppfattningUrval = PreOnskadUppfattningUrval.length;

	OnskadUppfattningUrval = [
	'att på något sätt väcka intresse genom igenkänning',
	'att i någon form skapa en nostalgisk känsla kring produktionen',
	'att spela på mottagarens känslor i någon form',
	'att bryta mot traditionsenliga normer och på så sätt väcka intresse'
	],
    maxOnskadUppfattningUrval = OnskadUppfattningUrval.length;

	PreUppdragUrval = [
	'Det är ditt uppdrag att',
	'Ditt uppdrag är att',
	'Just nu eftersöks någon med kunskapen att',
	'Din uppgift är att',
	'Som en del av en omfattande återetablering är din uppgift att',
	'Ditt mål är nu att',
	'Din uppgift blir att hjälp till med att',
	'Din arbetsuppgift är nu att'
	],
    maxPreUppdragUrval = PreUppdragUrval.length;

	/* Uppdrag finns längre ner pga sortering utifrån bransch */

	TillvagagangssattUrval = [
	'Dramatisera kring idén och på vilket sätt budskapet enklast sprids',
	'Utnyttja de befintliga kärnvärdena och få dem att återspeglas till målgruppen'
	],
    maxTillvagagangssatt = TillvagagangssattUrval.length;
    
	PreKanslaUrval = [
	'I stort ska resultatet av den övergripande helheten upplevas som både',
	'Resultatet ska upplevas som',
	'Mottagaren bör få en känsla av något'
	],
    maxPreKansla = PreKanslaUrval.length;
    
	Kansla1Urval = [
	'femenint',
	'traditionellt',
	'färgstarkt'
	],
    maxKansla1 = Kansla1Urval.length;

	Kansla2Urval = [
	'maskulint',
	'fult',
	'tråkigt'
	],
    maxKansla2 = Kansla2Urval.length;

	ProblematiseringUrval = [
	'Arbeta utifrån ett perspektiv där @@insertForetagsnamn@@ kan framhäva sitt varumärke',
	'@@insertForetagsnamn@@ ser också gärna att produktionen på något sätt står ut från konkurrensen',
	'Analysera kring vad det är som knyter @@insertForetagsnamn@@ till den färdiga produktionen',
	'@@insertForetagsnamn@@ ser det som en möjlighet att nyttja denna produktion till att testa något ovanligt',
	'Reflektera över vad det är som karakteriserar @@insertForetagsnamn@@',
	],
    maxProblematisering = ProblematiseringUrval.length;
    
	PostProblematiseringUrval = [
	'På vilket sätt kan reaktionerna från målgruppen komma att påverka resultatet och den almänna uppfattningen',
	'Finns det något som gör att det färdiga resultatet går att applicera även i ett längre perspektiv',
	'Vad definierar hållbarhet och hur länge kommer resultatet att upplevas modernt',
	'Bör det huvudsakliga fokuset ligga på helheten eller i detaljerna'
	],
    maxPostProblematisering = PostProblematiseringUrval.length;

//////////////////
	 

function onRandomize(){
    
var index = Math.floor(Math.random()*BranschUrval.length),

	////////  Företagsfakta  ////////
    Foretagsnamn = getRandomForetagsnamn();
    Bransch = BranschUrval[index];
	NuvarandePositionering = getRandomNuvarandePositionering();
    Malsattning = getRandomMalsattning(); 
    MalsattningGenomforande = getRandomMalsattningGenomforande(); 
    MalsattningResultat = getRandomMalsattningResultat(); 
    Usp = getRandomUsp(); 
	PreKarnvarde = getRandomPreKarnvarde();
	Karnvarde1 = getRandomKarnvarde1();
	Karnvarde2 = getRandomKarnvarde2();
	Karnvarde3 = getRandomKarnvarde3();
	PostKarnvarde = getRandomPostKarnvarde();
	
	////////  Kunder  ////////
	Malgrupp = getRandomMalgrupp();
	MalgruppPersona = getRandomMalgruppPersona();
	MalgruppErfarenhet = getRandomMalgruppErfarenhet();
	MalgruppKunskap = getRandomMalgruppKunskap();
	PreOnskadUppfattning = getRandomPreOnskadUppfattning();
	OnskadUppfattning = getRandomOnskadUppfattning();
	
	////////  Uppdrag  ////////
	PreUppdrag = getRandomPreUppdrag();
	/* Uppdrag finns längre ner pga sortering utifrån bransch */
	Tillvagagangssatt = getRandomTillvagagangssatt();
	PreKansla = getRandomPreKansla();
	Kansla1 = getRandomKansla1();
	Kansla2 = getRandomKansla2();

	Problematisering = getRandomProblematisering();
	PostProblematisering = getRandomPostProblematisering();

	
/*     Test = getRandomTest(); */

	console.log(BranschUrval[index]);
	
    if(Bransch == 'Tidningar') {
        ForetagsBeskrivning = [
		'Tidn. @@insertForetagsnamn@@ distrubuerar morgontidningar i västra Blekinge ',
		'Tidn. @@insertForetagsnamn@@ trycker upp högkvalitativa livsstilsmagasin',
		'Tidn. @@insertForetagsnamn@@ konverterar gammelmedia till digitalt format'
        ];
        maxForetagsnamnBeskrivning = ForetagsBeskrivning.length,
        ForetagsBeskrivning = getRandomForetagsnamnBeskrivning()
		
        Uppdrag = [
		'(Tidn) ta fram en ny grafisk profil åt ett magasin som @@insertForetagsnamn@@ ska lansera',
		'(Tidn) introducera fler människor till de tjänster @@insertForetagsnamn@@ erbjuder genom en digital reklamkampanj',
		'(Tidn) tillsammans med @@insertForetagsnamn@@ ta fram och producera en reklamkampanj för den nya biltidningen Drive',
		'(Tidn) layouta ett magasin med en tonalitet anpassad för målgruppen'
/* 	uppdragen måste vara lagom abstrakta, inte för begränsande men ändå erbjuda vissa ramar	 */
        ];
        maxUppdrag = Uppdrag.length,
        Uppdrag = getRandomUppdrag()
    }
    else if(Bransch == 'Musik') {
        ForetagsBeskrivning = [
		'Musik @@insertForetagsnamn@@ marknadsför nya artister i den digitala marknaden', //GÄLLER FÖR ALLA I MUSIKKATEGORIN; vilken genre handlar det om (går att applicera på samtliga branscher)
		'Musik @@insertForetagsnamn@@ är en global konsertarrangör',
		'Musik @@insertForetagsnamn@@ trycker vinylskivor åt undergroundartister'
        ];
        maxForetagsnamnBeskrivning = ForetagsBeskrivning.length,
        ForetagsBeskrivning = getRandomForetagsnamnBeskrivning()
		
        Uppdrag = [
		'(Musik) ta fram ett albumomslag åt @@insertForetagsnamn@@ som ska fungera i både analoga och digitala sammanhang',
		'(Musik) ta fram en serie affischer åt @@insertForetagsnamn@@ för att promota sina artister', //var stöter man på affischerna? hur ska de användas?
		'(Musik) arbeta fram ett koncept för en webbutik där artister hos @@insertForetagsnamn@@ kan sälja sin musik',
		'(Musik) producera en grafisk profil som knyter samman @@insertForetagsnamn@@s värderingar och mål med målgruppens intressen'
        ];
        maxUppdrag = Uppdrag.length,
        Uppdrag = getRandomUppdrag()
    }
	else {
		// code to be executed if branschUrval condition fails
		console.log('Error – No such Bransch');
			//console.log(Bransch);
	}
	
   $(".test").text(Test);


	////////  Företagsfakta  ////////
	$(".foretagsnamn").text(Foretagsnamn);
	
	var replaceName = ForetagsBeskrivning.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".foretagsbeskrivning").text(replaceName);
	
	var replaceName = NuvarandePositionering.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".nuvarandepositionering").text(replaceName);
	
	var replaceName = Malsattning.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".malsattning").text(replaceName);
	
	var replaceName = MalsattningGenomforande.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".malsattninggenomforande").text(replaceName);
	
	var replaceName = MalsattningResultat.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".malsattningresultat").text(replaceName);
	
	var replaceName = Usp.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".usp").text(replaceName);
	
	var replaceName = PreKarnvarde.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".prekarnvarde").text(replaceName);
	
	var replaceName = Karnvarde1.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".karnvarde1").text(replaceName);
	  
	var replaceName = Karnvarde2.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".karnvarde2").text(replaceName);
	  
	var replaceName = Karnvarde3.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".karnvarde3").text(replaceName);
		 
	var replaceName = PostKarnvarde.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".postkarnvarde").text(replaceName);
         
	////////  Kunder  ////////
	var replaceName = Malgrupp.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".malgrupp").text(replaceName);
	
	var replaceName = MalgruppPersona.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".malgrupppersona").text(replaceName);

	var replaceName = MalgruppErfarenhet.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".malgrupperfarenhet").text(replaceName);

	var replaceName = MalgruppKunskap.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".malgruppkunskap").text(replaceName);

	var replaceName = PreOnskadUppfattning.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".preonskaduppfattning").text(replaceName);

	var replaceName = OnskadUppfattning.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".onskaduppfattning").text(replaceName);

	////////  Uppdrag  ////////
	var replaceName = PreUppdrag.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".preuppdrag").text(replaceName);

	var replaceName = Uppdrag.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".uppdrag").text(replaceName);

	var replaceName = Tillvagagangssatt.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".tillvagagangssatt").text(replaceName);
	
	var replaceName = PreKansla.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".prekansla").text(replaceName);

	var replaceName = Kansla1.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".kansla1").text(replaceName);

	var replaceName = Kansla2.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".kansla2").text(replaceName);

	var replaceName = Problematisering.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".problematisering").text(replaceName);

	var replaceName = PostProblematisering.replace("@@insertForetagsnamn@@",Foretagsnamn);
	$(".postproblematisering").text(replaceName);


}



// get and return a random sentences from array
function getRandomTest() {    
    /*var index = Math.floor(Math.random()*(maxTest));    
    return Test[index]; */                    
}

////////  Företagsfakta  ////////
function getRandomForetagsnamn() {    
    var index = Math.floor(Math.random()*(maxForetagsnamnUrval));    
    return ForetagsnamnUrval[index];                        
}

function getRandomForetagsnamnBeskrivning() {   
    var index = Math.floor(Math.random()*(maxForetagsnamnBeskrivning));	
    return ForetagsBeskrivning[index];
}

function getRandomNuvarandePositionering() {    
    var index = Math.floor(Math.random()*(maxNuvarandePositioneringUrval));    
    return NuvarandePositioneringUrval[index];
}

function getRandomMalsattning() {    
    var index = Math.floor(Math.random()*(maxMalsattningUrval));    
    return MalsattningUrval[index];
}

function getRandomMalsattningGenomforande() {    
    var index = Math.floor(Math.random()*(maxMalsattningGenomforandeUrval));    
    return MalsattningGenomforandeUrval[index];
}

function getRandomMalsattningResultat() {    
    var index = Math.floor(Math.random()*(maxMalsattningResultatUrval));    
    return MalsattningResultatUrval[index];
}

function getRandomUsp() {    
    var index = Math.floor(Math.random()*(maxUspUrval));    
    return UspUrval[index];
}

function getRandomPreKarnvarde() {    
    var index = Math.floor(Math.random()*(maxPreKarnvardeUrval));    
    return PreKarnvardeUrval[index];
}

function getRandomKarnvarde1() {    
    var index = Math.floor(Math.random()*(maxKarnvarde1Urval));    
    return Karnvarde1Urval[index];
}

function getRandomKarnvarde2() {    
    var index = Math.floor(Math.random()*(maxKarnvarde2Urval));    
    return Karnvarde2Urval[index];
}

function getRandomKarnvarde3() {    
    var index = Math.floor(Math.random()*(maxKarnvarde3Urval));    
    return Karnvarde3Urval[index];
}

function getRandomPostKarnvarde() {    
    var index = Math.floor(Math.random()*(maxPostKarnvardeUrval));    
    return PostKarnvardeUrval[index];
}

////////  Kunder  ////////
function getRandomMalgrupp() {    
    var index = Math.floor(Math.random()*(maxMalgruppUrval));    
    return MalgruppUrval[index];
}

function getRandomMalgruppPersona() {    
    var index = Math.floor(Math.random()*(maxMalgruppPersonaUrval));    
    return MalgruppPersonaUrval[index];
}

function getRandomMalgruppErfarenhet() {    
    var index = Math.floor(Math.random()*(maxMalgruppErfarenhetUrval));    
    return MalgruppErfarenhetUrval[index];
}

function getRandomMalgruppKunskap() {    
    var index = Math.floor(Math.random()*(maxMalgruppKunskapUrval));    
    return MalgruppKunskapUrval[index];
}

function getRandomPreOnskadUppfattning() {    
    var index = Math.floor(Math.random()*(maxPreOnskadUppfattningUrval));    
    return PreOnskadUppfattningUrval[index];
}

function getRandomOnskadUppfattning() {    
    var index = Math.floor(Math.random()*(maxOnskadUppfattningUrval));    
    return OnskadUppfattningUrval[index];
}


////


function getRandomPreUppdrag() {    
    var index = Math.floor(Math.random()*(maxPreUppdragUrval));    
    return PreUppdragUrval[index];
}


function getRandomUppdrag() {    
    var index = Math.floor(Math.random()*(maxUppdrag));    
    return Uppdrag[index];
}


function getRandomTillvagagangssatt() {    
    var index = Math.floor(Math.random()*(maxTillvagagangssatt));    
    return TillvagagangssattUrval[index];
}

function getRandomPreKansla() {    
    var index = Math.floor(Math.random()*(maxPreKansla));    
    return PreKanslaUrval[index];
}

function getRandomKansla1() {    
    var index = Math.floor(Math.random()*(maxKansla1));    
    return Kansla1Urval[index];
}

function getRandomKansla2() {    
    var index = Math.floor(Math.random()*(maxKansla2));    
    return Kansla2Urval[index];
}


function getRandomProblematisering() {    
    var index = Math.floor(Math.random()*(maxProblematisering));    
    return ProblematiseringUrval[index];
}

function getRandomPostProblematisering() {    
    var index = Math.floor(Math.random()*(maxPostProblematisering));    
    return PostProblematiseringUrval[index];
}



onRandomize();

$('.rndButton').click(function(e){
	onRandomize();
});

$(document).keypress(function(tangentslump) {
    //if (e.which === 119 && !$(document.activeElement).is(":input,[contenteditable]")) {
	if (tangentslump.which === 114) {
	onRandomize();
    }
});

// Att göra;
// Lägg in Uppdragen i branschslumpen under företagsbeskrivningen.


	
});