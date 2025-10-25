@extends('layout.app')

@section('page', 'Schedules')

@section('content')
    <div class="page-header">
        <h2>My Prayer Schedules</h2>
        <p>Manage your recurring prayer routines and timing schedules</p>
    </div>

    <div class="schedule-stats">
        <div class="stat-card">
            <i class="bi bi-check-circle"></i>
            <div class="stat-info">
                <h3>Prayed Today</h3>
                <span class="stat-number">{{ $stats['prayed_today'] }}</span>
            </div>
        </div>
        <div class="stat-card">
            <i class="bi bi-calendar-week"></i>
            <div class="stat-info">
                <h3>Prayed This Week</h3>
                <span class="stat-number">{{ $stats['prayed_week'] }}</span>
            </div>
        </div>
        <div class="stat-card">
            <i class="bi bi-calendar-month"></i>
            <div class="stat-info">
                <h3>Prayed This Month</h3>
                <span class="stat-number">{{ $stats['prayed_month'] }}</span>
            </div>
        </div>
        <div class="stat-card">
            <i class="bi bi-skip-forward-circle"></i>
            <div class="stat-info">
                <h3>Skipped</h3>
                <span class="stat-number">{{ $stats['skipped'] }}</span>
            </div>
        </div>
    </div>


    <!-- Filter buttons -->
    <div class="filter-section">
        <button class="btn filter-btn {{ $filter == 'today' ? 'active' : '' }}" data-filter="today">Today</button>
        <button class="btn filter-btn {{ $filter == 'tomorrow' ? 'active' : '' }}" data-filter="tomorrow">Tomorrow</button>
        <button class="btn filter-btn {{ $filter == 'this_week' ? 'active' : '' }}" data-filter="this_week">This Week</button>
        <button class="btn filter-btn {{ $filter == 'this_month' ? 'active' : '' }}" data-filter="this_month">This Month</button>
        <button class="btn filter-btn {{ $filter == 'custom' ? 'active' : '' }}" data-filter="custom">Custom</button>
    </div>

    <div class="schedule-list">
        @php
            $nearestFutureShown = false;
            $now = \Carbon\Carbon::now();
        @endphp
        @if($schedules->count() > 0)
            @foreach($schedules as $instance)
                <div class="schedule-item">
                    <div class="schedule-header">
                        <a href="{{ route('prayer-point.show', $instance->prayer) }}" class="prayer-title-link">
                            <h4>{{ $instance->prayer->title ?? 'Untitled Prayer' }}</h4>
                        </a>
                        <div class="instance-badges">
                            <span class="schedule-status {{ $instance->status }}">
                                {{ ucfirst($instance->status) }}
                            </span>
                            <span class="instance-date">{{ $instance->scheduled_at->format('M j, Y') }}</span>
                        </div>
                    </div>
                    <div class="schedule-details">
                        <p><i class="bi bi-clock"></i> Scheduled Time: {{ $instance->scheduled_at->format('h:i A') }}</p>
                        @if($instance->schedule && $instance->schedule->reminder_minutes)
                            <p><i class="bi bi-bell"></i> Reminder: {{ $instance->schedule->reminder_minutes }} minutes before</p>
                        @endif
                        <div class="instance-actions">
                            @if($instance->status === 'pending' && $instance->scheduled_at > $now && !$nearestFutureShown)
                                <button class="btn btn-sm btn-outline-success mark-prayed" data-id="{{ $instance->id }}">
                                    <i class="bi bi-check"></i> Mark as Prayed
                                </button>
                                <button class="btn btn-sm btn-outline-warning mark-skipped" data-id="{{ $instance->id }}">
                                    <i class="bi bi-skip-forward"></i> Skip Session
                                </button>
                                @php $nearestFutureShown = true; @endphp
                            @elseif($instance->status === 'prayed')
                                <span class="text-success"><i class="bi bi-check-circle"></i> Completed</span>
                            @elseif($instance->status === 'skipped')
                                <span class="text-warning"><i class="bi bi-dash-circle"></i> Skipped</span>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Pagination -->
            <div class="pagination-wrapper">
                {{ $schedules->appends(request()->query())->links() }}
            </div>
        @else
            <div class="empty-state">
                <i class="bi bi-calendar-x"></i>
                <h3>No Prayer Instances</h3>
                <p>No prayer instances found for the selected period</p>
            </div>
        @endif
    </div>

    <!-- Custom Date Range Modal -->
    <div class="modal fade" id="customDateModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Select Date Range</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="customDateForm">
                        <div class="mb-3">
                            <label for="startDate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="startDate" name="start_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="endDate" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="endDate" name="end_date" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="applyCustomFilter">Apply Filter</button>
                </div>
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

    .schedule-stats {
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
        line-height: 1.2;
    }

    .stat-card:nth-child(4) .stat-number {
        font-size: 18px;
    }

    .filter-section {
        display: flex;
        gap: 10px;
        margin-bottom: 30px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .filter-btn {
        padding: 8px 16px;
        border: 2px solid #667eea;
        background: transparent;
        color: #667eea;
        border-radius: 20px;
        font-weight: 500;
        transition: all 0.3s;
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: #667eea;
        color: white;
    }

    .schedule-item {
        background: white;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        border: 1px solid #e0e0e0;
    }

    .schedule-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .schedule-header h4 {
        margin: 0;
        color: #333;
        font-size: 18px;
        font-weight: 600;
    }

    .prayer-title-link {
        text-decoration: none;
        color: inherit;
        transition: color 0.2s;
    }

    .prayer-title-link:hover {
        color: #667eea;
    }

    .schedule-status {
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 600;
    }

    .schedule-status.pending {
        background: #fff3cd;
        color: #856404;
    }

    .schedule-status.prayed {
        background: #d4edda;
        color: #155724;
    }

    .schedule-status.skipped {
        background: #f8d7da;
        color: #721c24;
    }

    .instance-badges {
        display: flex;
        flex-direction: column;
        gap: 5px;
        align-items: flex-end;
    }

    .instance-date {
        font-size: 12px;
        color: #666;
        font-weight: 400;
    }

    .instance-actions {
        margin-top: 10px;
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .schedule-details p {
        margin-bottom: 8px;
        color: #666;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .schedule-details i {
        color: #667eea;
        font-size: 14px;
    }

    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }

    .actions-section {
        display: flex;
        gap: 15px;
        margin-bottom: 30px;
        flex-wrap: wrap;
    }

    .action-btn {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 500;
    }

    .schedule-list {
        margin-bottom: 40px;
    }

    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: #666;
        background: white;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
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
        margin-bottom: 20px;
    }

    .upcoming-section h3 {
        color: #333;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #e0e0e0;
    }

    .upcoming-list {
        background: white;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }

    .empty-upcoming {
        text-align: center;
        padding: 40px;
        color: #666;
    }

    .empty-upcoming i {
        font-size: 32px;
        margin-bottom: 10px;
        opacity: 0.5;
    }

    @media (max-width: 768px) {
        .page-header h2 {
            font-size: 24px;
        }

        .schedule-stats {
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

        .actions-section {
            flex-direction: column;
        }

        .action-btn {
            justify-content: center;
        }

        .upcoming-section h3 {
            font-size: 20px;
        }
    }

    @media (max-width: 576px) {
        .schedule-stats {
            grid-template-columns: repeat(2, 1fr);
        }

        .actions-section .btn {
            width: 100%;
        }
    }
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // Handle filter buttons
    $('.filter-btn').on('click', function() {
        const filter = $(this).data('filter');

        if (filter === 'custom') {
            $('#customDateModal').modal('show');
        } else {
            applyFilter(filter);
        }
    });

    // Handle custom filter apply
    $('#applyCustomFilter').on('click', function() {
        const startDate = $('#startDate').val();
        const endDate = $('#endDate').val();

        if (startDate && endDate) {
            applyFilter('custom', startDate, endDate);
        } else {
            alert('Please select both start and end dates.');
        }
    });

    // Handle mark as prayed/skipped
    $(document).on('click', '.mark-prayed', function() {
        const instanceId = $(this).data('id');
        markAsPrayed(instanceId);
    });

    $(document).on('click', '.mark-skipped', function() {
        const instanceId = $(this).data('id');
        markAsSkipped(instanceId);
    });
});

