<?php

namespace Wtsda\AppBundle\Controller;

use Wtsda\CoreBundle\Controller\CoreController;
use Symfony\Component\HttpFoundation\Response;

class EventsController extends CoreController
{
    public function indexAction()
    {
        $events = $this->get2014Events();
        return $this->_render('WtsdaAppBundle:Events:index', array('events' => $events));
    }

    public function region1Champs2014Action()
    {
        $events = $this->get2014Events();
        return $this->_render('WtsdaAppBundle:Events:region1Champs2014', array('events' => $events));
    }

    protected function get2014Events()
    {
        $events = array(
            array(
                'date' => '2014-01-25',
                'time' => null,
                'name' => 'Judging Certification Clinic',
                'contact' => array('name' => 'Master John Auer', 'phone' => '5416726190', 'email' => 'jjauer@msn.com'),
                'host' => 'Roseburg Martial Arts Academy',
                'location' => array('name' => 'Roseburg Martial Arts Academy', 'address' => '1523 NE Vine St, Roseburg, OR 97470'),
                'description' => 'Judging clinic in Roseburg, OR',
                'registration' => array('active' => false, 'url' => '#', 'label' => 'Register Now!'),
                'important' => false
            ),
            array(
                'date' => '2014-01-25',
                'time' => null,
                'name' => 'Judging Certification and Dan Clinic',
                'contact' => array('name' => 'Master Jim Debaca', 'phone' => '7075445305', 'email' => 'masterjim@fitnessfanatics.com'),
                'host' => 'Fitness Fanatics',
                'location' => array('name' => null, 'address' => 'Santa Rosa, CA'),
                'description' => 'Judging clinic in Santa Rosa',
                'registration' => array('active' => false, 'url' => '#', 'label' => 'Register Now!'),
                'important' => false
            ),
            array(
                'date' => '2014-02-01',
                'time' => '2pm-5pm',
                'name' => 'Judging Certification Clinic',
                'contact' => array('name' => 'Master Steve Elmore', 'phone' => '2069315853', 'email' => 'selmore@evergreen-tsd.com'),
                'host' => 'Evergreen Tang Soo Do Academy',
                'location' => array('name' => 'Evergreen Tang Soo Do Academy', 'address' => '2707 California Ave SW, Seattle, WA 98116'),
                'description' => 'Judging clinic in Seattle, WA',
                'registration' => array('active' => false, 'url' => '#', 'label' => 'Register Now!'),
                'important' => false
            ),
            array(
                'date' => '2014-02-01',
                'time' => null,
                'name' => 'Judging Certification and Advanced Rank Clinic',
                'contact' => array('name' => 'Master John Bennet', 'phone' => '7753387565', 'email' => 'nvmasterjib@sbcglobal.net'),
                'host' => 'TEAM Martial Arts',
                'location' => array('name' => null, 'address' => 'Reno, NV'),
                'description' => 'Judging clinic in Nevada',
                'registration' => array('active' => false, 'url' => '#', 'label' => 'Register Now!'),
                'important' => false
            ),
            array(
                'date' => '2014-03-20',
                'time' => null,
                'name' => 'Masters\'s Clinic',
                'contact' => array('name' => 'WTSDA', 'phone' => null, 'email' => null),
                'host' => 'WTSDA',
                'location' => array('name' => 'University of North Alabama', 'address' => 'One Harrison Plaza, Florence, Alabama 35632'),
                'description' => 'All the master together',
                'registration' => array('active' => false, 'url' => '#', 'label' => 'Register Now!'),
                'important' => false
            ),
            array(
                'date' => '2014-05-23',
                'time' => '5pm-10pm',
                'name' => 'Region 1 Spring Dan Test',
                'contact' => array('name' => 'Ms. Kristina Ohlsen', 'phone' => '4156655511', 'email' => 'msohlson@gmail.com'),
                'host' => 'Paresh Martial Arts',
                'location' => array('name' => 'TBA', 'address' => 'San Fransisco, CA'),
                'description' => '2014 Spring cycle Dan test',
                'registration' => array('active' => false, 'url' => '#', 'label' => 'Register Now!'),
                'important' => false
            ),
            array(
                'date' => '2014-05-24',
                'time' => '8am-5pm',
                'name' => 'Region 1 Championship',
                'contact' => array('name' => 'Ms. Kristina Ohlsen', 'phone' => '4156655511', 'email' => 'msohlson@gmail.com'),
                'host' => 'Paresh Martial Arts',
                'location' => array('name' => 'TBA', 'address' => 'San Fransisco, CA'),
                'description' => 'Annual Region 1 Championship',
                'registration' => array('active' => false, 'url' => '#', 'label' => 'Register'),
                'important' => true
            ),
            array(
                'date' => '2014-07-18',
                'time' => '7am-5pm',
                'name' => 'WTSDA World Championship',
                'contact' => null, //array('name' => '', 'phone' => '', 'email' => ''),
                'host' => 'World Tang Soo Do Association',
                'location' => array('name' => 'Greensboro Coliseum Complex', 'address' => '1921 W Lee St, Greensboro, NC 27403'),
                'description' => 'World Tang Soo Do Association World Championship',
                'registration' => array('active' => false, 'url' => '#', 'label' => 'Register'),
                'important' => true
            ),
            array(
                'date' => '2014-08-16',
                'time' => '9am-4pm',
                'name' => 'Region 1 Clinic',
                'contact' => array('name' => 'Master Mark Taylor', 'phone' => '2066502034', 'email' => 'mwt@pugetsoundtangsoodo.com'),
                'host' => 'Pugest Sound Tang Soo Do',
                'location' => array('name' => 'Camp Long', 'address' => '5200 35th Ave SW, Seattle, WA 98116'),
                'description' => 'Seattle area clinic',
                'registration' => array('active' => false, 'url' => '#', 'label' => 'Register Now!'),
                'important' => false
            ),
            array(
                'date' => '2014-09-26',
                'time' => null,
                'name' => 'World Ki Gong Club Annual Clinic',
                'contact' => array('name' => 'Master Tim Schroeder', 'phone' => '5305837475', 'email' => 'drtim@balancedoctor.com'),
                'host' => 'Tahoe City Martial Arts Academy',
                'location' => array('name' => null, 'address' => 'Tahoe City, CA'),
                'description' => 'Ki Gong Clinic',
                'registration' => array('active' => false, 'url' => '#', 'label' => 'Register Now!'),
                'important' => false
            ),
            array(
                'date' => '2014-10-04',
                'time' => '10am-11:30am',
                'name' => 'Region 1 Dan Workout',
                'contact' => array('name' => 'Master Steve Elmore', 'phone' => '2069315853', 'email' => 'selmore@evergreen-tsd.com'),
                'host' => 'Evergreen Tang Soo Do Academy',
                'location' => array('name' => 'TBA', 'address' => 'Seattle, WA'),
                'description' => 'Dan workout before the test',
                'registration' => array('active' => false, 'url' => '#', 'label' => 'Register Now!'),
                'important' => false
            ),
            array(
                'date' => '2014-10-04',
                'time' => '12am-6pm',
                'name' => 'Region 1 Fall Dan Test',
                'contact' => array('name' => 'Master Steve Elmore', 'phone' => '2069315853', 'email' => 'selmore@evergreen-tsd.com'),
                'host' => 'Evergreen Tang Soo Do Academy',
                'location' => array('name' => 'TBA', 'address' => 'Seattle, WA'),
                'description' => '2014 Fall cycle Dan test',
                'registration' => array('active' => false, 'url' => '#', 'label' => 'Register Now!'),
                'important' => false
            ),
        );
        return $events;
    }

    protected function get2013Events()
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
                'time' => '10am-11:30am',
                'name' => 'Region 1 Dan Workout',
                'contact' => array('name' => 'Ms. Kristina Ohlson', 'phone' => '4156655511', 'email' => 'msohlson@gmail.com'),
                'host' => 'Paresh Martial Arts',
                'location' => array('name' => 'Grattan Elementary School', 'address' => '165 Grattan St, San Franscico, CA 94117'),
                'description' => 'Dan workout before the test',
                'registration' => array('status' => 'Open', 'url' => '#')
            ),
            array(
                'date' => '2013-10-05',
                'time' => '12am-6pm',
                'name' => 'Region 1 Fall Dan Test',
                'contact' => array('name' => 'Ms. Kristina Ohlson', 'phone' => '4156655511', 'email' => 'msohlson@gmail.com'),
                'host' => 'Paresh Martial Arts',
                'location' => array('name' => 'Grattan Elementary', 'address' => '165 Grattan St, San Franscico, CA 94117'),
                'description' => '2013 Fall cycle Dan test',
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
