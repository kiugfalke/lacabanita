<?php
/**
 * @version 1.0
 * @package Booking Calendar
 * @subpackage  City List
 * @category    Functions
 *
 * @author wpdevelop
 * @link https://wpbookingcalendar.com/
 * @email info@wpbookingcalendar.com
 *
 * @modified 2024-09-03
 */

if ( ! defined( 'ABSPATH' ) ) exit;                                             // Exit if accessed directly


// =====================================================================================================================
// ==  REGION CITIES LIST  -  Support functions Timezone  in   .ICS & Google Calendar  ==
// =====================================================================================================================

/**
 * Get list of cities for timezone usage in format like:		$city["Europe"]["Kiev"] = "Kiev";
 *
 * @return array|array[]
 */
function wpbc_get_booking_region_cities_list(){                                                                         // FixIn: 8.9.4.9.

	$city = array(
					  'Africa' => array()
					, 'America' => array()
					, 'Antarctica' => array()
					, 'Arctic' => array()
					, 'Asia' => array()
					, 'Atlantic' => array()
					, 'Australia' => array()
					, 'Europe' => array()
					, 'Indian' => array()
					, 'Pacific' => array()
				);
	$city["Africa"]["Abidjan"] = "Abidjan";
	$city["Africa"]["Accra"] = "Accra";
	$city["Africa"]["Addis_Ababa"] = "Addis Ababa";
	$city["Africa"]["Algiers"] = "Algiers";
	$city["Africa"]["Asmara"] = "Asmara";
	$city["Africa"]["Bamako"] = "Bamako";
	$city["Africa"]["Bangui"] = "Bangui";
	$city["Africa"]["Banjul"] = "Banjul";
	$city["Africa"]["Bissau"] = "Bissau";
	$city["Africa"]["Blantyre"] = "Blantyre";
	$city["Africa"]["Brazzaville"] = "Brazzaville";
	$city["Africa"]["Bujumbura"] = "Bujumbura";
	$city["Africa"]["Cairo"] = "Cairo";
	$city["Africa"]["Casablanca"] = "Casablanca";
	$city["Africa"]["Ceuta"] = "Ceuta";
	$city["Africa"]["Conakry"] = "Conakry";
	$city["Africa"]["Dakar"] = "Dakar";
	$city["Africa"]["Dar_es_Salaam"] = "Dar es Salaam";
	$city["Africa"]["Djibouti"] = "Djibouti";
	$city["Africa"]["Douala"] = "Douala";
	$city["Africa"]["El_Aaiun"] = "El Aaiun";
	$city["Africa"]["Freetown"] = "Freetown";
	$city["Africa"]["Gaborone"] = "Gaborone";
	$city["Africa"]["Harare"] = "Harare";
	$city["Africa"]["Johannesburg"] = "Johannesburg";
	$city["Africa"]["Kampala"] = "Kampala";
	$city["Africa"]["Khartoum"] = "Khartoum";
	$city["Africa"]["Kigali"] = "Kigali";
	$city["Africa"]["Kinshasa"] = "Kinshasa";
	$city["Africa"]["Lagos"] = "Lagos";
	$city["Africa"]["Libreville"] = "Libreville";
	$city["Africa"]["Lome"] = "Lome";
	$city["Africa"]["Luanda"] = "Luanda";
	$city["Africa"]["Lubumbashi"] = "Lubumbashi";
	$city["Africa"]["Lusaka"] = "Lusaka";
	$city["Africa"]["Malabo"] = "Malabo";
	$city["Africa"]["Maputo"] = "Maputo";
	$city["Africa"]["Maseru"] = "Maseru";
	$city["Africa"]["Mbabane"] = "Mbabane";
	$city["Africa"]["Mogadishu"] = "Mogadishu";
	$city["Africa"]["Monrovia"] = "Monrovia";
	$city["Africa"]["Nairobi"] = "Nairobi";
	$city["Africa"]["Ndjamena"] = "Ndjamena";
	$city["Africa"]["Niamey"] = "Niamey";
	$city["Africa"]["Nouakchott"] = "Nouakchott";
	$city["Africa"]["Ouagadougou"] = "Ouagadougou";
	$city["Africa"]["Porto-Novo"] = "Porto-Novo";
	$city["Africa"]["Sao_Tome"] = "Sao Tome";
	$city["Africa"]["Tripoli"] = "Tripoli";
	$city["Africa"]["Tunis"] = "Tunis";
	$city["Africa"]["Windhoek"] = "Windhoek";

	$city["America"]["Adak"] = "Adak";
	$city["America"]["Anchorage"] = "Anchorage";
	$city["America"]["Anguilla"] = "Anguilla";
	$city["America"]["Antigua"] = "Antigua";
	$city["America"]["Araguaina"] = "Araguaina";
	$city["America"]["Argentina/Buenos_Aires"] = "Argentina - Buenos Aires";
	$city["America"]["Argentina/Catamarca"] = "Argentina - Catamarca";
	$city["America"]["Argentina/Cordoba"] = "Argentina - Cordoba";
	$city["America"]["Argentina/Jujuy"] = "Argentina - Jujuy";
	$city["America"]["Argentina/La_Rioja"] = "Argentina - La Rioja";
	$city["America"]["Argentina/Mendoza"] = "Argentina - Mendoza";
	$city["America"]["Argentina/Rio_Gallegos"] = "Argentina - Rio Gallegos";
	$city["America"]["Argentina/Salta"] = "Argentina - Salta";
	$city["America"]["Argentina/San_Juan"] = "Argentina - San Juan";
	$city["America"]["Argentina/San_Luis"] = "Argentina - San Luis";
	$city["America"]["Argentina/Tucuman"] = "Argentina - Tucuman";
	$city["America"]["Argentina/Ushuaia"] = "Argentina - Ushuaia";
	$city["America"]["Aruba"] = "Aruba";
	$city["America"]["Asuncion"] = "Asuncion";
	$city["America"]["Atikokan"] = "Atikokan";
	$city["America"]["Bahia"] = "Bahia";
	$city["America"]["Barbados"] = "Barbados";
	$city["America"]["Belem"] = "Belem";
	$city["America"]["Belize"] = "Belize";
	$city["America"]["Blanc-Sablon"] = "Blanc-Sablon";
	$city["America"]["Boa_Vista"] = "Boa Vista";
	$city["America"]["Bogota"] = "Bogota";
	$city["America"]["Boise"] = "Boise";
	$city["America"]["Cambridge_Bay"] = "Cambridge Bay";
	$city["America"]["Campo_Grande"] = "Campo Grande";
	$city["America"]["Cancun"] = "Cancun";
	$city["America"]["Caracas"] = "Caracas";
	$city["America"]["Cayenne"] = "Cayenne";
	$city["America"]["Cayman"] = "Cayman";
	$city["America"]["Chicago"] = "Chicago";
	$city["America"]["Chihuahua"] = "Chihuahua";
	$city["America"]["Costa_Rica"] = "Costa Rica";
	$city["America"]["Cuiaba"] = "Cuiaba";
	$city["America"]["Curacao"] = "Curacao";
	$city["America"]["Danmarkshavn"] = "Danmarkshavn";
	$city["America"]["Dawson"] = "Dawson";
	$city["America"]["Dawson_Creek"] = "Dawson Creek";
	$city["America"]["Denver"] = "Denver";
	$city["America"]["Detroit"] = "Detroit";
	$city["America"]["Dominica"] = "Dominica";
	$city["America"]["Edmonton"] = "Edmonton";
	$city["America"]["Eirunepe"] = "Eirunepe";
	$city["America"]["El_Salvador"] = "El Salvador";
	$city["America"]["Fortaleza"] = "Fortaleza";
	$city["America"]["Glace_Bay"] = "Glace Bay";
	$city["America"]["Godthab"] = "Godthab";
	$city["America"]["Goose_Bay"] = "Goose Bay";
	$city["America"]["Grand_Turk"] = "Grand Turk";
	$city["America"]["Grenada"] = "Grenada";
	$city["America"]["Guadeloupe"] = "Guadeloupe";
	$city["America"]["Guatemala"] = "Guatemala";
	$city["America"]["Guayaquil"] = "Guayaquil";
	$city["America"]["Guyana"] = "Guyana";
	$city["America"]["Halifax"] = "Halifax";
	$city["America"]["Havana"] = "Havana";
	$city["America"]["Hermosillo"] = "Hermosillo";
	$city["America"]["Indiana/Indianapolis"] = "Indiana - Indianapolis";
	$city["America"]["Indiana/Knox"] = "Indiana - Knox";
	$city["America"]["Indiana/Marengo"] = "Indiana - Marengo";
	$city["America"]["Indiana/Petersburg"] = "Indiana - Petersburg";
	$city["America"]["Indiana/Tell_City"] = "Indiana - Tell City";
	$city["America"]["Indiana/Vevay"] = "Indiana - Vevay";
	$city["America"]["Indiana/Vincennes"] = "Indiana - Vincennes";
	$city["America"]["Indiana/Winamac"] = "Indiana - Winamac";
	$city["America"]["Inuvik"] = "Inuvik";
	$city["America"]["Iqaluit"] = "Iqaluit";
	$city["America"]["Jamaica"] = "Jamaica";
	$city["America"]["Juneau"] = "Juneau";
	$city["America"]["Kentucky/Louisville"] = "Kentucky - Louisville";
	$city["America"]["Kentucky/Monticello"] = "Kentucky - Monticello";
	$city["America"]["La_Paz"] = "La Paz";
	$city["America"]["Lima"] = "Lima";
	$city["America"]["Los_Angeles"] = "Los Angeles";
	$city["America"]["Maceio"] = "Maceio";
	$city["America"]["Managua"] = "Managua";
	$city["America"]["Manaus"] = "Manaus";
	$city["America"]["Marigot"] = "Marigot";
	$city["America"]["Martinique"] = "Martinique";
	$city["America"]["Mazatlan"] = "Mazatlan";
	$city["America"]["Menominee"] = "Menominee";
	$city["America"]["Merida"] = "Merida";
	$city["America"]["Mexico_City"] = "Mexico City";
	$city["America"]["Miquelon"] = "Miquelon";
	$city["America"]["Moncton"] = "Moncton";
	$city["America"]["Monterrey"] = "Monterrey";
	$city["America"]["Montevideo"] = "Montevideo";
	$city["America"]["Montreal"] = "Montreal";
	$city["America"]["Montserrat"] = "Montserrat";
	$city["America"]["Nassau"] = "Nassau";
	$city["America"]["New_York"] = "New York";
	$city["America"]["Nipigon"] = "Nipigon";
	$city["America"]["Nome"] = "Nome";
	$city["America"]["Noronha"] = "Noronha";
	$city["America"]["North_Dakota/Center"] = "North Dakota - Center";
	$city["America"]["North_Dakota/New_Salem"] = "North Dakota - New Salem";
	$city["America"]["Panama"] = "Panama";
	$city["America"]["Pangnirtung"] = "Pangnirtung";
	$city["America"]["Paramaribo"] = "Paramaribo";
	$city["America"]["Phoenix"] = "Phoenix";
	$city["America"]["Port-au-Prince"] = "Port-au-Prince";
	$city["America"]["Port_of_Spain"] = "Port of Spain";
	$city["America"]["Porto_Velho"] = "Porto Velho";
	$city["America"]["Puerto_Rico"] = "Puerto Rico";
	$city["America"]["Rainy_River"] = "Rainy River";
	$city["America"]["Rankin_Inlet"] = "Rankin Inlet";
	$city["America"]["Recife"] = "Recife";
	$city["America"]["Regina"] = "Regina";
	$city["America"]["Resolute"] = "Resolute";
	$city["America"]["Rio_Branco"] = "Rio Branco";
	$city["America"]["Santarem"] = "Santarem";
	$city["America"]["Santiago"] = "Santiago";
	$city["America"]["Santo_Domingo"] = "Santo Domingo";
	$city["America"]["Sao_Paulo"] = "Sao Paulo";
	$city["America"]["Scoresbysund"] = "Scoresbysund";
	$city["America"]["Shiprock"] = "Shiprock";
	$city["America"]["St_Barthelemy"] = "St Barthelemy";
	$city["America"]["St_Johns"] = "St Johns";
	$city["America"]["St_Kitts"] = "St Kitts";
	$city["America"]["St_Lucia"] = "St Lucia";
	$city["America"]["St_Thomas"] = "St Thomas";
	$city["America"]["St_Vincent"] = "St Vincent";
	$city["America"]["Swift_Current"] = "Swift Current";
	$city["America"]["Tegucigalpa"] = "Tegucigalpa";
	$city["America"]["Thule"] = "Thule";
	$city["America"]["Thunder_Bay"] = "Thunder Bay";
	$city["America"]["Tijuana"] = "Tijuana";
	$city["America"]["Toronto"] = "Toronto";
	$city["America"]["Tortola"] = "Tortola";
	$city["America"]["Vancouver"] = "Vancouver";
	$city["America"]["Whitehorse"] = "Whitehorse";
	$city["America"]["Winnipeg"] = "Winnipeg";
	$city["America"]["Yakutat"] = "Yakutat";
	$city["America"]["Yellowknife"] = "Yellowknife";

	$city["Antarctica"]["Casey"] = "Casey";
	$city["Antarctica"]["Davis"] = "Davis";
	$city["Antarctica"]["DumontDUrville"] = "DumontDUrville";
	$city["Antarctica"]["Mawson"] = "Mawson";
	$city["Antarctica"]["McMurdo"] = "McMurdo";
	$city["Antarctica"]["Palmer"] = "Palmer";
	$city["Antarctica"]["Rothera"] = "Rothera";
	$city["Antarctica"]["South_Pole"] = "South Pole";
	$city["Antarctica"]["Syowa"] = "Syowa";
	$city["Antarctica"]["Vostok"] = "Vostok";

	$city["Arctic"]["Longyearbyen"] = "Longyearbyen";

	$city["Asia"]["Aden"] = "Aden";
	$city["Asia"]["Almaty"] = "Almaty";
	$city["Asia"]["Amman"] = "Amman";
	$city["Asia"]["Anadyr"] = "Anadyr";
	$city["Asia"]["Aqtau"] = "Aqtau";
	$city["Asia"]["Aqtobe"] = "Aqtobe";
	$city["Asia"]["Ashgabat"] = "Ashgabat";
	$city["Asia"]["Baghdad"] = "Baghdad";
	$city["Asia"]["Bahrain"] = "Bahrain";
	$city["Asia"]["Baku"] = "Baku";
	$city["Asia"]["Bangkok"] = "Bangkok";
	$city["Asia"]["Beirut"] = "Beirut";
	$city["Asia"]["Bishkek"] = "Bishkek";
	$city["Asia"]["Brunei"] = "Brunei";
	$city["Asia"]["Choibalsan"] = "Choibalsan";
	$city["Asia"]["Chongqing"] = "Chongqing";
	$city["Asia"]["Colombo"] = "Colombo";
	$city["Asia"]["Damascus"] = "Damascus";
	$city["Asia"]["Dhaka"] = "Dhaka";
	$city["Asia"]["Dili"] = "Dili";
	$city["Asia"]["Dubai"] = "Dubai";
	$city["Asia"]["Dushanbe"] = "Dushanbe";
	$city["Asia"]["Gaza"] = "Gaza";
	$city["Asia"]["Harbin"] = "Harbin";
	$city["Asia"]["Ho_Chi_Minh"] = "Ho Chi Minh";
	$city["Asia"]["Hong_Kong"] = "Hong Kong";
	$city["Asia"]["Hovd"] = "Hovd";
	$city["Asia"]["Irkutsk"] = "Irkutsk";
	$city["Asia"]["Jakarta"] = "Jakarta";
	$city["Asia"]["Jayapura"] = "Jayapura";
	$city["Asia"]["Jerusalem"] = "Jerusalem";
	$city["Asia"]["Kabul"] = "Kabul";
	$city["Asia"]["Kamchatka"] = "Kamchatka";
	$city["Asia"]["Karachi"] = "Karachi";
	$city["Asia"]["Kashgar"] = "Kashgar";
	$city["Asia"]["Kathmandu"] = "Kathmandu";
	$city["Asia"]["Kolkata"] = "Kolkata";
	$city["Asia"]["Krasnoyarsk"] = "Krasnoyarsk";
	$city["Asia"]["Kuala_Lumpur"] = "Kuala Lumpur";
	$city["Asia"]["Kuching"] = "Kuching";
	$city["Asia"]["Kuwait"] = "Kuwait";
	$city["Asia"]["Macau"] = "Macau";
	$city["Asia"]["Magadan"] = "Magadan";
	$city["Asia"]["Makassar"] = "Makassar";
	$city["Asia"]["Manila"] = "Manila";
	$city["Asia"]["Muscat"] = "Muscat";
	$city["Asia"]["Nicosia"] = "Nicosia";
	$city["Asia"]["Novosibirsk"] = "Novosibirsk";
	$city["Asia"]["Omsk"] = "Omsk";
	$city["Asia"]["Oral"] = "Oral";
	$city["Asia"]["Phnom_Penh"] = "Phnom Penh";
	$city["Asia"]["Pontianak"] = "Pontianak";
	$city["Asia"]["Pyongyang"] = "Pyongyang";
	$city["Asia"]["Qatar"] = "Qatar";
	$city["Asia"]["Qyzylorda"] = "Qyzylorda";
	$city["Asia"]["Rangoon"] = "Rangoon";
	$city["Asia"]["Riyadh"] = "Riyadh";
	$city["Asia"]["Sakhalin"] = "Sakhalin";
	$city["Asia"]["Samarkand"] = "Samarkand";
	$city["Asia"]["Seoul"] = "Seoul";
	$city["Asia"]["Shanghai"] = "Shanghai";
	$city["Asia"]["Singapore"] = "Singapore";
	$city["Asia"]["Taipei"] = "Taipei";
	$city["Asia"]["Tashkent"] = "Tashkent";
	$city["Asia"]["Tbilisi"] = "Tbilisi";
	$city["Asia"]["Tehran"] = "Tehran";
	$city["Asia"]["Thimphu"] = "Thimphu";
	$city["Asia"]["Tokyo"] = "Tokyo";
	$city["Asia"]["Ulaanbaatar"] = "Ulaanbaatar";
	$city["Asia"]["Urumqi"] = "Urumqi";
	$city["Asia"]["Vientiane"] = "Vientiane";
	$city["Asia"]["Vladivostok"] = "Vladivostok";
	$city["Asia"]["Yakutsk"] = "Yakutsk";
	$city["Asia"]["Yekaterinburg"] = "Yekaterinburg";
	$city["Asia"]["Yerevan"] = "Yerevan";

	$city["Atlantic"]["Azores"] = "Azores";
	$city["Atlantic"]["Bermuda"] = "Bermuda";
	$city["Atlantic"]["Canary"] = "Canary";
	$city["Atlantic"]["Cape_Verde"] = "Cape Verde";
	$city["Atlantic"]["Faroe"] = "Faroe";
	$city["Atlantic"]["Madeira"] = "Madeira";
	$city["Atlantic"]["Reykjavik"] = "Reykjavik";
	$city["Atlantic"]["South_Georgia"] = "South Georgia";
	$city["Atlantic"]["Stanley"] = "Stanley";
	$city["Atlantic"]["St_Helena"] = "St Helena";

	$city["Australia"]["Adelaide"] = "Adelaide";
	$city["Australia"]["Brisbane"] = "Brisbane";
	$city["Australia"]["Broken_Hill"] = "Broken Hill";
	$city["Australia"]["Currie"] = "Currie";
	$city["Australia"]["Darwin"] = "Darwin";
	$city["Australia"]["Eucla"] = "Eucla";
	$city["Australia"]["Hobart"] = "Hobart";
	$city["Australia"]["Lindeman"] = "Lindeman";
	$city["Australia"]["Lord_Howe"] = "Lord Howe";
	$city["Australia"]["Melbourne"] = "Melbourne";
	$city["Australia"]["Perth"] = "Perth";
	$city["Australia"]["Sydney"] = "Sydney";

	$city["Europe"]["Amsterdam"] = "Amsterdam";
	$city["Europe"]["Andorra"] = "Andorra";
	$city["Europe"]["Athens"] = "Athens";
	$city["Europe"]["Belgrade"] = "Belgrade";
	$city["Europe"]["Berlin"] = "Berlin";
	$city["Europe"]["Bratislava"] = "Bratislava";
	$city["Europe"]["Brussels"] = "Brussels";
	$city["Europe"]["Bucharest"] = "Bucharest";
	$city["Europe"]["Budapest"] = "Budapest";
	$city["Europe"]["Chisinau"] = "Chisinau";
	$city["Europe"]["Copenhagen"] = "Copenhagen";
	$city["Europe"]["Dublin"] = "Dublin";
	$city["Europe"]["Gibraltar"] = "Gibraltar";
	$city["Europe"]["Guernsey"] = "Guernsey";
	$city["Europe"]["Helsinki"] = "Helsinki";
	$city["Europe"]["Isle_of_Man"] = "Isle of Man";
	$city["Europe"]["Istanbul"] = "Istanbul";
	$city["Europe"]["Jersey"] = "Jersey";
	$city["Europe"]["Kaliningrad"] = "Kaliningrad";
	$city["Europe"]["Kiev"] = "Kiev";
	$city["Europe"]["Lisbon"] = "Lisbon";
	$city["Europe"]["Ljubljana"] = "Ljubljana";
	$city["Europe"]["London"] = "London";
	$city["Europe"]["Luxembourg"] = "Luxembourg";
	$city["Europe"]["Madrid"] = "Madrid";
	$city["Europe"]["Malta"] = "Malta";
	$city["Europe"]["Mariehamn"] = "Mariehamn";
	$city["Europe"]["Minsk"] = "Minsk";
	$city["Europe"]["Monaco"] = "Monaco";
	$city["Europe"]["Moscow"] = "Moscow";
	$city["Europe"]["Oslo"] = "Oslo";
	$city["Europe"]["Paris"] = "Paris";
	$city["Europe"]["Podgorica"] = "Podgorica";
	$city["Europe"]["Prague"] = "Prague";
	$city["Europe"]["Riga"] = "Riga";
	$city["Europe"]["Rome"] = "Rome";
	$city["Europe"]["Samara"] = "Samara";
	$city["Europe"]["San_Marino"] = "San Marino";
	$city["Europe"]["Sarajevo"] = "Sarajevo";
	$city["Europe"]["Simferopol"] = "Simferopol";
	$city["Europe"]["Skopje"] = "Skopje";
	$city["Europe"]["Sofia"] = "Sofia";
	$city["Europe"]["Stockholm"] = "Stockholm";
	$city["Europe"]["Tallinn"] = "Tallinn";
	$city["Europe"]["Tirane"] = "Tirane";
	$city["Europe"]["Uzhgorod"] = "Uzhgorod";
	$city["Europe"]["Vaduz"] = "Vaduz";
	$city["Europe"]["Vatican"] = "Vatican";
	$city["Europe"]["Vienna"] = "Vienna";
	$city["Europe"]["Vilnius"] = "Vilnius";
	$city["Europe"]["Volgograd"] = "Volgograd";
	$city["Europe"]["Warsaw"] = "Warsaw";
	$city["Europe"]["Zagreb"] = "Zagreb";
	$city["Europe"]["Zaporozhye"] = "Zaporozhye";
	$city["Europe"]["Zurich"] = "Zurich";

	$city["Indian"]["Antananarivo"] = "Antananarivo";
	$city["Indian"]["Chagos"] = "Chagos";
	$city["Indian"]["Christmas"] = "Christmas";
	$city["Indian"]["Cocos"] = "Cocos";
	$city["Indian"]["Comoro"] = "Comoro";
	$city["Indian"]["Kerguelen"] = "Kerguelen";
	$city["Indian"]["Mahe"] = "Mahe";
	$city["Indian"]["Maldives"] = "Maldives";
	$city["Indian"]["Mauritius"] = "Mauritius";
	$city["Indian"]["Mayotte"] = "Mayotte";
	$city["Indian"]["Reunion"] = "Reunion";

	$city["Pacific"]["Apia"] = "Apia";
	$city["Pacific"]["Auckland"] = "Auckland";
	$city["Pacific"]["Chatham"] = "Chatham";
	$city["Pacific"]["Easter"] = "Easter";
	$city["Pacific"]["Efate"] = "Efate";
	$city["Pacific"]["Enderbury"] = "Enderbury";
	$city["Pacific"]["Fakaofo"] = "Fakaofo";
	$city["Pacific"]["Fiji"] = "Fiji";
	$city["Pacific"]["Funafuti"] = "Funafuti";
	$city["Pacific"]["Galapagos"] = "Galapagos";
	$city["Pacific"]["Gambier"] = "Gambier";
	$city["Pacific"]["Guadalcanal"] = "Guadalcanal";
	$city["Pacific"]["Guam"] = "Guam";
	$city["Pacific"]["Honolulu"] = "Honolulu";
	$city["Pacific"]["Johnston"] = "Johnston";
	$city["Pacific"]["Kiritimati"] = "Kiritimati";
	$city["Pacific"]["Kosrae"] = "Kosrae";
	$city["Pacific"]["Kwajalein"] = "Kwajalein";
	$city["Pacific"]["Majuro"] = "Majuro";
	$city["Pacific"]["Marquesas"] = "Marquesas";
	$city["Pacific"]["Midway"] = "Midway";
	$city["Pacific"]["Nauru"] = "Nauru";
	$city["Pacific"]["Niue"] = "Niue";
	$city["Pacific"]["Norfolk"] = "Norfolk";
	$city["Pacific"]["Noumea"] = "Noumea";
	$city["Pacific"]["Pago_Pago"] = "Pago Pago";
	$city["Pacific"]["Palau"] = "Palau";
	$city["Pacific"]["Pitcairn"] = "Pitcairn";
	$city["Pacific"]["Ponape"] = "Ponape";
	$city["Pacific"]["Port_Moresby"] = "Port Moresby";
	$city["Pacific"]["Rarotonga"] = "Rarotonga";
	$city["Pacific"]["Saipan"] = "Saipan";
	$city["Pacific"]["Tahiti"] = "Tahiti";
	$city["Pacific"]["Tarawa"] = "Tarawa";
	$city["Pacific"]["Tongatapu"] = "Tongatapu";
	$city["Pacific"]["Truk"] = "Truk";
	$city["Pacific"]["Wake"] = "Wake";
	$city["Pacific"]["Wallis"] = "Wallis";

	return $city;
}
