<?php
namespace App\Controller\Artiste;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * class GetArtisteAction
 * 
 * @package App\Controller\Artiste\ShowArtisteAction
 */
class ShowArtisteAction extends AbstractController
{
    /**
     * @param EntityManagerInterface $em
     * 
     * @Route("/artiste", name="show_artiste")
     * 
     * @return JsonResponse 
     */
    public function __invoke(
        EntityManagerInterface $em
    )
    {
        $artiste = $em->getRepository(Artiste::class)->findAll();

        return $this->render(
                'artiste\artiste.html.twig',
                ['artiste' => $artiste]
        );
    }
}