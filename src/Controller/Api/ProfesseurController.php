<?php

namespace App\Controller\Api;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Entity\Professeur;
use App\Entity\Cours;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/api")
 */
class ProfesseurController extends AbstractController
{
    /**
     * @Route("/professeurs", name="api_professeurs")
     */
    public function getProfesseurs(EntityManagerInterface $em)
    {
        return $this->json(array_map(function ($professeur) {
            return $professeur->toArray();
        }, $em->getRepository(Professeur::class)->findAll()));
    }

    /**
     * @Route("/professeur/{id}", name="api_professeur")
     */
    public function getProfesseur(Professeur $professeur)
    {
        return $this->json($professeur, Response::HTTP_OK, [], ['ignored_attributes' => ['professeurs', 'professeur']]);
    }

    /**
     * Retourne les avis des professeurs.
     * 
     * @Route("/professeur/{id}/avis", name="api_professeur_avis", methods={"GET"})
     * 
     * @param App\Entity\Professeur $professeur
     * @return Symfony\Component\HttpFoundation\Response
     */
    public function getAvisOfProfesseur(Professeur $professeur)
    {
        return $this->json(array_map(function ($avis) {
            return $avis->toArray();
        }, $professeur->getAvis()->toArray()));
    }

    /**
     * @Route("/professeur/{id}/avis", name="api_put_professeur_avis", methods={"PUT"}) 
     */
    public function putProfesseurAvis(Professeur $professeur, Request $request,EntityManagerInterface $em, 
                                        ValidatorInterface $validator)
    {

        $data = json_decode($request->getContent(), true);
        $data['professeur'] = $professeur->getId();
        $form = $this->createForm(AvisType::class, new Avis, ['csrf_protection' => false]);
        $form->submit($data);

        if (!$form->isValid()) {
            return $this->json( $this->getErrorMessages($form), Response::HTTP_BAD_REQUEST); // Code 400
        }
        // try {

        //     $avis = new Avis;
        //     $avis->setNote($data["note"]);
        //     $avis->setCommentaire($data["commentaire"]);
        //     $avis->setEmailEtudiant($data["emailEtudiant"]);
        //     $avis->setProfesseur($professeur);
        // } catch (\Exception $e) {
        //     return $this->json(['message' => 'Avis invalide.'],Response::HTTP_BAD_REQUEST); // Code 400
        // }

        // $errors = $validator->validate($avis);

        // if (count($errors) > 0) {
        //     return $this->json(["message" => "Avis invalide."], Response::HTTP_BAD_REQUEST); // Code 400
        // } 
        $avis = $form->getData();
        $em->persist($avis);
        $em->flush();

        return $this->json( $avis->toArray(), Response::HTTP_CREATED); // CODE 201
    }

    /**
     * @Route("/avis/{id}", name="api_avis_delete", methods={"DELETE"})
     */
    public function deleteAvis(Avis $avis, EntityManagerInterface $em)
    {
        $em->remove($avis);
        $em->flush();

        return $this->json(null, Response::HTTP_NO_CONTENT); // CODE 204
    }
    
    /**
     * @Route("/cours", name="api_cours", methods={"GET"})
     */
    public function getCours(EntityManagerInterface $em)
    {
        return $this->json(array_map(function ($cours) {
            return $cours->toArray();
        }, $em->getRepository(Cours::class)->findAll()));
    }

    /**
     * @Route("/salle", name="api_salle", methods={"GET"})
     */
    public function getSalle(EntityManagerInterface $em)
    {
        return $this->json(array_map(function ($salle) {
            return $salle->toArray();
        }, $em->getRepository(Salle::class)->findAll()));
    }

    private function getErrorMessages(\Symfony\Component\Form\Form $form) {
        $errors = [];
        foreach($form->getErrors() as $error){
            $errors[$form->getName()][] = $error->getMessage();
        }
        foreach($form as $child){
            if(! $child->isValid()){
                foreach($child->getErrors() as $error){
                    $errors[$child->getName()] = $error->getMessage();
                }
            }
        }
        return $errors;
    }
}
