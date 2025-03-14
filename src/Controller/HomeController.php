<?php

namespace App\Controller;

use App\Repository\BookReadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class HomeController extends AbstractController
{
    private BookReadRepository $readBookRepository;

    // Inject the repository via the constructor
    public function __construct(BookReadRepository $bookReadRepository)
    {
        $this->bookReadRepository = $bookReadRepository;
    }

    #[Route('/', name: 'app.home')]
    public function index(): Response
    {
        $userId     = 1;
        $booksRead  = $this->bookReadRepository->findByUserId($userId, false);

        // Render the 'hello.html.twig' template
        return $this->render('pages/home.html.twig', [
            'booksRead' => $booksRead,
            'name'      => 'Accueil', // Pass data to the view
        ]);
    }


    #[Route('/login', name: 'auth.login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
{
    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('auth/login.html.twig', [
        'last_username' => $lastUsername,
        'error' => $error,
    ]);
}

    #[Route('/register', name: 'auth.register')]
    public function register(): Response
    {
        // Render the 'hello.html.twig' template
        return $this->render('auth/register.html.twig', [
            'name' => 'Inscription', // Pass data to the
        ]);
    }
}
