<?php

function get_basic_country_data()
	{
	$basic_country_data_array = array(

	"AD" => "Andorra",
	"AE" => "United A. Emir.",
	"AF" => "Afghanistan",
	"AG" => "Antigua",
	"AI" => "Anguilla",
	"AL" => "Albania",
	"AM" => "Armenia",
	"AN" => "Neth. Ant.",
	"AO" => "Angola",
	"AQ" => "Antarctica",
	"AR" => "Argentina",
	"AS" => "Am. Samoa",
	"AT" => "Austria",
	"AU" => "Australia",
	"AW" => "Aruba",
	"AZ" => "Azerbaijan",
	"BA" => "Bosnia Herz",
	"BB" => "Barbados",
	"BD" => "Bangladesh",
	"BE" => "Belgium",
	"BF" => "Burkina Faso",
	"BG" => "Bulgaria",
	"BH" => "Bahrain",
	"BI" => "Burundi",
	"BJ" => "Benin",
	"BM" => "Bermuda",
	"BN" => "Brunei",
	"BO" => "Bolivia",
	"BR" => "Brazil", 
	"BS" => "Bahamas", 
	"BT" => "Bhutan",
	"BV" => "Bouvet Is.", 
	"BW" => "Botswana", 
	"BY" => "Belarus",
	"BZ" => "Belize", 
	"CA" => "Canada", 
	"CC" => "Cocos  Is.",
	"CD" => "Congo D. R.",  
	"CF" => "Central Af. R.",
	"CG" => "Congo", 
	"CH" => "Switzerland", 
	"CI" => "Cote D'Ivoire",
	"CK" => "Cook Is.", 
	"CL" => "Chile", 
	"CM" => "Cameroon",
	"CN" => "China", 
	"CO" => "Colombia", 
	"CR" => "Costa Rica",
	"CU" => "Cuba",
	"CV" => "Cape Verde", 
	"CX" => "Christmas Is.",
	"CY" => "Cyprus", 
	"CZ" => "Czech R.ublic", 
	"DE" => "Germany",
	"DJ" => "Djibouti", 
	"DK" => "Denmark", 
	"DM" => "Dominica",
	"DO" => "Dominican R.", 
	"DZ" => "Algeria", 
	"EC" => "Ecuador",
	"EE" => "Estonia", 
	"EG" => "Egypt",
	"EH" => "W. Sahara",
	"ER" => "Eritrea", 
	"ES" => "Spain", 
	"ET" => "Ethiopia",
	"FI" => "Finland", 
	"FJ" => "Fiji", 
	"FK" => "Falkland Is.",
	"FM" => "Micronesia", 
	"FO" => "Faroe Is.", 
	"FR" => "France",
	"FX" => "France, Metro.", 
	"GA" => "Gabon", 
	"GB" => "United Kingdom",
	"GD" => "Grenada", 
	"GE" => "Georgia", 
	"GF" => "Fr. Guiana",
	"GH" => "Ghana",
	"GI" => "Gibraltar", 
	"GL" => "Greenland", 
	"GM" => "Gambia", 
	"GN" => "Guinea",
	"GP" => "Guadeloupe", 
	"GQ" => "Eq. Guinea", 
	"GR" => "Greece",
	"GS" => "S. Georgia", 
	"GT" => "Guatemala",
	"GU" => "Guam", 
	"GW" => "Guinea-Bissau", 
	"GY" => "Guyana",
	"HK" => "Hong Kong", 
	"HM" => "Heard Is.", 
	"HN" => "Honduras",
	"HR" => "Croatia", 
	"HT" => "Haiti", 
	"HU" => "Hungary",
	"ID" => "Indonesia", 
	"IE" => "Ireland", 
	"IL" => "Israel",
	"IN" => "India",
	"IO" => "B. Ind. Oc. Tr.", 
	"IQ" => "Iraq",
	"IR" => "Iran", 
	"IS" => "Iceland", 
	"IT" => "Italy",
	"JM" => "Jamaica", 
	"JO" => "Jordan", 
	"JP" => "Japan",
	"KE" => "Kenya", 
	"KG" => "Kyrgyzstan", 
	"KH" => "Cambodia",
	"KI" => "Kiribati", 
	"KM" => "Comoros",
	"KN" => "St. Kitts and Nevis",
	"KP" => "Korea, D. R.", 
	"KR" => "Korea, R.", 
	"KW" => "Kuwait",
	"KY" => "Cayman Is.", 
	"KZ" => "Kazakstan", 
	"LA" => "Lao P.D. R.",
	"LB" => "Lebanon", 
	"LC" => "St. Lucia", 
	"LI" => "Liechtenstein",
	"LK" => "Sri Lanka", 
	"LR" => "Liberia", 
	"LS" => "Lesotho",
	"LT" => "Lithuania", 
	"LU" => "Luxembourg", 
	"LV" => "Latvia",
	"LY" => "Libyan A. J.", 
	"MA" => "Morocco",
	"MC" => "Monaco",
	"MD" => "Moldova", 
	"MG" => "Madagascar", 
	"MH" => "Marshall Is.",
	"MK" => "Macedonia", 
	"ML" => "Mali", 
	"MM" => "Myanmar",
	"MN" => "Mongolia",
	"MO" => "Macau", 
	"MP" => "N. Mariana Is.",
	"MQ" => "Martinique", 
	"MR" => "Mauritania", 
	"MS" => "Montserrat",
	"MT" => "Malta", 
	"MU" => "Mauritius", 
	"MV" => "Maldives", 
	"MW" => "Malawi",
	"MX" => "Mexico", 
	"MY" => "Malaysia", 
	"MZ" => "Mozambique", 
	"NA" => "Namibia",
	"NC" => "New Caledonia", 
	"NE" => "Niger", 
	"NF" => "Norfolk Is.", 
	"NG" => "Nigeria",
	"NI" => "Nicaragua", 
	"NL" => "Netherlands", 
	"NO" => "Norway", 
	"NP" => "Nepal",
	"NR" => "Nauru", 
	"NU" => "Niue", 
	"NZ" => "New Zealand",
	"OM" => "Oman", 
	"PA" => "Panama",
	"PE" => "Peru", 
	"PF" => "Fr. Polynesia", 
	"PG" => "Pap. N. Guinea", 
	"PH" => "Philippines",
	"PK" => "Pakistan", 
	"PL" => "Poland", 
	"PM" => "St. Pierre", 
	"PN" => "Pitcairn",
	"PR" => "Puerto Rico", 
	"PS" => "Palestinian Tr.", 
	"PT" => "Portugal",
	"PW" => "Palau", 
	"PY" => "Paraguay",
	"QA" => "Qatar", 
	"RE" => "Reunion",
	"RO" => "Romania", 
	"RU" => "Russian Fed.", 
	"RW" => "Rwanda", 
	"SA" => "Saudi Arabia",
	"SB" => "Solomon Is.", 
	"SC" => "Seychelles", 
	"SD" => "Sudan", 
	"SE" => "Sweden",
	"SG" => "Singapore", 
	"SH" => "St. Helena", 
	"SI" => "Slovenia",
	"SJ" => "Svalbard JM",
	"SK" => "Slovakia", 
	"SL" => "Sierra Leone", 
	"SM" => "San Marino", 
	"SN" => "Senegal",
	"SO" => "Somalia", 
	"SR" => "Suriname", 
	"ST" => "Sao Tome", 
	"SV" => "El Salvador",
	"SY" => "Syria", 
	"SZ" => "Swaziland", 
	"TC" => "Turks Caicos Is.",
	"TD" => "Chad",
	"TF" => "Fr. S. Tr.", 
	"TG" => "Togo", 
	"TH" => "Thailand",
	"TJ" => "Tajikistan", 
	"TK" => "Tokelau", 
	"TM" => "Turkmenistan", 
	"TN" => "Tunisia", 
	"TO" => "Tonga",
	"TP" => "East Timor", 
	"TR" => "Turkey", 
	"TT" => "Trinidad Tob.", 
	"TV" => "Tuvalu",
	"TW" => "Taiwan",
	"TZ" => "Tanzania", 
	"UA" => "Ukraine", 
	"UG" => "Uganda",
	"UM" => "U. States Out. Is.", 
	"US" => "United States", 
	"UY" => "Uruguay",
	"UZ" => "Uzbekistan", 
	"VA" => "Vatican City", 
	"VC" => "St. Vincent",
	"VE" => "Venezuela", 
	"VG" => "Virgin Is., British", 
	"VI" => "Virgin Is., U.S.",
	"VN" => "Vietnam",
	"VU" => "Vanuatu", 
	"WF" => "Wallis", 
	"WS" => "Samoa", 
	"YE" => "Yemen",
	"YT" => "Mayotte", 
	"ZA" => "S. Africa", 
	"ZM" => "Zambia",
	"ZR" => "Zaire", 
	"ZW" => "Zimbabwe",
	"RS" => "Serbia", 
	"MN" => "Montenegro"
	);
	return $basic_country_data_array;
	}

