@extends('layout.app')

@section('page', 'Prayer Point Details')

@section('content')
    <div class="container-fluid">
        <!-- Back Button -->
        <div class="mb-3">
            <a href="{{ route('prayer-point.index') }}" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> Back to Prayer Points
            </a>
        </div>

        <!-- Prayer Point Header -->
        <div class="prayer-detail-header">
            <div class="prayer-info">
                <h1>{{ $prayer->title }}</h1>
                <div class="prayer-meta-info">
                    <span class="status-badge status-{{ $prayer->status }}">{{ ucfirst($prayer->status) }}</span>
                    <span class="created-date">Created {{ $prayer->created_at->diffForHumans() }}</span>
                    @if($prayer->categories)
                    <span class="categories">Categories: {{ implode(', ', $prayer->categories) }}</span>
                    @endif
                </div>
            </div>
        </div>

        <!-- Prayer Content -->
        <div class="prayer-content-card">
            <h3>Prayer Content</h3>
            <div class="prayer-body">
                {{ $prayer->body }}
            </div>

            @if($prayer->file)
            <div class="attached-file">
                <h4>Attached File</h4>
                <button class="btn btn-success" onclick="viewFile('{{ $prayer->file }}', '{{ $prayer->title }}')">
                    <i class="bi bi-file-earmark"></i> View Attached File
                </button>
            </div>
            @endif
        </div>

        <!-- Tabbed Section -->
        <div class="tabbed-section">
            <ul class="nav nav-tabs" id="prayerTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="schedules-tab" data-bs-toggle="tab" data-bs-target="#schedules" type="button" role="tab">
                        <i class="bi bi-calendar-event"></i> Schedules ({{ $scheduleInstances->count() }})
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="comments-tab" data-bs-toggle="tab" data-bs-target="#comments" type="button" role="tab">
                        <i class="bi bi-chat"></i> Comments ({{ $comments->count() }})
                    </button>
                </li>
            </ul>

            <div class="tab-content" id="prayerTabsContent">
                <!-- Schedules Tab -->
                <div class="tab-pane fade show active" id="schedules" role="tabpanel">
                    <div class="schedules-section">
                        @if($scheduleInstances->count() > 0)
                        <div class="bulk-actions mb-3">
                            <div class="d-flex align-items-center gap-3">
                                <label>Select All:</label>
                                <input type="checkbox" id="selectAllSchedules" class="form-check-input">
                                <div class="btn-group ms-3">
                                    <button class="btn btn-success" onclick="bulkUpdate('prayed')">Mark as Prayed</button>
                                    <button class="btn btn-warning" onclick="bulkUpdate('missed')">Mark as Missed</button>
                                    <button class="btn btn-secondary" onclick="bulkUpdate('skipped')">Mark as Skipped</button>
                                </div>
                            </div>
                        </div>

                        <div class="schedules-list">
                            @foreach($scheduleInstances as $instance)
                            <div class="schedule-instance-card">
                                <div class="instance-header">
                                    <div class="form-check">
                                        <input class="form-check-input instance-checkbox" type="checkbox" value="{{ $instance->id }}" id="instance-{{ $instance->id }}">
                                        <label class="form-check-label" for="instance-{{ $instance->id }}">
                                            <strong>{{ $instance->scheduled_at->format('M j, Y h:i A') }}</strong>
                                        </label>
                                    </div>
                                    <span class="instance-status status-{{ $instance->status }}">{{ ucfirst($instance->status) }}</span>
                                </div>

                                @if($instance->status === 'prayed' && $instance->prayed_at)
                                <div class="instance-details">
                                    <small class="text-success">Prayed at {{ $instance->prayed_at->format('M j, Y h:i A') }}</small>
                                </div>
                                @endif

                                @if($instance->status === 'missed' && $instance->missed_at)
                                <div class="instance-details">
                                    <small class="text-warning">Missed at {{ $instance->missed_at->format('M j, Y h:i A') }}</small>
                                </div>
                                @endif

                                @if($instance->status === 'skipped' && $instance->skipped_at)
                                <div class="instance-details">
                                    <small class="text-secondary">Skipped at {{ $instance->skipped_at->format('M j, Y h:i A') }}</small>
                                </div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                        @else
                        <div class="empty-state">
                            <i class="bi bi-calendar-x"></i>
                            <h3>No Schedules Found</h3>
                            <p>This prayer point doesn't have any scheduled instances yet.</p>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Comments Tab -->
                <div class="tab-pane fade" id="comments" role="tabpanel">
                    <div class="comments-section">
                        @if($comments->count() > 0)
                        <div class="comments-list">
                            @foreach($comments as $comment)
                            <div class="comment-item">
                                <div class="comment-header">
                                    <div class="comment-author">
                                        <strong>{{ $comment->user->name ?? 'Anonymous' }}</strong>
                                        <small>{{ $comment->created_at->diffForHumans() }}</small>
                                    </div>
                                    @if($comment->user_id === Auth::id())
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteComment({{ $comment->id }})">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                    @endif
                                </div>
                                <p class="comment-body">{{ $comment->body }}</p>
                            </div>
                            @endforeach
                        </div>
                        @else
                        <div class="empty-state">
                            <i class="bi bi-chat-dots"></i>
                            <h3>No Comments Yet</h3>
                            <p>Be the first to share your thoughts on this prayer point.</p>
                        </div>
                        @endif

                        <!-- Add Comment Form -->
                        <div class="add-comment-section">
                            <h4>Add a Comment</h4>
                            <form id="commentForm" onsubmit="submitComment(event, {{ $prayer->id }})">
                                @csrf
                                <div class="mb-3">
                                    <textarea class="form-control" name="body" rows="3" placeholder="Share your thoughts..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('prayer-point.file-modal')
