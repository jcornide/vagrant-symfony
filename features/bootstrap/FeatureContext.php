<?php

use App\Entity\Car;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * This context class contains the definitions of the steps used by the demo 
 * feature file. Learn how to get started with Behat and BDD on Behat's website.
 * 
 * @see http://behat.org/en/latest/quick_start.html
 */
class FeatureContext implements Context
{
    /**
     * @var KernelInterface
     */
    private $kernel;

    /**
     * @var Response|null
     */
    private $response;
    private $em;
    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(
        KernelInterface $kernel,
        EntityManager $entityManager
    ) {
        $this->kernel = $kernel;
        $this->entityManager = $entityManager;
    }

    /**
     * @When a demo scenario sends a request to :path
     */
    public function aDemoScenarioSendsARequestTo(string $path)
    {
        $this->response = $this->kernel->handle(Request::create($path, 'GET'));
    }

    /**
     * @Then the response should be received
     */
    public function theResponseShouldBeReceived()
    {
        if ($this->response === null) {
            throw new \RuntimeException('No response received');
        }
    }


    /**
     * @param TableNode $cars
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     * @Given /^there are the following cars in the database:$/
     */
    public function thereAreTheFollowingCars(TableNode $cars)
    {
        foreach ($cars->getHash() as $car) {
            $newCar = new Car();
            $newCar->setLicensePlate($car['License plate']);
            $this->entityManager->persist($newCar);
        }
        $this->entityManager->flush();

    }

    /**
     * @BeforeScenario
     */
    public function clearData()
    {
        $purger = new ORMPurger($this->kernel->getContainer()->get('doctrine')->getManager());
        $purger->purge();
    }


}
