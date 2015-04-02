<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisning phpmvc";
$data['meta_description'] = "Redovisning phpmvc";
$data['main'] = <<<EOD
<h1>Redovisning</h1>
<h2>Kmom07: Färdigställ och produktifiera ramverket</h2>
<p>Mitt ramverk är plain Lydia förutom att jag ändrat loggan och texten på några ställen. Jag kände inte att jag behärskade detta alls i början av kursen. Nu vid slutändan av kursen så känner jag att jag hade kunnat avvika mer från grundstrukturen eftersom jag lärt mig mycket och nu fattar vad MVC går ut på. Så jag hade gärna sett att kursen avslutades med att vi fick koda ihop ett eget mindre ramverk.</p> 

<p>Eftersom jag följt Lydia till 99% så var de enda 'manuella' ingreppen jag behövde göra i samband med installationen att redigera .htaccess eftersom jag jobbar direkt på studentservern + sätta site/data-katalogen till chmod 777 för att modulinitieringen skall fungera. Ändrar man inte htaccess får man ett "404. Page is not found."-meddelande, så om jag skulle leverera ett sådant här ramverk hade jag försökt ge användaren ett mer informativt felmeddelande gällande .htaccess om möjligt.</p> 

<p>I övrigt gick det förvånansvärt lätt att installera. Allt fungerade som i ur-versionen, dock fungerar inte content/init-länken i sidebaren om man går efter Lydia-koden som jag gjort eftersom den anropar den gamla Init() metoden. Så den plockade jag bort. Även module/view fungerar inte men det problemet verkar övriga studenter också ha stött på så jag vet inte om det är ok eller ej.</p> 

<p>Det jag gillade mest med det här momentet var PHPDOC som jag ofta sett refereras men aldrig sett användas tidigare. Definitivt något jag kommer använda i mina projekt nu under sommaren. Likaså git, som jag inte använt sedan kmom01 men definitivt kommer använda mig flitigt av i framtiden. </p>

<p>Generellt om kursen tycker jag att det har varit ett väldigt otymplig katalog/filstruktur och högt tempo som gjort det varit svårt att hänga med, i synnerhet kmom03-05. Kanske använder jag fel editor (jEdit) eller så passar det min stil bättre att samla mer kod i längre dokument som mos t.ex gjort i CForm.php. Ju längre kursen gick desto mer van blev man visserligen. </p>
<p>Git: <a href="https://github.com/banestyrelsen/asdf">https://github.com/banestyrelsen/asdf</a></p>
<p>Ramverk: <a href="http://www.student.bth.se/~vajo12/phpmvc/kmom07/asdf/">http://www.student.bth.se/~vajo12/phpmvc/kmom07/asdf/</a></p>
<p>Redovisning: <a href="http://www.student.bth.se/~vajo12/phpmvc/kmom07/redovisning.php">http://www.student.bth.se/~vajo12/phpmvc/kmom07/redovisning.php</a></p>


<h2>Kmom06: CSS-ramverk och grid layout</h2>
<p>Nu börjar ramverket kännas riktigt mäktigt och som något jag kan återanvända i mina framtida projekt. </p>

<p>Jag läste rätt mycket av typografiartikeln och kollade även på videon som länkades. </p>
<p>Jag har saknat metodik i mina CSS-försök och det här var precis vad jag behövde. Oerhört inspirerande vad gäller designdelen. Webbdesign känns nu mer tillgängligt. </p>

<p>LESS, lessphp, semantic.gs var ganska klurigt för mig att förstå men som tur var var det inte så mycket kod jag behövde pilla i. </p>

<p>Inga tidigare erfarenheter av CSS-ramverk. Men eftersom CSS kaskaderar och skriver över sig självt blir det snabbt en röra av det hela, så all form av extra struktur är bra anser jag. </p>

<p>Jag fick kassera den stylesheet jag tidigare skapat och använder istället Lydias för att kunna se tydligt vad som sker. Jag gjorde inga CSS-utsvävningar här men jag ser fram emot att applicera designprinciperna jag lärde mig i det här momentet på projektet.</p>



