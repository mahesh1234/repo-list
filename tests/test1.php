<?php
require_once 'vendor/autoload.php';
use RepoList\SymfonyRepo;

$repo =  SymfonyRepo::getList('symfony');

print_r($repo);
