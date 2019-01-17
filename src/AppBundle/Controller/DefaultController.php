<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    public
        $articles= [
        [
            "id"=>0,
            'title'=>"Titre 1",
            'resume'=>"Praedam qui nisi milvorum celeri nec celsius citroque umquam momento rapacium similes nec qui celsius.",
            'author'=>"Machin truc",
            'date'=>"17-01-2018",
            'contenu'=>"Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis filius et Danaes, vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi, quem a conmilitio Argonautarum cum aureo vellere direpto redirent, errore abstractum delatumque ad Africae litus mors repentina consumpsit, et ex eo cespite punico tecti manes eius heroici dolorum varietati medentur plerumque sospitales."
        ],
        [
            "id"=>1,
            'title'=>"Titre 2",
            'resume'=>"Praedam qui nisi milvorum celeri nec celsius citroque umquam momento rapacium similes nec qui celsius.",
            'author'=>"Bidule truc",
            'date'=>"02-01-2019",
            'contenu'=>"Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis filius et Danaes, vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi, quem a conmilitio Argonautarum cum aureo vellere direpto redirent, errore abstractum delatumque ad Africae litus mors repentina consumpsit, et ex eo cespite punico tecti manes eius heroici dolorum varietati medentur plerumque sospitales."
        ],
        [
            "id"=>2,
            'title'=>"Titre 3",
            'resume'=>"Praedam qui nisi milvorum celeri nec celsius citroque umquam momento rapacium similes nec qui celsius.",
            'author'=>"Machin Bidule",
            'date'=>"17-01-2019",
            'contenu'=>"Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis filius et Danaes, vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi, quem a conmilitio Argonautarum cum aureo vellere direpto redirent, errore abstractum delatumque ad Africae litus mors repentina consumpsit, et ex eo cespite punico tecti manes eius heroici dolorum varietati medentur plerumque sospitales."
        ]
    ];
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(){

        return $this->render('default/index.html.twig', ['tab'=>$this->articles]);
    }

    /**
     * @Route("/blog/{id}", name="blog", requirements={"id"="\d+"})
     */
    public function blogAction($id){
        return $this->render("default/blog.html.twig", ['article'=> $this->articles[$id]]);
    }


}
