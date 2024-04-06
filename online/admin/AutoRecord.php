<?php
session_start();
$page = 'Automatic Transaction Generator';

$i = isset($_SESSION['i']) ? $_SESSION['i'] : 0;
$runningTime = ++$i;
$_SESSION['i'] = $i;

require'../includes/functions.php';

if (isset($_GET['run'])){
    
$Atype = $_GET['type']; 
$Owner = $_GET['name']; 
$AccNO = $_GET['acc']; 
$from = $_GET['from'];
$to = $_GET['to'];
$Aid = $_GET['id'];
$Anumber = $_GET['num'];    
$min = $_GET['min'];  
$max = $_GET['max'];  
$Admin = $_GET['admin'];  
$rem = date("YmdHi");


$time = rand( strtotime($from), strtotime($to) );
$dateLimit = date("m/d/Y H:i", $time);

$AMonth = date("F Y", $time);

$randomAmount = rand($min,$max);

$ox = rand(1000,999999);
$randomBalance = ($ox + $randomAmount) - $min;
 

$aRef = $abrv.rand(100,999);
 

$ranS = array('Checking', 'Savings');
$aSender = $ranS[array_rand($ranS, 1)];

$ranSz = array(
    "ABHYUDAYA CO-OP BANK LTD",
    "ABU DHABI COMMERCIAL BANK",
    "AKOLA DISTRICT CENTRAL CO-OPERATIVE BANK",
    "AKOLA JANATA COMMERCIAL COOPERATIVE BANK",
    "ALLAHABAD BANK",
    "ALMORA URBAN CO-OPERATIVE BANK LTD.",
    "ANDHRA BANK",
    "ANDHRA PRAGATHI GRAMEENA BANK",
    "APNA SAHAKARI BANK LTD",
    "AUSTRALIA AND NEW ZEALAND BANKING GROUP LIMITED.",
    "AXIS BANK",
    "BANK INTERNASIONAL INDONESIA",
    "BANK OF AMERICA",
    "BANK OF BAHRAIN AND KUWAIT",
    "BANK OF BARODA",
    "BANK OF CEYLON",
    "BANK OF INDIA",
    "BANK OF MAHARASHTRA",
    "BANK OF TOKYO-MITSUBISHI UFJ LTD.",
    "BARCLAYS BANK PLC",
    "BASSEIN CATHOLIC CO-OP BANK LTD",
    "BHARATIYA MAHILA BANK LIMITED",
    "BNP PARIBAS",
    "CALYON BANK",
    "CANARA BANK",
    "CAPITAL LOCAL AREA BANK LTD.",
    "CATHOLIC SYRIAN BANK LTD.",
    "CENTRAL BANK OF INDIA",
    "CHINATRUST COMMERCIAL BANK",
    "CITIBANK NA",
    "CITIZENCREDIT CO-OPERATIVE BANK LTD",
    "CITY UNION BANK LTD",
    "COMMONWEALTH BANK OF AUSTRALIA",
    "CORPORATION BANK",
    "CREDIT SUISSE AG",
    "DBS BANK LTD",
    "DENA BANK",
    "DEUTSCHE BANK",
    "DEUTSCHE SECURITIES INDIA PRIVATE LIMITED",
    "DEVELOPMENT CREDIT BANK LIMITED",
    "DHANLAXMI BANK LTD",
    "DICGC",
    "DOMBIVLI NAGARI SAHAKARI BANK LIMITED",
    "FIRSTRAND BANK LIMITED",
    "GOPINATH PATIL PARSIK JANATA SAHAKARI BANK LTD",
    "GURGAON GRAMIN BANK",
    "HDFC BANK LTD",
    "HSBC",
    "ICICI BANK LTD",
    "IDBI BANK LTD",
    "IDRBT",
    "INDIAN BANK",
    "INDIAN OVERSEAS BANK",
    "INDUSIND BANK LTD",
    "INDUSTRIAL AND COMMERCIAL BANK OF CHINA LIMITED",
    "ING VYSYA BANK LTD",
    "JALGAON JANATA SAHKARI BANK LTD",
    "JANAKALYAN SAHAKARI BANK LTD",
    "JANASEVA SAHAKARI BANK (BORIVLI) LTD",
    "JANASEVA SAHAKARI BANK LTD. PUNE",
    "JANATA SAHAKARI BANK LTD (PUNE)",
    "JPMORGAN CHASE BANK N.A",
    "KALLAPPANNA AWADE ICH JANATA S BANK",
    "KAPOL CO OP BANK",
    "KARNATAKA BANK LTD",
    "KARNATAKA VIKAS GRAMEENA BANK",
    "KARUR VYSYA BANK",
    "KOTAK MAHINDRA BANK",
    "KURMANCHAL NAGAR SAHKARI BANK LTD",
    "MAHANAGAR CO-OP BANK LTD",
    "MAHARASHTRA STATE CO OPERATIVE BANK",
    "MASHREQBANK PSC",
    "MIZUHO CORPORATE BANK LTD",
    "MUMBAI DISTRICT CENTRAL CO-OP. BANK LTD.",
    "NAGPUR NAGRIK SAHAKARI BANK LTD",
    "NATIONAL AUSTRALIA BANK",
    "NEW INDIA CO-OPERATIVE BANK LTD.",
    "NKGSB CO-OP BANK LTD",
    "NORTH MALABAR GRAMIN BANK",
    "NUTAN NAGARIK SAHAKARI BANK LTD",
    "OMAN INTERNATIONAL BANK SAOG",
    "ORIENTAL BANK OF COMMERCE",
    "PARSIK JANATA SAHAKARI BANK LTD",
    "PRATHAMA BANK",
    "PRIME CO OPERATIVE BANK LTD",
    "PUNJAB AND MAHARASHTRA CO-OP BANK LTD.",
    "PUNJAB AND SIND BANK",
    "PUNJAB NATIONAL BANK",
    "RABOBANK INTERNATIONAL (CCRB)",
    "RAJGURUNAGAR SAHAKARI BANK LTD.",
    "RAJKOT NAGARIK SAHAKARI BANK LTD",
    "RESERVE BANK OF INDIA",
    "SBERBANK",
    "SHINHAN BANK",
    "SHRI CHHATRAPATI RAJARSHI SHAHU URBAN CO-OP BANK LTD",
    "SOCIETE GENERALE",
    "SOLAPUR JANATA SAHKARI BANK LTD.SOLAPUR",
    "SOUTH INDIAN BANK",
    "STANDARD CHARTERED BANK",
    "STATE BANK OF BIKANER AND JAIPUR",
    "STATE BANK OF HYDERABAD",
    "STATE BANK OF INDIA",
    "STATE BANK OF MAURITIUS LTD",
    "STATE BANK OF MYSORE",
    "STATE BANK OF PATIALA",
    "STATE BANK OF TRAVANCORE",
    "SUMITOMO MITSUI BANKING CORPORATION",
    "SYNDICATE BANK",
    "TAMILNAD MERCANTILE BANK LTD",
    "THANE BHARAT SAHAKARI BANK LTD",
    "THE A.P. MAHESH CO-OP URBAN BANK LTD.",
    "THE AHMEDABAD MERCANTILE CO-OPERATIVE BANK LTD.",
    "THE ANDHRA PRADESH STATE COOP BANK LTD",
    "THE BANK OF NOVA SCOTIA",
    "THE BANK OF RAJASTHAN LTD",
    "THE BHARAT CO-OPERATIVE BANK (MUMBAI) LTD",
    "THE COSMOS CO-OPERATIVE BANK LTD.",
    "THE DELHI STATE COOPERATIVE BANK LTD.",
    "THE FEDERAL BANK LTD",
    "THE GADCHIROLI DISTRICT CENTRAL COOPERATIVE BANK LTD",
    "THE GREATER BOMBAY CO-OP. BANK LTD",
    "THE GUJARAT STATE CO-OPERATIVE BANK LTD",
    "THE JALGAON PEOPLES CO-OP BANK",
    "THE JAMMU AND KASHMIR BANK LTD",
    "THE KALUPUR COMMERCIAL CO. OP. BANK LTD.",
    "THE KALYAN JANATA SAHAKARI BANK LTD.",
    "THE KANGRA CENTRAL CO-OPERATIVE BANK LTD",
    "THE KANGRA COOPERATIVE BANK LTD",
    "THE KARAD URBAN CO-OP BANK LTD",
    "THE KARNATAKA STATE APEX COOP. BANK LTD.",
    "THE LAKSHMI VILAS BANK LTD",
    "THE MEHSANA URBAN COOPERATIVE BANK LTD",
    "THE MUNICIPAL CO OPERATIVE BANK LTD MUMBAI",
    "THE NAINITAL BANK LIMITED",
    "THE NASIK MERCHANTS CO-OP BANK LTD. NASHIK",
    "THE RAJASTHAN STATE COOPERATIVE BANK LTD.",
    "THE RATNAKAR BANK LTD",
    "THE ROYAL BANK OF SCOTLAND N.V",
    "THE SAHEBRAO DESHMUKH CO-OP. BANK LTD.",
    "THE SARASWAT CO-OPERATIVE BANK LTD",
    "THE SEVA VIKAS CO-OPERATIVE BANK LTD (SVB)",
    "THE SHAMRAO VITHAL CO-OPERATIVE BANK LTD",
    "THE SURAT DISTRICT CO OPERATIVE BANK LTD.",
    "THE SURAT PEOPLES CO-OP BANK LTD",
    "THE SUTEX CO.OP. BANK LTD.",
    "THE TAMILNADU STATE APEX COOPERATIVE BANK LIMITED",
    "THE THANE DISTRICT CENTRAL CO-OP BANK LTD",
    "THE THANE JANATA SAHAKARI BANK LTD",
    "THE VARACHHA CO-OP. BANK LTD.",
    "THE VISHWESHWAR SAHAKARI BANK LTD. PUNE",
    "THE WEST BENGAL STATE COOPERATIVE BANK LTD",
    "TJSB SAHAKARI BANK LTD.",
    "TUMKUR GRAIN MERCHANTS COOPERATIVE BANK LTD.",
    "UBS AG",
    "UCO BANK",
    "UNION BANK OF INDIA",
    "UNITED BANK OF INDIA",
    "UNITED OVERSEAS BANK",
    "VASAI VIKAS SAHAKARI BANK LTD.",
    "VIJAYA BANK",
    "WEST BENGAL STATE COOPERATIVE BANK",
    "WESTPAC BANKING CORPORATION",
    "WOORI BANK",
    "YES BANK LTD",
    "ZILA SAHKARI BANK LTD GHAZIABAD",
    "IDFC First Bank");
$recBanr = $ranSz[array_rand($ranSz, 1)];
$recBank = $recBanr;

$names = array(
  'Abbott',
  'Acevedo',
  'Acosta',
  'Adams',
  'Adkins',
  'Aguilar',
  'Aguirre',
  'Albert',
  'Alexander',
  'Alford',
  'Allen',
  'Allison',
  'Alston',
  'Alvarado',
  'Alvarez',
  'Anderson',
  'Andrews',
  'Anthony',
  'Armstrong',
  'Arnold',
  'Ashley',
  'Atkins',
  'Atkinson',
  'Austin',
  'Avery',
  'Avila',
  'Ayala',
  'Ayers',
  'Bailey',
  'Baird',
  'Baker',
  'Baldwin',
  'Ball',
  'Ballard',
  'Banks',
  'Barber',
  'Barker',
  'Barlow',
  'Barnes',
  'Barnett',
  'Barr',
  'Barrera',
  'Barrett',
  'Barron',
  'Barry',
  'Bartlett',
  'Barton',
  'Bass',
  'Bates',
  'Battle',
  'Bauer',
  'Baxter',
  'Beach',
  'Bean',
  'Beard',
  'Beasley',
  'Beck',
  'Becker',
  'Bell',
  'Bender',
  'Benjamin',
  'Bennett',
  'Benson',
  'Bentley',
  'Benton',
  'Berg',
  'Berger',
  'Bernard',
  'Berry',
  'Best',
  'Bird',
  'Bishop',
  'Black',
  'Blackburn',
  'Blackwell',
  'Blair',
  'Blake',
  'Blanchard',
  'Blankenship',
  'Blevins',
  'Bolton',
  'Bond',
  'Bonner',
  'Booker',
  'Boone',
  'Booth',
  'Bowen',
  'Bowers',
  'Bowman',
  'Boyd',
  'Boyer',
  'Boyle',
  'Bradford',
  'Bradley',
  'Bradshaw',
  'Brady',
  'Branch',
  'Bray',
  'Brennan',
  'Brewer',
  'Bridges',
  'Briggs',
  'Bright',
  'Britt',
  'Brock',
  'Brooks',
  'Brown',
  'Browning',
  'Bruce',
  'Bryan',
  'Bryant',
  'Buchanan',
  'Buck',
  'Buckley',
  'Buckner',
  'Bullock',
  'Burch',
  'Burgess',
  'Burke',
  'Burks',
  'Burnett',
  'Burns',
  'Burris',
  'Burt',
  'Burton',
  'Bush',
  'Butler',
  'Byers',
  'Byrd',
  'Cabrera',
  'Cain',
  'Calderon',
  'Caldwell',
  'Calhoun',
  'Callahan',
  'Camacho',
  'Cameron',
  'Campbell',
  'Campos',
  'Cannon',
  'Cantrell',
  'Cantu',
  'Cardenas',
  'Carey',
  'Carlson',
  'Carney',
  'Carpenter',
  'Carr',
  'Carrillo',
  'Carroll',
  'Carson',
  'Carter',
  'Carver',
  'Case',
  'Casey',
  'Cash',
  'Castaneda',
  'Castillo',
  'Castro',
  'Cervantes',
  'Chambers',
  'Chan',
  'Chandler',
  'Chaney',
  'Chang',
  'Chapman',
  'Charles',
  'Chase',
  'Chavez',
  'Chen',
  'Cherry',
  'Christensen',
  'Christian',
  'Church',
  'Clark',
  'Clarke',
  'Clay',
  'Clayton',
  'Clements',
  'Clemons',
  'Cleveland',
  'Cline',
  'Cobb',
  'Cochran',
  'Coffey',
  'Cohen',
  'Cole',
  'Coleman',
  'Collier',
  'Collins',
  'Colon',
  'Combs',
  'Compton',
  'Conley',
  'Conner',
  'Conrad',
  'Contreras',
  'Conway',
  'Cook',
  'Cooke',
  'Cooley',
  'Cooper',
  'Copeland',
  'Cortez',
  'Cote',
  'Cotton',
  'Cox',
  'Craft',
  'Craig',
  'Crane',
  'Crawford',
  'Crosby',
  'Cross',
  'Cruz',
  'Cummings',
  'Cunningham',
  'Curry',
  'Curtis',
  'Dale',
  'Dalton',
  'Daniel',
  'Daniels',
  'Daugherty',
  'Davenport',
  'David',
  'Davidson',
  'Davis',
  'Dawson',
  'Day',
  'Dean',
  'Decker',
  'Dejesus',
  'Delacruz',
  'Delaney',
  'Deleon',
  'Delgado',
  'Dennis',
  'Diaz',
  'Dickerson',
  'Dickson',
  'Dillard',
  'Dillon',
  'Dixon',
  'Dodson',
  'Dominguez',
  'Donaldson',
  'Donovan',
  'Dorsey',
  'Dotson',
  'Douglas',
  'Downs',
  'Doyle',
  'Drake',
  'Dudley',
  'Duffy',
  'Duke',
  'Duncan',
  'Dunlap',
  'Dunn',
  'Duran',
  'Durham',
  'Dyer',
  'Eaton',
  'Edwards',
  'Elliott',
  'Ellis',
  'Ellison',
  'Emerson',
  'England',
  'English',
  'Erickson',
  'Espinoza',
  'Estes',
  'Estrada',
  'Evans',
  'Everett',
  'Ewing',
  'Farley',
  'Farmer',
  'Farrell',
  'Faulkner',
  'Ferguson',
  'Fernandez',
  'Ferrell',
  'Fields',
  'Figueroa',
  'Finch',
  'Finley',
  'Fischer',
  'Fisher',
  'Fitzgerald',
  'Fitzpatrick',
  'Fleming',
  'Fletcher',
  'Flores',
  'Flowers',
  'Floyd',
  'Flynn',
  'Foley',
  'Forbes',
  'Ford',
  'Foreman',
  'Foster',
  'Fowler',
  'Fox',
  'Francis',
  'Franco',
  'Frank',
  'Franklin',
  'Franks',
  'Frazier',
  'Frederick',
  'Freeman',
  'French',
  'Frost',
  'Fry',
  'Frye',
  'Fuentes',
  'Fuller',
  'Fulton',
  'Gaines',
  'Gallagher',
  'Gallegos',
  'Galloway',
  'Gamble',
  'Garcia',
  'Gardner',
  'Garner',
  'Garrett',
  'Garrison',
  'Garza',
  'Gates',
  'Gay',
  'Gentry',
  'George',
  'Gibbs',
  'Gibson',
  'Gilbert',
  'Giles',
  'Gill',
  'Gillespie',
  'Gilliam',
  'Gilmore',
  'Glass',
  'Glenn',
  'Glover',
  'Goff',
  'Golden',
  'Gomez',
  'Gonzales',
  'Gonzalez',
  'Good',
  'Goodman',
  'Goodwin',
  'Gordon',
  'Gould',
  'Graham',
  'Grant',
  'Graves',
  'Gray',
  'Green',
  'Greene',
  'Greer',
  'Gregory',
  'Griffin',
  'Griffith',
  'Grimes',
  'Gross',
  'Guerra',
  'Guerrero',
  'Guthrie',
  'Gutierrez',
  'Guy',
  'Guzman',
  'Hahn',
  'Hale',
  'Haley',
  'Hall',
  'Hamilton',
  'Hammond',
  'Hampton',
  'Hancock',
  'Haney',
  'Hansen',
  'Hanson',
  'Hardin',
  'Harding',
  'Hardy',
  'Harmon',
  'Harper',
  'Harrell',
  'Harrington',
  'Harris',
  'Harrison',
  'Hart',
  'Hartman',
  'Harvey',
  'Hatfield',
  'Hawkins',
  'Hayden',
  'Hayes',
  'Haynes',
  'Hays',
  'Head',
  'Heath',
  'Hebert',
  'Henderson',
  'Hendricks',
  'Hendrix',
  'Henry',
  'Hensley',
  'Henson',
  'Herman',
  'Hernandez',
  'Herrera',
  'Herring',
  'Hess',
  'Hester',
  'Hewitt',
  'Hickman',
  'Hicks',
  'Higgins',
  'Hill',
  'Hines',
  'Hinton',
  'Hobbs',
  'Hodge',
  'Hodges',
  'Hoffman',
  'Hogan',
  'Holcomb',
  'Holden',
  'Holder',
  'Holland',
  'Holloway',
  'Holman',
  'Holmes',
  'Holt',
  'Hood',
  'Hooper',
  'Hoover',
  'Hopkins',
  'Hopper',
  'Horn',
  'Horne',
  'Horton',
  'House',
  'Houston',
  'Howard',
  'Howe',
  'Howell',
  'Hubbard',
  'Huber',
  'Hudson',
  'Huff',
  'Huffman',
  'Hughes',
  'Hull',
  'Humphrey',
  'Hunt',
  'Hunter',
  'Hurley',
  'Hurst',
  'Hutchinson',
  'Hyde',
  'Ingram',
  'Irwin',
  'Jackson',
  'Jacobs',
  'Jacobson',
  'James',
  'Jarvis',
  'Jefferson',
  'Jenkins',
  'Jennings',
  'Jensen',
  'Jimenez',
  'Johns',
  'Johnson',
  'Johnston',
  'Jones',
  'Jordan',
  'Joseph',
  'Joyce',
  'Joyner',
  'Juarez',
  'Justice',
  'Kane',
  'Kaufman',
  'Keith',
  'Keller',
  'Kelley',
  'Kelly',
  'Kemp',
  'Kennedy',
  'Kent',
  'Kerr',
  'Key',
  'Kidd',
  'Kim',
  'King',
  'Kinney',
  'Kirby',
  'Kirk',
  'Kirkland',
  'Klein',
  'Kline',
  'Knapp',
  'Knight',
  'Knowles',
  'Knox',
  'Koch',
  'Kramer',
  'Lamb',
  'Lambert',
  'Lancaster',
  'Landry',
  'Lane',
  'Lang',
  'Langley',
  'Lara',
  'Larsen',
  'Larson',
  'Lawrence',
  'Lawson',
  'Le',
  'Leach',
  'Leblanc',
  'Lee',
  'Leon',
  'Leonard',
  'Lester',
  'Levine',
  'Levy',
  'Lewis',
  'Lindsay',
  'Lindsey',
  'Little',
  'Livingston',
  'Lloyd',
  'Logan',
  'Long',
  'Lopez',
  'Lott',
  'Love',
  'Lowe',
  'Lowery',
  'Lucas',
  'Luna',
  'Lynch',
  'Lynn',
  'Lyons',
  'Macdonald',
  'Macias',
  'Mack',
  'Madden',
  'Maddox',
  'Maldonado',
  'Malone',
  'Mann',
  'Manning',
  'Marks',
  'Marquez',
  'Marsh',
  'Marshall',
  'Martin',
  'Martinez',
  'Mason',
  'Massey',
  'Mathews',
  'Mathis',
  'Matthews',
  'Maxwell',
  'May',
  'Mayer',
  'Maynard',
  'Mayo',
  'Mays',
  'Mcbride',
  'Mccall',
  'Mccarthy',
  'Mccarty',
  'Mcclain',
  'Mcclure',
  'Mcconnell',
  'Mccormick',
  'Mccoy',
  'Mccray',
  'Mccullough',
  'Mcdaniel',
  'Mcdonald',
  'Mcdowell',
  'Mcfadden',
  'Mcfarland',
  'Mcgee',
  'Mcgowan',
  'Mcguire',
  'Mcintosh',
  'Mcintyre',
  'Mckay',
  'Mckee',
  'Mckenzie',
  'Mckinney',
  'Mcknight',
  'Mclaughlin',
  'Mclean',
  'Mcleod',
  'Mcmahon',
  'Mcmillan',
  'Mcneil',
  'Mcpherson',
  'Meadows',
  'Medina',
  'Mejia',
  'Melendez',
  'Melton',
  'Mendez',
  'Mendoza',
  'Mercado',
  'Mercer',
  'Merrill',
  'Merritt',
  'Meyer',
  'Meyers',
  'Michael',
  'Middleton',
  'Miles',
  'Miller',
  'Mills',
  'Miranda',
  'Mitchell',
  'Molina',
  'Monroe',
  'Montgomery',
  'Montoya',
  'Moody',
  'Moon',
  'Mooney',
  'Moore',
  'Morales',
  'Moran',
  'Moreno',
  'Morgan',
  'Morin',
  'Morris',
  'Morrison',
  'Morrow',
  'Morse',
  'Morton',
  'Moses',
  'Mosley',
  'Moss',
  'Mueller',
  'Mullen',
  'Mullins',
  'Munoz',
  'Murphy',
  'Murray',
  'Myers',
  'Nash',
  'Navarro',
  'Neal',
  'Nelson',
  'Newman',
  'Newton',
  'Nguyen',
  'Nichols',
  'Nicholson',
  'Nielsen',
  'Nieves',
  'Nixon',
  'Noble',
  'Noel',
  'Nolan',
  'Norman',
  'Norris',
  'Norton',
  'Nunez',
  'Obrien',
  'Ochoa',
  'Oconnor',
  'Odom',
  'Odonnell',
  'Oliver',
  'Olsen',
  'Olson',
  'Oneal',
  'Oneil',
  'Oneill',
  'Orr',
  'Ortega',
  'Ortiz',
  'Osborn',
  'Osborne',
  'Owen',
  'Owens',
  'Pace',
  'Pacheco',
  'Padilla',
  'Page',
  'Palmer',
  'Park',
  'Parker',
  'Parks',
  'Parrish',
  'Parsons',
  'Pate',
  'Patel',
  'Patrick',
  'Patterson',
  'Patton',
  'Paul',
  'Payne',
  'Pearson',
  'Peck',
  'Pena',
  'Pennington',
  'Perez',
  'Perkins',
  'Perry',
  'Peters',
  'Petersen',
  'Peterson',
  'Petty',
  'Phelps',
  'Phillips',
  'Pickett',
  'Pierce',
  'Pittman',
  'Pitts',
  'Pollard',
  'Poole',
  'Pope',
  'Porter',
  'Potter',
  'Potts',
  'Powell',
  'Powers',
  'Pratt',
  'Preston',
  'Price',
  'Prince',
  'Pruitt',
  'Puckett',
  'Pugh',
  'Quinn',
  'Ramirez',
  'Ramos',
  'Ramsey',
  'Randall',
  'Randolph',
  'Rasmussen',
  'Ratliff',
  'Ray',
  'Raymond',
  'Reed',
  'Reese',
  'Reeves',
  'Reid',
  'Reilly',
  'Reyes',
  'Reynolds',
  'Rhodes',
  'Rice',
  'Rich',
  'Richard',
  'Richards',
  'Richardson',
  'Richmond',
  'Riddle',
  'Riggs',
  'Riley',
  'Rios',
  'Rivas',
  'Rivera',
  'Rivers',
  'Roach',
  'Robbins',
  'Roberson',
  'Roberts',
  'Robertson',
  'Robinson',
  'Robles',
  'Rocha',
  'Rodgers',
  'Rodriguez',
  'Rodriquez',
  'Rogers',
  'Rojas',
  'Rollins',
  'Roman',
  'Romero',
  'Rosa',
  'Rosales',
  'Rosario',
  'Rose',
  'Ross',
  'Roth',
  'Rowe',
  'Rowland',
  'Roy',
  'Ruiz',
  'Rush',
  'Russell',
  'Russo',
  'Rutledge',
  'Ryan',
  'Salas',
  'Salazar',
  'Salinas',
  'Sampson',
  'Sanchez',
  'Sanders',
  'Sandoval',
  'Sanford',
  'Santana',
  'Santiago',
  'Santos',
  'Sargent',
  'Saunders',
  'Savage',
  'Sawyer',
  'Schmidt',
  'Schneider',
  'Schroeder',
  'Schultz',
  'Schwartz',
  'Scott',
  'Sears',
  'Sellers',
  'Serrano',
  'Sexton',
  'Shaffer',
  'Shannon',
  'Sharp',
  'Sharpe',
  'Shaw',
  'Shelton',
  'Shepard',
  'Shepherd',
  'Sheppard',
  'Sherman',
  'Shields',
  'Short',
  'Silva',
  'Simmons',
  'Simon',
  'Simpson',
  'Sims',
  'Singleton',
  'Skinner',
  'Slater',
  'Sloan',
  'Small',
  'Smith',
  'Snider',
  'Snow',
  'Snyder',
  'Solis',
  'Solomon',
  'Sosa',
  'Soto',
  'Sparks',
  'Spears',
  'Spence',
  'Spencer',
  'Stafford',
  'Stanley',
  'Stanton',
  'Stark',
  'Steele',
  'Stein',
  'Stephens',
  'Stephenson',
  'Stevens',
  'Stevenson',
  'Stewart',
  'Stokes',
  'Stone',
  'Stout',
  'Strickland',
  'Strong',
  'Stuart',
  'Suarez',
  'Sullivan',
  'Summers',
  'Sutton',
  'Swanson',
  'Sweeney',
  'Sweet',
  'Sykes',
  'Talley',
  'Tanner',
  'Tate',
  'Taylor',
  'Terrell',
  'Terry',
  'Thomas',
  'Thompson',
  'Thornton',
  'Tillman',
  'Todd',
  'Torres',
  'Townsend',
  'Tran',
  'Travis',
  'Trevino',
  'Trujillo',
  'Tucker',
  'Turner',
  'Tyler',
  'Tyson',
  'Underwood',
  'Valdez',
  'Valencia',
  'Valentine',
  'Valenzuela',
  'Vance',
  'Vang',
  'Vargas',
  'Vasquez',
  'Vaughan',
  'Vaughn',
  'Vazquez',
  'Vega',
  'Velasquez',
  'Velazquez',
  'Velez',
  'Villarreal',
  'Vincent',
  'Vinson',
  'Wade',
  'Wagner',
  'Walker',
  'Wall',
  'Wallace',
  'Waller',
  'Walls',
  'Walsh',
  'Walter',
  'Walters',
  'Walton',
  'Ward',
  'Ware',
  'Warner',
  'Warren',
  'Washington',
  'Waters',
  'Watkins',
  'Watson',
  'Watts',
  'Weaver',
  'Webb',
  'Weber',
  'Webster',
  'Weeks',
  'Weiss',
  'Welch',
  'Wells',
  'West',
  'Wheeler',
  'Whitaker',
  'White',
  'Whitehead',
  'Whitfield',
  'Whitley',
  'Whitney',
  'Wiggins',
  'Wilcox',
  'Wilder',
  'Wiley',
  'Wilkerson',
  'Wilkins',
  'Wilkinson',
  'William',
  'Williams',
  'Williamson',
  'Willis',
  'Wilson',
  'Winters',
  'Wise',
  'Witt',
  'Wolf',
  'Wolfe',
  'Wong',
  'Wood',
  'Woodard',
  'Woods',
  'Woodward',
  'Wooten',
  'Workman',
  'Wright',
  'Wyatt',
  'Wynn',
  'Yang',
  'Yates',
  'York',
  'Young',
  'Zamora',
  'Zimmerman');
  $first_name = $names[array_rand($names, 1)];
  $last_name = $names[array_rand($names, 1)];
  $senName = $first_name.' '.$last_name;


if ($Atype == 'Credit'){
    $remarks = $aRef.$rem.' Credit';
$conn->query("INSERT INTO transfer (
	user_id,
	amount, 
	bank_name, 
	receiver_name, 
	receiver_acc, 
	date, 
	month, 
	balance, 
	ref, 
	sender_id, 
	type,
	sender_acc,  
	bank_address,  
	remarks
	) VALUES (
	'$Aid',
	'$randomAmount', 
	'$siteName', 
	'$Owner', 
	'$AccNO', 
	'$dateLimit', 
	'$AMonth', 
	'$randomBalance', 
	'$aRef', 
	'$senName', 
	'Credit', 
	'$aSender', 
	'$siteAddress', 
	'$remarks')");
    
} else if ($Atype == 'Debit'){
     $remarks = $aRef.$rem.' Debit';
     $rAccNO = rand(100000000000,999999999999);
     
    $conn->query("INSERT INTO transfer (
	user_id,
	amount, 
	bank_name, 
	receiver_name, 
	receiver_acc, 
	date, 
	month, 
	balance, 
	ref, 
	sender_id, 
	type,
	sender_acc,  
	bank_address,  
	remarks
	) VALUES (
	'$Aid',
	'$randomAmount', 
	'$recBank', 
	'$senName', 
	'$rAccNO', 
	'$dateLimit', 
	'$AMonth', 
	'$randomBalance', 
	'$aRef', 
	'$Owner', 
	'Debit', 
	'$AccNO', 
	'Online', 
	'$remarks')");
    
}

}

