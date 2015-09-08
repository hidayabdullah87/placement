<?php

namespace App\Services;

use App\Contracts\JobAPI;
use Unirest\Request;

class IndeedJob implements JobAPI
{

    private $mashape_key = 'MajJaJTdsNmshSkUF49wB8dY8tDEp1g8dDijsn6wWwRJHHMsIB';

    private $options;

    private $client;

    public function __construct(Request $client)
    {
        $this->client = $client;

        $this->options = [
            'publisher' => 6543955924470397,
            'format' => 'json',
            'v' => 2
        ];
    }

    // do a job search
    public function searchJobs($keyword = 'placement')
    {
        $url = 'https://indeed-indeed.p.mashape.com/apisearch';

        $headers = [
            'Accept'     => 'application/json',
            'X-Mashape-Key' => $this->mashape_key
        ];

        $body = array_merge($this->options, [
            'q' => $keyword,
            'jt' => 'internship',
            'co' => 'gb',
            'l' => 'United Kingdom',
            'limit' => '100',
            'sort' => 'date',
            'fromage' => '360',
        ]);


        $response = $this->client->get($url, $headers, $body);

//        dd($response->body->results);

        return $response->body->results;
    }


    // Retrieve specific job based on their job keys
    public function getJob($jobkey)
    {

        $url = 'https://indeed-indeed.p.mashape.com/apigetjobs';

        $headers = [
            'Accept'     => 'application/json',
            'X-Mashape-Key' => $this->mashape_key
        ];

        $body = array_merge($this->options, [
            'jobkeys' => $jobkey
        ]);

        $response = $this->client->get($url, $headers, $body);

        return (sizeof($response->body->results) > 0) ? $response->body->results[0] : [];
    }
}