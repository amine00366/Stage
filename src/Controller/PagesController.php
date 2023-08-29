<?php
namespace App\Controller;

use App\Entity\Armoire;
use App\Entity\Bandes;
use App\Form\ArmoireType;
use App\Form\BandeType;
use App\Repository\ArmoireRepository;
use App\Repository\BandeRepository;
use App\Repository\BandesRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class PagesController extends AbstractController
{
    
    public function index(): Response
    {
        return $this->render('pages/index.html.twig');
    }

    public function bandesChart(BandesRepository $bandesRepository): Response
    {
        // Obtenez les données pour le graphique
        $chartData = $bandesRepository->getBandsEnteredPerDay();

        // Transformez les données en un format approprié pour le graphique
        $chartLabels = [];
        $chartCounts = [];

        foreach ($chartData as $entry) {
            $chartLabels[] = $entry['day'];
            $chartCounts[] = $entry['count'];
        }

        return $this->render('bandes/chart.html.twig', [
            'chartLabels' => $chartLabels,
            'chartData' => $chartCounts,
        ]);
    }
    
    public function dashboard(UserRepository $userRepository,BandesRepository $bandesRepository,ArmoireRepository $arm): Response
    {   $armCount = $arm->countARM();
        $userCount = $userRepository->countUsers();
        $Bandes= $bandesRepository->countBandes();
        $adminUserCount = $userRepository->countAdminUsers();
        $allBandes = $bandesRepository->findAll();
        $bandesByDay = $bandesRepository->getBandsEnteredPerDay();

        $chartLabels = [];
        $chartData = [];

        foreach ($bandesByDay as $entry) {
            $chartLabels[] = $entry['day']->format('Y-m-d');
            $chartData[] = $entry['count'];
        }

        $expiredBandsCount = 0;

        foreach ($allBandes as $bande) {
            if ($bandesRepository->isBandeExpired($bande)) {
                $expiredBandsCount++;
            }
        }
        return $this->render('pages/Dashbord.html.twig', [
            'userCount' => $userCount,
            'adminUserCount' => $adminUserCount,
            'armCount'=> $armCount,
            'expiredBandsCount' => $expiredBandsCount,
            'Bandes'=>$Bandes,
            'chartLabels' => json_encode($chartLabels),
            'chartData' => json_encode($chartData),
        ]);
    }
///// la liste des armoire 
    public function listarmoire(ArmoireRepository $repository ,BandesRepository $Brepository,Request $request )
    {
        $Armoire= $this->getDoctrine()->getRepository(Armoire::class)->findAll();
        $bandes = $Brepository->findAll();

        
    
        $expiredBandes = [];
        foreach ($bandes as $bande) {
            if ($Brepository->isBandeExpired($bande)) {
                $expiredBandes[] = $bande;
            }
        
        }
    return $this->render('pages/profile.html.twig',[
    'expiredBandes' => $expiredBandes,
    'armoire'=>$Armoire]);
    }


    //// liste des Bandes 
   
   
    public function listBandes(BandesRepository $repository, Request $request): Response
    {
        $bandes = $repository->findAll();

        
    
        $expiredBandes = [];
        foreach ($bandes as $bande) {
            if ($repository->isBandeExpired($bande)) {
                $expiredBandes[] = $bande;
            }
        
        }

       
        $bande = new Bandes();

        $form = $this->createForm(BandeType::class, $bande);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($bande);
            $entityManager->flush();
    
            $this->addFlash('success', 'La bande a été ajoutée avec succès.');
    
            return $this->redirectToRoute('listBandes'); // Redirige où vous voulez
        }
    
        return $this->render('pages/Bandes.html.twig', ['Bandes' => $bandes,
        'expiredBandes' => $expiredBandes,
        'form' => $form->createView(),
    ]);
            
        
    }
    

    ///// njareb ///////////
    public function aa(): Response
    {
        
        return $this->render('pages/profile.html.twig');
    }
   


  
    public function logintemp(): Response
    {
        return $this->render('pages/login.html.twig');
    }


    ///// ajout armoire 
    public function new(Request $request ,BandesRepository $bandeRepository): Response
    {
        $Armoire = new Armoire();
        $form = $this->createForm(ArmoireType::class, $Armoire);
        $form->handleRequest($request);
        $bandes = $bandeRepository->findAll();

        
    
        $expiredBandes = [];
        foreach ($bandes as $bande) {
            if ($bandeRepository->isBandeExpired($bande)) {
                $expiredBandes[] = $bande;
            }
        
        }
        if ($form->isSubmitted() && $form->isValid()) {
           
            $entityManager = $this->getDoctrine()->getManager();
            
            $entityManager->persist($Armoire);
            // exécute réellement les requêtes (c'est-à-dire la requête INSERT)
            $entityManager->flush();
            // redirection vers la page d'accueil
            return $this->redirectToRoute('tableau');
        }

        return $this->render('pages/newArmoire.html.twig', [
            'armoire' => $Armoire,
            'expiredBandes' => $expiredBandes,
            'form' => $form->createView(),
        ]);
    }
