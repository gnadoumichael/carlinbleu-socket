<?php

namespace App\Service;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;
use Symfony\Component\String\Slugger\SluggerInterface;


/**
 * Class FileUploader
 * @package App\Service
 */
class FileUploader
{
    private $targetDirectory;

    /**
     * FileUploader constructor.
     * @param $targetDirectory
     */
    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }

    public function upload(UploadedFile $file, string $name)
    {
        $fileName = $name.'.'.$file->guessExtension();
        $img = Image::make($file);
        $img->fit(450, 450);
        $img->save($this->targetDirectory . $fileName);
        return $fileName;
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }

}
