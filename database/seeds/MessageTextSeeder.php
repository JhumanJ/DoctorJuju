<?php

use Illuminate\Database\Seeder;

class MessageTextSeeder extends Seeder
{

    private $facts = [
        "IN 1889, THE QUEEN OF ITALY, MARGHERITA SAVOY, ORDERED THE FIRST PIZZA DELIVERY.",
        "YOU CAN BUY EEL FLAVORED ICE CREAM IN JAPAN.",
        "IT'S CONSIDERED RUDE TO WRITE IN RED INK IN PORTUGAL.",
        "ALTHOUGH THE BOBCAT IS RARELY SEEN, IT IS THE MOST COMMON WILDCAT IN NORTH AMERICA.",
        "A CAT'S TAIL CONTAINS NEARLY 10 PERCENT OF ALL THE BONES IN ITS BODY.",
        "GECKO FEET HAVE MILLIONS OF TINY HAIRS THAT STICK TO SURFACES WITH A SPECIAL CHEMICAL BOND AND LET THEM CLIMB WALLS AND HANG ON BY JUST ONE TOE.",
        "THE TERM \"ASTRONAUT\" COMES FROM GREEK WORDS THAT MEAN \"STAR\" AND \"SAILOR.\"",
        "THE CALCIUM IN OUR BONES AND THE IRON IN OUR BLOOD COME FROM ANCIENT EXPLOSIONS OF GIANT STARS.",
        "THE NILE CROCODILE CAN HOLD ITS BREATH UNDERWATER FOR UP TO TWO HOURS WHILE WAITING FOR PREY.",
        "JELLYFISH, OR JELLIES AS SCIENTISTS CALL THEM, ARE NOT FISH. THEY HAVE NO BRAIN, NO HEART, AND NO BONES.",
        "THE CHINESE GIANT SALAMANDER CAN GROW TO BE 6 FEET (1.8 M) LONG, MAKING IT THE LARGEST SALAMANDER IN THE WORLD.",
        "OME PEOPLE USED TO BELIEVE THAT KISSING A DONKEY COULD RELIEVE A TOOTHACHE.",
        "BECAUSE THE SPEED OF EARTH'S ROTATION CHANGES OVER TIME, A DAY IN THE AGE OF DINOSAURS WAS JUST 23 HOURS LONG.",
        "HUMMINGBIRDS' WINGS CAN BEAT UP TO 200 TIMES A SECOND.",
        "THERE ARE MORE THAN 1200 WATER PARKS IN NORTH AMERICA.",
        "A SEAHORSE CAN MOVE ITS EYES IN OPPOSITE DIRECTIONS—ALL THE BETTER TO SCAN THE WATER FOR FOOD AND PREDATORS.",
        "THE HIGHEST WAVE EVER SURFED WAS AS TALL AS A 10-STORY BUILDING.",
        "CORN IS GROWN ON EVERY CONTINENT EXCEPT ANTARCTICA.",
        "YOU LOSE ABOUT 50 TO 100 HAIRS A DAY",
        "NEW JERSEY HAS THE HIGHEST CONCENTRATION OF SHOPPING MALLS.",
        "KOMODO DRAGONS CAN DEVOUR 5 POUNDS OF MEAT IN LESS THAN A MINUTE. ANY EXTRA FAT THEY EAT IS STORED IN THEIR TAILS.",
        "AT ANY MOMENT, CLOUDS COVER ABOUT 60 PERCENT OF EARTH.",
        "ALL APES LAUGH WHEN THEY ARE TICKLED.",
        "YOUR HAIR CONTAINS TRACES OF GOLD.",
        "Le Mont Everest grandit d'environ 4 millimètres chaque année",
        "Le Canada possède plus de lacs que le reste du monde réuni",
        "Même si elle s'étend sur 5 fuseaux horaires, toute la Chine se base sur l'heure de Pékin",
        "Il y a une ville au Texas baptisée \"Ding Dong\"",
        "99% de toute la Libye est recouverte par le désert",
        "New-York est située plus sud que Rome, en Italie",
        "Balance Homme/Femme en Russie : + 9 millions de femmes",
        "L'animal officiel de l'Écosse est la Licorne",
    ];

