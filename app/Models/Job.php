<?php

namespace App\Models;
class Job
{
    public static function getAllJobs()
    {
        // Logic to retrieve all jobs
        return [
            ["title" => "Software Engineer", "salary" => "$200,000"],
            ["title" => "Data Scientist", "salary" => "$150,000"],
            ["title" => "Web Developer", "salary" => "$120,000"],
            ["title" => "DevOps Engineer", "salary" => "$130,000"],
            ["title" => "Product Manager", "salary" => "$180,000"],
        ];
    }
}
