<?php  namespace Starter\InterRepos\Interfaces;

interface ActionInterface {
    public function apiQuery($job,$message);
    public function frontendQuery($job,$message);
}