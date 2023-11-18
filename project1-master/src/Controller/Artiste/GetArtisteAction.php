<?php
namespace App\Controller\Artiste;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * class GetArtisteAction
 * 
 * @package App\Controller\Artiste\GetArtisteAction
 */
class GetArtisteAction extends AbstractController
{
    /**
     * @param EntityManagerInterface $em
     * 
     * @Route("/artiste/{id}", name="get_artiste")
     * 
     * @return JsonResponse 
     */
    public function __invoke(
        EntityManagerInterface $em,
        int $id
    )
    {
        $artiste = $em->getRepository(Artiste::class)->find($id);

        if (!$artiste) {
               return new JsonResponse([], 500);
        } else {
              return new JsonResponse(['artiste' => $artiste], 200);
        }
    }
}