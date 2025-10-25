@extends('layout.app')

@section('page', 'Prayer Analytics')

@section('content')
    <div class="page-header">
        <h2>Prayer Analytics</h2>
        <p>Track your prayer progress and patterns over time</p>
    </div>

    <!-- Filter Section -->
    <div class="filter-section">
        <div class="filter-controls">
            <button class="btn filter-btn {{ $filter == 'today' ? 'active' : '' }}" data-filter="today">Today</button>
            <button class="btn filter-btn {{ $filter == 'yesterday' ? 'active' : '' }}" data-filter="yesterday">Yesterday</button>
            <button class="btn filter-btn {{ $filter == 'custom' ? 'active' : '' }}" data-filter="custom">Custom Range</button>
        </div>

        <!-- Custom Date Range -->
        <div class="custom-date-range {{ $filter == 'custom' ? 'show' : '' }}" id="customDateRange">
            <div class="date-inputs">
                <div class="form-group">
                    <label for="startDate">Start Date</label>
                    <input type="date" class="form-control" id="startDate" name="start_date" value="{{ $startDate ?? '' }}">
                </div>
                <div class="form-group">
                    <label for="endDate">End Date</label>
                    <input type="date" class="form-control" id="endDate" name="end_date" value="{{ $endDate ?? '' }}">
                </div>
                <button class="btn btn-primary" id="applyCustomFilter">Apply</button>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">
                <i class="bi bi-calendar-event"></i>
            </div>
            <div class="stat-content">
                <h3>Total Sessions</h3>
                <span class="stat-number" id="totalSessions">{{ $stats['total_sessions'] }}</span>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">
                <i class="bi bi-check-circle"></i>
            </div>
            <div class="stat-content">
                <h3>Prayed</h3>
                <span class="stat-number" id="prayedCount">{{ $stats['prayed'] }}</span>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">
                <i class="bi bi-skip-forward"></i>
            </div>
            <div class="stat-content">
                <h3>Skipped</h3>
                <span class="stat-number" id="skippedCount">{{ $stats['skipped'] }}</span>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">
                <i class="bi bi-percent"></i>
            </div>
            <div class="stat-content">
                <h3>Completion Rate</h3>
                <span class="stat-number" id="completionRate">{{ $stats['completion_rate'] }}%</span>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="charts-section">
        <div class="chart-container">
            <div class="chart-header">
                <h3>Prayer Activity Overview</h3>
            </div>
            <div class="chart-wrapper">
                <canvas id="activityChart"></canvas>
            </div>
        </div>

        <div class="chart-container">
            <div class="chart-header">
                <h3>Daily Progress</h3>
            </div>
            <div class="chart-wrapper">
                <canvas id="progressChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Loading Spinner -->
    <div class="loading-overlay" id="loadingOverlay" style="display: none;">
        <div class="spinner"></div>
    </div>
@endsection

