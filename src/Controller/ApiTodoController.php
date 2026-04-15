<?php

namespace App\Controller;


use App\Entity\Todo;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


#[Route(path: '/api/todo')]
class ApiTodoController extends AbstractController
{
    #[Route(path: '/get', name: 'api_todo', methods: ['POST'])]
    public function loadTodo(ManagerRegistry $doctrine, SerializerInterface $serializer,
                             Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoTodo = $doctrine->getRepository(Todo::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $todos = $repoTodo->findBy(['owner' => $apuser], ['todo' => 'ASC']);
        return $this->json($todos, 200, ['Content-Type' => 'application/json'], ['groups' => 'todo']);
    }

    #[Route(path: '/add/{id}/{todor}', name: 'api_add_todo', methods: ['POST'])]
    public function addTodo(int $id, string $todor, ManagerRegistry $doctrine, SerializerInterface $serializer,
                             Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $todo = $serializer->deserialize($apjson, Todo::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $todo->setUser($master);

        if ($id !== 0) {
            $useer = $repoUser->findOneBy(['id' => $id]);
            $todo->setOwner($useer);
            $todo->setTodo($todor);
            $todo->setSender($apuser);
            $manager->persist($todo);
            $manager->flush();
        }else{
            $todo->setOwner($apuser);
            $todo->setTodo($todor);
            $manager->persist($todo);
            $manager->flush();
        }
        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/delete/{id}', name: 'api_del_todo', methods: ['POST'])]
    public function delTodo(int $id, ManagerRegistry $doctrine, SerializerInterface $serializer,
                            Request $request)
    {
        $repoTodo = $doctrine->getRepository(Todo::class);
        $repoUser = $doctrine->getRepository(User::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $todo = $repoTodo->findOneBy(['id' => $id, 'user' => $master]);
        $manager->remove($todo);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);
    }

}
