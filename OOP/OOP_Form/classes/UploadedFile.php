<?php

declare(strict_types=1);

class UploadedFile
{
    private $name;

    private $tmpName;

    private $size;

    private $type;

    private $error;

    /**
     * UploadedFile constructor.
     * @param $name
     * @param $tmpName
     * @param $size
     * @param $type
     * @param $error
     */
    public function __construct($name, $tmpName, $size, $type, $error)
    {
        $this->name = $name;
        $this->tmpName = $tmpName;
        $this->size = $size;
        $this->type = $type;
        $this->error = $error;
    }

    public function isImage(): bool
    {

    }

    public function isSizeLessThan(int $size): bool
    {

    }
}