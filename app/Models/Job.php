<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'company' => 'Google',
                'location' => 'Mountain View, CA',
                'description' => 'Google is looking for a software engineer to join our team.',
                'compensation' => '$100,000 - $150,000'
            ],
            [
                'id' => 2,
                'title' => 'Software Engineer',
                'company' => 'Facebook',
                'location' => 'Menlo Park, CA',
                'description' => 'Facebook is looking for a software engineer to join our team.',
                'compensation' => '$100,000 - $150,000'
            ],
            [
                'id' => 3,
                'title' => 'Software Engineer',
                'company' => 'Amazon',
                'location' => 'Seattle, WA',
                'description' => 'Amazon is looking for a software engineer to join our team.',
                'compensation' => '$100,000 - $150,000'
            ]
        ];
    }

    public static function find($id): array
    {
        $job = Arr::first(self::all(), fn ($job) => $job['id'] === (int) $id);
        if (!$job) {
            abort(404);
        }
        return $job;
    }
}
