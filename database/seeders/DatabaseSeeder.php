<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Projet;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['PHP', 'Laravel', 'Java', 'SQL', 'Python', 'HTML', 'CSS'];

        foreach($tags as $nom_tag){
            $tag = new Tag;
            $tag->nom = $nom_tag;
            $tag->save();
        }

        $projet = new Projet();
        $projet->nom = "Création d'un site web";
        $projet->description = "Dans le cadre d'une mise en situation à l'IUT de Lens, j'ai du concevoir un site Web pour une entreprise d'événementiel.
                                Il a été conçu en HTML/CSS uniquement.";
        $projet->image = "storage/projets/festibouf.png";
        $projet->save();

        $projet = Projet::where('nom', "Création d'un site web")->first();
        $projet->tags()->attach(6, ['projet_id' => $projet->id, 'tag_id' => 6]);
        $projet->tags()->attach(7, ['projet_id' => $projet->id, 'tag_id' => 7]);

        $projet = new Projet();
        $projet->nom = "Réalisation d'un portfolio";
        $projet->description = "Afin de montrer mes compétences et mes projets, j'ai choisi de programmer ce Portfolio en utilisant Laravel et Bootstrap.";
        $projet->image = "storage/projets/photo_cv.jpg";
        $projet->save();

        $projet = Projet::where('nom', "Réalisation d'un portfolio")->first();
        $projet->tags()->attach(1, ['projet_id' => $projet->id, 'tag_id' => 1]);
        $projet->tags()->attach(2, ['projet_id' => $projet->id, 'tag_id' => 2]);
        $projet->tags()->attach(6, ['projet_id' => $projet->id, 'tag_id' => 6]);
        $projet->tags()->attach(7, ['projet_id' => $projet->id, 'tag_id' => 7]);

        $projet = new Projet();
        $projet->nom = "Création d'un e-musée";
        $projet->description = "Dans le cadre de l'IUT de Lens, nous avons eu pour mission de créer un galerie d'art en ligne en 2 jours seulement en groupe de 4 étudiants.
                                Nous l'avons créée en utilisant Laravel ainsi que Tailwind pour le design.
                                Le concept de notre galerie était que chaque salle de la galerie était dédiée à un artiste, et contenait des images créées par une IA dans le style de l'artiste.";
        $projet->image = "storage/projets/marathon.png";
        $projet->save();

        $projet = Projet::where('nom', "Création d'un e-musée")->first();
        $projet->tags()->attach(1, ['projet_id' => $projet->id, 'tag_id' => 1]);
        $projet->tags()->attach(2, ['projet_id' => $projet->id, 'tag_id' => 2]);
    }
}
