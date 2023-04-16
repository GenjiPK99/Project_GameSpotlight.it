<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DetailsController;

class DetailsController extends Controller
{
    public function Page_Dettaglio($id){
        $games=[
            "id" => 1, "Name" => "Zelda Tears of the Kingdom" , "Description" => "The Legend of Zelda: Tears of the Kingdom arriverà su Nintendo Switch il 12 maggio 2023. In questo seguito di The Legend of Zelda: Breath of the Wild, l'avventura di Link si svolgerà anche nei cieli al di sopra delle vaste terre di Hyrule.",
             "price" => '$70.98' , "img" => "Img\Zelda.jpg"
        ];
        
        // [
        //     "id" => 2, "Name" => " Fantasy XVI" , "Description" => "Un epico e oscuro mondo fantastico, in cui il fato delle terre è deciso dai potenti Eikon e dai loro Dominanti.
        //     Questa è la storia di Clive Rosfield, un guerriero a cui è stato conferito il titolo di “Primo Scudo di Rosaria”, e che ha giurato di proteggere il suo fratellino Joshua, il dominante di Fenice.
        //     ", "price" => '80.98€' , "img" => "https://images.everyeye.it/img-screenshot/final-fantasy-16-v1-780693.webp", 
        // ];

        // [
        //     "id" => 3, "Name" => "Assassin's Creed: Mirage" , "Description" => "Indossa i panni di Basim, un astuto ladruncolo da strada colpito da visioni spaventose che ora cerca risposte e giustizia nelle affollate vie della Bagdad del IX secolo. Grazie a un'antica e misteriosa organizzazione nota come gli Occulti, diventerà un Maestro Assassino e cambierà il suo destino come mai avrebbe immaginato.
        //     ", "price" => '$60.98' , "img" => "https://static-it.gamestop.it/images/products/310750/3max.jpg", 
        // ];

        // [
        //     "id" => 4, "Name" => "DIABLO® IV" , "Description" => "DIABLO® IV è la più recente incarnazione nella serie dell'iconico gioco di ruolo d'azione di Blizzard Entertainment. I giocatori esploreranno una nuova lugubre storia e saranno liberi di trovare la propria strada nella versione più estesa di Sanctuarium mai creata, un panorama spoglio e in rovine, privo di speranza e infestato dai demoni.",
        //     "price" => '$55.98' , "img" => "https://static-it.gamestop.it/images/products/312131/3max.jpg", 
        // ];

        foreach ($games as $game){
            if($game["id"] == $id) 
            return view('Page_Dettaglio' , ['game' => $game]);
        }
    }
}