<h2>Kmom05: Innehåll</h2>
<p>Detta moment gick lyckligtvis mycket smidigare än förra. Också roligare anser jag att lära sig om saker som direkt påverkar användarupplevelsen än den mer tekniska fokus vi haft de senaste momenten.  </p>
<p>Jag hade i början svårt att få content att visas men efter lite pill så gick det.  Jag börjar bli mer bekant med hur Lydia fungerar så det går snabbare att åtgärda problemen men det är fortfarande jobbigt att leta igenom alla underkataloger. </p>
<p>Jag läste de två första sidorna av ”Skriva för webben”. Det stämmer ganska väl med hur jag själv upplever skillnaden mellan webbläsning och annan läsning.</p>
<p>XXS-artiklarna skummade jag översiktligt, känns inte som något jag är redo att lägga fokus på inom ramen för denna termin. Men injection problems är ju helt klart definitivt något man måste ha kunskap om om man vill koda något större webbprojekt så det är bra att känna till.</p> 
<p>Tack vare detta moment fick jag klarhet i syftet med bbcode. Jag har länge undrat över varför det inte är mer likt html-syntax. </p>






<h2>Kmom04: Modeller för login, användare, grupp</h2>
<p>Helt klart det tyngsta momentet hittills. Jag börjar sakta få bättre grepp om MVC som koncept men jag tycker det är alldeles för många filer att hålla reda på.</p>
<p><b>Hur kändes det att jobba med CForm-klassen (den du valde)?</b>
<p>Det kändes bra att få mer kött på benen med formulär eftersom det definitivt är något som kommer behövas i framtiden. Men det är så svårt bara att följa instruktionerna så jag kände inte att det fanns utrymme att 'leka' med formulären.</p> 
<p><b>Har du några tankar kring hur man sparar lösenord?</b>
<p>Det är kul att lära sig, jag har alltid undrat över hur det fungerar. </p>
<p><b>Hur känns det att jobba i ramverket när det byggs ut efter hand?</b>
<p>takt med att ramverket växer sig större börjar jag se fördelarna med att strukturera det på det här sättet, speciellt om man är flera som jobbar i samma kodbas. Men nu när instruktionerna inte längre explicit förklarar alla steg som behöver göras är det en förvirrande, tidskrävande mardröm att felsöka och att hålla koll på vilka filer som behöver ändras, speciellt med alla underkataloger som 'gömmer' strukturen. Visserligen tror jag inte att det går att lära sig programmering utan utmaningar men det känns som ett alldeles för stort kliv från html/oophp.</p>
<p><b>Något som var extra utmanande med detta avsnitt av tutorialen?</b>
<p>Det gick väldigt trögt i början av det här momentet eftersom jag inte gjort några kmom på ca tre veckor, så det jag lärt mig hade jag i stort sett glömt. Det tog flera timmar för mig bara att få inloggningen att fungera i den första instruktiosdeleni eftersom jag inte förstod att man skulle lägga till metoder i CSession. Efterhand gick det bättre men jag skulle uppskatta att jag lagt över 30 timmar på det här momentet.</p>
<p>I ett av de tidigare stegen hade jag ett 'Call to a member function AddInclude() on a non-object'-fel som jag brottades med en halv dag. Till sist gav jag upp och kopierade mos kod tills det fungerade. När jag sedan gjort klart sista steget fick jag allt att fungera via index-sidan, men av någon anledning fick jag upp två st login-formulär och create new user-länken fungerade inte från login-sidan (fungerade från index-sidan). Återigen fick jag kopiera kod för att få det att fungera.</p>


<h2>Kmom03: En gästbok i ditt MVC-ramverk</h2>
<p>Just nu känns detta som ett alldeles för stort hopp i svårighetsgrad från tidigare kurser. </p>

<p><b>Vilken uppfattning fick du om CodeIgniter?</b></p>
<p>Nästan all tid gick åt till att få gästboken att fungera i det 'egna' ramverket så jag ägnade inte så mycket tid åt att jobba i CodeIgniter som jag trodde från början, men jag tittade på några av deras officiella videor och det är definitivt ett verktyg jag vill testa mer i framtiden. </p>

