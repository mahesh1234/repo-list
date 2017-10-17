<?php

/*
* This file is part of RepoList package
* Created for developer test
*/

namespace RepoList;

/*
* This class will have methods to pull repositories info
*/

class SymfonyRepo
{
	
	/*
	* @return Array
	* @param string 	organization name
	*/
	
    public static function getList($orgName)
    {
		$client = new \Github\Client();
		$repositories = $client->api('organization')->repositories($orgName);
        return $repositories;
    }
}