@endsection

@push('styles')
<style>
    .prayer-detail-header {
        background: white;
        border-radius: 12px;
        padding: 24px;
        margin-bottom: 24px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
    }

    .prayer-info h1 {
        color: #333;
        margin-bottom: 12px;
        font-size: 28px;
    }

    .prayer-meta-info {
        display: flex;
        gap: 16px;
        align-items: center;
        flex-wrap: wrap;
    }

    .status-badge {
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
        text-transform: uppercase;
    }

    .status-active {
        background: #e8f5e8;
        color: #27ae60;
    }

    .status-completed {
        background: #e8eaf6;
        color: #3f51b5;
    }

    .created-date, .categories {
        color: #666;
        font-size: 14px;
    }

    .prayer-content-card {
        background: white;
        border-radius: 12px;
        padding: 24px;
        margin-bottom: 24px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
    }

    .prayer-content-card h3 {
        margin-bottom: 16px;
        color: #333;
    }

    .prayer-body {
        color: #555;
        line-height: 1.6;
        font-size: 16px;
    }

    .attached-file {
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid #eee;
    }

    .attached-file h4 {
        margin-bottom: 12px;
        color: #333;
    }

    .tabbed-section {
        background: white;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        overflow: hidden;
    }

    .nav-tabs {
        border-bottom: 2px solid #f8f9fa;
        background: #f8f9fa;
    }

    .nav-tabs .nav-link {
        border: none;
        color: #666;
        font-weight: 500;
        padding: 16px 24px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .nav-tabs .nav-link.active {
        background: white;
        color: #667eea;
        border-bottom: 3px solid #667eea;
    }

    .nav-tabs .nav-link:hover {
        background: #e9ecef;
        color: #333;
    }

    .tab-content {
        padding: 24px;
    }

    .bulk-actions {
        background: #f8f9fa;
        padding: 16px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .schedules-list {
        display: grid;
        gap: 12px;
    }

    .schedule-instance-card {
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 16px;
        transition: all 0.2s;
    }

    .schedule-instance-card:hover {
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .instance-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
    }

    .instance-status {
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 11px;
        font-weight: 500;
        text-transform: uppercase;
    }

    .status-pending {
        background: #fff3cd;
        color: #856404;
    }

    .status-prayed {
        background: #d4edda;
        color: #155724;
    }

    .status-missed {
        background: #f8d7da;
        color: #721c24;
    }

    .status-skipped {
        background: #e2e3e5;
        color: #383d41;
    }

    .instance-details {
        margin-top: 8px;
    }

    .comments-section {
        max-width: 800px;
    }

    .comments-list {
        margin-bottom: 32px;
    }

    .comment-item {
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 16px;
        margin-bottom: 16px;
    }

    .comment-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
    }

    .comment-author {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .comment-body {
        margin: 0;
        color: #555;
        line-height: 1.5;
    }

    .add-comment-section {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        border: 1px solid #e9ecef;
    }

    .add-comment-section h4 {
        margin-bottom: 16px;
        color: #333;
    }

    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: #666;
    }

    .empty-state i {
        font-size: 48px;
        margin-bottom: 16px;
        opacity: 0.5;
    }

    @media (max-width: 768px) {
        .prayer-meta-info {
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
        }

        .nav-tabs .nav-link {
            padding: 12px 16px;
            font-size: 14px;
        }

        .bulk-actions .d-flex {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }

        .btn-group {
            width: 100%;
        }

        .btn-group .btn {
            flex: 1;
        }
    }
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // File view modal functionality
    $('#fileModalClose').click(function() {
        $('#fileModal').removeClass('active');
    });

    $('#fileModal').click(function(e) {
        if (e.target === this) {
            $(this).removeClass('active');
        }
    });

    // Select all schedules functionality
    $('#selectAllSchedules').change(function() {
        $('.instance-checkbox').prop('checked', this.checked);
    });

    // Update select all when individual checkboxes change
    $('.instance-checkbox').change(function() {
        const total = $('.instance-checkbox').length;
        const checked = $('.instance-checkbox:checked').length;
        $('#selectAllSchedules').prop('checked', checked === total);
    });
});

function bulkUpdate(action) {
    const selectedInstances = $('.instance-checkbox:checked').map(function() {
        return this.value;
    }).get();

    if (selectedInstances.length === 0) {
        alert('Please select at least one schedule instance.');
        return;
    }

    if (confirm(`Are you sure you want to mark ${selectedInstances.length} schedule(s) as ${action}?`)) {
        // Submit bulk update
        const formData = new FormData();
        selectedInstances.forEach(id => formData.append('instance_ids[]', id));
        formData.append('action', action);
        formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

        $.ajax({
            url: '/prayer-points/schedule-instances/bulk-update',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                location.reload();
            },
            error: function() {
                alert('Failed to update schedules. Please try again.');
            }
        });
    }
}

function submitComment(event, prayerId) {
    event.preventDefault();

    const form = event.target;
    const formData = new FormData(form);

    $.ajax({
        url: '/prayer-points/' + prayerId + '/comments',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            location.reload();
        },
        error: function() {
            alert('Failed to post comment. Please try again.');
        }
    });
}

function deleteComment(commentId) {
    if (confirm('Are you sure you want to delete this comment?')) {
        $.ajax({
            url: '/prayer-points/comments/' + commentId,
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                location.reload();
            },
            error: function() {
                alert('Failed to delete comment. Please try again.');
            }
        });
    }
}
</script>
@endpush
