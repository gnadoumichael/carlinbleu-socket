<?php


namespace App\Service;


use Intervention\Image\ImageManagerStatic as Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class EnteteUploader
{
    private $targetDirectory;


    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }
    public function upload(UploadedFile $file, string $name)
    {
        $fileName = $name.'.'.$file->guessExtension();
        $img = Image::make($file);
        $img->save($this->targetDirectory . $fileName);
        return $fileName;
    }
    public function uploado(UploadedFile $file, string $name)
    {
        $fileName = $name.'.'.$file->guessExtension();
        $img = Image::make($file);
        $img->save($this->targetDirectory . $fileName);
        return $file->guessExtension();
    }
    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}