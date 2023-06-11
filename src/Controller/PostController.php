<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\AddPostType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends AbstractController
{

    #[Route('/add', name: 'add')]
    public function new(Request $request): Response
    {
        // creates a post object and initializes some data for this example
        $post = new Post();
        $post->setPostTitle('wite title');
        $post->setPostContent('wite content');

        $post = $this->createFormBuilder($post)
            ->add('post_title', TextType::class)
            ->add('post_content', TextType::class)
            ->getForm();

        $form = $this->createForm(AddPostType::class, $post);

        return $this->render('post/index.html.twig', [
            'form' => $form,
        ]);
    }
}
