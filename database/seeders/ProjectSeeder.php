<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Progetto 1',
                'description' => 'Una breve descrizione del progetto 1',
                'length' => 30,
                'duration' => '3 mesi',
                'image' => 'https://images5.fanpop.com/image/photos/28000000/randomised-random-28065165-1024-819.jpg',
                'color' => 'blue',
            ],
            [
                'title' => 'Progetto 2',
                'description' => 'Una breve descrizione del progetto 2',
                'length' => 45,
                'duration' => '2 mesi',
                'image' => 'https://i.redd.it/nj357qlx86361.jpg',
                'color' => 'green',
            ],
            [
                'title' => 'Progetto 3',
                'description' => 'Una breve descrizione del progetto 3',
                'length' => 60,
                'duration' => '5 mesi',
                'image' => 'https://pise.ca/wp-content/uploads/2017/04/img-random-4.jpg',
                'color' => 'red',
            ],
            [
                'title' => 'Progetto 4',
                'description' => 'Una breve descrizione del progetto 4',
                'length' => 90,
                'duration' => '8 mesi',
                'image' => 'https://i0.wp.com/hyperallergic-newspack.s3.amazonaws.com/uploads/2021/12/11_29_21-Fire-and-Fusion-for-print-1-3-1200x1200.jpg?resize=780%2C780&quality=100&ssl=1',
                'color' => 'yellow',
            ],
            [
                'title' => 'Progetto 5',
                'description' => 'Una breve descrizione del progetto 5',
                'length' => 75,
                'duration' => '6 mesi',
                'image' => 'https://magictoolbox.sirv.com/images/magicslideshow/03/image-slideshow-04.jpg?scale.width=1000',
                'color' => 'purple',
            ],
            [
                'title' => 'Progetto 6',
                'description' => 'Una breve descrizione del progetto 6',
                'length' => 120,
                'duration' => '10 mesi',
                'image' => 'https://sensilab.monash.edu/new-sensilab/wp-content/uploads/2017/08/4949794-random-image.jpg',
                'color' => 'orange',
            ],
            [
                'title' => 'Progetto 7',
                'description' => 'Una breve descrizione del progetto 7',
                'length' => 45,
                'duration' => '4 mesi',
                'image' => 'https://i.redd.it/j2ex7z8tyqf21.jpg',
                'color' => 'green',
            ],
            [
                'title' => 'Progetto 8',
                'description' => 'Una breve descrizione del progetto 8',
                'length' => 80,
                'duration' => '7 mesi',
                'image' => 'https://images.pexels.com/photos/3844788/pexels-photo-3844788.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                'color' => 'blue',
            ],
            [
                'title' => 'Progetto 9',
                'description' => 'Una breve descrizione del progetto 9',
                'length' => 55,
                'duration' => '6 mesi',
                'image' => 'https://images.unsplash.com/photo-1508138221679-760a23a2285b?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8cmFuZG9tfGVufDB8fDB8fHww',
                'color' => 'pink',
            ],
            [
                'title' => 'Progetto 10',
                'description' => 'Progetto Batman insegnante, da rivalutare assolutamente i suoi metodi d\'insegnamento!',
                'length' => 100,
                'duration' => '9 mesi',
                'image' => 'https://imgflip.com/s/meme/Batman-Slapping-Robin.jpg',
                'color' => 'brown',
            ],
            [
                'title' => 'Progetto 11',
                'description' => 'Progetto batman',
                'length' => 120,
                'duration' => '19 mesi',
                'image' => 'https://i.kym-cdn.com/entries/icons/facebook/000/045/373/cover9.jpg',
                'color' => 'yellow',
            ],
            [
                'title' => 'Progetto 12',
                'description' => 'Cat upset',
                'length' => 100,
                'duration' => '7 mesi',
                'image' => 'https://www.cnet.com/a/img/resize/b91f76de73cb2fc61e3dd7112e4a3e768cac4fbd/hub/2012/12/17/b8f59d5e-fdb4-11e2-8c7c-d4ae52e62bcc/3s8ipj.jpg?auto=webp&fit=crop&height=675&width=1200',
                'color' => 'green',
            ],
            [
                'title' => 'Progetto 13',
                'description' => 'Gatto minuscolo in piedi che aspetta una risposta dopo che ti ha chiesto quale pizza preferisci',
                'length' => 10,
                'duration' => '1 mesi',
                'image' => 'https://imgflip.com/s/meme/Cute-Cat.jpg',
                'color' => 'brown',
            ],
            [
                'title' => 'Progetto 14',
                'description' => 'Progetto super doggo',
                'length' => 285,
                'duration' => '6 mesi',
                'image' => 'https://repository-images.githubusercontent.com/260096455/47f1b200-8b2e-11ea-8fa1-ab106189aeb0',
                'color' => 'black',
            ],
            [
                'title' => 'Progetto 15',
                'description' => 'Progetto sui gatti con gli occhi blu',
                'length' => 180,
                'duration' => '11 mesi',
                'image' => 'https://1.bp.blogspot.com/-iCnFX7eWVjs/XR9NQutHXcI/AAAAAAAAJ9k/ISWH3UXgJF8QJdsV6P9wh3agzOwOF_aYgCLcBGAs/s1600/cat-1285634_1920.png',
                'color' => 'blue',
            ],
            [
                'title' => 'Progetto 16',
                'description' => 'Il famosissimo progetto cubo',
                'length' => 135,
                'duration' => '6 mesi',
                'image' => 'https://miro.medium.com/v2/resize:fit:1400/1*FI77MEPGWhj8Vfkb7OqfpQ.jpeg',
                'color' => 'lime green',
            ],
            [
                'title' => 'Progetto 17',
                'description' => 'Progetto Matrix',
                'length' => 60,
                'duration' => '13 mesi',
                'image' => 'https://as1.ftcdn.net/v2/jpg/02/90/23/74/1000_F_290237490_TSOa1KZr44QoBa6U667Mehnehc4RmOA6.jpg',
                'color' => 'red',
            ],
            [
                'title' => 'Progetto 18',
                'description' => 'Una breve descrizione del progetto 18',
                'length' => 35,
                'duration' => '9 mesi',
                'image' => 'https://f4.bcbits.com/img/a2088167244_65',
                'color' => 'purple',
            ],
            [
                'title' => 'Progetto 19',
                'description' => 'Una breve descrizione del progetto 19',
                'length' => 45,
                'duration' => '9 mesi',
                'image' => 'https://f4.bcbits.com/img/a3783170020_5.jpg',
                'color' => 'white',
            ],
            [
                'title' => 'Progetto 52',
                'description' => 'Una breve descrizione del progetto 52, ho trovato quest\'immagine con 52 stampato sopra ed ho inserito quindi il progetto 52',
                'length' => 980,
                'duration' => '80 mesi',
                'image' => 'https://52projectsproject.files.wordpress.com/2020/10/52projects_book_cover_web.jpg',
                'color' => 'green',
            ],
        ];

        Project::insert($projects);
    }
}