function applyFilter(filter, startDate = null, endDate = null) {
    let url = '{{ route("schedules") }}?filter=' + filter;

    if (filter === 'custom' && startDate && endDate) {
        url += '&start_date=' + startDate + '&end_date=' + endDate;
    }

    window.location.href = url;
}


function displayTodaysPrayers(prayers) {
    let html = '';
    let nearestFutureShown = false;
    const now = new Date();

    prayers.forEach(function(prayer) {
        const scheduledAt = new Date(prayer.scheduled_at);
        const time = prayer.scheduled_at.substring(11, 16); // HH:MM format
        let actions = '';

        if (prayer.status === 'pending' && scheduledAt > now && !nearestFutureShown) {
            actions = `
                <div class="prayer-actions">
                    <button class="btn btn-sm btn-outline-success mark-prayed" data-id="${prayer.id}">
                        <i class="bi bi-check"></i> Prayed
                    </button>
                    <button class="btn btn-sm btn-outline-warning mark-skipped" data-id="${prayer.id}">
                        <i class="bi bi-skip-forward"></i> Skip
                    </button>
                </div>
            `;
            nearestFutureShown = true;
        }

        html += `
            <div class="prayer-instance">
                <div class="prayer-time">${time}</div>
                <div class="prayer-title">${prayer.prayer ? prayer.prayer.title : 'Untitled Prayer'}</div>
                ${actions}
            </div>
        `;
    });
    $('#upcomingList').html(html);

    // Add additional styles for prayer instances if needed
    if (!$('#prayerInstanceStyles').length) {
        $('head').append(`
            <style id="prayerInstanceStyles">
                .prayer-instance {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 15px;
                    border: 1px solid #e0e0e0;
                    border-radius: 8px;
                    margin-bottom: 10px;
                    background: #f8f9fa;
                }
                .prayer-time {
                    font-weight: bold;
                    color: #667eea;
                    min-width: 60px;
                }
                .prayer-title {
                    flex: 1;
                    margin: 0 15px;
                    font-weight: 500;
                }
                .prayer-actions {
                    display: flex;
                    gap: 10px;
                }
            </style>
        `);
    }
}

function markAsPrayed(instanceId) {
    $.ajax({
        url: "{{ url('/api/schedule-instances') }}/" + instanceId + "/prayed",
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        success: function(response) {
            if (response.success) {
                location.reload(); // Refresh page to show updated status
            }
        },
        error: function() {
            alert("Error updating prayer instance");
        }
    });
}

function markAsSkipped(instanceId) {
    $.ajax({
        url: "{{ url('/api/schedule-instances') }}/" + instanceId + "/skipped",
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        success: function(response) {
            if (response.success) {
                location.reload(); // Refresh page to show updated status
            }
        },
        error: function() {
            alert("Error updating prayer instance");
        }
    });
}
</script>
@endpush
