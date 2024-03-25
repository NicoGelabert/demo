<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('education')->insert([
            'image' => 'storage/images/cv/react.png',
            'timelapse' => 'ago 2021 - oct 2021',
            'title' => 'React JS',
            'school' => 'Coder House',
            'site' => 'https://nifty-booth-702758.netlify.app/',
            'description' => 'Creación de interfaces de usuario interactivas para facilitar el desarrollo de aplicaciones en una sola página',
            'certificate' => 'https://www.coderhouse.es/certificados/6180a650e9d6f6006da9d589',
            'skills' => null,
        ]);
        DB::table('education')->insert([
            'image' => 'storage/images/cv/javascript-logo.png',
            'timelapse' => 'ago 2021 - oct 2021',
            'title' => 'JavaScript',
            'school' => 'Coder House',
            'site' => null,
            'description' => 'Fundamentos de JavaScript y arquitectura de aplicaciones web. Desarrollo e integración de componentes del front-end para crear un sitio web interactivos',
            'certificate' => 'https://www.coderhouse.com/certificados/608f1f463f5b1d000faecf00',
            'skills' => null,
        ]);
        DB::table('education')->insert([
            'image' => 'storage/images/cv/digitalhouseschool_logo.png',
            'timelapse' => 'ago 2021 - oct 2021',
            'title' => ' Programación web full stack',
            'school' => 'Digital House',
            'site' => null,
            'description' => 'Fundamentos de la programación orientada a objetos y principios de desarrollo web a través de Metodologías Agiles y SCRUM. Principios, estructura y jerarquía. Introducción a bases de datos relacionales. HTML | CSS | Javascript | PHP | Laravel | Eloquent | MySQL OOP | Git | Metodologías Ágiles - Scrum | Patrón de arquitectura MVC | MySQL Workbench | Atom / VSCode.',
            'certificate' => null,
            'skills' => null,
        ]);
        DB::table('education')->insert([
            'image' => 'storage/images/cv/escuela_superior_de_creativos_publicitarios.png',
            'timelapse' => 'mar 2010 - dic 2012',
            'title' => 'dirección de arte y publicidad',
            'school' => 'Escuela superior de creativos publicitarios',
            'site' => null,
            'description' => 'Desarollo de técnicas aplicadas para desarrollar la estrategia de mensaje o concepto creativo en que se
            basa una campaña de publicidad. A través de la dirección de arte el profesional utiliza la creatividad para plasmar las ideas de manera visual.',
            'certificate' => null,
            'skills' => null,
        ]);
        DB::table('education')->insert([
            'image' => 'storage/images/cv/logo-nico.png',
            'timelapse' => 'ene 2004 - ...',
            'title' => 'diseñador gráfico',
            'school' => 'Autodidacta',
            'site' => null,
            'description' => 'En el año 2002 decidí que quería comenzar una carrera como diseñador gráfico. Comencé el primer año de la carrera y no pude continuar. Me aburrí. Decidí que mis escuelas fueran las muestras de arte, los museos y los mentores que tuve a lo largo de los años en diferentes trabajos. Michel Gondry, Saúl Bass y Salvador Dalí fueron siempre mis fuentes de inspiración.
            En año 2004 comencé a capacitarme de la misma forma en Programación y Diseño Web. Este CV y La demo del sitio es el resumen de mi carrera hasta hoy.',
            'certificate' => null,
            'skills' => null,
        ]);
    }
}
