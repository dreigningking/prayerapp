@extends('layout.app')

@section('page', 'Dashboard')

@section('content')
    <div class="welcome-card">
        <h2>Welcome Back, Prayer Warrior!</h2>
        <p>Here's your spiritual dashboard overview. May your day be filled with peace and divine guidance.</p>
    </div>

    <div class="dashboard-grid">
        <div class="dashboard-card">
            <i class="bi bi-clock-history"></i>
            <h3>Today's Prayers</h3>
            <p>Track and complete your scheduled prayer times for today.</p>
            <button class="btn btn-primary">View Today</button>
        </div>

        <div class="dashboard-card">
            <i class="bi bi-star"></i>
            <h3>Prayer Points</h3>
            <p>Your personalized prayer points and reminders.</p>
            <button class="btn btn-primary">View All</button>
        </div>

        <div class="dashboard-card">
            <i class="bi bi-calendar-check"></i>
            <h3>Schedules</h3>
            <p>Manage your recurring prayer schedules and frequencies.</p>
            <button class="btn btn-primary">Manage</button>
        </div>

        <div class="dashboard-card">
            <i class="bi bi-graph-up"></i>
            <h3>Progress</h3>
            <p>View your prayer journey statistics and achievements.</p>
            <button class="btn btn-primary">View Stats</button>
        </div>

        <div class="dashboard-card">
            <i class="bi bi-people"></i>
            <h3>Community</h3>
            <p>Connect with fellow prayer warriors and share insights.</p>
            <button class="btn btn-primary">Explore</button>
        </div>

        <div class="dashboard-card">
            <i class="bi bi-question-circle"></i>
            <h3>Need Help?</h3>
            <p>Access prayer guides, Bible verses, and support resources.</p>
            <button class="btn btn-primary">Get Help</button>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .welcome-card {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .welcome-card h2 {
        color: #333;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .welcome-card p {
        color: #666;
        font-size: 16px;
    }

    .dashboard-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    .dashboard-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .dashboard-card i {
        font-size: 40px;
        margin-bottom: 15px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .dashboard-card h3 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
    }

    .dashboard-card p {
        color: #666;
        margin-bottom: 15px;
    }

    .dashboard-card .btn {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 25px;
        padding: 10px 20px;
        font-weight: bold;
        transition: transform 0.3s;
    }

    .dashboard-card .btn:hover {
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .welcome-card {
            padding: 20px;
        }

        .welcome-card h2 {
            font-size: 24px;
        }

        .dashboard-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .dashboard-card {
            padding: 20px;
        }
    }
</style>
@endpush
