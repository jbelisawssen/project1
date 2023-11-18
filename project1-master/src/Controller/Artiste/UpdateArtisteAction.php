<?php
namespace App\Controller\Artiste;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * class GetArtisteAction
 * 
 * @package App\Controller\Artiste\UpdateArtisteAction
 */
class UpdateArtisteAction extends AbstractController
{
    /**
     * @param EntityManagerInterface $em
     * 
     * @Route("/artiste", name="update_artiste")
     * 
     * @return JsonResponse 
     */
    public function __invoke(
        EntityManagerInterface $em,
        Request $request
    )
    {
        $data = $request->request->all();
        try {
            $updateArtiste = $em->getRepository(Artiste::class)->updateArtiste($data);

            if(false == $updateArtiste) {
                $response = [
                            'type' => 'failure',
                            'status' => '404',
                            'data' => 'data not found'
                        ];
            } else {
                $response = [
                    'type' => 'success',
                    'status' => '200',
                    'data' => $updateArtiste
                ];
            }
        } catch (\Exception $e) {
                $response = [
                    'type' => 'failure',
                    'status' => '404',
                    'data' => 'data not found'
                ];
        }
        return new Response(json_encode($response));
    }
}