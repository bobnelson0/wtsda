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
                'website' => 'http://www.evergreen-tsd.com/'
            ),
            array(
                'name' => 'Cloverdale Tang Soo Do',
                'instructor' => 'Master Gerald Stine',
                'address' => '209 N. Coverdale Blvd, Cloverdale, CA 95425',
                'phone' => '707-575-4924',
                'email' => null,
                'website' => null
            ),
            array(
                'name' => 'Dragon Fire Tang Soo Do',
                'instructor' => 'Mrs. Melanie Gordon',
                'address' => '721 South Fortuna Blvd, Fortuna, CA 95540',
                'phone' => '707-725-6055',
                'email' => null,
                'website' => 'https://www.facebook.com/pages/Dragon-Fire-Tang-Soo-Do/216660463087'
            ),
            array(
                'name' => 'Dragon Heart Tang Soo Do',
                'instructor' => 'Master Becky Rupp',
                'address' => '915 E Redwood Dr, Garberville, CA 95542',
                'phone' => '707-923-2886',
                'email' => 'becky@dragonhearttangsoodo.com',
                'website' => 'http://www.dragonhearttangsoodo.com/'
            ),
            array(
                'name' => 'Family Tang Soo Do',
                'instructor' => 'Mr. Kevin Johnson',
                'address' => '201 E Idaho Avenue, Meridian, ID 83642',
                'phone' => '208-841-7800',
                'email' => 'info@familytangsoodo.com',
                'website' => 'http://www.familytangsoodo.com/'
            ),
            array(
                'name' => 'Fitness Fanatics',
                'instructor' => 'Master Jim Debaca',
                'address' => '5224 Aero Drive, Santa Rosa, CA 95403',
                'phone' => '707-544-5305',
                'email' => 'masterjim@fitnessfanatics.com',
                'website' => 'http://www.fitnessfanatics.com/'
            ),
            array(
                'name' => 'Incline Tang Soo Do',
                'instructor' => 'Mrs. Maria De Lourdes Bernal',
                'address' => '785 Southwood Blvd, Building 4, Suite 2, Incline Village, NV 89450',
                'phone' => '775-220-6766',
                'email' => null,
                'website' => null
            ),
            array(
                'name' => 'Joint Forces Tang Soo Do',
                'instructor' => 'Mrs. Leslie Flaum',
                'address' => '111 Hekili Street, Kailua, HI 96734',
                'phone' => '808-888-5294',
                'email' => 'info@jointforcestsd.com',
                'website' => 'http://www.jointforcestsd.com/'
            ),
            array(
                'name' => 'Lopez TSD Family Martial Arts',
                'instructor' => 'Mrs. Melodie Lopez',
                'address' => '591 Peabody Road #263, Vacaville, CA 95687',
                'phone' => '707-999-1762',
                'email' => null,
                'website' => null
            ),
            array(
                'name' => 'Maui Tang Soo Do',
                'instructor' => 'Mr. Roy DeLyon',
                'address' => '194 Kulalani Circle, Kula, HI 96790',
                'phone' => '808-878-3638',
                'email' => null,
                'website' => null
            ),
            array(
                'name' => 'Paresh Martial Arts',
                'instructor' => 'Ms. Kristina Ohlson',
                'address' => '447 Irving Street, San Francisco, CA 94122',
                'phone' => '415-828-9323',
                'email' => 'info@sfmartialarts.com',
                'website' => 'http://www.sfmartialarts.com/'
            ),
            array(
                'name' => 'Parkpoint Tang Soo Do',
                'instructor' => 'Master Don Logan',
                'address' => '1200 N. Dutton Ave, Santa Rosa, CA 95401',
                'phone' => '707-578-1640',
                'email' => null,
                'website' => 'http://www.parkpointhealthclub.com/sr-tang-soo-do-karate/'
            ),
            array(
                'name' => 'Positive Karate USA',
                'instructor' => 'Master John Maris',
                'address' => '8125 Steelhead Ave, Kings Beach, CA 96143',
                'phone' => '775-887-1123',
                'email' => 'positivekarateusa@yahoo.com',
                'website' => 'http://www.positivekarateusa.com/'
            ),
            array(
                'name' => 'Positive Karate USA II',
                'instructor' => 'Master John Maris',
                'address' => '3094 Research way #64, Carson City, NV 89706',
                'phone' => '775-887-1123',
                'email' => 'positivekarateusa@yahoo.com',
                'website' => 'http://www.positivekarateusa.com/'
            ),
            array(
                'name' => 'Puget Sound Tang Soo Do',
                'instructor' => 'Master Mark Taylor',
                'address' => '4515 36th Avenue SW, Seattle, WA 98126',
                'phone' => '206-650-2034',
                'email' => 'mwt@pugetsoundtangsoodo.com',
                'website' => 'http://www.pugetsoundtangsoodo.com/'
            ),
            array(
                'name' => 'Redwood Dragon Tang Soo Do',
                'instructor' => 'Mr. Jac Hargrave',
                'address' => '9409 Shelter Cove Road, Whitethorn, CA 95589',
                'phone' => '707-223-6416',
                'email' => null,
                'website' => 'https://www.facebook.com/RedwoodDragonTangSooDo'
            ),
            array(
                'name' => 'Roseburg Martial Arts Academy',
                'instructor' => 'Master John Auer',
                'address' => '1523 NE Vine Streer, Roseburg, OR 97470',
                'phone' => '541-672-6190',
                'email' => 'RoseburgMartialArts@msn.com',
                'website' => 'http://www.roseburgmartialarts.com/'
            ),
            array(
                'name' => 'Tahoe City Martial Arts Academy II',
                'instructor' => 'Ms. Taylor Lewis',
                'address' => '740 Timberland Lane, Tahoe City, CA 96145',
                'phone' => '530-581-0662',
                'email' => null,
                'website' => 'https://www.facebook.com/TCMAA2'
            ),
            array(
                'name' => 'Tahoe City Martial Arts',
                'instructor' => 'Mr. Patrick Cerceau',
                'address' => '475 N Lake Blvd, Suite 253, Tahoe City, CA 9614',
                'phone' => '530-906-9355',
                'email' => null,
                'website' => 'https://tcmaa.sites.zenplanner.com/page.cfm'
            ),
            array(
                'name' => 'TEAM Martial Arts Academy',
                'instructor' => 'Master John & Carla Bennett',
                'address' => '2999 S.Virginia St, Reno, NV 8950',
                'phone' => '775-853-5325',
                'email' => 'educationteamnv@yahoo.com',
                'website' => 'http://www.teammartialartsacademy.com/'
            ),
            array(
                'name' => 'Truckee Tang Soo Do',
                'instructor' => 'Mr. Justin Loughner',
                'address' => '11357 C Deerfield Dr, Truckee, CA 96161',
                'phone' => '530-320-4537',
                'email' => null,
                'website' => null
            ),
            array(
                'name' => 'Wild Rivers Tang Soo Do',
                'instructor' => 'Mrs. Cherie Groves',
                'address' => '20062 North Umqua Highway, Glide, OR 97',
                'phone' => '541-496-0723',
                'email' => null,
                'website' => 'https://www.facebook.com/pages/Wild-Rivers-Tang-Soo-Do/501333136568719'
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
