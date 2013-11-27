<?php
namespace Kubus\Backend\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kubus\BackendBundle\Entity\Person;

class LoadPostData implements FixtureInterface
{

	public function load(ObjectManager $manager)
	{
			$person = new Person();
			$person->setTitle("Dr.");
			$person->setFirstname("Ronald");
			$person->setLastname("Klaus");
			$person->setGender("m");
			$person->setEmail("ronald.klaus@gmx.net");

			$manager->persist($person);
			$manager->flush(); //send to DB
	}
}

?>