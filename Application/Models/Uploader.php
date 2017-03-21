<?php
namespace Application\Models;
class Uploader
{
    public $errMessage;

    protected $userFile;
    protected $uploadsDir = __DIR__.'/../../uploads';
    protected $fileName;
    protected $allowedFileType = ['image/jpeg', 'image/png', 'image/gif'];

    public function __construct($userFile)
    {
        $this->userFile =  $userFile;
    }

    public function isUploader()
    {
        if (!empty($_FILES['user_file']) && $_FILES['user_file']['error'] == 0 && in_array($_FILES['user_file']['type'], $this->allowedFileType)) {
            return true;
        } else {
            $this->errMessage = 'Не выбран файл или произошла ошибка при загрузке файла!';
            return false;
        }
    }

    public function upload()
    {
        if ($this->isUploader()) {
            $this->fileName = $_FILES['user_file']['name'];
            move_uploaded_file($_FILES['user_file']['tmp_name'], $this->uploadsDir.'/'.$this->fileName);
        }
    }
}