//// supprimer une armoire
    public function deleteArmoire(Request $request): Response
    {
        $id = $request->get('id');
        $entityManager = $this->getDoctrine()->getManager();
        $armoire = $entityManager->getRepository(Armoire::class)->find($id);
        $entityManager->remove($armoire);
        $entityManager->flush();
        return $this->redirectToRoute('tableau');
    }


    // public function searchBande(Request $request, BandesRepository $bandeRepository)
    // {
    //     $searchTerm = $request->query->get('search');
        
    //     if ($searchTerm) {
    //         $bandes = $bandeRepository->searchTerm($searchTerm);
    //     } else {
    //         $bandes = $bandeRepository->findAll();
    //     }
        
    //     return $this->render('pages/Bandes.html.twig', [
    //         'Bandes' => $bandes,
    //     ]);
    // }

    public function searchBande(BandesRepository $bandeRepository, Request $request)
    {
        $searchTerm = $request->query->get('search');
        
        if ($searchTerm) {
            $bandes = $bandeRepository->searchTerm($searchTerm);
        } else {
            $bandes = $bandeRepository->findAll();
        }
        
        $bande = new Bandes();
        $form = $this->createForm(BandeType::class, $bande);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($bande);
            $entityManager->flush();
    
            $this->addFlash('success', 'La bande a été ajoutée avec succès.');
    
            return $this->redirectToRoute('tableau'); // Redirige où vous voulez
        }
    
        return $this->render('pages/Bandes.html.twig', [
            'Bandes' => $bandes,
            'form' => $form->createView(),
        ]);
    }
    public function logintest(): Response
    {  return $this->render('pages/login.html.twig');
    }
     

    

    public function showExpiredBandes(BandesRepository $bandeRepository): Response
    {
        $allBandes = $bandeRepository->findAll();
    
        $expiredBandes = [];
        foreach ($allBandes as $bande) {
            if ($bandeRepository->isBandeExpired($bande)) {
                $expiredBandes[] = $bande;
            }
        
        }

        return $this->render('admin.html.twig', [
            'expiredBandes' => $expiredBandes,
        ]);
        
    }

    public function BandeExpire(BandesRepository $bandeRepository): Response
    {
        $allBandes = $bandeRepository->findAll();
    
        $expiredBandes = [];
        foreach ($allBandes as $bande) {
            if ($bandeRepository->isBandeExpired($bande)) {
                $expiredBandes[] = $bande;
            }
        
        }

        return $this->render('pages/expired.html.twig', [
            'expiredBandes' => $expiredBandes,
        ]);
        
    }
    ///// modifier une armoire 
   
    
    public function editArmoire(Request $request, EntityManagerInterface $entityManager,BandesRepository $bandeRepository, $id): Response
    {
        $armoire = $entityManager->getRepository(Armoire::class)->find($id);
        $bandes = $bandeRepository->findAll();

        
    
        $expiredBandes = [];
        foreach ($bandes as $bande) {
            if ($bandeRepository->isBandeExpired($bande)) {
                $expiredBandes[] = $bande;
            }
        
        }
        if (!$armoire) {
            throw $this->createNotFoundException('Aucune armoire trouvée pour cet ID : ' . $id);
        }
    
        $form = $this->createForm(ArmoireType::class, $armoire);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
    
            return $this->redirectToRoute('tableau'); // Remplace avec le nom de ta route pour la liste des armoires
        }
    
        return $this->render('pages/edit.html.twig', [
            'armoire' => $armoire,
            'expiredBandes' => $expiredBandes,
            'form' => $form->createView(),
        ]);
    }
    
/// ajouter un nouveau Bandes 
public function ajouterBande(Request $request)
{
    $bande = new Bandes();

    $form = $this->createForm(BandeType::class, $bande);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($bande);
        $entityManager->flush();

        $this->addFlash('success', 'La bande a été ajoutée avec succès.');

        return $this->redirectToRoute('tableau'); // Redirige où vous voulez
    }

    return $this->render('pages/ajouterBandes.html.twig', [
        'form' => $form->createView(),
    ]);
}

//// supprimer une Bandes 
public function deleteBande(Request $request): Response
{
    $id = $request->get('id');
    $entityManager = $this->getDoctrine()->getManager();
    $Bande = $entityManager->getRepository(Bandes::class)->find($id);
    $entityManager->remove($Bande);
    $entityManager->flush();
    return $this->redirectToRoute('listBandes');
}
public function editBande(Request $request, int $id): Response
{
    $entityManager = $this->getDoctrine()->getManager();
    $bande = $entityManager->getRepository(Bandes::class)->find($id);

    if (!$bande) {
        throw $this->createNotFoundException('Bande non trouvée');
    }

    $form = $this->createForm(BandeType::class, $bande);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();

        $this->addFlash('success', 'La bande a été modifiée avec succès.');

        return $this->redirectToRoute('listBandes'); // Redirige où vous voulez
    }

    return $this->render('pages/ajouterBandes.html.twig', [
        'form' => $form->createView(),
    ]);
}



public function cal(BandesRepository $Banderep)
{
    $events = $Banderep->findAll();

    $rdvs = [];

    foreach ($events as $event) {
        $rdvs[] = [
            'id' => $event->getId(),
            'start' => $event->getDatefin()->format('Y-m-d'),
            'end' => $event->getDatefin()->format('Y-m-d '),
            'title' => $event->getNumbande(),
        ];
    }

 

    $data = json_encode($rdvs);

    return $this->render('pages/cal.html.twig', compact('data'));
}

}
