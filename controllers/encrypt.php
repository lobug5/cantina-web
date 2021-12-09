<?php

function safeEncrypt(string $message): string
{
    $key = $_ENV['HASH'];
    return openssl_encrypt($message, "AES-128-ECB", $key);
}

function safeDecrypt(string $encrypted): string
{
    $key = $_ENV['HASH'];
    return openssl_decrypt($encrypted, "AES-128-ECB", $key);
}
