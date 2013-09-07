<?php

namespace Wtsda\AppBundle\Controller;

use Wtsda\CoreBundle\Controller\CoreController;
use Symfony\Component\HttpFoundation\Response;

class DojangsController extends CoreController
{
    public function indexAction()
    {
        $dojangs = $this->getDojangs();
        return $this->_render('WtsdaAppBundle:Dojangs:index', array('dojangs' => $dojangs));
    }

    protected function getDojangs()
    {
        $dojangs = array(
            array(
                'name' => 'Evergreen Tang Soo Do Academy',
                'instructor' => 'Master Steven Elmore',
                'address' => '2707 California Ave SW, Seattle, WA 98116',
                'phone' => '206-931-5853',
                'email' => 'info@evergreen-tsd.com',
                'website' => 'http://www.evergreen-tsd.com/',
                'location' => array('lat'=> 47.579, 'lng' => -122.38702)
            ),
            array(
                'name' => 'Cloverdale Tang Soo Do',
                'instructor' => 'Master Gerald Stine',
                'address' => '209 N. Coverdale Blvd, Cloverdale, CA 95425',
                'phone' => '707-575-4924',
                'email' => null,
                'website' => null,
                'location' => array('lat'=> 38.80659199999999, 'lng' => -123.01844499999999)
            ),
            array(
                'name' => 'Dragon Fire Tang Soo Do',
                'instructor' => 'Mrs. Melanie Gordon',
                'address' => '721 South Fortuna Blvd, Fortuna, CA 95540',
                'phone' => '707-725-6055',
                'email' => null,
                'website' => 'https://www.facebook.com/pages/Dragon-Fire-Tang-Soo-Do/216660463087',
                'location' => array('lat'=> 40.5833644, 'lng' => -124.14459090000003)
            ),
            array(
                'name' => 'Dragon Heart Tang Soo Do',
                'instructor' => 'Master Becky Rupp',
                'address' => '915 E Redwood Dr, Garberville, CA 95542',
                'phone' => '707-923-2886',
                'email' => 'becky@dragonhearttangsoodo.com',
                'website' => 'http://www.dragonhearttangsoodo.com/',
                'location' => array('lat'=> 40.09805600000001, 'lng' => -123.79422299999999)
            ),
            array(
                'name' => 'Family Tang Soo Do',
                'instructor' => 'Mr. Kevin Johnson',
                'address' => '201 E Idaho Avenue, Meridian, ID 83642',
                'phone' => '208-841-7800',
                'email' => 'info@familytangsoodo.com',
                'website' => 'http://www.familytangsoodo.com/',
                'location' => array('lat'=> 43.610787, 'lng' => -116.389726)
            ),
            array(
                'name' => 'Fitness Fanatics',
                'instructor' => 'Master Jim Debaca',
                'address' => '5224 Aero Drive, Santa Rosa, CA 95403',
                'phone' => '707-544-5305',
                'email' => 'masterjim@fitnessfanatics.com',
                'website' => 'http://www.fitnessfanatics.com/',
                'location' => array('lat'=> 38.509665, 'lng' => -122.7656222)
            ),
            array(
                'name' => 'Incline Tang Soo Do',
                'instructor' => 'Mrs. Maria De Lourdes Bernal',
                'address' => '785 Southwood Blvd, Building 4, Suite 2, Incline Village, NV 89450',
                'phone' => '775-220-6766',
                'email' => null,
                'website' => null,
                'location' => array('lat'=> 39.2477381, 'lng' => -119.96132130000001)
            ),
            array(
                'name' => 'Joint Forces Tang Soo Do',
                'instructor' => 'Mrs. Leslie Flaum',
                'address' => '111 Hekili Street, Kailua, HI 96734',
                'phone' => '808-888-5294',
                'email' => 'info@jointforcestsd.com',
                'website' => 'http://www.jointforcestsd.com/',
                'location' => array('lat'=> 21.392243, 'lng' => -157.74379069999998)
            ),
            array(
                'name' => 'Lopez TSD Family Martial Arts',
                'instructor' => 'Mrs. Melodie Lopez',
                'address' => '591 Peabody Road #263, Vacaville, CA 95687',
                'phone' => '707-999-1762',
                'email' => null,
                'website' => null,
                'location' => array('lat'=> 38.343068, 'lng' => -121.97114799999997)
            ),
            array(
                'name' => 'Maui Tang Soo Do',
                'instructor' => 'Mr. Roy DeLyon',
                'address' => '194 Kulalani Circle, Kula, HI 96790',
                'phone' => '808-878-3638',
                'email' => null,
                'website' => null,
                'location' => array('lat'=> 20.774875, 'lng' => -156.30933800000003)
            ),
            array(
                'name' => 'Paresh Martial Arts',
                'instructor' => 'Ms. Kristina Ohlson',
                'address' => '447 Irving Street, San Francisco, CA 94122',
                'phone' => '415-828-9323',
                'email' => 'info@sfmartialarts.com',
                'website' => 'http://www.sfmartialarts.com/',
                'location' => array('lat'=> 37.7640649, 'lng' => -122.46282080000003)
            ),
            array(
                'name' => 'Parkpoint Tang Soo Do',
                'instructor' => 'Master Don Logan',
                'address' => '1200 N. Dutton Ave, Santa Rosa, CA 95401',
                'phone' => '707-578-1640',
                'email' => null,
                'website' => 'http://www.parkpointhealthclub.com/sr-tang-soo-do-karate/',
                'location' => array('lat'=> 38.4482389, 'lng' => -122.73101629999996)
            ),
            array(
                'name' => 'Positive Karate USA',
                'instructor' => 'Master John Maris',
                'address' => '8125 Steelhead Ave, Kings Beach, CA 96143',
                'phone' => '775-887-1123',
                'email' => 'positivekarateusa@yahoo.com',
                'website' => 'http://www.positivekarateusa.com/',
                'location' => array('lat'=> 39.240452, 'lng' => -120.028348)
            ),
            array(
                'name' => 'Positive Karate USA II',
                'instructor' => 'Master John Maris',
                'address' => '3094 Research way #64, Carson City, NV 89706',
                'phone' => '775-887-1123',
                'email' => 'positivekarateusa@yahoo.com',
                'website' => 'http://www.positivekarateusa.com/',
                'location' => array('lat'=> 39.187154, 'lng' => -119.74926399999998)
            ),
            array(
                'name' => 'Puget Sound Tang Soo Do',
                'instructor' => 'Master Mark Taylor',
                'address' => '4515 36th Avenue SW, Seattle, WA 98126',
                'phone' => '206-650-2034',
                'email' => 'mwt@pugetsoundtangsoodo.com',
                'website' => 'http://www.pugetsoundtangsoodo.com/',
                'location' => array('lat'=> 47.562698, 'lng' => -122.377772)
            ),
            array(
                'name' => 'Redwood Dragon Tang Soo Do',
                'instructor' => 'Mr. Jac Hargrave',
                'address' => '9409 Shelter Cove Road, Whitethorn, CA 95589',
                'phone' => '707-223-6416',
                'email' => null,
                'website' => 'https://www.facebook.com/RedwoodDragonTangSooDo',
                'location' => array('lat'=> 40.0297733, 'lng' => -124.07016399999998)
            ),
            array(
                'name' => 'Roseburg Martial Arts Academy',
                'instructor' => 'Master John Auer',
                'address' => '1523 NE Vine Streer, Roseburg, OR 97470',
                'phone' => '541-672-6190',
                'email' => 'RoseburgMartialArts@msn.com',
                'website' => 'http://www.roseburgmartialarts.com/',
                'location' => array('lat'=> 43.22835, 'lng' => -123.34659099999999)
            ),
            array(
                'name' => 'Tahoe City Martial Arts Academy II',
                'instructor' => 'Ms. Taylor Lewis',
                'address' => '740 Timberland Lane, Tahoe City, CA 96145',
                'phone' => '530-581-0662',
                'email' => null,
                'website' => 'https://www.facebook.com/TCMAA2',
                'location' => array('lat'=> 39.1284523, 'lng' => -120.16440510000001)
            ),
            array(
                'name' => 'Tahoe City Martial Arts',
                'instructor' => 'Mr. Patrick Cerceau',
                'address' => '475 N Lake Blvd, Suite 253, Tahoe City, CA 9614',
                'phone' => '530-906-9355',
                'email' => null,
                'website' => 'https://tcmaa.sites.zenplanner.com/page.cfm',
                'location' => array('lat'=> 39.1707449, 'lng' => -120.14201200000002)
            ),
            array(
                'name' => 'TEAM Martial Arts Academy',
                'instructor' => 'Master John & Carla Bennett',
                'address' => '2999 S.Virginia St, Reno, NV 8950',
                'phone' => '775-853-5325',
                'email' => 'educationteamnv@yahoo.com',
                'website' => 'http://www.teammartialartsacademy.com/',
                'location' => array('lat'=> 39.4648986, 'lng' => -119.7829706)
            ),
            array(
                'name' => 'Truckee Tang Soo Do',
                'instructor' => 'Mr. Justin Loughner',
                'address' => '11357 C Deerfield Dr, Truckee, CA 96161',
                'phone' => '530-320-4537',
                'email' => null,
                'website' => null,
                'location' => array('lat'=> 39.3183818, 'lng' => -120.20790310000001)
            ),
            array(
                'name' => 'Wild Rivers Tang Soo Do',
                'instructor' => 'Mrs. Cherie Groves',
                'address' => '20062 North Umqua Highway, Glide, OR 97',
                'phone' => '541-496-0723',
                'email' => null,
                'website' => 'https://www.facebook.com/pages/Wild-Rivers-Tang-Soo-Do/501333136568719',
                'location' => array('lat'=> 43.307268, 'lng' => -123.07924500000001),
            ),
        );
        usort($dojangs, array($this, 'sortDojangsByName'));
        return $dojangs;
    }

    protected function sortDojangsByName($a, $b)
    {
        return strcmp($a['name'], $b['name']);
    }
}
