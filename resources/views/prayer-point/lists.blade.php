@extends('layout.app')

@section('page', 'Prayer Points')

@section('content')
    <div class="page-header">
        <h2>My Prayer Points</h2>
        <p>Track, organize, and manage your personal prayer requests</p>
    </div>

    <div class="prayer-stats">
        <div class="stat-card">
            <i class="bi bi-journal-text"></i>
            <div class="stat-info">
                <h3>Total Prayers</h3>
                <span class="stat-number">{{ $stats['total'] }}</span>
            </div>
        </div>
        <div class="stat-card">
            <i class="bi bi-check-circle"></i>
            <div class="stat-info">
                <h3>Completed</h3>
                <span class="stat-number">{{ $stats['completed'] }}</span>
            </div>
        </div>
        <div class="stat-card">
            <i class="bi bi-clock"></i>
            <div class="stat-info">
                <h3>Pending Schedule</h3>
                <span class="stat-number">{{ $stats['pending_instances'] ?? 0 }}</span>
            </div>
        </div>
        <div class="stat-card">
            <i class="bi bi-star-fill"></i>
            <div class="stat-info">
                <h3>Active Prayers</h3>
                <span class="stat-number">{{ $stats['pending'] }}</span>
            </div>
        </div>
    </div>

    <div class="prayer-filters">
        <div class="filter-tabs">
            <button class="filter-tab active" data-filter="all">All</button>
            <button class="filter-tab" data-filter="active">Active</button>
            <button class="filter-tab" data-filter="completed">Completed</button>
            <button class="filter-tab" data-filter="archived">Archived</button>
        </div>

        <div class="search-sort">
            <input type="text" class="form-control" placeholder="Search prayers..." id="prayerSearch">
            <select class="form-select" id="prayerSort">
                <option value="newest">Newest First</option>
                <option value="oldest">Oldest First</option>
                <option value="priority">Priority</option>
                <option value="alphabetical">Alphabetical</option>
            </select>
        </div>
    </div>

    <div class="prayer-list" id="prayerList">
        @if($prayerPoints->count() > 0)
            @foreach($prayerPoints as $prayer)
            <div class="prayer-card">
                <div class="prayer-header">
                    <a href="{{ route('prayer-point.show', $prayer) }}" class="prayer-title-link">
                        <h3 class="prayer-title">{{ $prayer->title }}</h3>
                    </a>
                    <div>
                        <span class="comment-count">
                            <i class="bi bi-chat"></i> {{ $prayer->comments->count() }}
                        </span>
                        <span class="prayer-status status-active">{{ $prayer->status }}</span>
                    </div>
                    
                </div>

                <p class="prayer-content">{{ $prayer->body }}</p>

                @php
                    $nextInstance = $prayer->scheduleInstances()
                        ->where('scheduled_at', '>=', now())
                        ->where('status', 'pending')
                        ->orderBy('scheduled_at')
                        ->first();
                @endphp

                @if($nextInstance)
                <div class="next-schedule">
                    <strong>Next Prayer:</strong> {{ $nextInstance->scheduled_at->format('M j, Y h:i A') }}
                </div>
                @endif
                <div class="prayer-meta">
                    <span>Created {{ $prayer->created_at->diffForHumans() }}</span>
                    <div class="meta-actions">
                        @if($prayer->file)
                        <button class="view-file-btn" onclick="viewFile('{{ $prayer->file }}', '{{ $prayer->title }}')" title="View attached file">
                            <i class="bi bi-file-earmark"></i> View File
                        </button>
                        @endif
                        <a class="view-schedule-btn" href="{{route('prayer-point.show',$prayer)}}">
                            View Schedule
                        </a>
                        
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Pagination -->
            <div class="pagination-container">
                @if($prayerPoints->hasPages())
                <div class="pagination-info">
                    Showing {{ $prayerPoints->firstItem() }} to {{ $prayerPoints->lastItem() }} of {{ $prayerPoints->total() }} results
                </div>
                <div class="pagination-links">
                    {{ $prayerPoints->appends(request()->query())->links() }}
                </div>
                @endif
            </div>
        @else
            <div class="empty-state">
                <i class="bi bi-journal-x"></i>
                <h3>No Prayer Points Found</h3>
                <p>Try adjusting your filters or search terms</p>
            </div>
        @endif
    </div>

    @include('prayer-point.file-modal')
@endsection