<p><b>Gjorde du extrauppgiften och byggde din egna gästbok i CodeIgniter, hur kändes det?</b></p>
<p>Ja, enligt anvisningen i steg 1, och det gick smärtfritt. Steg 2 däremot...</p>

<p><b>Har du grepp om MVC-strukturen? Vad tycker du så här långt?</b></p>
<p>Jag har inte greppat det än. Det är en oerhörd massa filer att hålla reda på och extremt svårt att överskåda. Det skulle kanske underlätta om vi i början av kursen fick fler och mer konkreta/praktiska exempel på fördelarna med MVC. Jag känner inte alls att jag har koll på detta. </p>

<p>Sedan började jag få oerhörda mängder småfel efter varje tillägg: klasser som inte hittas, variabler som inte är deklarerade, oinitierade objekt. Mest fel som jag 'förstår', men det är oerhört petigt att manövrera runt bland alla filer och uppdatera överallt, plus att vi hela tiden modifierar strukturen och flyttar runt på kodstycken. </p>

<p>Detta har lett till att jag tappat tråden och kastat bort all kod och börjat om från början 3-4 gånger. Det känns ändå som att koden kommer vara användbar i framtiden även om jag inte förstår allt just nu. </p>

<p>Förutom CodeIgniter-gästboken gjorde jag inte några andra extrauppgifter eftersom det här momentet tog väldigt lång tid för mig att genomföra.</p>

<p>Me-sidan: <a href="http://www.student.bth.se/~vajo12/phpmvc/kmom03/">http://www.student.bth.se/~vajo12/phpmvc/kmom03/</a></p>
<p>Gästboken: <a href="http://www.student.bth.se/~vajo12/phpmvc/kmom03/asdf/guestbook">http://www.student.bth.se/~vajo12/phpmvc/kmom03/asdf/guestbook</a></p>

<h2>Kmom02: Grunden till ett MVC-ramverk</h2>
<p>Ramverket: <a href="http://www.student.bth.se/~vajo12/phpmvc/kmom02/developer/links">http://www.student.bth.se/~vajo12/phpmvc/kmom02/developer/links</a></p>
<p>På Git-Hub: <a href="https://github.com/banestyrelsen/phpmvc02">https://github.com/banestyrelsen/phpmvc02</a></p>

<p>Läste igenom läsanvisningarna innan jag satte igång. Det gav ingen större behållning för min del som inte riktigt greppat vad MVC går ut på. Jag tror jag hade fått ut mer av texten om jag jobbat igenom bokens kodexempel men även kursmomentet handlar ju om att studera kodexempel. Så det kändes mer tidseffektivt att lägga krutet direkt på Lydia-exemplet.</p>

<p>Det underlättades inte heller av att projektet drog ut på tiden pga familjeangelägenheter så det gick flera dagar mellan olika arbetspass och jag tappade hela tiden tråden. Helt klart den mest utmanande kursmomentet i någon mos-kurs jag gjort hittills. </p>

<p>Jag gjorde inga avsteg från tutorialen eftersom jag inte känner att jag vet vad jag håller på med än. Det sparar jag till projektet. Jag döpte ramverket till "Asdf" eftersom jag har dålig fantasi och behövde komma igång snabbt. </p>

<p>Kursmomenten har varit förvirrande för mig. Jag kan förstå koden men jag har har inte lyckats fatta varför vi gör just på det här sättet; vad är det för utmaning vi löser med MVC och vad är fördelarna gentemot andra alternativ och gentemot hur vi gjorde i tidigare kurser? Av samma anledning kan jag inte riktigt fälla något utslag vad gäller Lydia. Jag har dock alltid detta problem när jag börjar brottas med nya koncept inom programmering. Så förhoppningsvis går det upp ett ljus innan kursen är slut. </p>

<p>Innan kmom03 tänker jag ta en titt på video-introduktioner som andra studenter rekommenderat här. Videolänkarna hjälpte mig fatta Boilerplate så förhoppningsvis kan de hjälpa även här. </p>

