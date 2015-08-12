<?php

namespace App\Contracts;

interface JobAPI {
    public function getJobs($keyword);
    public function getJob($jobkey);
}