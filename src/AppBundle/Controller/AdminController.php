<?php

namespace AppBundle\Controller;

use AppBundle\Form\EnvelopesType;
use AppBundle\Form\QuestionsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function indexAction(){
        return $this->render('AppBundle:Admin:default.html.twig');
    }

    public function addEnvelopeAction(Request $request){
        $form = $this->createForm(new EnvelopesType(), null, [
            'method' => 'POST'
        ]);
        $form->add('submit', 'submit', [
          'attr' => [
              'value' => 'Zapisz'
          ]
        ]);
        $form->handleRequest($request);
        if($form->isValid()){
            $this->get('envelope.model')->save($form->getData());

            return new RedirectResponse($this->generateUrl('admin_list_envelope'));
        }
        return $this->render("@App/Admin/envelopeForm.html.twig", ['form' => $form->createView()]);
    }
    public function addQuestionAction(Request $request){
        $form =$this->createForm(new QuestionsType(),null,[
            'method' => 'POST'
        ]);
        $form->add('submit', 'submit', [
            'attr' => [
                'value' => 'Zapisz'
            ]
        ]);
        $form->handleRequest($request);
        if($form->isValid()){
            $this->get('question.model')->save($form->getData());
            return new RedirectResponse($this->generateUrl('admin_list_question'));
        }
        return $this->render("@App/Admin/questionForm.html.twig", ['form' => $form->createView()]);
    }
    public function addAnswerAction(Request $request){
        $form =$this->createForm(new QuestionsType(),null,[
            'method' => 'POST'
        ]);
        $form->add('submit', 'submit', [
            'attr' => [
                'value' => 'Zapisz'
            ]
        ]);
        $form->handleRequest($request);
        if($form->isValid()){
            $this->get('answer.model')->save($form->getData());
            return new RedirectResponse($this->generateUrl('admin_list_answer'));
        }
        return $this->render("@App/Admin/questionForm.html.twig", ['form' => $form->createView()]);
    }
    public function envelopeListAction(){
        $envelopes = $this->get('envelope.model')->getAllEnvelopes();
        return $this->render('@App/Admin/envelopeList.html.twig', ['envelopes' => $envelopes]);
    }
    public function questionListAction(){
        $questions = $this->get('question.model')->getAllQuestions();
        return $this->render('@App/Admin/questionList.html.twig',['questions'=> $questions]);
    }


}
