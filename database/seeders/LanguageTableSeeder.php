<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Country\Language;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            'AB' => [
                'code' => 'AB',
                'name' => 'Abkhaz',
                'native_name' => 'аҧсуа'
            ],
            'AA' => [
                'code' => 'AA',
                'name' => 'Afar',
                'native_name' => 'Afaraf'
            ],
            'AF' => [
                'code' => 'AF',
                'name' => 'Afrikaans',
                'native_name' => 'Afrikaans'
            ],
            'AK' => [
                'code' => 'AK',
                'name' => 'Akan',
                'native_name' => 'Akan'
            ],
            'SQ' => [
                'code' => 'SQ',
                'name' => 'Albanian',
                'native_name' => 'Shqip'
            ],
            'AM' => [
                'code' => 'AM',
                'name' => 'Amharic',
                'native_name' => 'አማርኛ'
            ],
            'AR' => [
                'code' => 'AR',
                'name' => 'Arabic',
                'native_name' => 'العربية'
            ],
            'AN' => [
                'code' => 'AN',
                'name' => 'Aragonese',
                'native_name' => 'Aragonés'
            ],
            'HY' => [
                'code' => 'HY',
                'name' => 'Armenian',
                'native_name' => 'Հայերեն'
            ],
            'AS' => [
                'code' => 'AS',
                'name' => 'Assamese',
                'native_name' => 'অসমীয়া'
            ],
            'AV' => [
                'code' => 'AV',
                'name' => 'Avaric',
                'native_name' => 'авар мацӀ, магӀарул мацӀ'
            ],
            'AE' => [
                'code' => 'AE',
                'name' => 'Avestan',
                'native_name' => 'avesta'
            ],
            'AY' => [
                'code' => 'AY',
                'name' => 'Aymara',
                'native_name' => 'aymar aru'
            ],
            'AZ' => [
                'code' => 'AZ',
                'name' => 'Azerbaijani',
                'native_name' => 'azərbaycan dili'
            ],
            'BM' => [
                'code' => 'BM',
                'name' => 'Bambara',
                'native_name' => 'bamanankan'
            ],
            'BA' => [
                'code' => 'BA',
                'name' => 'Bashkir',
                'native_name' => 'башҡорт теле'
            ],
            'EU' => [
                'code' => 'EU',
                'name' => 'Basque',
                'native_name' => 'euskara, euskera'
            ],
            'BE' => [
                'code' => 'BE',
                'name' => 'Belarusian',
                'native_name' => 'Беларуская'
            ],
            'BN' => [
                'code' => 'BN',
                'name' => 'Bengali',
                'native_name' => 'বাংলা'
            ],
            'BH' => [
                'code' => 'BH',
                'name' => 'Bihari',
                'native_name' => 'भोजपुरी'
            ],
            'BI' => [
                'code' => 'BI',
                'name' => 'Bislama',
                'native_name' => 'Bislama'
            ],
            'BS' => [
                'code' => 'BS',
                'name' => 'Bosnian',
                'native_name' => 'bosanski jezik'
            ],
            'BR' => [
                'code' => 'BR',
                'name' => 'Breton',
                'native_name' => 'brezhoneg'
            ],
            'BG' => [
                'code' => 'BG',
                'name' => 'Bulgarian',
                'native_name' => 'български език'
            ],
            'MY' => [
                'code' => 'MY',
                'name' => 'Burmese',
                'native_name' => 'ဗမာစာ'
            ],
            'CA' => [
                'code' => 'CA',
                'name' => 'Catalan; Valencian',
                'native_name' => 'Català'
            ],
            'CH' => [
                'code' => 'CH',
                'name' => 'Chamorro',
                'native_name' => 'Chamoru'
            ],
            'CE' => [
                'code' => 'CE',
                'name' => 'Chechen',
                'native_name' => 'нохчийн мотт'
            ],
            'NY' => [
                'code' => 'NY',
                'name' => 'Chichewa; Chewa; Nyanja',
                'native_name' => 'chiCheŵa, chinyanja'
            ],
            'ZH' => [
                'code' => 'ZH',
                'name' => 'Chinese',
                'native_name' => '中文 (Zhōngwén), 汉语, 漢語'
            ],
            'CV' => [
                'code' => 'CV',
                'name' => 'Chuvash',
                'native_name' => 'чӑваш чӗлхи'
            ],
            'KW' => [
                'code' => 'KW',
                'name' => 'Cornish',
                'native_name' => 'Kernewek'
            ],
            'CO' => [
                'code' => 'CO',
                'name' => 'Corsican',
                'native_name' => 'corsu, lingua corsa'
            ],
            'CR' => [
                'code' => 'CR',
                'name' => 'Cree',
                'native_name' => 'ᓀᐦᐃᔭᐍᐏᐣ'
            ],
            'HR' => [
                'code' => 'HR',
                'name' => 'Croatian',
                'native_name' => 'hrvatski'
            ],
            'CS' => [
                'code' => 'CS',
                'name' => 'Czech',
                'native_name' => 'česky, čeština'
            ],
            'DA' => [
                'code' => 'DA',
                'name' => 'Danish',
                'native_name' => 'dansk'
            ],
            'DV' => [
                'code' => 'DV',
                'name' => 'Divehi; Dhivehi; Maldivian;',
                'native_name' => 'ދިވެހި'
            ],
            'NL' => [
                'code' => 'NL',
                'name' => 'Dutch',
                'native_name' => 'Nederlands, Vlaams'
            ],
            'EN' => [
                'code' => 'EN',
                'name' => 'English',
                'native_name' => 'English'
            ],
            'EO' => [
                'code' => 'EO',
                'name' => 'Esperanto',
                'native_name' => 'Esperanto'
            ],
            'ET' => [
                'code' => 'ET',
                'name' => 'Estonian',
                'native_name' => 'eesti, eesti keel'
            ],
            'EE' => [
                'code' => 'EE',
                'name' => 'Ewe',
                'native_name' => 'Eʋegbe'
            ],
            'FO' => [
                'code' => 'FO',
                'name' => 'Faroese',
                'native_name' => 'føroyskt'
            ],
            'FJ' => [
                'code' => 'FJ',
                'name' => 'Fijian',
                'native_name' => 'vosa Vakaviti'
            ],
            'FI' => [
                'code' => 'FI',
                'name' => 'Finnish',
                'native_name' => 'suomi, suomen kieli'
            ],
            'FR' => [
                'code' => 'FR',
                'name' => 'French',
                'native_name' => 'français, langue française'
            ],
            'FF' => [
                'code' => 'FF',
                'name' => 'Fula; Fulah; Pulaar; Pular',
                'native_name' => 'Fulfulde, Pulaar, Pular'
            ],
            'GL' => [
                'code' => 'GL',
                'name' => 'Galician',
                'native_name' => 'Galego'
            ],
            'KA' => [
                'code' => 'KA',
                'name' => 'Georgian',
                'native_name' => 'ქართული'
            ],
            'DE' => [
                'code' => 'DE',
                'name' => 'German',
                'native_name' => 'Deutsch'
            ],
            'EL' => [
                'code' => 'EL',
                'name' => 'Greek, Modern',
                'native_name' => 'Ελληνικά'
            ],
            'GN' => [
                'code' => 'GN',
                'name' => 'Guaraní',
                'native_name' => 'Avañeẽ'
            ],
            'GU' => [
                'code' => 'GU',
                'name' => 'Gujarati',
                'native_name' => 'ગુજરાતી'
            ],
            'HT' => [
                'code' => 'HT',
                'name' => 'Haitian; Haitian Creole',
                'native_name' => 'Kreyòl ayisyen'
            ],
            'HA' => [
                'code' => 'HA',
                'name' => 'Hausa',
                'native_name' => 'Hausa, هَوُسَ'
            ],
            'HE' => [
                'code' => 'HE',
                'name' => 'Hebrew (modern)',
                'native_name' => 'עברית'
            ],
            'HZ' => [
                'code' => 'HZ',
                'name' => 'Herero',
                'native_name' => 'Otjiherero'
            ],
            'HI' => [
                'code' => 'HI',
                'name' => 'Hindi',
                'native_name' => 'हिन्दी, हिंदी'
            ],
            'HO' => [
                'code' => 'HO',
                'name' => 'Hiri Motu',
                'native_name' => 'Hiri Motu'
            ],
            'HU' => [
                'code' => 'HU',
                'name' => 'Hungarian',
                'native_name' => 'Magyar'
            ],
            'IA' => [
                'code' => 'IA',
                'name' => 'Interlingua',
                'native_name' => 'Interlingua'
            ],
            'ID' => [
                'code' => 'ID',
                'name' => 'Indonesian',
                'native_name' => 'Bahasa Indonesia'
            ],
            'IE' => [
                'code' => 'IE',
                'name' => 'Interlingue',
                'native_name' => 'Originally called Occidental; then Interlingue after WWII'
            ],
            'GA' => [
                'code' => 'GA',
                'name' => 'Irish',
                'native_name' => 'Gaeilge'
            ],
            'IG' => [
                'code' => 'IG',
                'name' => 'Igbo',
                'native_name' => 'Asụsụ Igbo'
            ],
            'IK' => [
                'code' => 'IK',
                'name' => 'Inupiaq',
                'native_name' => 'Iñupiaq, Iñupiatun'
            ],
            'IO' => [
                'code' => 'IO',
                'name' => 'Ido',
                'native_name' => 'Ido'
            ],
            'IS' => [
                'code' => 'IS',
                'name' => 'Icelandic',
                'native_name' => 'Íslenska'
            ],
            'IT' => [
                'code' => 'IT',
                'name' => 'Italian',
                'native_name' => 'Italiano'
            ],
            'IU' => [
                'code' => 'IU',
                'name' => 'Inuktitut',
                'native_name' => 'ᐃᓄᒃᑎᑐᑦ'
            ],
            'JA' => [
                'code' => 'JA',
                'name' => 'Japanese',
                'native_name' => '日本語 (にほんご／にっぽんご)'
            ],
            'JV' => [
                'code' => 'JV',
                'name' => 'Javanese',
                'native_name' => 'basa Jawa'
            ],
            'KL' => [
                'code' => 'KL',
                'name' => 'Kalaallisut, Greenlandic',
                'native_name' => 'kalaallisut, kalaallit oqaasii'
            ],
            'KN' => [
                'code' => 'KN',
                'name' => 'Kannada',
                'native_name' => 'ಕನ್ನಡ'
            ],
            'KR' => [
                'code' => 'KR',
                'name' => 'Kanuri',
                'native_name' => 'Kanuri'
            ],
            'KS' => [
                'code' => 'KS',
                'name' => 'Kashmiri',
                'native_name' => 'कश्मीरी, كشميري‎'
            ],
            'KK' => [
                'code' => 'KK',
                'name' => 'Kazakh',
                'native_name' => 'Қазақ тілі'
            ],
            'KM' => [
                'code' => 'KM',
                'name' => 'Khmer',
                'native_name' => 'ភាសាខ្មែរ'
            ],
            'KI' => [
                'code' => 'KI',
                'name' => 'Kikuyu, Gikuyu',
                'native_name' => 'Gĩkũyũ'
            ],
            'RW' => [
                'code' => 'RW',
                'name' => 'Kinyarwanda',
                'native_name' => 'Ikinyarwanda'
            ],
            'KY' => [
                'code' => 'KY',
                'name' => 'Kirghiz, Kyrgyz',
                'native_name' => 'кыргыз тили'
            ],
            'KV' => [
                'code' => 'KV',
                'name' => 'Komi',
                'native_name' => 'коми кыв'
            ],
            'KG' => [
                'code' => 'KG',
                'name' => 'Kongo',
                'native_name' => 'KiKongo'
            ],
            'KO' => [
                'code' => 'KO',
                'name' => 'Korean',
                'native_name' => '한국어 (韓國語), 조선말 (朝鮮語)'
            ],
            'KU' => [
                'code' => 'KU',
                'name' => 'Kurdish',
                'native_name' => 'Kurdî, كوردی‎'
            ],
            'KJ' => [
                'code' => 'KJ',
                'name' => 'Kwanyama, Kuanyama',
                'native_name' => 'Kuanyama'
            ],
            'LA' => [
                'code' => 'LA',
                'name' => 'Latin',
                'native_name' => 'latine, lingua latina'
            ],
            'LB' => [
                'code' => 'LB',
                'name' => 'Luxembourgish, Letzeburgesch',
                'native_name' => 'Lëtzebuergesch'
            ],
            'LG' => [
                'code' => 'LG',
                'name' => 'Luganda',
                'native_name' => 'Luganda'
            ],
            'LI' => [
                'code' => 'LI',
                'name' => 'Limburgish, Limburgan, Limburger',
                'native_name' => 'Limburgs'
            ],
            'LN' => [
                'code' => 'LN',
                'name' => 'Lingala',
                'native_name' => 'Lingála'
            ],
            'LO' => [
                'code' => 'LO',
                'name' => 'Lao',
                'native_name' => 'ພາສາລາວ'
            ],
            'LT' => [
                'code' => 'LT',
                'name' => 'Lithuanian',
                'native_name' => 'lietuvių kalba'
            ],
            'LU' => [
                'code' => 'LU',
                'name' => 'Luba-Katanga',
                'native_name' => ''
            ],
            'LV' => [
                'code' => 'LV',
                'name' => 'Latvian',
                'native_name' => 'latviešu valoda'
            ],
            'GV' => [
                'code' => 'GV',
                'name' => 'Manx',
                'native_name' => 'Gaelg, Gailck'
            ],
            'MK' => [
                'code' => 'MK',
                'name' => 'Macedonian',
                'native_name' => 'македонски јазик'
            ],
            'MG' => [
                'code' => 'MG',
                'name' => 'Malagasy',
                'native_name' => 'Malagasy fiteny'
            ],
            'MS' => [
                'code' => 'MS',
                'name' => 'Malay',
                'native_name' => 'bahasa Melayu, بهاس ملايو‎'
            ],
            'ML' => [
                'code' => 'ML',
                'name' => 'Malayalam',
                'native_name' => 'മലയാളം'
            ],
            'MT' => [
                'code' => 'MT',
                'name' => 'Maltese',
                'native_name' => 'Malti'
            ],
            'MI' => [
                'code' => 'MI',
                'name' => 'Māori',
                'native_name' => 'te reo Māori'
            ],
            'MR' => [
                'code' => 'MR',
                'name' => 'Marathi (Marāṭhī)',
                'native_name' => 'मराठी'
            ],
            'MH' => [
                'code' => 'MH',
                'name' => 'Marshallese',
                'native_name' => 'Kajin M̧ajeļ'
            ],
            'MN' => [
                'code' => 'MN',
                'name' => 'Mongolian',
                'native_name' => 'монгол'
            ],
            'NA' => [
                'code' => 'NA',
                'name' => 'Nauru',
                'native_name' => 'Ekakairũ Naoero'
            ],
            'NV' => [
                'code' => 'NV',
                'name' => 'Navajo, Navaho',
                'native_name' => 'Diné bizaad, Dinékʼehǰí'
            ],
            'NB' => [
                'code' => 'NB',
                'name' => 'Norwegian Bokmål',
                'native_name' => 'Norsk bokmål'
            ],
            'ND' => [
                'code' => 'ND',
                'name' => 'North Ndebele',
                'native_name' => 'isiNdebele'
            ],
            'NE' => [
                'code' => 'NE',
                'name' => 'Nepali',
                'native_name' => 'नेपाली'
            ],
            'NG' => [
                'code' => 'NG',
                'name' => 'Ndonga',
                'native_name' => 'Owambo'
            ],
            'NN' => [
                'code' => 'NN',
                'name' => 'Norwegian Nynorsk',
                'native_name' => 'Norsk nynorsk'
            ],
            'NO' => [
                'code' => 'NO',
                'name' => 'Norwegian',
                'native_name' => 'Norsk'
            ],
            'II' => [
                'code' => 'II',
                'name' => 'Nuosu',
                'native_name' => 'ꆈꌠ꒿ Nuosuhxop'
            ],
            'NR' => [
                'code' => 'NR',
                'name' => 'South Ndebele',
                'native_name' => 'isiNdebele'
            ],
            'OC' => [
                'code' => 'OC',
                'name' => 'Occitan',
                'native_name' => 'Occitan'
            ],
            'OJ' => [
                'code' => 'OJ',
                'name' => 'Ojibwe, Ojibwa',
                'native_name' => 'ᐊᓂᔑᓈᐯᒧᐎᓐ'
            ],
            'CU' => [
                'code' => 'CU',
                'name' => 'Old Church Slavonic, Church Slavic, Church Slavonic, Old Bulgarian, Old Slavonic',
                'native_name' => 'ѩзыкъ словѣньскъ'
            ],
            'OM' => [
                'code' => 'OM',
                'name' => 'Oromo',
                'native_name' => 'Afaan Oromoo'
            ],
            'OR' => [
                'code' => 'OR',
                'name' => 'Oriya',
                'native_name' => 'ଓଡ଼ିଆ'
            ],
            'OS' => [
                'code' => 'OS',
                'name' => 'Ossetian, Ossetic',
                'native_name' => 'ирон æвзаг'
            ],
            'PA' => [
                'code' => 'PA',
                'name' => 'Panjabi, Punjabi',
                'native_name' => 'ਪੰਜਾਬੀ, پنجابی‎'
            ],
            'PI' => [
                'code' => 'PI',
                'name' => 'Pāli',
                'native_name' => 'पाऴि'
            ],
            'FA' => [
                'code' => 'FA',
                'name' => 'Persian',
                'native_name' => 'فارسی'
            ],
            'PL' => [
                'code' => 'PL',
                'name' => 'Polish',
                'native_name' => 'polski'
            ],
            'PS' => [
                'code' => 'PS',
                'name' => 'Pashto, Pushto',
                'native_name' => 'پښتو'
            ],
            'PT' => [
                'code' => 'PT',
                'name' => 'Portuguese',
                'native_name' => 'Português'
            ],
            'QU' => [
                'code' => 'QU',
                'name' => 'Quechua',
                'native_name' => 'Runa Simi, Kichwa'
            ],
            'RM' => [
                'code' => 'RM',
                'name' => 'Romansh',
                'native_name' => 'rumantsch grischun'
            ],
            'RN' => [
                'code' => 'RN',
                'name' => 'Kirundi',
                'native_name' => 'kiRundi'
            ],
            'RO' => [
                'code' => 'RO',
                'name' => 'Romanian, Moldavian, Moldovan',
                'native_name' => 'română'
            ],
            'RU' => [
                'code' => 'RU',
                'name' => 'Russian',
                'native_name' => 'русский язык'
            ],
            'SA' => [
                'code' => 'SA',
                'name' => 'Sanskrit (Saṁskṛta)',
                'native_name' => 'संस्कृतम्'
            ],
            'SC' => [
                'code' => 'SC',
                'name' => 'Sardinian',
                'native_name' => 'sardu'
            ],
            'SD' => [
                'code' => 'SD',
                'name' => 'Sindhi',
                'native_name' => 'सिन्धी, سنڌي، سندھی‎'
            ],
            'SE' => [
                'code' => 'SE',
                'name' => 'Northern Sami',
                'native_name' => 'Davvisámegiella'
            ],
            'SM' => [
                'code' => 'SM',
                'name' => 'Samoan',
                'native_name' => 'gagana faa Samoa'
            ],
            'SG' => [
                'code' => 'SG',
                'name' => 'Sango',
                'native_name' => 'yângâ tî sängö'
            ],
            'SR' => [
                'code' => 'SR',
                'name' => 'Serbian',
                'native_name' => 'српски језик'
            ],
            'GD' => [
                'code' => 'GD',
                'name' => 'Scottish Gaelic; Gaelic',
                'native_name' => 'Gàidhlig'
            ],
            'SN' => [
                'code' => 'SN',
                'name' => 'Shona',
                'native_name' => 'chiShona'
            ],
            'SI' => [
                'code' => 'SI',
                'name' => 'Sinhala, Sinhalese',
                'native_name' => 'සිංහල'
            ],
            'SK' => [
                'code' => 'SK',
                'name' => 'Slovak',
                'native_name' => 'slovenčina'
            ],
            'SL' => [
                'code' => 'SL',
                'name' => 'Slovene',
                'native_name' => 'slovenščina'
            ],
            'SO' => [
                'code' => 'SO',
                'name' => 'Somali',
                'native_name' => 'Soomaaliga, af Soomaali'
            ],
            'ST' => [
                'code' => 'ST',
                'name' => 'Southern Sotho',
                'native_name' => 'Sesotho'
            ],
            'ES' => [
                'code' => 'ES',
                'name' => 'Spanish; Castilian',
                'native_name' => 'español, castellano'
            ],
            'SU' => [
                'code' => 'SU',
                'name' => 'Sundanese',
                'native_name' => 'Basa Sunda'
            ],
            'SW' => [
                'code' => 'SW',
                'name' => 'Swahili',
                'native_name' => 'Kiswahili'
            ],
            'SS' => [
                'code' => 'SS',
                'name' => 'Swati',
                'native_name' => 'SiSwati'
            ],
            'SV' => [
                'code' => 'SV',
                'name' => 'Swedish',
                'native_name' => 'svenska'
            ],
            'TA' => [
                'code' => 'TA',
                'name' => 'Tamil',
                'native_name' => 'தமிழ்'
            ],
            'TE' => [
                'code' => 'TE',
                'name' => 'Telugu',
                'native_name' => 'తెలుగు'
            ],
            'TG' => [
                'code' => 'TG',
                'name' => 'Tajik',
                'native_name' => 'тоҷикӣ, toğikī, تاجیکی‎'
            ],
            'TH' => [
                'code' => 'TH',
                'name' => 'Thai',
                'native_name' => 'ไทย'
            ],
            'TI' => [
                'code' => 'TI',
                'name' => 'Tigrinya',
                'native_name' => 'ትግርኛ'
            ],
            'BO' => [
                'code' => 'BO',
                'name' => 'Tibetan Standard, Tibetan, Central',
                'native_name' => 'བོད་ཡིག'
            ],
            'TK' => [
                'code' => 'TK',
                'name' => 'Turkmen',
                'native_name' => 'Türkmen, Түркмен'
            ],
            'TL' => [
                'code' => 'TL',
                'name' => 'Tagalog',
                'native_name' => 'Wikang Tagalog, ᜏᜒᜃᜅ᜔ ᜆᜄᜎᜓᜄ᜔'
            ],
            'TN' => [
                'code' => 'TN',
                'name' => 'Tswana',
                'native_name' => 'Setswana'
            ],
            'TO' => [
                'code' => 'TO',
                'name' => 'Tonga (Tonga Islands)',
                'native_name' => 'faka Tonga'
            ],
            'TR' => [
                'code' => 'TR',
                'name' => 'Turkish',
                'native_name' => 'Türkçe'
            ],
            'TS' => [
                'code' => 'TS',
                'name' => 'Tsonga',
                'native_name' => 'Xitsonga'
            ],
            'TT' => [
                'code' => 'TT',
                'name' => 'Tatar',
                'native_name' => 'татарча, tatarça, تاتارچا‎'
            ],
            'TW' => [
                'code' => 'TW',
                'name' => 'Twi',
                'native_name' => 'Twi'
            ],
            'TY' => [
                'code' => 'TY',
                'name' => 'Tahitian',
                'native_name' => 'Reo Tahiti'
            ],
            'UG' => [
                'code' => 'UG',
                'name' => 'Uighur, Uyghur',
                'native_name' => 'Uyƣurqə, ئۇيغۇرچە‎'
            ],
            'UK' => [
                'code' => 'UK',
                'name' => 'Ukrainian',
                'native_name' => 'українська'
            ],
            'UR' => [
                'code' => 'UR',
                'name' => 'Urdu',
                'native_name' => 'اردو'
            ],
            'UZ' => [
                'code' => 'UZ',
                'name' => 'Uzbek',
                'native_name' => 'zbek, Ўзбек, أۇزبېك‎'
            ],
            'VE' => [
                'code' => 'VE',
                'name' => 'Venda',
                'native_name' => 'Tshivenḓa'
            ],
            'VI' => [
                'code' => 'VI',
                'name' => 'Vietnamese',
                'native_name' => 'Tiếng Việt'
            ],
            'VO' => [
                'code' => 'VO',
                'name' => 'Volapük',
                'native_name' => 'Volapük'
            ],
            'WA' => [
                'code' => 'WA',
                'name' => 'Walloon',
                'native_name' => 'Walon'
            ],
            'CY' => [
                'code' => 'CY',
                'name' => 'Welsh',
                'native_name' => 'Cymraeg'
            ],
            'WO' => [
                'code' => 'WO',
                'name' => 'Wolof',
                'native_name' => 'Wollof'
            ],
            'FY' => [
                'code' => 'FY',
                'name' => 'Western Frisian',
                'native_name' => 'Frysk'
            ],
            'XH' => [
                'code' => 'XH',
                'name' => 'Xhosa',
                'native_name' => 'isiXhosa'
            ],
            'YI' => [
                'code' => 'YI',
                'name' => 'Yiddish',
                'native_name' => 'ייִדיש'
            ],
            'YO' => [
                'code' => 'YO',
                'name' => 'Yoruba',
                'native_name' => 'Yorùbá'
            ],
            'ZA' => [
                'code' => 'ZA',
                'name' => 'Zhuang, Chuang',
                'native_name' => 'Saɯ cueŋƅ, Saw cuengh'
            ],
        ];

        foreach ($languages as $code => $language) {
            Language::query()->updateOrInsert(['code' => $code], $language);
        }
    }
}
