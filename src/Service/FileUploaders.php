<?php

namespace App\Service;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;
use Symfony\Component\String\Slugger\SluggerInterface;


class FileUploaders
{

    private $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    public function uploade(UploadedFile $file, int $idchantier): ?string
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename.'.'.$file->guessExtension();
        try {
            $file->move('upload/'.$idchantier, $fileName);
        } catch (FileException $e) {
            return null; // for example
        }
        return $fileName;
    }

    public function uploa(UploadedFile $file)
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $taille = pathinfo($file->getSize(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename.'.'.$file->guessExtension();
        try {
            $file->move('upload/', $fileName);
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
            return null; // for example
        }
        return $fileName;
    }

    public function uplooo(UploadedFile $file, string $dest)
    {
        $dire = $dest;
        if (!file_exists($dire) && !is_dir($dire)){
            mkdir($dire, 0777, true);
        }


        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename.'.'.$file->guessExtension();
        try {
            $file->move('upload/'.$dire.'/', $fileName);
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
            return null; // for example
        }
        return $fileName;
    }

    public function checkFileExist(UploadedFile $file, string $idchantier)
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename.'.'.$file->guessExtension();
        if (file_exists('upload/'.$idchantier.'/'.$fileName)) {
            return 'oui';
        }
        return 'non';

    }

    public function getTaille(UploadedFile $file)
    {
        $taille = pathinfo($file->getSize(), PATHINFO_FILENAME);
        return $taille;
    }

    public function uploave(UploadedFile $file, String $current)
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $taille = pathinfo($file->getSize(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename.'.'.$file->guessExtension();
        try {
            $file->move($current, $fileName);
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
            return null; // for example
        }
        return $fileName;
    }


}
