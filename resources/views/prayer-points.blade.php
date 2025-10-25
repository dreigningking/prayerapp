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
                    <h3 class="prayer-title">{{ $prayer->title }}</h3>
                    <span class="prayer-status status-active">{{ $prayer->status }}</span>
                </div>

                <p class="prayer-content">{{ $prayer->body }}</p>

                

                @php
                    $nextInstance = $prayer->scheduleInstances()
                        ->where('scheduled_date', '>=', now()->toDateString())
                        ->where('status', 'pending')
                        ->orderBy('scheduled_date')
                        ->orderBy('scheduled_time')
                        ->first();
                @endphp

                @if($nextInstance)
                <div class="next-schedule">
                    <strong>Next Prayer:</strong> {{ $nextInstance->scheduled_date->format('M j, Y') }} at {{ $nextInstance->scheduled_time->format('h:i A') }}
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
                        <button class="view-schedule-btn" onclick="viewSchedule({{ $prayer->id }})">
                            View Schedule
                        </button>
                        <button class="comment-btn" onclick="toggleComments({{ $prayer->id }})">
                            <i class="bi bi-chat"></i> Comments ({{ $prayer->comments->count() }})
                        </button>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="comments-section" id="comments-{{ $prayer->id }}" style="display: none;">
                    <div class="comments-list" id="comments-list-{{ $prayer->id }}">
                        @foreach($prayer->comments as $comment)
                        <div class="comment-item">
                            <div class="comment-header">
                                <strong>{{ $comment->user->name ?? 'Anonymous' }}</strong>
                                <small>{{ $comment->created_at->diffForHumans() }}</small>
                            </div>
                            <p class="comment-body">{{ $comment->body }}</p>
                        </div>
                        @endforeach
                    </div>

                    <form class="comment-form" onsubmit="submitComment(event, {{ $prayer->id }})">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Add a comment..." name="body" required>
                            <button class="btn btn-primary" type="submit">Post</button>
                        </div>
                    </form>
                </div>
            </div>
            @endforeach

            <!-- Pagination -->
            <div class="pagination-container">
                <div class="pagination-links">
                    @if($prayerPoints->hasPages())
                        {{ $prayerPoints->appends(request()->query())->links() }}
                    @endif
                </div>
            </div>
        @else
            <div class="empty-state">
                <i class="bi bi-journal-x"></i>
                <h3>No Prayer Points Yet</h3>
                <p>Click the + button to add your first prayer point</p>
            </div>
        @endif
    </div>

    <!-- File View Modal -->
    <div class="file-modal" id="fileModal">
        <div class="file-modal-content">
            <div class="file-modal-header">
                <h5 class="file-modal-title" id="fileModalTitle"></h5>
                <button class="file-modal-close" id="fileModalClose">&times;</button>
            </div>
            <div class="file-modal-body" id="fileModalBody">
                <!-- File content will be loaded here -->
            </div>
        </div>
    </div>
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

    /* File View Modal */
    .file-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 1100;
        justify-content: center;
        align-items: center;
    }

    .file-modal.active {
        display: flex;
    }

    .file-modal-content {
        background: white;
        border-radius: 12px;
        padding: 20px;
        max-width: 90vw;
        max-height: 90vh;
        position: relative;
        overflow: hidden;
    }

    .file-modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
        padding-bottom: 12px;
        border-bottom: 1px solid #eee;
    }

    .file-modal-title {
        margin: 0;
        font-size: 18px;
        font-weight: 600;
        color: #333;
    }

    .file-modal-close {
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        color: #666;
        padding: 0;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: background 0.2s;
    }

    .file-modal-close:hover {
        background: #f8f9fa;
        color: #333;
    }

    .file-modal-body {
        max-height: 70vh;
        overflow: auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .file-image {
        max-width: 100%;
        max-height: 100%;
        border-radius: 8px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .file-pdf {
        width: 100%;
        height: 600px;
        border: none;
        border-radius: 8px;
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

    /* Comments */
    .comment-btn {
        background: #6c757d;
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

    .comment-btn:hover {
        background: #5a6268;
    }

    .comments-section {
        margin-top: 16px;
        padding: 16px;
        background: #f8f9fa;
        border-radius: 8px;
        border: 1px solid #e9ecef;
    }

    .comments-list {
        margin-bottom: 16px;
    }

    .comment-item {
        padding: 12px;
        background: white;
        border-radius: 6px;
        margin-bottom: 8px;
        border: 1px solid #e9ecef;
    }

    .comment-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
        font-size: 12px;
    }

    .comment-header strong {
        color: #333;
    }

    .comment-header small {
        color: #666;
    }

    .comment-body {
        margin: 0;
        font-size: 14px;
        color: #555;
        line-height: 1.4;
    }

    .comment-form .input-group {
        display: flex;
        gap: 8px;
    }

    .comment-form .form-control {
        flex: 1;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 8px 12px;
        font-size: 14px;
    }

    .comment-form .btn {
        border-radius: 6px;
        padding: 8px 16px;
        font-size: 14px;
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

    function filterPrayers(filter) {
        // Implement filtering logic
        console.log('Filtering by:', filter);
        // TODO: Filter prayer items based on status
    }

    function searchPrayers(query) {
        // Implement search logic
        console.log('Searching for:', query);
        // TODO: Search through prayer titles and content
    }

    function sortPrayers(sortBy) {
        // Implement sorting logic
        console.log('Sorting by:', sortBy);
        // TODO: Sort prayer items
    }

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

function viewSchedule(prayerId) {
    // TODO: Implement modal to show upcoming schedule instances for this prayer
    alert('View schedule for prayer ID: ' + prayerId + ' - Feature coming soon!');
}

function viewFile(filePath, title) {
    // Set modal title
    $('#fileModalTitle').text('Attached File - ' + title);

    // Determine file type and display content
    const fileUrl = '/storage/' + filePath;
    const fileExtension = filePath.split('.').pop().toLowerCase();

    let content = '';

    if (['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'].includes(fileExtension)) {
        // Display image
        content = '<img src="' + fileUrl + '" alt="' + title + '" class="file-image">';
    } else if (fileExtension === 'pdf') {
        // Display PDF
        content = '<embed src="' + fileUrl + '" type="application/pdf" class="file-pdf">';
    } else {
        // Unsupported file type
        content = '<div class="text-center"><p>Unsupported file type</p><a href="' + fileUrl + '" target="_blank" class="btn btn-primary">Download File</a></div>';
    }

    // Set modal content
    $('#fileModalBody').html(content);

    // Show modal
    $('#fileModal').addClass('active');
}

function toggleComments(prayerId) {
    const commentsSection = $('#comments-' + prayerId);
    const isVisible = commentsSection.is(':visible');

    // Hide all other comment sections
    $('.comments-section').hide();

    // Toggle current section
    if (isVisible) {
        commentsSection.hide();
    } else {
        commentsSection.show();
        loadComments(prayerId);
    }
}

function loadComments(prayerId) {
    // Load comments via AJAX
    $.get('/prayer-points/' + prayerId + '/comments')
        .done(function(data) {
            if (data.success) {
                updateCommentsList(prayerId, data.comments);
            }
        })
        .fail(function() {
            console.error('Failed to load comments');
        });
}

function updateCommentsList(prayerId, comments) {
    const commentsList = $('#comments-list-' + prayerId);
    commentsList.empty();

    if (comments.length === 0) {
        commentsList.html('<p class="text-muted">No comments yet. Be the first to comment!</p>');
    } else {
        comments.forEach(function(comment) {
            commentsList.append(`
                <div class="comment-item">
                    <div class="comment-header">
                        <strong>${comment.user_name}</strong>
                        <small>${comment.created_at}</small>
                    </div>
                    <p class="comment-body">${comment.body}</p>
                </div>
            `);
        });
    }
}

function submitComment(event, prayerId) {
    event.preventDefault();

    const form = event.target;
    const formData = new FormData(form);

    // Submit comment via AJAX
    $.ajax({
        url: '/prayer-points/' + prayerId + '/comments',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    .done(function(data) {
        if (data.success) {
            // Clear form
            form.reset();

            // Reload comments
            loadComments(prayerId);

            // Update comment count
            updateCommentCount(prayerId);
        }
    })
    .fail(function() {
        alert('Failed to post comment. Please try again.');
    });
}

function updateCommentCount(prayerId) {
    // Update the comment button count
    const commentBtn = $('.comment-btn').filter(function() {
        return $(this).attr('onclick').includes(prayerId);
    });

    // For now, just reload the page to update counts
    // In a real app, you'd update the count dynamically
    location.reload();
}
</script>
@endpush
