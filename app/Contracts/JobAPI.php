<?php

namespace App\Contracts;

interface JobAPI {
    public function searchJobs($keyword);
    public function getJob($jobkey);
}