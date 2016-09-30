<?php

namespace OnePage\OnePageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        $cards = [
            array(
                'color' => '#4FBA29',
                'img' => "img/covoiturage-pictogramme.png",
                'photo' => "img/accueil-covoiturage.jpg",
                'title' => 'Se déplacer ensemble',
                'subtitle' => 'Mobilité durable',
                'text' => 'Ce service de covoiturage permet de vous rendre dans les campus excentrés ou loin de chez vous.',
                'title_photo' => "Partagez vos frais et réduisez votre impact sur l'environnement, pensez covoiturage",
                'subtitle_photo' => "MOBYCITY encourage à se déplacer avec une empreinte écologique réduite.",
                'svg' => '::icones/ico-boussole.svg.twig'
            ),
            array(
                'color' => '#F75527',
                'img' => "img/cartographie-pictogramme.png",
                'photo' => "img/accueil-cartographie.jpg",
                'title' => 'Vivre la ville',
                'subtitle' => 'Mobilité fonctionnelle',
                'text' => 'Cette cartographie des lieux de vie étudiants vous permet de trouver où demander une bourse, un logement, une formation.',
                'title_photo' => "Un carnet d'adresses utiles pour votre logement et votre formation",
                'subtitle_photo' => "MOBYCITY relaie aussi les lieux engagés en faveur de la conversion écologique (alimentation saine, réparation/location de vélos, innovations, etc.).",
                'svg' => '::icones/ico-marker.svg.twig'
            ),
            array(
                'color' => '#F3C307',
                'img' => "img/sel-pictogramme.png",
                'photo' => "img/accueil-sel.jpg",
                'title' => 'Échanger & partager',
                'subtitle' => 'Mobilité des savoirs',
                'text' => "Ce Système d'Échanges Locaux (SEL) vous permet d'échanger, sans liens marchands, des biens, compétences, connaissances et services.",
                'title_photo' => "Envie d'échanger, de partager des services ou des savoirs",
                'subtitle_photo' => "MOBYCITY favorise les rencontres et les solidarités.",
                'svg' => '::icones/ico-bulle.svg.twig'
            )
        ];
        $users = [
            array(
                "name" => "Amaury",
                "lastname" => "Rubio",
                "img" => "",
                "describe" => "Spécialiste en environnement et développement durable."
            ),
            array(
                "name" => "David-Marie",
                "lastname" => "Vailhe",
                "img" => "",
                "describe" => "Urbaniste spécialisé en politiques urbaines."
            ),
            array(
                "name" => "Christelle",
                "lastname" => "Chapel-Prudhomme",
                "img" => "",
                "describe" => "Chargée de projets de solidarité internationale et d'économie sociale et solidaire."
            )
        ];
        $partenaires = [
            array(
                "img" => "img/partenaires/avanza.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/bron.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/ca.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/cie.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/facverte.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/gl.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/l3dd.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/let.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/lyon_1.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/lyon_2.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/lyon_3.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/promess.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/ra.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/refedd.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/rustine.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/st-priest.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/tcl.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/troc.png",
                "src" => ""
            ),
            array(
                "img" => "img/partenaires/universite_de_lyon.png",
                "src" => ""
            )
        ];
        $sociaux = [
            array(
                'icone' => '::icones/twitter.svg.twig',
                'url' => 'https://twitter.com/at_capacites'
            ),
            array(
                'icone' => '::icones/facebook.svg.twig',
                'url' => 'https://www.facebook.com/atelier.capacites'
            )
        ];
        
//        $mail = \Swift_Message::newInstane()
//            ->setSubjet()
//            ->setFrom(array('starter.mobycity@gmail.com'=>'Mobycity'))
//            ->setTo('developpement.ateliercapacites@gmail.com')
//            ->setCharset('utf-8')
//            ->setContentType('text/html')
//            ->setBody($this->renderView('OnePageBundle:Default:mail.html.twig'));
//        $this->get('mailer')->send($mail);
        
        return $this->render('OnePageBundle:Default:index.html.twig', array(
            'cards' => $cards,
            'users' => $users,
            'partenaires' => $partenaires,
            'sociaux' => $sociaux
        ));
    }
}
