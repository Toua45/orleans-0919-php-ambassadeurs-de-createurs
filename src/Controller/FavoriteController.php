<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\FavoriteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class FavoriteController extends AbstractController
{
    const NB_MAX_FAVORITES = 12;

    /**
     * @Route("/favorite/{page}", name="app_favorite", requirements={"page" = "\d+"}, defaults={"page" = 1})
     * @param FavoriteRepository $favoriteRepository
     * @return Response
     * @IsGranted("ROLE_USER")
     */

    public function show(FavoriteRepository $favoriteRepository, int $page): Response
    {
        $user = $this->getUser();
        $nbFavorites = count($favoriteRepository->findFavoriteByUser($user));
        $favorites = $favoriteRepository->findFavoriteByUser($user, $page);
//        dd($favorites);

        return $this->render('favorite/index.html.twig', [
            'favorites' => $favorites,
            'page' => $page,
            'nbPages' => ceil($nbFavorites / self::NB_MAX_FAVORITES),
        ]);
    }
}
