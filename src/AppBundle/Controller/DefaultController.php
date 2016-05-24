<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

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
     * @Route("/api/{cuisine}.{_format}", name="test_endpoint")
     */
    public function indexAction($cuisine, Request $request)
    {
        return [$cuisine];
//        return sprintf('Parameter is %s.', $cuisine);
    }
}
