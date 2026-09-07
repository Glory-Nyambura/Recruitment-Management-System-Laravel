<?php

namespace App\Livewire;

use Livewire\Component;

class SearchFilters extends Component
{
    public $keyword = '';
    public $category = '';
    public $location = '';

    public function render()
    {
        $positions = $this->getPositions();
        $categories = $this->deriveCategories($positions);
        $jobTitles = array_values(array_unique(array_column($positions, 'title')));
        $counties = $this->getCounties();

        $filteredPositions = array_filter($positions, function ($position) {
            if ($this->keyword && stripos($position['title'], $this->keyword) === false) {
                return false;
            }
            if ($this->category && $position['category'] !== $this->category) {
                return false;
            }
            if ($this->location && stripos($position['location'], $this->location) === false) {
                return false;
            }
            return true;
        });

        return view('livewire.search-filters', [
            'filteredPositions' => $filteredPositions,
            'categories' => $categories,
            'jobTitles' => $jobTitles,
            'counties' => $counties,
        ]);
    }

    protected function getPositions()
    {
        return [
            [
                'title' => 'Data Analyst',
                'category' => 'Technology',
                'location' => 'Nairobi, Kenya',
                'type' => 'Full-time',
                'description' => 'Analyze data trends, build reports, and provide actionable insights to support strategic business decisions.',
            ],
            [
                'title' => 'Laravel Developer',
                'category' => 'Technology',
                'location' => 'Remote / Nairobi',
                'type' => 'Full-time',
                'description' => 'Develop and maintain robust web applications using Laravel, modern PHP, and clean architecture principles.',
            ],
            [
                'title' => 'Office Administrator',
                'category' => 'Administration',
                'location' => 'Nairobi, Kenya',
                'type' => 'Full-time',
                'description' => 'Manage daily office operations, coordinate administrative tasks, and support teams across departments.',
            ],
            [
                'title' => 'Customer Support Officer',
                'category' => 'Customer Service',
                'location' => 'Nairobi / Mombasa',
                'type' => 'Full-time',
                'description' => 'Deliver outstanding customer experiences by resolving inquiries, troubleshooting issues, and maintaining client relationships.',
            ],
        ];
    }

    protected function deriveCategories($positions)
    {
        $categories = [];
        foreach ($positions as $position) {
            $categories[$position['category']] = ($categories[$position['category']] ?? 0) + 1;
        }
        return $categories;
    }

    protected function getCounties()
    {
        return [
            'Baringo', 'Bomet', 'Bungoma', 'Busia', 'Elgeyo-Marakwet',
            'Embu', 'Garissa', 'Homa Bay', 'Isiolo', 'Kakamega', 'Kericho',
            'Kiambu', 'Kilifi', 'Kisii', 'Kisumu', 'Kitui', 'Kwale',
            'Laikipia', 'Lamu', 'Machakos', 'Malindi', 'Mandera', 'Marsabit',
            'Meru', 'Migori', 'Mombasa', 'Murangah', 'Nairobi', 'Nakuru',
            'Nandi', 'Narok', 'Nyamira', 'Nyandarua', 'Nyeri', 'Samburu',
            'Siaya', 'Tana River', 'Taita-Taveta', 'Tharaka-Nithi', 'Turkana',
            'Uasin Gishu', 'Vihiga', 'Wajir', 'Trans Nzoia', 'West Pokot',
        ];
    }
}
