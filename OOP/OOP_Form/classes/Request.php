<?php

declare(strict_types=1);

class Request
{
    /**
     * @var array
     */
    private $get;

    /**
     * @var array
     */
    private $post;

    /**
     * @var array
     */
    private $files;

    /**
     * Request constructor.
     * @param array $get
     * @param array $post
     */
    public function __construct(array $get, array $post, array $files)
    {
        $this->get = $get;
        $this->post = $post;
        $this->files = $files;
    }

    /**
     * @param string $key
     * @param string|null $default
     * @return mixed|string|null
     */
    public function get(string $key, ?string $default = null)
    {
        return $this->get[$key] ?? $default;
    }

    /**
     * @param string $key
     * @param string|null $default
     * @return mixed|string|null]
     */
    public function post(string $key, ?string $default = null)
    {
        return $this->post[$key] ?? $default;
    }

    /**
     * @param string $key
     * @param string|null $default
     * @return mixed|string|null
     */
    public function file(string $key, ?string $default = null)
    {
        return $this->post[$key] ?? $default;
    }

    public function isPost(): bool
    {
        return(bool) $this->post;
    }
}