<p>Mer specifika problem jag stött på: </p>
<p>Jag blev förvirrad av att det fanns två functions.php-filer. Det tog en timma för mig innan developer/links-sidan visades korrekt. </p>
<p>Även förvirrad av '%git tag' i mos exempel. Jag fick ett felmeddelande när jag skrev så. Utan %-tecknet gick det bra.</p>


<h2>Kmom01: En boilerplate</h2>

<p>Jag använder Chrome, Windows 7, FileZilla samt jEdit (med en SFTP-plugin så att jag kan jobba direkt på servern).</p>

<p>Jag började med att bläddra igenom läsanvisningarna. Dessa två kapitel var väldigt korta och handlar om OO-principer som vi stött på i oophp och andra förstaårskurser så det kändes som en mjukstart/repetition vilket jag upplever som ett lämpligt sätt att sparka igång kursen på.</p>

<p>Sedan tittade jag på Paul Irish-presentationen om Boilerplate. Jag hajar konceptet och kan se fördelarna rent principiellt men detaljerna flög mest över mitt huvud så andrahalvtimmen skummade jag förbi.</p>

<p>Som vanligt med mig och PHP var det en uppförsbacke att komma igång. Hobbymässigt ägnar jag mig främst åt C++ och Java och nu har det gått två månader sedan förra webbkursen så jag har hunnit bli rostig. Först tittade jag på källkoden till Boilerplaten och såg att den innehåller extensions jag inte känner igen (.md). För att komma igång snabbt gjorde jag som i tidigare kurser och utgick från mos' kod.</p> 

<p>Jag hade krångel med att greppa filstrukturen (framförallt hur headern inkluderas i index.php). Jag fick modifiera default-template lite eftersom jag upptäckte att jag inte använder samma version av Boilerplate som mos. Den version jag laddade hem använder en nyare version av jQuery som ligger i en annan katalog, så jag fick ändra script-anropen för att link-checkern skulle validera. Det är mycket som inte validerar med Boilerplaten men så vitt jag kan se så har mos samma felmeddelanden, så jag utgår ifrån att dessa 'fel' är OK.</p>

<p>Detta är fjärde sajten jag gjort någonsin om jag räknar vad jag gjort i htmlphp och oophp. Så vid det här laget har jag snäppet bättre koll på hur saker och ting fungerar. Det gick mycket smidigare än tidigare att styla, och själva stylesheeten känns mer överskådlig än tidigare, speciellt eftersom jag lägger all egen style separat från övriga BoilerPlate-stylen. Ägnade ett par timmar åt att leka med stylen.</p>

<p>Slutligen ville jag ge mig i kast med GitHub. Gick igenom TryGit-appen men fattade inte ett smack av den så jag googlade efter fler guider. Det gick rätt bra tills jag ombads installera credential helper vilket kraschade vid installationen av någon anledning. Jag löste detta genom att googla upp felmeddelandet och fick då förslag på åtgärder. När jag sedan försökte pusha min lokala katalog till GitHub fick jag ett "Could not read from remote repository"-fel vilket även detta löstse genom att Googla; blev att jag använde 'git remote set-url website'.</p>

<p>Testade sedan först med att toucha en README-fil och sedan en TEST-fil i GitBash, commita och pusha. Såg att det uppdaterades i GitHub. Näste steg blev att försöka kopiera över hela sajten till den lokala katalogen. Googlade fram att det går att använda 'git add .' för att lägga till alla filer i katalogen. Commitade + pushade igen och kollade sajten. Det funkade.</p>

<p>Ett återstående frågetecken är huruvida filerna måste ligga lokalt eller om det går att linka GitBash till studentservern. Jag ser att det redan ligger .gitXXX-filer i Boilerplate- katalogen. Får se om poletten trillar ner under nästa kursmoment.</p>

<p>En väldigt lärorik dag för mig!</p>

<p><a href="https://github.com/banestyrelsen/kmom01">GitHub-repo</a></p>
EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
