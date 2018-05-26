<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Hi JENNY! Please add the ff: id :D
        // unique attribs: id, student_number, username, first&last name, email

        DB::table('users')->insert(
            [
                'id' => '1',
                'student_number' => '201510559',
                'username' => 'a',
                'password' => Hash::make('a'),
                'first_name' => 'Leica Hope',
                'last_name' => 'Bandiola',
                'current_add' => 'Miag-ao, Iloilo',
                'contact_number' => '09056275051',
                'email_add' => 'lfbandiola@up.edu.ph',
                'course' => 'BS Computer Science',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '2',
                'student_number' => '201512467',
                'username' => 'b',
                'password' => Hash::make('b'),
                'first_name' => 'Aira',
                'last_name' => 'Torres',
                'current_add' => 'Miag-ao, Iloilo',
                'contact_number' => '09097382047',
                'email_add' => 'aotorres1@up.edu.ph',
                'course' => 'BS Computer Science',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '3',
                'student_number' => '201511019',
                'username' => 'c',
                'password' => Hash::make('c'),
                'first_name' => 'Maria Jenny',
                'last_name' => 'Yap',
                'current_add' => 'Miag-ao, Iloilo',
                'contact_number' => '09770929886',
                'email_add' => 'mtyap@up.edu.ph',
                'course' => 'BS Computer Science',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '4',
                'student_number' => '201504519',
                'username' => 'd',
                'password' => Hash::make('d'),
                'first_name' => 'Nicole Jaye',
                'last_name' => 'Solano',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09473883905',
                'email_add' => 'nsolano@up.edu.ph',
                'course' => 'BS Computer Science',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '5',
                'student_number' => '201506593',
                'username' => 'e',
                'password' => Hash::make('e'),
                'first_name' => 'Hannah Paula',
                'last_name' => 'Jalbuna',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'hpjalbuna@up.edu.ph',
                'course' => 'BS Computer Science',
                'year_level' => '3',
                'is_public' => true,
            ]
        );