if ($runningTime < $Anumber){
  $meta = '<meta http-equiv="refresh" content="1">';
} else if ($runningTime >= $Anumber){ 
	echo "<script language='javascript'>window.location = 'AutoOut.php?username=$Admin&url=view.php?id=$Aid';</script>";
	$meta = '';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<?= $meta; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- End Required meta tags -->
	<!-- Begin SEO tag -->
	<title>
		<?= $page; ?> |
		<?= $siteName; ?> </title>
	<meta property="og:title" content="<?= $siteName; ?>">
	<meta name="author" content="<?= $siteName; ?>">
	<meta property="og:locale" content="en_US">
	<meta name="description" content="<?= $siteDescription; ?>">
	<meta property="og:description" content="<?= $siteDescription; ?>">
	<link rel="canonical" href="index.php">
	<meta property="og:url" content="index.php">
	<meta property="og:site_name" content="<?= $siteName; ?>">
	<!-- FAVICONS -->
	<link rel="apple-touch-icon" sizes="144x144" href="../upload/<?= $favicon; ?>">
	<link rel="shortcut icon" href="../upload/<?= $favicon; ?>">
	<meta name="theme-color" content="<?= $themeColor; ?>">
	<!-- End FAVICONS -->
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
	<!-- End GOOGLE FONT -->


	<!-- BEGIN PLUGINS STYLES -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/summernote/summernote-bs4.css">
	<link rel="stylesheet" href="../assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="../assets/vendor/flatpickr/flatpickr.min.css">
	<link rel="stylesheet" href="../assets/vendor/datatable/css/responsive.bootstrap4.min.css">
	<!-- END PLUGINS STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link rel="stylesheet" href="../assets/stylesheets/theme.min.css" data-skin="default">
	<link rel="stylesheet" href="../assets/stylesheets/theme-dark.min.css" data-skin="dark">
	<link rel="stylesheet" href="../assets/stylesheets/custom.css">
	<link rel="stylesheet" href="../assets/stylesheets/others.css">
	<!-- END THEME STYLES -->


	<script src="../assets/javascript/language.js"></script>
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
	<script>
		var skin = localStorage.getItem( 'skin' ) || 'default';
		var disabledSkinStylesheet = document.querySelector( 'link[data-skin]:not([data-skin="' + skin + '"])' );
		// Disable unused skin immediately
		disabledSkinStylesheet.setAttribute( 'rel', '' );
		disabledSkinStylesheet.setAttribute( 'disabled', true );
		// add loading class to html immediately
		document.querySelector( 'html' ).classList.add( 'loading' );
	</script>
	<script src="../assets/javascript/countries.js"></script>
	<script src="../assets/javascript/pdf.js"></script>
	<script src="../assets/vendor/jquery/jquery-3.2.1.slim.min.js"></script>
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<style>
		.navi-text {
			font-size: 17px;
			font-weight: 700;
			color: #000;
		}
		
		.bnavbar {
			display: none;
		}
		
		
		
		@media only screen and (max-width: 600px) {
			.bnavbar {
				overflow: hidden;
				position: fixed;
				bottom: 0;
				width: 100%;
				display: flex;
				justify-content: space-around;
			}
			.bnavbar a {
				color: #fff;
				text-align: center;
				padding: 7px 10px;
				text-decoration: none;
			}
			.bnavbar a:hover {
				background: #f1f1f1;
				color: black;
			}
			.bnavbar a.active {
				background-color: #fff;
			}
			
			.desktop {
			display: none;
			}
		}
	</style>

</head>

<body>
	<!-- .app -->
	<div class="app has-fullwidth">
		<header class="app-header app-header-dark">
			<!-- .navbar -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-lg-0">
				<!-- .container -->
				<div class="container">
					<!-- .navbar-brand -->
					<a href="index.php"><img src="<?= $uploadFolder.'/'.$logo; ?>" width="100px"></a>
					<!-- /.navbar-brand -->
		
					<button class="hamburger hamburger-squeeze d-flex d-lg-none" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
					<!-- .navbar-collapse -->
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
						<!-- .navbar-nav -->
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
							<!-- Dashboard -->
							<li class="nav-item active">
								&nbsp;
							</li>
							<li class="nav-item active">
							
								<a class="nav-link" href="index.php"><i class="fa fa-home text-white"></i> Home</a>
							</li>
						</ul>
						<!-- /.navbar-nav -->
						<div class="desktop">
						<div class="d-inline-flex">
						<div>
						</div>
						</div>
						</div>
						
						<!-- /.top-bar-search -->
						<!-- .btn-account -->
						<div class="navbar-nav dropdown d-flex mr-lg-n3">
							<button class="btn-account w-100" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"><img src="<?= $uploadFolder.'/'.$logo; ?>" alt="<?= $siteName; ?>"></span> <span class="account-summary d-lg-none"><span class="account-name text-capitalize text-primary">Admin</span></span></button>
							<!-- .dropdown-menu -->
							<div class="dropdown-menu dropdown-menu-right">
								<div class="dropdown-arrow mr-3"></div>
								<h6 class="dropdown-header d-none d-lg-block d-lg-none text-capitalize text-primary">
									Admin </h6><a class="dropdown-item" href="admins.php"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="logout.php"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
								<div class="dropdown-divider"></div>
							</div>
							<!-- /.dropdown-menu -->
						</div>
						
						<a href="logout.php" class="btn btn-outline-light" style="margin-left: 20px">Sign Out</a>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>
			<!-- /.navbar -->
		</header>
		<!-- /.app-header -->
<main class="app-main">
	<!-- .wrapper -->
	<div class="wrapper">
		<!-- .page -->
		<div class="page">
			<!-- .page-inner -->
			<div class="page-inner">

				<div class="page-section">
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<span><span class="font-weight-bold"><?= $page; ?>: </span> <i class="fa fa-caret-right text-primary"></i>
									</span>
								</div>
							<div class="card-body" align="center">
							    <div class="col-lg-12">
                      <!-- Growing spinner -->
                      <h3 class="section-title"> Generating Transactions. Relax and take a glass of water <i class="fas fa-smile text-primary"></i><i class="fas fa-smile text-info"></i><i class="fas fa-smile text-success"></i> </h3>
                      <h4>This page will go back automatically after generating the number of Transactions set.</h4>
                      <div class="spinner-grow text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-grow text-secondary" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-grow text-success" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-grow text-danger" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-grow text-warning" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-grow text-info" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-grow text-muted" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                      <div class="spinner-grow text-dark" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                    </div>
						<hr>
						<h4><span class="text-primary">Total Number of Transaction Set:</span> <span class="text-danger"><?= $Anumber; ?></span></h4>
						<h4><span class="text-primary">Total Number of Transaction Generated:</span> <span class="text-danger"><?= $runningTime; ?></span></h4>
							</div>

							</div>

						</div>
					</div>
				</div>

			</div>
			<!-- /.page -->
		</div>
	</div>

	<?php include( 'footer.php' ); ?>