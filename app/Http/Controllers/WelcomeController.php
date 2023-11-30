<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\RequestException;

class WelcomeController extends Controller
{


    public function paginaweb()
    {
        try {
            // Crea una instancia del cliente Guzzle
            $client = new Client([
                'verify' => false, // Desactiva la verificación del certificado (¡ten precaución al hacer esto!)
            ]);

            // URL de la API en C#
            $apiUrl = 'https://99c1-2806-10be-9-32a8-e1d3-b171-717b-2253.ngrok-free.app/api/categorias';
            $apiUrl2 = 'https://99c1-2806-10be-9-32a8-e1d3-b171-717b-2253.ngrok-free.app/api/User/LsitadoUsers';

            // Realiza la solicitud a la primera API usando Guzzle
            $response1 = $client->get($apiUrl);

            // Realiza la solicitud a la segunda API usando Guzzle
            $response2 = $client->get($apiUrl2);

            // Decodifica la respuesta JSON de la primera API
            $apiData1 = json_decode($response1->getBody(), true);

            // Decodifica la respuesta JSON de la segunda API
            $apiData2 = json_decode($response2->getBody(), true);

            // Verifica si la decodificación fue exitosa para ambas APIs
            if ($apiData1 && $apiData2) {
                // Cuenta todas las categorías de la primera API
                $cantidadCategorias = count($apiData1);

                // Cuenta todos los usuarios de la segunda API
                $cantidadUsuarios = count($apiData2);

                // Ahora, $cantidadCategorias1 y $cantidadUsuarios contienen los números totales
                // Puedes usar estas variables según tus necesidades
                // Devuelve la vista con los datos de ambas APIs
                return view('welcome', compact('apiData1', 'cantidadCategorias', 'apiData2', 'cantidadUsuarios'));

            } else {
                // Manejar el caso en que la decodificación JSON falla para alguna de las APIs
                echo "Error al decodificar la respuesta JSON de alguna de las APIs";
            }
        } catch (RequestException $e) {
            // Manejar errores de solicitud, como cURL 60
            echo "Error en la solicitud: " . $e->getMessage();
        }

        // Devuelve la vista con los datos de ambas APIs
        return view('welcome');

    }

}
