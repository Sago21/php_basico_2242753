<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //

    public function mostrar_formulario(){
 //mostrar la vista del controlador
        return view('metabuscador');
    }
    public function buscar_termino(){
        //realizar busquedad
      $termino =$_POST["buscar_termino"];
      $motor =$_POST["motores"];
        //labusquedad se acorde al motor de busquedad elegido
        switch($motor){
            case 1: return redirect()->to ("https://www.google.com/search?q=$termino");
                break;
            case 2: return redirect()->to ("https://www.bing.com/search?q=$termino");
                break;
            case 3: return redirect()->to ("https://espanol.search.yahoo.com/search?p=$termino");
                    break;
            case 4: return redirect()->to ("https://yandex.com/search/?text=$termino");
                        break;
            case 5: return redirect()->to ("https://duckduckgo.com/?q=$termino");
                            break;
            case 6: return redirect()->to ("https://search.aol.com/aol/search?q=$termino");
                                break;
            case 7: return redirect()->to ("https://search.seznam.cz/?q=$termino");
                                    break;
            case 8: return redirect()->to ("https://www.youtube.com/results?search_query=$termino");
                                        break;
        }

    }


}