@push('styles')
<style>
    .page-header {
        margin-bottom: 30px;
        text-align: center;
    }

    .page-header h2 {
        color: #333;
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 8px;
    }

    .page-header p {
        color: #666;
        font-size: 16px;
    }

    .prayer-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .stat-card {
        background: white;
        border-radius: 12px;
        padding: 20px;
        display: flex;
        align-items: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s;
    }

    .stat-card:hover {
        transform: translateY(-3px);
    }

    .stat-card i {
        font-size: 32px;
        color: #667eea;
        margin-right: 15px;
    }

    .stat-info h3 {
        font-size: 14px;
        color: #666;
        margin-bottom: 4px;
        font-weight: 500;
    }

    .stat-number {
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }

    .prayer-filters {
        background: white;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }

    .filter-tabs {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .filter-tab {
        background: #f8f9fa;
        border: none;
        border-radius: 25px;
        padding: 8px 16px;
        font-size: 14px;
        font-weight: 500;
        color: #666;
        cursor: pointer;
        transition: all 0.3s;
    }

    .filter-tab:hover,
    .filter-tab.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .search-sort {
        display: flex;
        gap: 15px;
        align-items: center;
    }

    .search-sort .form-control,
    .search-sort .form-select {
        flex: 1;
        max-width: 200px;
    }

    .prayer-list {
        min-height: 300px;
    }

    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: #666;
    }

    .empty-state i {
        font-size: 48px;
        margin-bottom: 15px;
        opacity: 0.5;
    }

    .empty-state h3 {
        font-size: 20px;
        margin-bottom: 8px;
        color: #333;
    }

    .empty-state p {
        font-size: 16px;
    }

    @media (max-width: 768px) {
        .page-header h2 {
            font-size: 24px;
        }

        .prayer-stats {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .stat-card {
            padding: 15px;
        }

        .stat-card i {
            font-size: 28px;
            margin-right: 12px;
        }

        .stat-number {
            font-size: 20px;
        }

        .filter-tabs {
            justify-content: center;
        }

        .search-sort {
            flex-direction: column;
            align-items: stretch;
        }

        .search-sort .form-control,
        .search-sort .form-select {
            max-width: none;
        }
    }

    @media (max-width: 576px) {
        .prayer-stats {
            grid-template-columns: repeat(2, 1fr);
        }
        .filter-tab {
            padding: 6px 12px;
            font-size: 13px;
        }
    }

    /* Prayer Point Cards */
    .prayer-card {
        background: white;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 16px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .prayer-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
    }

    .prayer-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 12px;
    }

    .prayer-title {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin: 0;
        flex: 1;
        margin-right: 12px;
    }

    .prayer-title-link {
        text-decoration: none;
        color: inherit;
        transition: color 0.2s;
    }

    .prayer-title-link:hover {
        color: #667eea;
    }

    .prayer-status {
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .status-active {
        background: #e8f5e8;
        color: #27ae60;
    }

    .prayer-content {
        color: #666;
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 16px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .prayer-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 12px;
        color: #888;
        margin-top: 16px;
    }

    .meta-actions {
        display: flex;
        gap: 8px;
        align-items: center;
    }

    .view-file-btn {
        background: #28a745;
        color: white;
        border: none;
        border-radius: 6px;
        padding: 4px 8px;
        font-size: 12px;
        cursor: pointer;
        transition: background 0.2s;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .view-file-btn:hover {
        background: #218838;
    }

    .view-file-btn i {
        font-size: 14px;
    }

    

    .next-schedule {
        background: #f8f9fa;
        border-left: 3px solid #667eea;
        padding: 8px 12px;
        margin-top: 12px;
        border-radius: 6px;
    }

    .next-schedule strong {
        color: #667eea;
    }

    .view-schedule-btn {
        background: #667eea;
        color: white;
        text-decoration: none;
        border: none;
        border-radius: 6px; 
        padding: 4px 8px;
        font-size: 12px;
        cursor: pointer;
        transition: background 0.2s;
    }

    .view-schedule-btn:hover {
        background: #5a67d8;
    }

    /* Pagination */
    .pagination-container {
        margin-top: 30px;
        text-align: center;
    }

    .pagination-links {
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .pagination-links a,
    .pagination-links span {
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        text-decoration: none;
        color: #666;
        transition: all 0.2s;
    }

    .pagination-links .page-link:hover,
    .pagination-links .page-link.active {
        background: #667eea;
        color: white;
        border-color: #667eea;
    }
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // Filter tabs functionality
    $('.filter-tab').click(function() {
        $('.filter-tab').removeClass('active');
        $(this).addClass('active');

        const filter = $(this).data('filter');
        filterPrayers(filter);
    });

    // Search functionality
    $('#prayerSearch').on('input', function() {
        searchPrayers($(this).val());
    });

    // Sort functionality
    $('#prayerSort').change(function() {
        sortPrayers($(this).val());
    });

    // Filter, search, and sort functions are now handled by URL manipulation

    // TODO: Load prayers from API
    loadPrayers();

    // File view modal functionality
    $('#fileModalClose').click(function() {
        $('#fileModal').removeClass('active');
    });

    $('#fileModal').click(function(e) {
        if (e.target === this) {
            $(this).removeClass('active');
        }
    });
});

function loadPrayers() {
    // Placeholder for loading prayers
    // TODO: Make AJAX call to load user's prayers
    console.log('Loading prayers...');
}



function filterPrayers(filter) {
    const currentUrl = new URL(window.location);
    currentUrl.searchParams.set('filter', filter);
    currentUrl.searchParams.set('page', 1); // Reset to first page
    window.location.href = currentUrl.toString();
}

function searchPrayers(query) {
    const currentUrl = new URL(window.location);
    if (query) {
        currentUrl.searchParams.set('search', query);
    } else {
        currentUrl.searchParams.delete('search');
    }
    currentUrl.searchParams.set('page', 1); // Reset to first page
    window.location.href = currentUrl.toString();
}

function sortPrayers(sortBy) {
    const currentUrl = new URL(window.location);
    currentUrl.searchParams.set('sort', sortBy);
    currentUrl.searchParams.set('page', 1); // Reset to first page
    window.location.href = currentUrl.toString();
}

function loadPrayers() {
    // This function is now handled by URL-based filtering
    // The page will reload with the new parameters
    console.log('Page will reload with new filter parameters');
}


</script>
@endpush
