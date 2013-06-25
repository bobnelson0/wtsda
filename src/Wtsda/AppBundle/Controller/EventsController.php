<?php

namespace Wtsda\AppBundle\Controller;

use Wtsda\CoreBundle\Controller\CoreController;
use Symfony\Component\HttpFoundation\Response;

class EventsController extends CoreController
{
    public function indexAction()
    {
        $events = $this->getEvents();
        return $this->_render('WtsdaAppBundle:Events:index', array('events' => $events));
    }

    protected function getEvents()
    {
        $events = array(
            array(
                'date' => '2013-01-26',
                'time' => null,
                'name' => 'Judging Certification Clinic',
                'contact' => array('name' => 'Master John Bennet', 'phone' => '7753387565', 'email' => 'nvmasterjib@sbcglobal.net'),
                'host' => 'TEAM Martial Arts',
                'location' => array('name' => null, 'address' => 'Reno, NV'),
                'description' => 'Judging clinic in Nevada',
                'registration' => array('status' => 'Closed', 'url' => '#')
            ),
            array(
                'date' => '2013-01-26',
                'time' => null,
                'name' => 'Judging Certification and Dan Clinic',
                'contact' => array('name' => 'Master Jim Debaca', 'phone' => '7075445305', 'email' => 'masterjim@fitnessfanatics.com'),
                'host' => 'Fitness Fanatics',
                'location' => array('name' => null, 'address' => 'Santa Rosa, CA'),
                'description' => 'Judging clinic in Santa Rosa',
                'registration' => array('status' => 'Closed', 'url' => '#')
            ),
            array(
                'date' => '2013-02-02',
                'time' => '2pm-5pm',
                'name' => 'Judging Certification Clinic',
                'contact' => array('name' => 'Master Steve Elmore', 'phone' => '2069315853', 'email' => 'selmore@evergreen-tsd.com'),
                'host' => 'Evergreen Tang Soo Do Academy',
                'location' => array('name' => 'Evergreen Tang Soo Do Academy', 'address' => '2707 California Ave SW, Seattle, WA 98116'),
                'description' => 'Judging clinic in Seattle, WA',
                'registration' => array('status' => 'Closed', 'url' => '#')
            ),
            array(
                'date' => '2013-02-02',
                'time' => null,
                'name' => 'Judging Certification Clinic',
                'contact' => array('name' => 'Master John Auer', 'phone' => '5416726190', 'email' => 'jjauer@msn.com'),
                'host' => 'Roseburg Martial Arts Academy',
                'location' => array('name' => 'Roseburg Martial Arts Academy', 'address' => '1523 NE Vine St, Roseburg, OR 97470'),
                'description' => 'Judging clinic in Roseburg, OR',
                'registration' => array('status' => 'Closed', 'url' => '#')
            ),
            array(
                'date' => '2013-03-21',
                'time' => null,
                'name' => 'Masters\'s Clinic',
                'contact' => array('name' => 'WTSDA', 'phone' => null, 'email' => null),
                'host' => 'WTSDA',
                'location' => array('name' => 'University of North Alabama', 'address' => 'One Harrison Plaza, Florence, Alabama 35632'),
                'description' => 'All the master together',
                'registration' => array('status' => 'Closed', 'url' => '#')
            ),
            array(
                'date' => '2013-05-24',
                'time' => '5pm-10pm',
                'name' => 'Region 1 Spring Dan Test',
                'contact' => array('name' => 'Master John Auer', 'phone' => '5416726190', 'email' => 'jjauer@msn.com'),
                'host' => 'Roseburg Martial Arts Academy',
                'location' => array('name' => 'Umpqua Community College', 'address' => '1140 Umpqua College Rd, Roseburg, OR 97470'),
                'description' => '2013 Spring cycle Dan test',
                'registration' => array('status' => 'Closed', 'url' => '#')
            ),
            array(
                'date' => '2013-05-25',
                'time' => '8am-5pm',
                'name' => 'Region 1 Championship',
                'contact' => array('name' => 'Master John Auer', 'phone' => '5416726190', 'email' => 'jjauer@msn.com'),
                'host' => 'Roseburg Martial Arts Academy',
                'location' => array('name' => 'Umpqua Community College', 'address' => '1140 Umpqua College Rd, Roseburg, OR 97470'),
                'description' => 'Annual Region 1 Championship',
                'registration' => array('status' => 'Closed', 'url' => '#')
            ),
            array(
                'date' => '2013-07-27',
                'time' => '9pm-4pm',
                'name' => 'Region 1 Advanced Gup/Dan Clinic',
                'contact' => array('name' => 'Master Mark Taylor', 'phone' => '2066502034', 'email' => 'mwt@pugetsoundtangsoodo.com'),
                'host' => 'Pugest Sound Tang Soo Do',
                'location' => array('name' => 'Camp Long', 'address' => '5200 35th Ave SW, Seattle, WA 98116'),
                'description' => 'Advanced belt clinic',
                'registration' => array('status' => 'Open', 'url' => '#')
            ),
            array(
                'date' => '2013-10-05',
                'time' => '12am-5pm',
                'name' => 'Region 1 Fall Dan Test',
                'contact' => array('name' => 'Ms. Kristina Ohlson', 'phone' => '4156655511', 'email' => 'msohlson@gmail.com'),
                'host' => 'Paresh Martial Arts',
                'location' => array('name' => null, 'address' => 'San Franscico, CA'),
                'description' => '2013 Fall cycle Dan test',
                'registration' => array('status' => 'Open', 'url' => '#')
            ),
            array(
                'date' => '2013-10-05',
                'time' => '8am-12am',
                'name' => 'Region 1 Dan Workout',
                'contact' => array('name' => 'Ms. Kristina Ohlson', 'phone' => '4156655511', 'email' => 'msohlson@gmail.com'),
                'host' => 'Paresh Martial Arts',
                'location' => array('name' => null, 'address' => 'San Franscico, CA'),
                'description' => 'Dan workout before the test',
                'registration' => array('status' => 'Open', 'url' => '#')
            ),
            array(
                'date' => '2013-11-02',
                'time' => '9am-4pm',
                'name' => 'Region 1 Dan/Gup Clinic',
                'contact' => array('name' => 'Master Becky Rupp', 'phone' => '7079232886', 'email' => 'beckydhtsd@gmail.com'),
                'host' => 'Dragon Heart Tang Soo Do',
                'location' => array('name' => null, 'address' => 'Garberville, CA'),
                'description' => 'Gup and Dan clinic',
                'registration' => array('status' => 'Open', 'url' => '#')
            ),
        );
        return $events;
    }
}
