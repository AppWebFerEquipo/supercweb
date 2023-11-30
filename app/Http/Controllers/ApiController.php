<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function consumeApi()
    {
        // Crea una instancia del cliente Guzzle
        $client = new Client();

        // URL de la API en C#
        $apiUrl = 'http://localhost:5270/categorías';

        // Realiza la solicitud a la API usando Guzzle
        $response = $client->get($apiUrl);

        // Decodifica la respuesta JSON
        $data = json_decode($response->getBody(), true);

        // Devuelve la vista o haz lo que necesites con los datos
        return view('nombre_vista', ['data' => $data]);
    }
}
