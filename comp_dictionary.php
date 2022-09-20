<?php
$language_allowed = ['en', 'dk'];
$language = $_GET['language'] ?? 'en';
if (!in_array($language, $language_allowed)) {
    $language = 'en';
}

$dictionary = [
    'en_index_h1' => 'Welcome! Find a flexible flight for your next trip.',
    'dk_index_h1' => 'Velkommen! Find en fleksibel flybillet til din næste rejse.',

    'en_trips_h1' => 'Trips keeps all your plans in one place for a stress-free adventure.',
    'dk_trips_h1' => 'Trips samler alle dine planer på ét sted, så eventyret kan foregå uden stress.',

    'en_return' => 'Return',
    'dk_return' => 'Tur/retur',

    'en_adult' => '1 adult',
    'dk_adult' => '1 voksen',

    'en_bags' => '0 Bags',
    'dk_bags' => '0 Tasker',

    'en_from' => 'From?',
    'dk_from' => 'Fra?',

    'en_to' => 'To?',
    'dk_to' => 'Til?',

    'en_company' => 'Company',
    'dk_company' => 'Firma',

    'en_about' => 'About',
    'dk_about' => 'Om',

    'en_careers' => 'Careers',
    'dk_careers' => 'Jobmuligheder',

    'en_how_we_work' => 'How we work',
    'dk_how_we_work' => 'Sådan fungere vi',

    'en_momondo_coupon_codes' => 'Momondo coupon codes',
    'dk_momondo_coupon_codes' => 'Momondo-kouponkoder',

    'en_contact' => 'Contact',
    'dk_contact' => 'Kontakt',

    'en_more' => 'More',
    'dk_more' => 'Mere',

    'en_current_contry' => 'United Kingdome',
    'dk_current_contry' => 'Danmark',

    'en_current_curencey' => 'Pound Sterling',
    'dk_current_curencey' => 'Danske Kroner',

    'en_current_curencey_icon' => '<img id="pund-icon" style="width: 20px;  display: none;" src="img/pound-icon.webp" alt="pound icon" />',
    'dk_current_curencey_icon' => ' <p style="font-weight: 700;">kr.</p>',

    'en_site/currencey' => 'Site / Currency',
    'dk_site/currencey' => 'Side / Valuta',

    'en_currencey' => 'Currency',
    'dk_currencey' => 'Valuta',

    'en_flag' => 'img/gb-flag.svg',
    'dk_flag' => 'img/dk-flag.svg',

    'en_sign_in' => 'Sign in',
    'dk_sign_in' => 'Log in',

    'en_fly' => 'Flights',
    'dk_fly' => 'Fly',

    'en_overnatninger' => 'Stays',
    'dk_overnatninger' => 'Overnatninger',

    'en_bil' => 'Car hire',
    'dk_bil' => 'Bil',

    'en_færger' => 'Ferries',
    'dk_færger' => 'Færger',

    'en_nyhed' => 'NEW',
    'dk_nyhed' => 'NYHED',

    'en_oplevelser' => 'Things to do',
    'dk_oplevelser' => 'Oplevelser',

    'en_pakkerejser' => 'Holidays',
    'dk_pakkerejser' => 'Pakkerejser',

    'en_explore' => 'Explore English',
    'dk_explore' => 'Explore Dansk',

    'en_rejserestriktioner' => 'Rejserestriktioner English',
    'dk_rejserestriktioner' => 'Rejserestriktioner Dansk',


];