@push('styles')
<style>
    .filter-section {
        background: white;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
    }

    .filter-controls {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
        flex-wrap: wrap;
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

    .custom-date-range {
        display: none;
        padding-top: 20px;
        border-top: 1px solid #e0e0e0;
    }

    .custom-date-range.show {
        display: block;
    }

    .date-inputs {
        display: flex;
        gap: 15px;
        align-items: end;
        flex-wrap: wrap;
    }

    .form-group {
        flex: 1;
        min-width: 200px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: 500;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 14px;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 40px;
    }

    .stat-card {
        background: white;
        border-radius: 12px;
        padding: 24px;
        display: flex;
        align-items: center;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        transition: transform 0.3s;
    }

    .stat-card:hover {
        transform: translateY(-3px);
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        font-size: 28px;
    }

    .stat-card:nth-child(1) .stat-icon {
        background: #e8f4fd;
        color: #667eea;
    }

    .stat-card:nth-child(2) .stat-icon {
        background: #d4edda;
        color: #28a745;
    }

    .stat-card:nth-child(3) .stat-icon {
        background: #f8d7da;
        color: #dc3545;
    }

    .stat-card:nth-child(4) .stat-icon {
        background: #fff3cd;
        color: #ffc107;
    }

    .stat-content h3 {
        margin: 0 0 8px 0;
        font-size: 14px;
        color: #666;
        font-weight: 500;
    }

    .stat-number {
        font-size: 32px;
        font-weight: bold;
        color: #333;
    }

    .charts-section {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 30px;
    }

    .chart-container {
        background: white;
        border-radius: 12px;
        padding: 24px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
    }

    .chart-header {
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #e0e0e0;
    }

    .chart-header h3 {
        margin: 0;
        font-size: 18px;
        font-weight: 600;
        color: #333;
    }

    .chart-wrapper {
        position: relative;
        height: 300px;
    }

    .loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .spinner {
        width: 40px;
        height: 40px;
        border: 4px solid #f3f3f3;
        border-top: 4px solid #667eea;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    @media (max-width: 768px) {
        .filter-controls {
            justify-content: center;
        }

        .date-inputs {
            flex-direction: column;
        }

        .form-group {
            min-width: auto;
        }

        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .stat-card {
            padding: 16px;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            font-size: 24px;
            margin-right: 15px;
        }

        .stat-number {
            font-size: 24px;
        }

        .charts-section {
            grid-template-columns: 1fr;
        }

        .chart-wrapper {
            height: 250px;
        }
    }

    @media (max-width: 576px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
$(document).ready(function() {
    let activityChart = null;
    let progressChart = null;

    // Initialize charts with current data
    initializeCharts();

    // Handle filter buttons
    $('.filter-btn').on('click', function() {
        const filter = $(this).data('filter');

        if (filter === 'custom') {
            $('#customDateRange').addClass('show');
        } else {
            $('#customDateRange').removeClass('show');
            loadAnalytics(filter);
        }
    });

    // Handle custom filter apply
    $('#applyCustomFilter').on('click', function() {
        const startDate = $('#startDate').val();
        const endDate = $('#endDate').val();

        if (startDate && endDate) {
            loadAnalytics('custom', startDate, endDate);
        } else {
            alert('Please select both start and end dates.');
        }
    });
});

function loadAnalytics(filter, startDate = null, endDate = null) {
    $('#loadingOverlay').show();

    let url = '{{ route("analysis.data") }}';
    let params = { filter: filter };

    if (filter === 'custom' && startDate && endDate) {
        params.start_date = startDate;
        params.end_date = endDate;
    }

    $.get(url, params)
        .done(function(response) {
            if (response.success) {
                updateStats(response.data.stats);
                updateCharts(response.data.chart_data);
            }
        })
        .fail(function() {
            alert('Failed to load analytics data. Please try again.');
        })
        .always(function() {
            $('#loadingOverlay').hide();
        });
}

function updateStats(stats) {
    $('#totalSessions').text(stats.total_sessions);
    $('#prayedCount').text(stats.prayed);
    $('#skippedCount').text(stats.skipped);
    $('#completionRate').text(stats.completion_rate + '%');
}

function initializeCharts() {
    // Activity Chart (Pie Chart)
    const activityCtx = document.getElementById('activityChart').getContext('2d');
    activityChart = new Chart(activityCtx, {
        type: 'pie',
        data: {
            labels: ['Prayed', 'Skipped', 'Pending'],
            datasets: [{
                data: [{{ $chart_data['prayed'] ?? 0 }}, {{ $chart_data['skipped'] ?? 0 }}, {{ $chart_data['pending'] ?? 0 }}],
                backgroundColor: ['#28a745', '#dc3545', '#ffc107'],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                }
            }
        }
    });

    // Progress Chart (Line Chart)
    const progressCtx = document.getElementById('progressChart').getContext('2d');
    progressChart = new Chart(progressCtx, {
        type: 'line',
        data: {
            labels: {{ json_encode($chart_data['labels'] ?? []) }},
            datasets: [{
                label: 'Prayed',
                data: {{ json_encode($chart_data['prayed_data'] ?? []) }},
                borderColor: '#28a745',
                backgroundColor: 'rgba(40, 167, 69, 0.1)',
                tension: 0.4,
                fill: true
            }, {
                label: 'Skipped',
                data: {{ json_encode($chart_data['skipped_data'] ?? []) }},
                borderColor: '#dc3545',
                backgroundColor: 'rgba(220, 53, 69, 0.1)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    position: 'bottom',
                }
            }
        }
    });
}

function updateCharts(chartData) {
    // Update Activity Chart
    activityChart.data.datasets[0].data = [
        chartData.prayed,
        chartData.skipped,
        chartData.pending
    ];
    activityChart.update();

    // Update Progress Chart
    progressChart.data.labels = chartData.labels;
    progressChart.data.datasets[0].data = chartData.prayed_data;
    progressChart.data.datasets[1].data = chartData.skipped_data;
    progressChart.update();
}
</script>
@endpush