    private $riddles = [
        "Avant-hier, Catherine avait 17 ans ; l'année prochaine, elle aura 20 ans. Comment est-ce possible ?",
        "j'ai 2 pieds, 6 jambes, 8 bras, 2 têtes et un oeil, qui suis-je ?",
        "Je ne respire jamais mais j'ai beaucoup de souffle. \n\nQui suis-je ?",
        "Un père et un fils ont à eux deux 36 ans. \n\nSachant que le père a 30 ans de plus que le fils, quel âge a le fils ?",
        "Qu'est-ce qui sert à s'asseoir, dormir et se brosser les dents?",
        "Qu'est ce qui est plus grand que la Tour Eiffel, mais infiniment moins lourd?",
        "Annie a deux enfants, dont l'un est une fille. Combien y a-t-il de chances que l'autre enfant soit un garçon ?",
        "Je suis blanc quand tu m'utilise et je disparais quand tu m'oublies. Qui suis-je?",
        "Je suis un homme, je suis une femme. Je ne suis ni un homme ni une femme. Qui-suis-je ?",
        "Je suis d'eau, je suis d'air, et je suis d'électricité. Qui suis-je ?",
        "Le fils de cet homme est le père de mon fils. Sachant que je ne suis pas une femme, quel est le lien de parenté entre cet homme et moi ?",
        "Quel nombre divisé par lui-même donne son double ?",
        "je peux tourner sans bouger. Qui suis je ?",
        "Touche touche pas, touche pas touche. Qu'est ce qui touche et pourquoi ?",
        "Quand je suis blanc, je suis sale et quand je suis noir, je suis propre. Qui suis-je ?",
        "Si je suis muet, aveugle et sourd, combien de sens me reste-t-il ?",
        "qu'est-ce qui fait le tour du bois sans jamais y pénétrer ?",
        "Plus j'ai de gardiens moins je suis gardé. Moins j'ai de gardiens plus je suis gardé. Qui suis-je ?",
        "Je me vide en me remplissant. Qui suis-je?",
        "Qu'est-ce qui vous appartient mais que les autres utilisent plus que vous ?",
        "David a 10 ans, son petit frère Franck a la moitié de son âge. Quand David sera 10 fois plus âgé, quel âge aura Franck ?",
        "Quand je suis frais je suis chaud. Qui suis-je ?"
    ];

    private $movies = [
        "🎬🚘🚗🚐🏁",
        "🏰👭🌀☃️🧣",
        "🐶🍝🐶💏",
        "👨🏻👨🏾⚫👽🛸",
        "🌊1⃣️1⃣️",
        "🏄🤙💛💛💛😂",
        "👸💤💤💤💤💤",
        "🕸️🧙⚡💫🏰",
        "🐢🐀👊🍕",
        "👱😡💪💚",
        "🚢🌊💥💀"
    ];

    private $gifs = [
        "http://gph.is/Vx9b9M",
        "http://gph.is/1sCqwCb",
        "https://gph.is/2CyJ0gO",
        "http://gph.is/2oIOzzb",
        "http://gph.is/1DPNcfT",
        "http://gph.is/2EtiJ4k",
        "http://gph.is/1CfH14M",
        "http://gph.is/2EpwD7j",
        "http://gph.is/2Ebe3f1",
        "http://gph.is/1sDylaX",
        "http://gph.is/12ho8BE",
        "https://gph.is/2IAtCTY",
        "http://gph.is/2lURG4Y",
    ];

    private $signature = "Mille Bisous,\n\n Doc \n❤️💊❤️";

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Shuffle arrays
        $this->init();

        $messages = [];

        while ( count($this->facts) > 0 || count($this->riddles) > 0 ||  count($this->movies) > 0 ||  count($this->gifs) > 0 ) {
            // Add one fact
            if (($message = $this->getFact()) != null){
                $messages[] = $message;
            }
            // Add one riddle
            if (($message = $this->getRiddle()) != null){
                $messages[] = $message;
            }
            // Add one movie
            if (($message = $this->getMovie()) != null){
                $messages[] = $message;
            }
            // Add one gif
            if (($message = $this->getGif()) != null){
                $messages[] = $message;
            }
        }

        // Now save every message
        foreach ($messages as $message) {
            \App\Models\MessageText::create([
               'text' => $message
            ]);
        }
    }

    /**
     * Init seeder by randomizing arrays
     */
    private function init()
    {
        shuffle($this->facts);
        shuffle($this->movies);
        shuffle($this->riddles);
        shuffle($this->gifs);
    }


    /**
     * returns a fact
     */
    private function getFact()
    {
        if (count($this->facts)==0) return null;

        $fact = array_pop($this->facts);

        $intros = ["Info du jour: ","Fact du jour: ","Daily Fact 🎓: ","Le savais-tu 🤓?"];
        $intro = $intros[array_rand($intros)];

        return "${intro} \n${fact}\n\n " . $this->signature;
    }

    /**
     * returns a movie guess
     */
    private function getMovie()
    {
        if (count($this->movies)==0) return null;

        $movie = array_pop($this->movies);

        $intros = ["Guess the movie 🔍🎥: ","🍿🎬🤔 ","Film du jour : "];
        $intro = $intros[array_rand($intros)];

        return "${intro} \n${movie}\n\n " . $this->signature;

    }

    /**
     * returns a riddle
     */
    private function getRiddle()
    {
        if (count($this->riddles)==0) return null;

        $riddle = array_pop($this->riddles);

        $intros = ["Daily Riddle : ","Énigme du jour: ","🤔 Énigme : "];
        $intro = $intros[array_rand($intros)];

        return "${intro} \n${riddle}\n\n " . $this->signature;

    }

    /**
     * returns a riddle
     */
    private function getGif()
    {
        if (count($this->gifs)==0) return null;

        $gif = array_pop($this->gifs);

        $intros = ["Hello ma Princesse ","Hello bibi Chérie ","Ma demoiselle" ,"Ma chérie ","Mon bibi "];
        $intro = $intros[array_rand($intros)];

        return "${intro} \n${gif}\n\n " . $this->signature;

    }

}
