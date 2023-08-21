<?php
namespace App\Controller;

use App\Entity\Armoire;
use App\Entity\Bandes;
use App\Form\ArmoireType;
use App\Form\BandeType;
use App\Repository\ArmoireRepository;
use App\Repository\BandeRepository;
use App\Repository\BandesRepository;
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


///// la liste des armoire 
    public function listarmoire(ArmoireRepository $repository ,Request $request )
    {
        $Armoire= $this->getDoctrine()->getRepository(Armoire::class)->findAll();

    return $this->render('pages/profile.html.twig',['armoire'=>$Armoire]);
    }


    //// liste des Bandes 
   
   
    public function listBandes(BandesRepository $repository, Request $request): Response
    {
        $bandes = $repository->findAll();

       
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
    
        return $this->render('pages/Bandes.html.twig', ['Bandes' => $bandes,
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
    public function new(Request $request): Response
    {
        $Armoire = new Armoire();
        $form = $this->createForm(ArmoireType::class, $Armoire);
        $form->handleRequest($request);

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

    public function logintest(): Response
    {  return $this->render('pages/login.html.twig');
    }
     
    ///// modifier une armoire 
   
    
    public function editArmoire(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        $armoire = $entityManager->getRepository(Armoire::class)->find($id);
    
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
    return $this->redirectToRoute('tableau');
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

        return $this->redirectToRoute('tableau'); // Redirige où vous voulez
    }

    return $this->render('pages/ajouterBandes.html.twig', [
        'form' => $form->createView(),
    ]);
}
}
