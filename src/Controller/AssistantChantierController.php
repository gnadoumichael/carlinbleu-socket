<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Doctrine\Persistence\ManagerRegistry;

class AssistantChantierController extends AbstractController
{
    private string $openAiKey;
    private ManagerRegistry $doctrine;

    public function __construct(ManagerRegistry $doctrine, string $openai_api_key)
    {
        $this->doctrine = $doctrine;
        $this->openAiKey = $openai_api_key;
    }

    #[Route('/api/assistant-chantier', name: 'assistant_chantier', methods: ['POST'])]
    public function analyse(Request $request, HttpClientInterface $client): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);

            $prompt = "Tu es un expert en gestion de chantiers en Côte d’Ivoire.
                            Analyse ce chantier et fais des recommandations claires.
                            
                            Chantier :
                            - Nom : {$data['nom']}
                            - Type : {$data['type']}
                            - Client : {$data['client']}
                            - Budget : {$data['budget']} FCFA
                            - Avancement : {$data['avancement']} %
                            - Dépenses : {$data['depenses']} FCFA
                            - Durée prévue : {$data['duree_prevue']} mois
                            ";

            $response = $client->request(
                'POST',
                'https://api.openai.com/v1/chat/completions',
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $this->openAiKey,
                        'Content-Type'  => 'application/json',
                    ],
                    'json' => [
                        'model' => 'gpt-4.1-mini',
                        'messages' => [['role' => 'user', 'content' => $prompt]],
                        'temperature' => 0.4,
                    ],
                ]
            );

            $result = $response->toArray();
            $text = $result['choices'][0]['message']['content'];

            return new JsonResponse(['result' => $text]);

        } catch (\Throwable $e) {
            return new JsonResponse(['error' => 'Erreur IA'], 500);
        }
    }
}
