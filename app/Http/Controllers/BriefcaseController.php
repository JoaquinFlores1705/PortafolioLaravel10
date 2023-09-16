<?php

namespace App\Http\Controllers;

class BriefcaseController extends Controller {

    public function show(){
        $experiences = [];
        $educations = [];
        $references = [];
        $skills = [];

        array_push($experiences, 
            [
                "post" => "Desarrollador FullStack .Net y Angular",
                "company" => "Pervasive Mind/Edenred",
                "country" => "Chile",
                "dates" => "Nov 2021 - Jun 2023",
                "description" => "Era responsable de hacer mejoras y resolver incidentes en 
                diferentes microservicios basados en .Net Core y agregar 
                funcionalidad a SPA en Angular, documentar cambios, trabajar a 
                la par con el área de QA y participar en reuniones para mejoras 
                en diferentes plataformas y utilitarios de la empresa Edenred",
                "technologies" => "resources/img/c-sharp-c.svg,resources/img/angular.png",
                "extra-class" => ""
            ],
            [
                "post" => "Desarrollador .Net C#",
                "company" => "TTA/Produbanco",
                "country" => "Ecuador",
                "dates" => "Nov 2020 - Nov 2021",
                "description" => "Responsable de la migración de la ventanilla de Produbanco 
                basada en vb 6 a Formularios y paginas ASP de .Net c#",
                "technologies" => "resources/img/c-sharp-c.svg",
                "extra-class" => ""
            ],
            [
                "post" => "Desarrollador FullStack .Net y Angular",
                "company" => "Easysoft/Produbanco",
                "country" => "Ecuador",
                "dates" => "Jul 2018 - Nov 2020",
                "description" => "Responsable de agregar mejoras y corregir diferentes 
                funcionalidades del aplicativo del CashManagement en 
                Produbanco - Grupo Promerica basado en Angular y 
                microservicios en C# y en menor medida Python",
                "technologies" => "resources/img/c-sharp-c.svg,resources/img/angular.png,resources/img/python.png",
                "extra-class" => "border-b-0 pb-0"
            ],
        );

        array_push($educations, 
            [
                "post" => "Ingeniería en Sistemas",
                "company" => "Universidad Laica Eloy Alfador de Manabí",
                "country" => "Ecuador",
                "dates" => "Abr 2010 - Sep 2017",
                "description" => "Titulado como Ingeniero en sistemas de la República del Ecuador 
                promoción 2017",
                "extra-class" => ""
            ]
        );

        array_push($references, 
            [
                "image" => "resources/img/IrisUzcategui.jpg",
                "name" => "Iris Uzcategui",
                "post" => "Tech Lead Edenred",
                "phone" => "+56930247928",
                "extra-class" => ""
            ],
            [
                "image" => "resources/img/CarlosNovoa.jpg",
                "name" => "Carlos Novoa",
                "post" => "Tech Lead FrontEnd Produbanco",
                "phone" => "+593988880072",
                "extra-class" => ""
            ],
            [
                "image" => "resources/img/HugoMazzini.png",
                "name" => "Hugo Mazzini",
                "post" => "Jefe de IT CashManagement",
                "phone" => "+593996715801",
                "extra-class" => ""
            ],
        );

        array_push($skills, 
            [
                "technology" => "C#",
                "ability" => "5/5",
                "extra-class" => ""
            ],
            [
                "technology" => "Angular",
                "ability" => "5/5",
                "extra-class" => ""
            ],
            [
                "technology" => "HTML",
                "ability" => "5/5",
                "extra-class" => ""
            ],
            [
                "technology" => "CSS",
                "ability" => "5/5",
                "extra-class" => ""
            ],
            [
                "technology" => "Javascript",
                "ability" => "4/5",
                "extra-class" => ""
            ],
            [
                "technology" => "React",
                "ability" => "4/5",
                "extra-class" => ""
            ],
            [
                "technology" => "SQL",
                "ability" => "4/5",
                "extra-class" => ""
            ],
            [
                "technology" => "Node.JS",
                "ability" => "3/5",
                "extra-class" => ""
            ],
            [
                "technology" => "Python",
                "ability" => "3/5",
                "extra-class" => ""
            ],
            [
                "technology" => "Flutter",
                "ability" => "3/5",
                "extra-class" => ""
            ],
        );

        return view('welcome')->with([
            "experiences" => $experiences,
            "educations" => $educations,
            "references" => $references,
            "skills" => $skills
        ]);
    }
}