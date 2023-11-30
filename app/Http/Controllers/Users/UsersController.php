<?php

namespace App\Http\Controllers\Users; // Namespace should match the folder structure

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class UsersController extends Controller
{
    public function index()
    {
        try {
            // Crea una instancia del cliente Guzzle
            $client = new Client([
                'verify' => false, // Desactiva la verificación del certificado (¡ten precaución al hacer esto!)
            ]);

            // URL de la API en C#
            $apiUrl = 'https://99c1-2806-10be-9-32a8-e1d3-b171-717b-2253.ngrok-free.app/api/User/LsitadoUsers';

            // Realiza la solicitud a la API usando Guzzle
            $response = $client->get($apiUrl);

            // Decodifica la respuesta JSON de la API
            $apiData = json_decode($response->getBody(), true);


        } catch (RequestException $e) {
            // Manejar errores de solicitud, como cURL 60
            echo "Error en la solicitud: " . $e->getMessage();
        }
        // Devuelve la vista con los datos de la API
        return view('admin.users.index', compact('apiData'));
    }

    public function category_store(Request $request)
    {
        // Validar el campo 'Category' antes de enviarlo a la API
        $validator = Validator::make($request->all(), [
            'Category' => 'required|string|max:50', // Puedes personalizar las reglas de validación aquí
            'CategoryActive' => 'required'
        ]);

        // Comprobar si la validación ha fallado
        if ($validator->fails()) {
            return redirect()->route('categories_index')
                ->withErrors($validator)
                ->withInput();
        }

        // Crea una instancia del cliente Guzzle
        $client = new Client([
            'verify' => false, // Desactiva la verificación del certificado (¡ten precaución al hacer esto!)
        ]);

        // URL de la API en C# para crear una categoría
        $apiUrl = 'https://4e14-2806-10be-9-32a8-d088-7513-d5ee-a114.ngrok-free.app/api/categorias';

        try {
            // Realiza la solicitud POST a la API usando Guzzle
            $response = $client->post($apiUrl, [
                'json' => ['titulo' => $request->input('Category'), 'isActive' => 1],
            ]);

            // Verifica el código de estado de la respuesta
            $statusCode = $response->getStatusCode();

            if ($statusCode === 200) {
                // Decodifica la respuesta JSON de la API
                $apiData = json_decode($response->getBody(), true);

                    session()->flash('success', 'Categoría creada satisfactoriamente en la API.');
            } else {
                session()->flash('error', 'Error en la API: Código de estado ' . $statusCode);
            }
        } catch (RequestException $e) {
            // Manejar errores específicos de Guzzle
            session()->flash('error', 'Error al conectar con la API: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Captura otras excepciones
            session()->flash('error', 'Error inesperado: ' . $e->getMessage());
        }


        // Redirigir de nuevo a la vista
        return redirect()->route('categories_index');
    }


}
