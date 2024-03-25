<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            'image' => 'storage/images/cv/onetotem.png',
            'timelapse' => 'ene 2022 - sep 2023',
            'title' => 'desarrollador front end',
            'company' => 'One totem',
            'site' => 'https://onetotem.com/',
            'description' => 'Diseño, desarrollo e implementación de sitios ecommerce para grupo MAC (EEUU y Europa). HTML | CSS | JavaScript Vanilla y JQuery | PHP | Node JS | BigCommerce | Zmags | Livestory. Diseño, desarrollo e implementación de sitios WordPress Elementor | Semplice | FlyWheel. Desarrollo e implementación de SPA con Vue.Diseño, desarrollo e implementación de sitios ecommerce para grupo MAC (EEUU y Europa). HTML | CSS | JavaScript Vanilla y JQuery | PHP | Node JS | BigCommerce | Zmags | Livestory. Diseño, desarrollo e implementación de sitios WordPress Elementor | Semplice | FlyWheel. Desarrollo e implementación de SPA con Vue.',
            'skills' => '',
        ]);
        DB::table('experiences')->insert([
            'image' => 'storage/images/cv/eter.png',
            'timelapse' => 'sep 2012 - oct 2021 ',
            'title' => 'responsable de prensa y comunicación institucional',
            'company' => 'Eter - Escuela de comunicación',
            'site' => 'https://eter.com.ar',
            'description' => 'Diseño web: sitios, banners, landing pages, posteos y piezas publicitarias para redes sociales. Comunicación interna y externa: investigaciones, redacción y publicación. Campañas publicitarias en Google Adwords y Facebook Ads: estrategia, planificación y gestión. Diseño editorial: folletería, tarjetas, papalería, flyers. Diseño interior: afiches, señalética. Idea y diagramación de espacios internos conceptuales. Coordinación de comunicación con portal de noticias institucionales EterDigital, radio digital RadioEter y Premios Eter.',
            'skills' => '',
        ]);
        DB::table('experiences')->insert([
            'image' => 'storage/images/cv/diosteoiga.png',
            'timelapse' => 'jun 2011 - sep 2012',
            'title' => 'director de arte',
            'company' => 'Dios te oiga',
            'site' => '',
            'description' => 'Desarrollo de concepto, idea y diseño de piezas comunicacionales para redes sociales: Posteos, imágenes de portada y perfil, campañas publicitarias',
            'skills' => '',
        ]);
        DB::table('experiences')->insert([
            'image' => 'storage/images/cv/next_publicitario_logo.png',
            'timelapse' => 'mar 2010 - sep 2012',
            'title' => 'diseñador gráfico',
            'company' => 'Next publicidad',
            'site' => 'https://nextpublicidad.com.ar/',
            'description' => ' Diseño y desarrollo web, redes sociales, diseño de avisos publicitarios para revistas de Cablevisión y Telecentro, armado de renders en 3D para empresas constructoras.',
            'skills' => '',
        ]);
        DB::table('experiences')->insert([
            'image' => 'storage/images/cv/neuro.png',
            'timelapse' => 'feb 2008 - dic 2008',
            'title' => 'diseñador 3D',
            'company' => 'Neuro',
            'site' => '',
            'description' => ' Diseñador de objetos y escenarios en 3D para diferentes proyectos.',
            'skills' => '',
        ]);        
        DB::table('experiences')->insert([
            'image' => 'storage/images/cv/logo-nico.png',
            'timelapse' => 'ene 2004 - ...',
            'title' => 'diseñador gráfico / web',
            'company' => 'Freelance',
            'site' => 'https://nicolasgelabert.com.ar',
            'description' => 'Este es el año en el que comenzó mi camino hasta hoy. En el trayecto aprendí sobre arte, diseño, creatividad. También los principios de HTML y CSS. Con los años se intensificaron los conocimientos de diseño gráfico a través de cursos cortos y trabajos que realmente me sirvieron de escuela. Pude de a poco sumergirme en la programación aplicándolo al diseño, hasta que comencé a estudiar cada vez más. Ahora sigo aprendiendo porque creo que no se termina nunca de aprender.',
            'skills' => '',
        ]);
    }
}
