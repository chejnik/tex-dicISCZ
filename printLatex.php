<?php
//===================================================================================
// Dictionary system. Web-based application for development of bilingual dictionaries
// Version: 1.0
// Copyright (c) Ales Chejn, hvalur.org 2011
// All rights reserved
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// For support contact us at www.hvalur.org
//===================================================================================
ini_set('arg_separator.output','&amp;');
include 'start.php';
include './scripts/redirect_admin.php';
include './scripts/image_resize.php';
include './head.php';
?>
<body onload="setfocus ()">
<div id="wrapper">
<?php include 'header.php'; 
include 'menu.php'; 
echo $MAIN_MENU;
?>
<div id="content">
<div class="left_huge">
<h2><?=$lang_publish22?></h2>
<p>
<?php 
function ucfirst_utf8($stri){
 if($stri{0}>="\xc3")
     return (($stri{1}>="\xa0")?
     ($stri{0}.chr(ord($stri{1})-32)):
     ($stri{0}.$stri{1})).substr($stri,2);
 else return ucfirst($stri);
}
 if ($_GET["action"]=='latex') {
	
	if ($GET["first_time"]=='true') {
$_SESSION["count_images"]=1; // number to index authors of images
	}
$ary[] = "UTF-8";
$ary[] = "ASCII";
mb_detect_order($ary);
mb_internal_encoding("UTF-8");
$a=true;
$char = array(	
							'0' => 'a',
							'1' => 'á',
							'2' => 'b',
							'3' => 'c',
							'4' => 'd',
							'5' => 'ð',
							'6' => 'e',
							'7' => 'é',
							'8' => 'f',
							'9' => 'g',
							'10' => 'h',
							'11' => 'i',
							'12' => 'í',							
							'13' => 'j',
							'14' => 'k',
							'15' => 'l',
							'16' => 'm',
							'17' => 'n',
							'18' => 'o',
							'19' => 'ó',
							'20' => 'p',
							'21' => 'r',
							'22' => 's',
							'23' => 't',
							'24' => 'u',
							'25' => 'ú',
							'26' => 'v',
							'27' => 'w',
							'28' => 'x',
							'29' => 'y',
							'30' => 'ý',
							'31' => 'þ',
							'32' => 'æ',
							'33' => 'ö',
							'34' => 'all',
							'52' => 'freq',
							'35' => 'prep / adv',
							'36' => 'geog.',
							'37' => 'geol.',
							'38' => 'jaz.',
							'39' => 'techn.',
							'40' => 'fyz.',
							'41' => 'chem.',
							'42' => 'bot.',
							'43' => 'biol.',
							'44' => 'zool.',
							'45' => 'anat.',
							'46' => 'med.',
							'47' => 'ekon.',
							'48' => 'práv.',
							'49' => 'psych.',
							'50' => 'pol.',
					);
$nopicture_headword = array(	
							'0' => 'valhneta',
							'1' => 'vegur',
							'2' => 'vetrarbraut',
							'3' => 'víravirki',
							'4' => 'víóla',
							'5' => 'Varsjá',
							'6' => 'vínber',
							'7' => 'traktor',
							'8' => 'tungl',
							'9' => 'þyrla',
							'10' => 'sekkjapípa',
							'11' => 'saxófónn',
							'12' => 'sauðfé',							
							'13' => 'selló',
							'14' => 'semball',
							'15' => 'sílófónn',
							'16' => 'skák',
							'17' => 'sól',
							'18' => 'sólmyrkvi',
							'19' => 'sólkerfi',
							'20' => 'spraka',
							'21' => 'stjarna',
							'22' => 'stjörnuljós',
							'23' => 'stjörnuþoka',
							'24' => 'snjór',
							'25' => 'strönd',
							'26' => 'strætó',
							'27' => 'stytta',
							'28' => 'sundlaug',
							'29' => 'skógur',
							'30' => 'sjór',
							'31' => 'rasp',
							'32' => 'rauðspretta',
							'33' => 'regnbogi',
							'34' => 'reikistjarna',
							'35' => 'rekaviður',
							'36' => 'rétt',
							'37' => 'riddari',
							'38' => 'pláneta',
							'39' => 'póstkassi',
							'40' => 'póstkort',
							'41' => 'pylsa',
							'42' => 'pylsuvagn',
							'43' => 'neðanjarðarlest',
							'44' => 'Mars',
							'45' => 'mastur',
							'46' => 'máni',
							'47' => 'MR',
							'48' => 'landakort',
							'49' => 'lest',
							'50' => 'lystiskip',
							'51' => 'klarínett',
							'52' => 'kastali',
							'53' => 'knéfiðla',
							'54' => 'kerti',
							'55' => 'kontrabassi',
							'56' => 'Mars',
							'57' => 'mastur',
							'58' => 'máni',
							'59' => 'MR',
							'60' => 'landakort',
							'61' => 'lest',
							'62' => 'járnbrautarlest',
							'63' => 'járnbrautarstöð',
							'64' => 'jólaskraut',
							'65' => 'jólatré',
							'66' => 'jörð',
							'67' => 'lystiskip',
							'68' => 'hneta',
							'69' => 'halastjarna',
							'70' => 'himinn',
							'71' => 'hóll',
							'72' => 'hótel',
							'73' => 'hrafntina',
							'74' => 'geimur',
							'75' => 'geirfugl',
							'76' => 'gítar',
							'77' => 'farþegaskip',
							'78' => 'fáni',
							'79' => 'fiðla',
							'80' => 'flatkaka',
							'81' => 'flauta',
							'82' => 'flugeldur',
							'83' => 'flugvél',
							'84' => 'flygill',
							'85' => 'eimreið',
							'86' => 'eimskip',
							'87' => 'eyðibýli',
							'88' => 'eldur',
							'89' => 'dúdúfugl',
							'90' => 'bryggja',
							'91' => 'bær',
							'92' => 'bassi',
							'93' => 'básúna',
							'94' => 'bjarndýr',
							'95' => 'bjúga',
							'96' => 'alheimur',
							'97' => 'bifur',
							'98' => 'gullþröstur',
							'99' => 'gúrka',
							'100' => 'harpa',
							'101' => 'geitungur',
							'102' => 'murta',
							'103' => 'prímati',
							'104' => 'hálfmáni',
							'105' => 'júkka',
							'106' => 'ísbjörn',
							'107' => 'kastaníuhneta',
							'108' => 'nería',
							'109' => 'linditré',
							'110' => 'pardusdýr',
							'111' => 'prestafífill',
							'112' => 'prófastur',
							'113' => 'refsbróðir',
							'114' => 'sigðnefur',
							'115' => 'skeldýr',
							'116' => 'bláhvalur',
							'117' => 'reyðarhvalur',
							'118' => 'höfrungur',
							'119' => 'skóf',
							'120' => 'skrápdýr',
							
							'121' => 'skúfaþang',
							'122' => 'skordýr',
							'123' => 'skeldýr',
							'124' => 'skarkoli',
							'125' => 'silfurskotta',
							'126' => 'sellerí',
							'127' => 'sef',
							'128' => 'sandreyður',
							'129' => 'samloka',
							'130' => 'ránfugl',
							'131' => 'rándýr',
							'132' => 'nagdýr',
							'133' => 'mítill',
							'134' => 'maríubjalla',
							'135' => 'lúða',
							'136' => 'loðna',
							'137' => 'lindýr',
							'138' => 'liðdýr',
							'139' => 'langa',
							'140' => 'skáblað',
							'141' => 'slanga',
							
							'142' => 'allrahanda',
							'143' => 'ananas',
							'144' => 'api',
							'145' => 'Álandseyjar',
							'146' => 'ánamaðkur',
							
							'147' => 'basilíka',
							'148' => 'belgjurt',
							'149' => 'bjalla',
							'150' => 'björk',
							'151' => 'blaðlaukur',
							
							'152' => 'blaðsalat',
							'153' => 'blaðsellerí',
							'154' => 'bleksvepur',
							'155' => 'blómkál',
							'156' => 'brokkolí',
							
							'157' => 'buffal',
							'158' => 'fjörugras',
							'159' => 'flatbrauð',
							'160' => 'fló',
							'161' => 'flyðra',
							
							'161' => 'fluga',
							'162' => 'fremdardýr',
							'163' => 'froskdýr',
							'164' => 'froskur',
							'165' => 'gasella',
							
							'166' => 'grænkál',
							'167' => 'gulrófa',
							'168' => 'gulrót',
							'169' => 'harðfiskur',
							'170' => 'Helsinki',
							
							'171' => 'hlýri',
							'172' => 'hornfiskur',
							'173' => 'hófdýr',
							'174' => 'hrafnsönd',
							'175' => '',
							
							'176' => 'hreðka',
							'177' => 'hringdúfa',
							'178' => 'hrísgrjónagrautur',
							'179' => 'hrossanál',
							'180' => 'hrúðurkarl',
							
							'181' => 'húsdúfa',
							'182' => 'hvítkál',
							'183' => 'höfuðlús',
							'184' => 'jötunuxi',
							'185' => 'kakkalakki',
							
							'186' => 'kaktus',
							'187' => 'kannabis',
							'188' => 'kál',
							'189' => 'Kaupmannahöfn',
							'190' => 'kínakál',
							
							'191' => 'klaufdýr',
							'192' => 'kleggi',
							'141' => 'koli',
							'193' => 'krabbadýr',
							'194' => 'kræklingur',
							
							'195' => 'kúalubbi',
							'196' => 'kúmen',
							'197' => 'kúrbítur',
							'198' => 'langa',
							'199' => 'langreyður',
							
							'200' => 'laukur',
							'201' => 'lax',
							'202' => 'linsubaun',
							'203' => 'maðkafluga',
							'204' => 'maífluga',
							'205' => 'maís',
							'206' => 'makríll',
							'207' => 'margfætla',
							'208' => 'marsvín',
							'209' => 'maur',
							
							'210' => 'moskusuxi',
							'211' => 'mús',
							'212' => 'naggrís',
							'213' => 'nefdýr',
							'214' => 'næpa',
							'215' => 'ostra',
							'216' => 'perlulaukur',
							'217' => 'pipar',
							'218' => 'pokadýr',
							'219' => 'púrra',
							'221' => 'rabarbari',
							'222' => 'radísa',
							'223' => 'ranabjalla',
							'224' => 'rauðkál',
							'225' => 'rauðlaukur',
							'226' => 'rauðrófa',
							'227' => 'repja',
							'228' => 'Reykjavík',
							'229' => 'rotta',
							'230' => 'rófa',
							
							'231' => 'rósakál',
							'232' => 'salat',
							'233' => 'síld',
							'234' => 'skarfakál',
							'235' => 'skógarmítill',
							'236' => 'skrautpuntur',
							'237' => 'skrofa',
							'238' => 'skröltormur',
							'239' => 'skyr',
							'240' => 'slanga',
							
							'241' => 'spendýr',
							'242' => 'spergill',
							'243' => 'spörfugl',
							'244' => 'steinselja',
							'245' => 'steypireyður',
							'246' => 'Stokkhólmur',
							'247' => 'stungumý',
							'248' => 'sveppur',
							'249' => 'sykurrófa',
							'250' => 'toppkál',
							
							'251' => 'túnfiskur',
							'252' => 'túnvingull',
							'253' => 'tyrkjadúfa',
							'254' => 'ugla',
							'255' => 'urriði',
							'256' => 'úlfaldi',
							'257' => 'vallhæra',
							'258' => 'veggjalús',
							'259' => 'Vestmannaeyjar',
							'260' => 'bóluþang',
							
							'261' => 'klóþang',
							'262' => 'þari',
							'263' => 'þursaskegg',
							'264' => 'þykkvalúra',
							
							
							'301' => 'skriðdýr',
							'302' => 'Akureyri',
							'303' => 'bjargdúfa',
							'304' => 'björn',
							'305' => 'blávingull',
							'306' => 'bleksveppur',
							'307' => 'dúfa',
							'308' => 'engifer',
							'309' => 'eski',
							
							'310' => 'finnungur',
							'311' => 'fiskifluga',
							'312' => 'fjörugrös',
							'313' => 'flyðra',
							'314' => 'físisveppur',
							'315' => 'Grænland',
							'316' => 'grasker',
							'317' => 'granatepli',
							'318' => 'Góðrarvonarhöfði',
							'319' => 'grátviður',
							
							'320' => 'greni',
							'321' => 'gulerta',
							'322' => 'gulvíðir',
							'323' => 'hafrar',
							'324' => 'hamstur',
							'325' => 'húsageitungur',
							'326' => 'hör',
							'327' => 'hörpudiskur',
							'328' => 'kartafla',
							'329' => 'kanína',
							
							'330' => 'kanarífugl',
							'331' => 'kónguló',
							'332' => 'kryddmæra',
							'333' => 'lakkrísrót',
							'334' => 'mýfluga',
							'335' => 'musteristré',
							'336' => 'mölur',
							'337' => 'páfagaukur',
							'338' => 'páfugl',
							'339' => 'pelargónía',
							
							'340' => 'pétursselja',
							'341' => 'silungur',
							'342' => 'storkur',
							'343' => 'tröllasúra',
							
							'400' => 'agúrka',
							'401' => 'anís',
							'402' => 'apríkósutré',
							'403' => 'álmur',
							'404' => 'basil',
							'405' => 'begónía',
							'406' => 'bitmý',
							'407' => 'birki',
							'408' => 'blettatígur',
							'409' => 'blæösp',
							
							'410' => 'buffall',
							'411' => 'eggaldin',
							'412' => 'engispretta',
							'413' => 'ferskjutré',
							'414' => 'fiskur',
							'415' => 'fíll',
							'416' => 'fjallaljón',
							'417' => 'flatfiskur',
							'418' => 'flétta',
							'419' => 'flóðhestur',
							
							'420' => 'flæmingi',
							'421' => 'garðarblómberg',
							'422' => 'garðarhlynur',
							'423' => 'gaupa',
							'424' => 'geit',
							'425' => 'gleraugnaslanga',
							'426' => 'górilla',
							'427' => 'graslaukur',
							'428' => 'grasvíðir',
							'429' => 'grávíðir',
							
							'430' => 'greifingi',
							'431' => 'græðisúra',
							'432' => 'gullregn',
							'433' => 'gulmaðra',
							'434' => 'gulstör',
							'435' => 'strandrauðvíður',
							'436' => 'sólber',
							'437' => 'sóley',
							'438' => 'spör',
							'439' => 'stóriburkni',
							
							'440' => 'svartbjörn',
							'441' => 'svartfugl',
							'442' => 'svartkráka',
							'443' => 'svartyllir',
							'444' => 'vallarfoxgras',
							'445' => 'teygjudýr',
							'446' => 'gáshaukur',
							'447' => 'gráhegri',
							'448' => 'gorkúla',
							'449' => 'fjallarefur',
							'450' => 'fífill',
							'451' => 'umfeðmingsgras',
							'452' => 'þerna',
							'453' => 'rauðhöfðaönd',
							'454' => 'valur',
							'455' => 'espitré',
							'400' => '',
							'400' => '',
							'400' => '',
							'400' => '',
							'400' => '',
							
							'400' => '',
							'400' => '',
							'400' => '',
							'400' => '',
							'400' => '',
							'400' => '',
							
							
					);
$no_break_strings = array(	
							'0' => 'e-að',
							'1' => 'e-ð',
							'2' => 'e-ir',
							'3' => 'e-ja',
							
							'4' => 'e-jum',
							'5' => 'e-m',
							'6' => 'e-n',
							'7' => 'e-r',
							
							'8' => 'e-rra',
							'9' => 'e-rs',
							'10' => 'e-s',
							'11' => 'e-u',
							
							
							);

$smash_accented_letters = array(	
							'0' => 'Š',
							'1' => 'Č',
							'2' => 'Ě',
							'3' => 'Ř',
							
							'4' => 'Ž',
							'5' => 'Ý',
							'6' => 'Á',
							'7' => 'Í',
							
							'8' => 'Ú',
							'9' => 'É',
							'10' => 'Ö',
							'11' => 'Ó',
							);

$isabb = array(	
							'0' => 'e-u',
							'1' => 'e-ð',
							'2' => 'e-m',
							'3' => 'e-n',
							
							'4' => 'e-s',
							'5' => 'e-rs',
							'6' => 'e-jum',
							'7' => 'e-að',
							
							'8' => 'e-r',
							'9' => 'e-ir',
							'10' => 'e-ja',
							'11' => 'e-rra',
							);
if ($_GET["choose"]=='true') {
?>
<form action="fileprint_latex_stable.php?action=latex&amp;first_time=true&amp;limit=0" method="post" name="form">	
	
	
Vyber si písmenko
<select name="latex_letter">
<?php
foreach ($char as $key1 => $value) {
?>
<option value="<?=$value?>"> <?=$value?></option>
<?php
}
?>
</select> 
<input type="submit" class="button2" name="submit" value="<?=$lang_search_button?>">
</form>		
<?php		
} else {
$count=0; $record[$count]='pepa';
$oop = new mySQL ($host1, $user1, $pass1, $data1, TRUE); 
// !!unquate later this point, take a lot of time
$_xml='';
if ($_GET["option"]=='test'){
if ($_GET["limit"]>=400) {
$_xml = "";
$_xml .="\n";
$_xml .="\end{document}\n";
if ($_GET["option"]=='test') {
$file = fopen('./tmp/dictionary_test.tex','a');		
} else {
$file = fopen('./tmp/letters.tex','a');
}
if (!fwrite($file, $_xml)) {
print('Error writing to sluvka.tex');
}
fclose($file);
header('Location: ./fileprint_latex_stable.php');
Die();
}
}

if ($_POST["latex_letter"]!="") {
$_SESSION["letter"]=$_POST["latex_letter"];
}


if ($_SESSION["letter"]=="all") {
	
	// MAIN CLAUSE
$sql333 = sprintf ('SELECT * FROM `ds_1_headword` ORDER BY `keyword` COLLATE `%s`, `num_keyword` ASC LIMIT %s, 100',
	$collation_1,
	$_GET["limit"]);


} else if ($_SESSION["letter"]=="freq") {
$f='a';	
	// MAIN CLAUSE
$sql333 = sprintf ('SELECT * FROM `ds_1_headword` WHERE `frequency` LIKE %s ORDER BY `keyword` COLLATE `%s`, `num_keyword` ASC LIMIT %s, 100',
	quate_smart($f),
	$collation_1,
	$_GET["limit"]);


} else  if ($_SESSION["letter"]=="prep / adv") {
$t1='prep';
$t2='adv';
$t3='prep / adv';
$t4='prep / adv / conj';
$t5='conj';

	// MAIN CLAUSE
$sql333 = sprintf ('SELECT * FROM `ds_1_headword` WHERE `gram_1_word_group` = %s OR `gram_1_word_group` = %s OR `gram_1_word_group` = %s OR `gram_1_word_group` = %s OR `gram_1_word_group` = %s ORDER BY `keyword` COLLATE `%s`, `num_keyword` ASC LIMIT %s, 100',
	quate_smart($t1),
	quate_smart($t2),
	quate_smart($t3),
	quate_smart($t4),
	quate_smart($t5),
	$collation_1,
	$_GET["limit"]);
	
	
} else if ($_SESSION["letter"]=="geog.") {

	// MAIN CLAUSE
$sql333 = sprintf ('SELECT * FROM `ds_1_headword` WHERE `gram_1_word_group` = %s ORDER BY `keyword` COLLATE `%s`, `num_keyword` ASC LIMIT %s, 100',
	quate_smart($_SESSION["letter"]),
	$collation_1,
	$_GET["limit"]);
	
	
} else {

// MAIN CLAUSE
$sql333 = sprintf ('SELECT * FROM `ds_1_headword` WHERE `keyword` COLLATE `%s` LIKE %s ORDER BY `keyword` COLLATE `%s`, `num_keyword` ASC LIMIT %s, 100',
	$collation_1,
	quate_wildcard($_SESSION["letter"]),
	$collation_1,
	$_GET["limit"]);

}
/*
$gram1='m';
$gram2='(-a, -ar)';
$sql333 = sprintf ('SELECT * FROM `ds_1_headword` WHERE `keyword` COLLATE `%s` LIKE %s AND `gram_1_word_group` = %s AND `gram_2_endings` = %s ORDER BY `keyword` COLLATE `%s`, `num_keyword` ASC LIMIT %s, 100',
	$collation_1,
	quate_wildcard($_SESSION["letter"]),
	quate_smart($gram1),
	quate_smart($gram2),
	$collation_1,
	$_GET["limit"]);
*/
$rew=0;
$oop->Setnames(); 
$oop->query($sql333);
$num89 = $oop->getNumrows();
if ($num89 != 0 ) {
$oop2 = new mySQL ($host1, $user1, $pass1, $data1, TRUE);
$oop11 = new mySQL ($host1, $user1, $pass1, $data1, TRUE); 
$oop33 = new mySQL ($host1, $user1, $pass1, $data1, TRUE);
$oop_ipa = new mySQL ($host1, $user1, $pass1, $data1, TRUE);
if ($_GET["limit"]==0) {
	

if ($_GET["option"]=='test') {
$file = fopen('./tmp/dictionary_test.tex','w');		
} else {
$file = fopen('./tmp/letters.tex','w');
}
fclose($file);

//$_xml .="\pagestyle{dictstyle}\n";
$oop2->freeResult();
}



// there begins the all while loop / the main one
 while ($row = $oop->fetchArray()) :
 
 //we set phrase session to empty string
 $_SESSION["phrase"]='';
 foreach ($row as &$v) {
	 $v = str_replace("&", "\&", $v);
	 $v = str_replace("%", "\\%", $v);
}
 $num_walked++;
  // check whether there is homonym procedure
  // first load first word to help string
  // fill temp string 
  // check if the next word is the same
  // if so string replace the word with superscript string with word
  // if not copy temp string to xml final string
  // note -> control string replace according to whether we use stem word or keyword
  // we replace keyword string with superscript with keyword string
 // letter end
 
 $_wordxml=''; // empty the temp wordxml string container (full of last word)
$_wordentryxml=''; // empty the temp wordxml string container (full of last word)
// only one row in the table, one meaning
$pocet=1;
// only one picture for the headword
$ONEpicture=FALSE;
$h_count=-1;

 // help copy of result to find where marker starts (important for latex formating)
$table_dict="ds_2_senses";
$sql2 = sprintf ('SELECT * FROM `%s` WHERE `keyword` COLLATE `%s` = %s AND `num_keyword` = %s ORDER BY `order`',
	$table_dict,
	$collation_1,
	quate_smart($row[1]),
	quate_smart ($row[2]));

$oop2->Setnames(); 
$oop2->query($sql2);
$cccc=0; $row2_copy='';
$h_letter_count=0;
while ($row2 = $oop2->FetchRow()) :
$row2_copy[$cccc] = $row2;
$cccc++;
endwhile;
$oop2->FreeResult();
//

$table_dict="ds_2_senses";
$sql2 = sprintf ('SELECT * FROM `%s` WHERE `keyword` COLLATE `%s` = %s AND `num_keyword` = %s ORDER BY `order`',
	$table_dict,
	$collation_1,
	quate_smart($row[1]),
	quate_smart ($row[2]));

$oop2->Setnames(); 
$oop2->query($sql2);
$num22 = $oop2->getNumrows(); 
while ($row2 = $oop2->FetchArray()) :
$h_count++;
$char_f = mb_strtolower(mb_substr(trim($row[1]),0,1));

if ($_SESSION["old_char"]==$char_f) {
$_SESSION["old_char"]=$char_f;
} else {
if ($_SESSION["old_char"]!='') {
}
if ($_SESSION["letter_num"]=='') {
$_SESSION["letter_num"]=0;	
}
$_SESSION["letter_num"]=$_SESSION["letter_num"]++;
$char_f2 = 'letter'.$_SESSION["letter_num"];
$_wordentryxml .="\\dicLetter{".$char_f."}{".$char_f2."}\n";
$_SESSION["old_char"]=$char_f;
$found=TRUE;	
}
// first time it will create an article 
if ($pocet == 1 ) { //5
$_wordentryxml .="\dicEntry";
$_wordentryxml .="[".$row[1]."]";  // keyword for headers
if ($row[3]=='') { 
// if stem is empty we fill it with headword value
$row[3]=$row[1];
}

// number of characters - if bigger than help latex to hyphenate
$num_for_hyphen=mb_strlen($row[3]);
$row[3]=str_replace("·","·",$row[3]);

// if a word belongs to 1500 most frequent words
if ($row[11]=='a') {
	$abc =" \dicsymFrequent\ ";	
} else {
	$abc ='';
}
// special function to search within pdf even if headword contains special characters
// disallow for print
//$pdfsearch='\settowidth{\eyja}{'.$row[3].'}\makebox[\eyja]{\color{white}'.$row[1].'}\hspace{-\eyja}';
	
if ($row[2]!=0) {
$_wordentryxml .=" \dicTerm{".$row[3]."\smash{\\textsuperscript{".$row[2]."}}}"; }
else {
$_wordentryxml .=" \dicTerm{".$row[3]."}"; } // keyword with superscript if neccessary

// keyword variant
if ($row[4]!='') {
// number of characters - if bigger than help latex to hyphenate	
//$num1_for_hyphen=mb_strlen($row[4]);
//$num_for_hyphen= $num_for_hyphen+$num1_for_hyphen;

if (strpos(trim($row[4]), ',')!=0) {
$variants= explode (',',trim($row[4]));	
} else {	
$variants[0]=$row[4];	
}

foreach ($variants as $vval) {
	
	if (strpos(trim($vval), '(')!=0) {
$new_value= explode ('(',trim($vval));	
$new_num = str_replace("(","",$new_value[1]);
$new_num = str_replace(")","",$new_num);


$_wordentryxml .="\dicTerm{, ".$new_value[0]."\smash{\\textsuperscript{".$new_num."}}}"; 
	} else {
		

$_wordentryxml .="\dicTerm{, ".$vval."}"; 		
	}

}

}

else {
$_wordentryxml .="".$abc.""; } // 

if ($row[6]!='') {
$ipa_pronunciation=$row[6];
$num_ipa=mb_strlen($ipa_pronunciation);
$new_ipa_pronunciation='';
$table_ipa='phonems_latex';
for ($ii = 0; $ii < $num_ipa; $ii++) {
$new_ipa_char='';
$ipa_char[$ii]= mb_substr($ipa_pronunciation,$ii,1);
$ipa_char[$ii+1]= mb_substr($ipa_pronunciation,$ii+1,1);
$sql_ipa = sprintf ('SELECT `latex_phonem` FROM `%s` WHERE `phonem` = %s',
	$table_ipa,
	quate_smart($ipa_char[$ii].$ipa_char[$ii+1]));
$oop_ipa->Setnames();
$oop_ipa->query($sql_ipa);
$num2 = $oop_ipa->getNumrows(); 
if ($num2!=0) {
$returned_ipa = $oop_ipa->fetchRow ();
$new_ipa_char=$returned_ipa[0];
if ($ii==$num_ipa-1) {
$new_ipa_pronunciation.='{'.$new_ipa_char.'}';
} else {
$new_ipa_pronunciation.='{'.$new_ipa_char.'}';		
}
$oop_ipa->FreeResult();
$ii++;
} else {
$oop_ipa->FreeResult();
$sql_ipa = sprintf ('SELECT `latex_phonem` FROM `%s` WHERE `phonem` = %s',
	$table_ipa,
	quate_smart($ipa_char[$ii]));
$oop_ipa->Setnames();
$oop_ipa->query($sql_ipa);
$returned_ipa = $oop_ipa->fetchRow ();
$new_ipa_char=$returned_ipa[0];
if ($ii==$num_ipa-1) {
$new_ipa_pronunciation.='{'.$new_ipa_char.'}';
} else {
$new_ipa_pronunciation.='{'.$new_ipa_char.'}';		
}
$oop_ipa->FreeResult();	
}
if (($row[4]!='') or ($num_for_hyphen>20)) {
$new_ipa_pronunciation.='\-';		
}
}
$_wordentryxml .=" \dicIPA{". $new_ipa_pronunciation ."}";
} // pronunciation

if ($row[7]!='') {
$_wordentryxml .=" \dicPos{". $row[7] . "}";
} 

$r_class='';
if ($row[7]=='m') {
$table_gram='ds_morphology_classes';
} else if ($row[7]=='n') {
$table_gram='ds_morphology_classes_n';
} else if ($row[7]=='f') {
$table_gram='ds_morphology_classes_f';
} else if ($row[7]=='adj') {
$table_gram='ds_morphology_classes_adj';
} else if ($row[7]=='pron') {
$table_gram='ds_morphology_classes_pron';
} else if ($row[7]=='v') {
$table_gram='ds_morphology_classes_verb';
} else if ($row[7]=='num') {
$table_gram='ds_morphology_classes_num';
} 
$sql_class = sprintf ('SELECT `class`, `number` FROM `%s` WHERE `keyword` COLLATE `%s` = %s AND `num_keyword` = %s',
	$table_gram,
	$collation_1,
	quate_smart($row[1]),
	quate_smart ($row[2]));

$oop_ipa->Setnames();
$oop_ipa->query($sql_class);
$num3 = $oop_ipa->getNumrows(); 
$class_details=FALSE;
if ($num3!=0) {
$r_class = $oop_ipa->fetchRow ();
$class_details=TRUE;
$_wordentryxml .='['.$r_class[0].']';
}
$oop_ipa->FreeResult();




// grammer
if ($row[8]!='') {
$n_endings=mb_strlen($row[8]); // for example (-s, -) is 7, (-s, -ar)	// nolinebreak
if ($n_endings<8) {
//$row[8] = '\nobreakseq{'.$row[8].'}';	
}
//$row[8] = str_replace('-', '\hbox{-}', $row[8]);

 $row[8] = str_replace('-', '‑',  $row[8]);
 
$_wordentryxml .=" \dicFlx{". $row[8] ."}";

if ($class_details===true) {
	$_wordentryxml .='['.$r_class[1].']';
}
} else if ($r_class[1]!='') {
$_wordentryxml .="\dicFlx{}";
$_wordentryxml .='[-'.$r_class[1].']';
}

// grammer endings
if ($row[9]!='') {
$_wordentryxml .=" \dicFlx{".$row[9] ."}";} // grammer additional
}//5
// the rest will make while loop, it fills the definition tags
if ($pocet>1) {$_wordentryxml .="";}
if ($row2[24]!=$_SESSION["phrase"]) {
if ($row2[24]!='') {
$_SESSION["phrase"]=$row2[24];
// headword instead of fr
//if ($row2[24]=='fr') {
//$row2[24]=$row[1];	
//}
//
if ($row2[24] =='fr') { $row2[24]=$row[1]; }
if (strpos(trim($row2[24]), '+')!=0) {
$spl= explode ('+',trim($row2[24]));
$_wordentryxml .=' \dicIdiom{'.trim($spl[0]).'}['.trim($spl[1]).']'; //  phrase	

} else {
$_wordentryxml .=' \dicIdiom{'.$row2[24].'}'; //  phrase
}



} 

}
if ($row2[22]=='přís.') {

$_wordentryxml .=' \dicProverb\ ';	
}

if ($row2[19]!='') {
$_wordentryxml .=" \\textbf{".$row2[19] ."}";} // markers

if ($row2[4]!='') { // IS phrase

if ($row2[24]!='') {
$_wordentryxml .="{";
}
$_wordentryxml .=" \dicPhraseIS{". $row2[4] . "}";
if ($row2[24]!='') {
$_wordentryxml .="}";
}

} // word
if ($row2[3]!='') {
$_wordentryxml .=" \dicFlx{". $row2[3] . "}";} // word grammer 
if ($row2[20]!='') {
$_wordentryxml .=" {\\textbf{". $row2[20] . "}}";} // sec markers
if ($row2[21]!='') {
$_wordentryxml .=" \dicFieldCat{". $row2[21] . "}";} // specification
if ($row2[22]!='') {
$_wordentryxml .=" \dicLangCat{". $row2[22] . "}";} // usage s

if ($row2[13]!='') {
if (strpos(trim($row2[13]), '(')!=0) {
$new_value= explode ('(',trim($row2[13]));	
$new_num = str_replace("(","",$new_value[1]);
$new_num = str_replace(")","",$new_num);
$table_main="ds_1_headword";
$sql = sprintf ('SELECT `id` FROM `%s` WHERE `keyword` COLLATE `%s` = %s AND `num_keyword` = %s',
	$table_main,
	$collation_1,
	quate_smart($new_value[0]),
	quate_smart($new_num));
$oop_ipa->Setnames();
$oop_ipa->query($sql);
$num2 = $oop_ipa->getNumrows();	
$oop_ipa->FreeResult();
if ($num2==0) {
$light_arrow="*";
} else {
$light_arrow="";	
}
$_wordentryxml .=" \dicSynonym".$light_arrow."{". $new_value[0] ."\smash{\\textsuperscript{".$new_num."}}}"; // synonym 
} else {
$table_main="ds_1_headword";
$new_num=0;
$sql = sprintf ('SELECT `id` FROM `%s` WHERE `keyword` COLLATE `%s` = %s AND `num_keyword` = %s',
	$table_main,
	$collation_1,
	quate_smart($row2[13]),
	quate_smart($new_num));
$oop_ipa->Setnames();
$oop_ipa->query($sql);
$num2 = $oop_ipa->getNumrows();	
$oop_ipa->FreeResult();
if ($num2==0) {
$light_arrow="*";
} else {
$light_arrow="";
}

$_wordentryxml .=" \dicSynonym".$light_arrow."{". $row2[13] . "}"; // syn
}
}

if ($row2[5]!='') {
$_wordentryxml .=" \dicDirectTranslationCS{". $row2[5] . "}";} // example direct translation

if ($row2[6]!='') {
if (($row[1]=='linmæli') or ($row[1]=='harðmæli')) {
$row2[6]= str_replace('d̥', '\textsubring{d}', $row2[6]);
$row2[6]= str_replace('b̥', '\textsubring{d}', $row2[6]);
$row2[6]= str_replace('ɡ̊', '\r{g}', $row2[6]);
$row2[6]= str_replace('ɟ̊', '\r{\textObardotlessj}', $row2[6]);
$row2[6]= str_replace('pʰ', 'p\smash{\textsuperscript{h}}', $row2[6]);
$row2[6]= str_replace('tʰ', 't\smash{\textsuperscript{h}}', $row2[6]);
$row2[6]= str_replace('kʰ', 'k\smash{\textsuperscript{h}}', $row2[6]);
$row2[6]= str_replace('cʰ', 'c\smash{\textsuperscript{h}}', $row2[6]);
}
	
$_wordentryxml .=" \dicIndirectTranslationCS{".$row2[6]."}";} // translation detail 
// if latin or spec is geog. or kulin.
	
if (($row2[16]!='') or ($row2[21]=='geog.') or ($row2[21]=='kulin.') ) {
	
	if (($row2[21]=='geog.') or ($row2[21]=='fyz.') or ($row2[21]=='kulin.')) {	
	} else {
	$_wordentryxml .=" \\textit{(l.~{\\textLA{". $row2[16] . "}})} ";
}

$nopicture=FALSE;

 foreach ($nopicture_headword as $v) {
 	 if ($row[1]==$v) {
 	 $nopicture=TRUE;	 
 	 }
 	 
 }
 $icon=FALSE;
 if (($nopicture===FALSE) and ($ONEpicture===FALSE)) {
// image
// uploaded IMAGES
$num_found=0;
$table_images = 'ds_images';
$sql = sprintf ('SELECT `name_of_file`,`author`,`licence`, `orientation` FROM `%s` WHERE `keyword` COLLATE `%s` = %s AND `num_keyword` = %s',
	$table_images,
	$collation_1,
	quate_smart($row[1]),
	quate_smart($row[2]));
$oop11->Setnames();
$oop11->query($sql);
$num2 = $oop11->getNumrows(); 
if ($num2!=0){
$image_found=TRUE;
$count_i=0;
while ($image = $oop11->fetchRow ()):
 foreach ($image as &$v) {
	 $v = str_replace("&", "\&", $v);
	 $v = str_replace("%", "\%", $v);
}
if ($count_i==0) {
$icon=TRUE;	
$count_i++;
if ($image[3]==1) {
	/*
$_wordentryxml7 .= "\begin{figure}[ht]
\centering
\setlength\\fboxsep{0pt}\setlength\\fboxrule{0.5pt}\\fbox{\includegraphics[width=5.5cm]{".$image[0]."}}
\caption{".ucfirst_utf8($row[1])."}
\\end{figure} \n";
*/
$cap_title=ucfirst_utf8($row[1]);

$_wordentryxml7 .= "
\dicFigure{".$image[0]."}{".$cap_title."}";

} else {
	/*
$_wordentryxml7 .= "\begin{figure}[ht]
\centering
\setlength\\fboxsep{0pt}\setlength\\fboxrule{0.5pt}\\fbox{\includegraphics[height=5.5cm]{".$image[0]."}}
\caption{".ucfirst_utf8($row[1])."}
\\end{figure} \n";
*/
$cap_title=ucfirst_utf8($row[1]);
//\dicFigure{filename}{caption text}{index entry}
$_wordentryxml7 .= "
\dicFigure{".$image[0]."}{".$cap_title."}";

}
if ($image[2]=='Creative Commons Attribution-Share Alike 2.5 Generic')
{
$image[2]='CC-BY-SA-2.5';
} else if ($image[2]=='Creative Commons Attribution 3.0')
{
$image[2]='CC-BY-3.0';
} else if ($image[2]=='Creative Commons Attribution-Share Alike 3.0 Unported')
{
$image[2]='CC-BY-SA-3.0-UN';
} else if ($image[2]=='Public domain')
{
$image[2]='Public domain';
} else if ($image[2]=='GNU Free Documentation License')
{
$image[2]='GFDL';
} 
$_wordentryxml7 .=  "{".ucfirst_utf8($row[1])." - ".$image[1].", ".$image[2]."}";
$_SESSION["count_images"]++;
}
endwhile;
} else {
$image_found=FALSE;
}
$oop11->FreeResult();
if ($image_found===FALSE) {
$dict = 'ds_2_senses';
$biolib = 'ds_biolib_full';
$num_found=0;
$empty='';
$sql = sprintf ('SELECT `latinnames` FROM `%s` WHERE `keyword` COLLATE `%s` = %s AND `num_keyword` = %s AND `latinnames` != %s',
	$dict,
	$collation_1,
	quate_smart($row[1]),
	quate_smart($row[2]),
	quate_smart($empty));
$oop11->Setnames();
$oop11->query($sql);
$num2 = $oop11->getNumrows(); 
if ($num2 != 0) { // 1
$row_latin = $oop11->fetchRow ();
$cor1=10;
$sql33 = sprintf ('SELECT `D`, `A`, `H`, `I`, `F`, `E`, `status`, `id` FROM `%s` WHERE `B` = %s AND `C` != 0 AND `status`= %s ORDER BY `status` DESC',
	$biolib,				
	quate_smart($row_latin[0]),
	quate_smart($cor1));
$oop33->Setnames();
$oop33->query($sql33);
$num33= $oop33->getNumrows(); 
$add=FALSE;
while ($row_image = $oop33->fetchRow ()):
 foreach ($row_image as &$v) {
	 $v = str_replace("&", "\&", $v);
	 $v = str_replace("%", "\%", $v);
}

if ($add===FALSE) {
$icon=TRUE;
$filename = "/DISK2/WWW/hvalur.org/www/images/biolib/full/".$row_image[0].".jpg";
if (file_exists($filename)) {
$add=TRUE;
$image = new SimpleImage();
$image->load($IMAGE_URL."images/biolib/full/".$row_image[0].".jpg");
$i_width=$image->getWidth();
$i_height=$image->getHeight();
if ($i_width>=$i_height) {
	/*
$_wordentryxml7 .= "\begin{figure}[ht]
\centering
\setlength\\fboxsep{0pt}\setlength\\fboxrule{0.5pt}\\fbox{\includegraphics[width=5.5cm]{".$row_image[0].".jpg}}
\caption{".ucfirst_utf8($row[1])."}
\\end{figure} \n";
*/
$cap_title=ucfirst_utf8($row[1]);

$_wordentryxml7 .= "
\dicFigure{".$row_image[0].".jpg}{".$cap_title."}";

} else {
	/*
$_wordentryxml7 .= "\begin{figure}[ht]
\centering
\setlength\\fboxsep{0pt}\setlength\\fboxrule{0.5pt}\\fbox{\includegraphics[height=5.5cm]{".$row_image[0].".jpg}}
\caption{".ucfirst_utf8($row[1])."}
\\end{figure} \n";
*/
$cap_title=ucfirst_utf8($row[1]);

$_wordentryxml7 .= "
\dicFigure{".$row_image[0].".jpg}{".$cap_title."}";
}

if ($row_image[3]=='Creative Commons Attribution-Share Alike 2.5 Generic')
{
$row_image[3]='CC-BY-SA-2.5';
} else if ($row_image[3]=='Creative Commons Attribution 3.0')
{
$row_image[3]='CC-BY-3.0';
} else if ($row_image[3]=='Creative Commons Attribution-Share Alike 3.0 Unported')
{
$row_image[3]='CC-BY-SA-3.0-UN';
} else if ($row_image[3]=='Public domain')
{
$row_image[3]='PD';
} else if ($row_image[3]=='GNU Free Documentation License')
{
$row_image[3]='GFDL';
} else if ($row_image[3]=='CC Unported Licence')
{
$row_image[3]='CC BY 3.0';
} 
$_wordentryxml7 .=  "{".ucfirst_utf8($row[1])." - ".$row_image[2].", Biolib, ".$row_image[3]."}";
$_SESSION["count_images"]++;
} else {
$add=FALSE;
}
}

endwhile;	
}
}
$ONEpicture=TRUE;
}
if($icon===TRUE) {
// camera symbol + use rlap when it is in the last meaning, and theres not example, antonym, link
if (($num22==($h_count+1)) and ($row2[11]=='') and ($row2[10]=='') and ($row2[17]=='') and ($row2[18]=='')) {
//$_camera_icon = " \\rlap{\dicsymPhoto}"; 
$_camera_icon = " \dicsymPhoto\ "; 
} else {
$_camera_icon = " \dicsymPhoto\ "; 	
}

} ELSE {
$_camera_icon = ""; 	
}
if ($_camera_icon!='') {
//$_wordentryxml=substr(trim($_wordentryxml), 0, -1);
}
$_wordentryxml .= $_camera_icon."";

} // latinnames

if ($row2[10]!='') {
$_wordentryxml .=" \dicExampleIS{".$row2[10]. "}"; } // example
if ($row2[11]!='') {
if (strpos(trim($row2[11]), '%')!=0) { // find % sign and make it tex symbol
$row2[11] = str_replace("%", "\%", $row2[11]);
}

$_wordentryxml .=" \dicExampleCS{". $row2[11] . "}";} // example translation
if ($row2[17]!='') {
if (strpos(trim($row2[17]), '(')!=0) {
$new_value= explode ('(',trim($row2[17]));	
$new_num = str_replace("(","",$new_value[1]);
$new_num = str_replace(")","",$new_num);
$table_main="ds_1_headword";
$sql = sprintf ('SELECT `id` FROM `%s` WHERE `keyword` COLLATE `%s` = %s AND `num_keyword` = %s',
	$table_main,
	$collation_1,
	quate_smart($new_value[0]),
	quate_smart($new_num));
$oop_ipa->Setnames();
$oop_ipa->query($sql);
$num2 = $oop_ipa->getNumrows();	
$oop_ipa->FreeResult();
if ($num2==0) {
$light_arrow="*";
} else {
$light_arrow="";	
}

$_wordentryxml .=" \dicAntonym".$light_arrow."{". $new_value[0] ."\smash{\\textsuperscript{".$new_num."}}}"; // antonym
//$_wordentryxml .="{\\foreignlanguage{icelandic}{\\textit{ (x ".$light_arrow."". $new_value[0] ."\\textsuperscript{".$new_num."})}}}"; // antonym
} else {
$table_main="ds_1_headword";
$new_num=0;
$sql = sprintf ('SELECT `id` FROM `%s` WHERE `keyword` COLLATE `%s` = %s AND `num_keyword` = %s',
	$table_main,
	$collation_1,
	quate_smart($row2[17]),
	quate_smart($new_num));
$oop_ipa->Setnames();
$oop_ipa->query($sql);
$num2 = $oop_ipa->getNumrows();	
$oop_ipa->FreeResult();
if ($num2==0) {
$light_arrow="*";
} else {
$light_arrow="";
}

$_wordentryxml .=" \dicAntonym".$light_arrow."{". $row2[17] . "}"; // antonym
}
}


if ($row2[18]!='') {
if (strpos(trim($row2[18]), '(')!=0) {
$new_value= explode ('(',trim($row2[18]));	
$new_num = str_replace("(","",$new_value[1]);
$new_num = str_replace(")","",$new_num);


$_wordentryxml .=" \dicLink{".$new_value[0]."\smash{\\textsuperscript{".$new_num."}}}"; // link to another keyentry
//$_wordentryxml .=" {\\foreignlanguage{icelandic}{ $\\rightarrow$        {\\fontfamily{phv}\selectfont{". $new_value[0]."\\textsuperscript{".$new_num."}}}}}"; // link to another keyentry WITHOUT BOLD LETTERS
} else {
	
	$_wordentryxml .=" \dicLink{".$row2[18]."}"; // link to another keyentry
	//$_wordentryxml .="{\\foreignlanguage{icelandic}{ $\\rightarrow$       {\\fontfamily{phv}\selectfont{". $row2[18] . "}}}}"; // link to another keyentry WITHOUT BOLD LETTERS
}
}

if ($pocet<$num22) {
	if ($row2_copy[$h_count+1][19]!='') {
	$_wordentryxml .=" "; // comma to separate senses,	
	} else {
	$_wordentryxml .="; "; // comma to separate senses,	
	}	
//$_wordentryxml .=";"; // comma to separate senses,
} else {
$dot = substr($_wordentryxml, -4, 1);
$dot1 = substr($_wordentryxml, -3, 1);
if (($dot == '.') OR ($dot == '!') OR ($dot == '?')) {
	
} else if (($dot1 == '.') OR ($dot1 == '!') OR ($dot1 == '?')) {

} else
{
$_wordentryxml .=""; //only if last sense dot	
//$_wordentryxml .="."; //only if last sense dot
}
}
$pocet++; // increase of pocet
endwhile;

// picture
$_wordentryxml .=$_wordentryxml7;
$_wordentryxml7="";

$oop11->FreeResult();
$oop33->FreeResult();
$image_found=FALSE;

//**
//$allow_tables=TRUE;
$_wordentryxml .="\n";

 foreach ($isabb as $v) {
 	 if (strpos( $_wordentryxml, $v)!==FALSE) {
 	 $v1= explode ('-', $v);
	 $_wordentryxml = str_replace($v, $v1[0].'‑'.$v1[1],  $_wordentryxml);
	}
}

$_xml .= $_wordentryxml;
$oop2->freeResult();
$rew++;

endwhile;


//foreach ($no_break_strings as $id => $value) {
	
//	$_xml = str_replace($value, '{\nobreakseq{'.$value.'}}', $_xml);	
//}
// end of whole while loop 
$oop11->_mySQL;
$oop33->_mySQL;
$oop_ipa->_mySQL;
$oop->freeResult();
$oop->_mySQL;
$oop2->_mySQL;
if ($_GET["option"]=='test') {
$file = fopen('./tmp/dictionary_test.tex','a');		
	} else {
$file = fopen('./tmp/letters.tex','a');
	}
if (!fwrite($file, $_xml)) {
print('Error writing to sluvka.tex');
}
fclose($file);
$l=$_GET["limit"]+100;
$_SESSION["ses_message"] =  $lang_publish23." - ".$_GET["limit"]." - ".$l;

$location = $IMAGE_URL.'fileprint_latex_stable.php?action=latex&letter='.$_SESSION["letter"].'&limit='.$l; 	

header("Refresh: 2; url=\"".$location."");
Die();
} else {
if ($_GET["option"]!='test') {
$_xml = "";
//$_xml .="\\clearpage\n";
//$_xml .="\printindex\n";
//$_xml .="\end{document}\n";
}
if ($_GET["option"]=='test') {
$file = fopen('./tmp/dictionary_test.tex','a');		
} else {
$file = fopen('./tmp/letters.tex','a');
}
if (!fwrite($file, $_xml)) {
print('Error writing to sluvka.tex');
}
fclose($file);

$oop->freeResult();
$oop->_mySQL;
$_SESSION["ses_message"] = $lang_publish20;
header('Location: ./fileprint_latex_stable.php'); 
}
}
} else {
if ($_SESSION["rights"]==1) {
?>
<h4><?=$lang_publish5?></h4><br>
<?=$lang_publish6?>
<br>
<?php
echo '<br>';
echo "<a href=\"./fileprint_latex_stable.php?action=latex&choose=true&first_time=true&limit=0\">PREPARE FOR LATEX (STABLE LaTex VERSION)</a>";
echo '<br>';
echo '<br>';
 }
}
?>
</p>
<br>
</div>
<div style="clear:both;"> </div>
</div>
<div id="footer">
<?=$lang_footer;?>
</div>
</div>
<?php 
include ('./html_end.php');
?>
