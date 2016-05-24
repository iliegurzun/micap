<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class DefaultController
 * @package AppBundle\Controller
 */
class DefaultController extends FOSRestController
{
    /**
     * @ApiDoc(
     *     resource=true,
     *     description="Test api doc annotations",
     *     views={"default"}
     *
     * )
     *
     * @Rest\Get
     * @Route("/api/{username}.{_format}", name="test_endpoint")
     */
    public function indexAction($username, Request $request)
    {
        $userRepo = $this->container->get('doctrine.orm.entity_manager')->getRepository('AppBundle:User');

        return $userRepo->findOneByUsername($username);
    }
}