// -------------------------------------------------------- Elektrons Execom 
        DB::table('users')->insert(
            [
                'id' => '6',
                'student_number' => '201511101',
                'username' => 'shyra',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Shyra',
                'last_name' => 'Polido',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'spolido@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '7',
                'student_number' => '201511102',
                'username' => 'jas',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Jas Ferroin',
                'last_name' => 'Cordero',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'jcordero@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '8',
                'student_number' => '201511103',
                'username' => 'bless',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Blesseiry',
                'last_name' => 'Lara',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'blara@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '9',
                'student_number' => '201511104',
                'username' => 'michael',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Michael',
                'last_name' => 'Gervero',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'mgervero@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '10',
                'student_number' => '201511105',
                'username' => 'rhevie',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Rhevie Rose',
                'last_name' => 'Albonian',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'ralbonian@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '11',
                'student_number' => '201511106',
                'username' => 'kent',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Kent',
                'last_name' => 'Soria',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'ksoria@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '12',
                'student_number' => '201511107',
                'username' => 'maryann',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Mary Anne',
                'last_name' => 'Jagonoy',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'mjagonoy@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '13',
                'student_number' => '201511108',
                'username' => 'maryclaudine',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Mary Claudine',
                'last_name' => 'Villacastin',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'mvillcastin@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '14',
                'student_number' => '201511109',
                'username' => 'pam',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Pam',
                'last_name' => 'Locsin',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'plocsin@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '15',
                'student_number' => '201511010',
                'username' => 'guen',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Guen Gian',
                'last_name' => 'Cahilig',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'gcahilig@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '16',
                'student_number' => '201511011',
                'username' => 'regyl',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Regyl',
                'last_name' => 'Oreta',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'roreta@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '17',
                'student_number' => '201511012',
                'username' => 'khaessha',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Khaessha Jhae',
                'last_name' => 'Arsenal',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'karsenal@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '18',
                'student_number' => '201511013',
                'username' => 'jazer',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Jazer John',
                'last_name' => 'Lirazan',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'jlirazan@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '19',
                'student_number' => '201511014',
                'username' => 'joshua',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Joshua',
                'last_name' => 'Mana-ay',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'jmanaay@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '20',
                'student_number' => '201511015',
                'username' => 'isran',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Isran',
                'last_name' => 'Handog',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'ihandog@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '21',
                'student_number' => '201511016',
                'username' => 'roi',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Roi',
                'last_name' => 'Baylen',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'rbaylen@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '22',
                'student_number' => '201511017',
                'username' => 'emerald',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Emerald',
                'last_name' => 'Esona',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'eesona@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '23',
                'student_number' => '201511018',
                'username' => 'mia',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Mia Alexa',
                'last_name' => 'Potchi',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'mpotchi@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '24',
                'student_number' => '201511020',
                'username' => 'josan',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Josan Marcy',
                'last_name' => 'Binas',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'jbinas@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '25',
                'student_number' => '201511021',
                'username' => 'gerald',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Gerald Dimacutac',
                'last_name' => 'Magallanes',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'gmagallanes@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '26',
                'student_number' => '201511022',
                'username' => 'rochelle',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Rochelle',
                'last_name' => 'Zagala',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'rzagala@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '27',
                'student_number' => '201511023',
                'username' => 'sumii',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Sumii',
                'last_name' => 'Sandoval',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'ssandoval@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '28',
                'student_number' => '201511024',
                'username' => 'kizza',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Kizza Marie',
                'last_name' => 'Ebaldone',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'kebaldone@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '29',
                'student_number' => '201511025',
                'username' => 'keito',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Keito',
                'last_name' => 'Asuma',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'kasuma@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '30',
                'student_number' => '201511026',
                'username' => 'jake',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Jake',
                'last_name' => 'Gerolaga',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'jgerolaga@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '31',
                'student_number' => '201511027',
                'username' => 'cyralv',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Cyralv Van',
                'last_name' => 'Nabor',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'cnabor@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '32',
                'student_number' => '201511028',
                'username' => 'deza',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Deza',
                'last_name' => 'Amistas',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'damistas@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '33',
                'student_number' => '201511029',
                'username' => 'ram',
                'password' => Hash::make('elektrons'),
                'first_name' => 'Ram',
                'last_name' => 'Billones',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'rbillones@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );
// -------------------------------------------------------- Redbolts Execom
        DB::table('users')->insert( 
            [
                'id' => '34',
                'student_number' => '201522201',
                'username' => 'christina',
                'password' => Hash::make('redbolts'),
                'first_name' => 'Christina',
                'last_name' => 'Locsin',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'clocsin@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '35',
                'student_number' => '201522202',
                'username' => 'jameson',
                'password' => Hash::make('redbolts'),
                'first_name' => 'Jameson',
                'last_name' => 'Diaz',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'jdiaz@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );
// -------------------------------------------------------- Clovers Execom 
        DB::table('users')->insert(
            [
                'id' => '36',
                'student_number' => '201533301',
                'username' => 'anne',
                'password' => Hash::make('clovers'),
                'first_name' => 'Anne',
                'last_name' => 'Gordon',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'agordon@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '37',
                'student_number' => '201533302',
                'username' => 'arthur',
                'password' => Hash::make('clovers'),
                'first_name' => 'Arthur',
                'last_name' => 'Lim',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'alim@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );
// -------------------------------------------------------- Skimmers Execom 
        DB::table('users')->insert(
            [
                'id' => '38',
                'student_number' => '201544401',
                'username' => 'mike',
                'password' => Hash::make('skimmers'),
                'first_name' => 'Mike Christopher',
                'last_name' => 'Dongon',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'jdongon@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
            ]
        );

        DB::table('users')->insert(
            [
                'id' => '39',
                'student_number' => '201544402',
                'username' => 'catherine',
                'password' => Hash::make('skimmers'),
                'first_name' => 'Catherine',
                'last_name' => 'del Rosario',
                'current_add' => 'Miag-ao, Iloilo',
                'year_level' => '3',
                'contact_number' => '09369105050',
                'email_add' => 'cdelrosario@up.edu.ph',
                'course' => 'BS Applied Math',
                'year_level' => '3',
                'is_public' => true,
           ]
      );
    }
}
