<?php
namespace App\Controller;

use App\Entity\Armoire;
use App\Form\ArmoireType;
use App\Repository\ArmoireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class PagesController extends AbstractController
{
    
    public function index(): Response
    {
        return $this->render('pages/index.html.twig');
    }

    public function listarmoire(ArmoireRepository $repository ,Request $request )
    {
        $armoire= $this->getDoctrine()->getRepository(Armoire::class)->findAll();

    return $this->render('pages/profile.html.twig',['armoire'=>$armoire]);
    }
   

    public function aa(): Response
    {
        
        return $this->render('pages/profile.html.twig');
    }

  
    public function dash(): Response
    {
        return $this->render('admin/dashboard.html.twig');
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

    public function deleteArmoire(Request $request): Response
    {
        $id = $request->get('id');
        $entityManager = $this->getDoctrine()->getManager();
        $armoire = $entityManager->getRepository(Armoire::class)->find($id);
        $entityManager->remove($armoire);
        $entityManager->flush();
        return $this->redirectToRoute('tableau');
    }

    
    
    
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
    

}
