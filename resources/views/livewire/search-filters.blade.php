<div>
    <form class="hero-search" wire:submit.prevent="applyFilters">
        <div class="search-group">
            <select name="keyword" wire:model.live="keyword" aria-label="Job title">
                <option value="">All Job Titles</option>
                @foreach($jobTitles as $title)
                    <option value="{{ $title }}">{{ $title }}</option>
                @endforeach
            </select>

            <select name="category" wire:model.live="category" aria-label="Category">
                <option value="">All Categories</option>
                @foreach($categories as $categoryName => $count)
                    <option value="{{ $categoryName }}">{{ $categoryName }}</option>
                @endforeach
            </select>

            <select name="location" wire:model.live="location" aria-label="Region">
                <option value="">All Counties</option>
                @foreach($counties as $county)
                    <option value="{{ $county }}">{{ $county }}</option>
                @endforeach
            </select>

            <button type="submit">Search Jobs</button>
        </div>
    </form>

    <div class="positions-grid" style="margin-top: 24px;">
        @forelse($filteredPositions as $position)
        <a href="{{ route('job.details', ['position' => $position['title']]) }}" class="position-card">
            <div class="position-header">
                <h3>{{ $position['title'] }}</h3>
                <span class="badge">{{ $position['category'] }}</span>
            </div>
            <div class="position-meta">
                <span>&#x1F4CD; {{ $position['location'] }}</span>
                <span>&#x1F4C4; {{ $position['type'] }}</span>
            </div>
            <p class="position-description">{{ $position['description'] }}</p>
            <span class="btn-primary">Learn More & Apply</span>
        </a>
        @empty
        <p class="no-results">No positions match your search criteria. Try adjusting your filters.</p>
        @endforelse
    </div>
</div>
