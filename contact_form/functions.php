<?php
declare(strict_types=1);

function setFlashMessage (string $message): void
{
    $_SESSION['flash_message'] = $message;
}

function getFlashMessage (): ?string
{
    if (!isset($_SESSION['flash_message'])){
        return null;
    }
    $flash = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);

    return $flash;
}

function requestGet(string $key, ?string $default = null): ?string
{
    return $_GET[$key] ?? $default;
}

function requestPost(string $key, ?string $default = null): ?string
{
    return $_POST[$key] ?? $default;
}

function redirect(string $url): void
{
    $url = sprintf('Location: %s', $url);
    header($url);
    die;
}

function isDataValid(array $data): bool
{
    return !empty(trim($data['email'])) && !empty(trim($data['message']));
}

function loadData(string $fileName): array
{
    if(!file_exists($fileName)){
        die('Erorr - File not found');
    }
    $contents = file_get_contents($fileName);
    $unserialized = @unserialize($contents);
    if (empty($unserialized)){
        return [];
    }
    return $unserialized;
}

function saveData(string $fileName, array $data)
{
    if(!file_exists($fileName)){
        die('Erorr - File not found');
    }
    $existingData = loadData($fileName);
    $existingData[] = $data;
    $serialized = serialize($existingData);
    file_put_contents($fileName, $serialized);
}
