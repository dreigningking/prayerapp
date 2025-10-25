@extends('layout.app')

@section('page', 'Schedules')

@section('content')
    <div class="page-header">
        <h2>My Prayer Schedules</h2>
        <p>Manage your recurring prayer routines and timing schedules</p>
    </div>

    <div class="schedule-stats">
        <div class="stat-card">
            <i class="bi bi-calendar-event"></i>
            <div class="stat-info">
                <h3>Total Schedules</h3>
                <span class="stat-number">0</span>
            </div>
        </div>
        <div class="stat-card">
            <i class="bi bi-clock-fill"></i>
            <div class="stat-info">
                <h3>Today's Instances</h3>
                <span class="stat-number">0</span>
            </div>
        </div>
        <div class="stat-card">
            <i class="bi bi-play-circle"></i>
            <div class="stat-info">
                <h3>Active</h3>
                <span class="stat-number">0</span>
            </div>
        </div>
        <div class="stat-card">
            <i class="bi bi-pause-circle"></i>
            <div class="stat-info">
                <h3>Inactive</h3>
                <span class="stat-number">0</span>
            </div>
        </div>
    </div>

    <div class="actions-section">
        <button class="btn btn-primary action-btn">
            <i class="bi bi-plus-circle"></i>
            Create New Schedule
        </button>
        <button class="btn btn-outline-primary action-btn">
            <i class="bi bi-gear"></i>
            Bulk Actions
        </button>
    </div>

    <div class="schedule-list" id="scheduleList">
        <!-- Schedule items will be loaded here -->
        <div class="empty-state">
            <i class="bi bi-calendar-x"></i>
            <h3>No Prayer Schedules Yet</h3>
            <p>Create your first schedule to establish consistent prayer routines</p>
            <button class="btn btn-primary">
                <i class="bi bi-plus-circle"></i>
                Create Schedule
            </button>
        </div>
    </div>

    <!-- Upcoming prayer instances section -->
    <div class="upcoming-section">
        <h3>Today's Prayer Schedule</h3>
        <div class="upcoming-list" id="upcomingList">
            <div class="empty-upcoming">
                <i class="bi bi-clock"></i>
                <p>No prayers scheduled for today</p>
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
            grid-template-columns: 1fr;
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
    // Load schedules
    loadSchedules();

    // Load today's prayer instances
    loadTodaysPrayers();
});

function loadSchedules() {
    // TODO: Load user's prayer schedules from API
    console.log('Loading schedules...');
}

function loadTodaysPrayers() {
    // TODO: Load today's scheduled prayer instances
    console.log('Loading today\'s prayers...');
}

// TODO: Add event handlers for create new schedule, edit schedules, etc.
</script>
@endpush
