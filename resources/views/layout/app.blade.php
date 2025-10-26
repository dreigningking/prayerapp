<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Prayer Buddy') - @yield('page')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Flaticon Icons -->
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Select2 CSS -->
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Header Styles */
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 20px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
        }

        .hamburger {
            font-size: 24px;
            cursor: pointer;
            margin-right: 15px;
            transition: transform 0.3s;
            opacity: 0.9;
        }

        .hamburger:hover {
            transform: scale(1.1);
            opacity: 1;
        }

        .header-title {
            font-size: 20px;
            font-weight: bold;
            margin: 0;
            flex-grow: 1;
        }

        /* Side Menu Styles */
        .side-menu {
            position: fixed;
            top: 0;
            left: -250px;
            height: 100vh;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transition: left 0.3s ease;
            z-index: 1001;
            
        }
        .side-menu a{
            text-decoration: none;
        }

        .side-menu.active {
            left: 0;
        }

        .side-menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 1000;
            cursor: pointer;
        }

        .side-menu-overlay.active {
            display: block;
        }

        .menu-item {
            padding: 20px 15px;
            border-bottom: 1px solid #e0e0e0;
            transition: all 0.3s;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            color: #333;
        }

        .menu-item:hover {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .menu-item i, .menu-item .flaticon {
            font-size: 24px;
            margin-bottom: 8px;
        }

        .menu-item span {
            font-size: 14px;
            font-weight: 500;
        }

        .menu-item.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-left: 4px solid rgba(255, 255, 255, 0.7);
        }

        /* Main Content Styles */
        .main-content {
            margin-top: 70px;
            padding: 20px;
            min-height: calc(100vh - 70px);
        }

        /* Floating Action Button */
        .floating-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            font-size: 24px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            transition: all 0.3s;
            z-index: 999;
        }

        .floating-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        }

        /* Prayer Point Modal */
        .prayer-modal {
            position: fixed;
            top: 0;
            right: -100%;
            width: 95%;
            height: 100vh;
            background: white;
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
            transition: right 0.3s ease;
            z-index: 1002;
            overflow-y: auto;
            max-width: 500px;
        }

        .prayer-modal.active {
            right: 0;
        }

        .prayer-modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1001;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .prayer-modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 0;
            padding: 15px 20px;
        }

        .modal-header .btn-close {
            color: white;
            opacity: 1;
        }

        .modal-header .btn-close:hover {
            color: rgba(255, 255, 255, 0.8);
        }

        .modal-body {
            padding: 20px;
            height: calc(100vh - 80px);
            overflow-y: auto;
        }

        /* Enhanced form styles */
        .toggle-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 20px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .form-style .form-check-input {
            width: 50px;
            height: 24px;
            margin-right: 10px;
        }

        .form-style .form-check-input:checked {
            background-color: #667eea;
            border-color: #667eea;
        }

        .schedule-config {
            display: none;
            margin-top: 20px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
            border: 2px dashed #ddd;
        }

        .schedule-config.show {
            display: block;
        }

        .schedule-item {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
        }

        .schedule-item:last-child {
            margin-bottom: 0;
        }

        .add-schedule-btn {
            background: #667eea;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 8px 16px;
            font-size: 14px;
            margin-top: 10px;
        }

        .remove-schedule-btn {
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .tags-input {
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 12px;
            min-height: 50px;
            display: flex;
            flex-wrap: wrap;
            align-content: flex-start;
            cursor: text;
        }

        .tag {
            display: inline-flex;
            align-items: center;
            background: #667eea;
            color: white;
            border-radius: 20px;
            padding: 4px 12px;
            margin: 2px 4px 2px 0;
            font-size: 12px;
        }

        .tag .close {
            margin-left: 8px;
            cursor: pointer;
            font-size: 14px;
            line-height: 1;
            opacity: 0.8;
        }

        .tag .close:hover {
            opacity: 1;
        }

        .tags-input:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .tags-input input {
            border: none;
            outline: none;
            flex: 1;
            min-width: 120px;
            font-size: 14px;
        }

        .schedule-time {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }

        .time-input {
            flex: 1;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .form-control, .form-select {
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 12px;
            transition: border-color 0.3s;
        }

        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .submit-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 8px;
            padding: 12px 24px;
            font-weight: bold;
            width: 100%;
            color: white;
            transition: transform 0.3s;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .header-title {
                font-size: 16px;
            }

            .main-content {
                padding: 15px;
            }
        }

        @media (max-width: 576px) {
            .side-menu {
                /* width: 100vw; */
                left: -100vw;
            }

            .side-menu.active {
                left: 0;
            }

            .floating-btn {
                bottom: 15px;
                right: 15px;
                width: 50px;
                height: 50px;
                font-size: 20px;
            }

            .prayer-modal {
                width: 98%;
                max-width: none;
            }

            .header {
                padding: 12px 15px;
            }

            .hamburger {
                font-size: 20px;
            }
        }

        /* Page Specific Styles */
    </style>
    @stack('styles')
</head>
<body>
    <!-- Header -->
    <header class="header">
        <i class="bi bi-list hamburger" id="hamburger"></i>
        <h1 class="header-title">@yield('page', 'Dashboard')</h1>
    </header>

    <!-- Side Menu Overlay -->
    <div class="side-menu-overlay" id="sideMenuOverlay"></div>

    <!-- Side Menu -->
    <nav class="side-menu" id="sideMenu">
        <a href="#" class="d-flex justify-content-center" >
            <img src="{{asset('images/hands.png')}}" width="100" alt="">
        </a>
        <a href="{{ url('dashboard') }}" class="menu-item @if(request()->path() === 'dashboard') active @endif">
            <i class="bi bi-house-door-fill"></i>
            <span>Dashboard</span>
        </a>
        <a href="{{ url('prayer-points') }}" class="menu-item @if(request()->path() === 'prayer-points') active @endif">
            <i class="bi bi-journal-text"></i>
            <span>Prayer Points</span>
        </a>
        <a href="{{ url('schedules') }}" class="menu-item @if(request()->path() === 'schedules') active @endif">
            <i class="bi bi-calendar-event"></i>
            <span>Schedules</span>
        </a>
        <a href="{{ url('analysis') }}" class="menu-item @if(request()->path() === 'analysis') active @endif">
            <i class="bi bi-graph-up"></i>
            <span>Analysis</span>
        </a>
        <a href="{{ url('support') }}" class="menu-item @if(request()->path() === 'support') active @endif">
            <i class="bi bi-headset"></i>
            <span>Support</span>
        </a>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Prayer Modal Overlay -->
    <div class="prayer-modal-overlay" id="prayerModalOverlay"></div>

    <!-- Add Prayer Point Modal -->
    <div class="prayer-modal" id="prayerModal">
        <div class="modal-header">
            <h5>Add New Prayer Point</h5>
            <button type="button" class="btn-close" id="closePrayerModal">
                <i class="bi bi-x"></i>
            </button>
        </div>
        <div class="modal-body">
            <form class="form-style" action="{{route('prayer-point.store')}}" method="post" enctype="multipart/form-data">@csrf
                <div class="form-group">
                    <label for="prayerTitle" class="form-label">Title *</label>
                    <input type="text" class="form-control" id="prayerTitle" name="title" required placeholder="Enter prayer title">
                </div>

                <div class="form-group">
                    <label for="prayerBody" class="form-label">Prayer Content *</label>
                    <textarea class="form-control" id="prayerBody" name="body" rows="6" required placeholder="Write your prayer here..."></textarea>
                </div>

                <div class="form-group">
                    <label for="prayerFile" class="form-label">Attach Image/File (optional)</label>
                    <input type="file" name="file" id="prayerFile" accept=".pdf,.jpg,.jpeg,.png">
                </div>

                <div class="form-group">
                    <label for="prayerCategory" class="form-label">Categories</label>
                    <select class="form-select" id="prayerCategory" name="categories[]" multiple>
                        <!-- Categories will be loaded via AJAX/Select2 -->
                    </select>
                    <div class="form-text text-muted small">Select or create new categories for your prayer</div>
                </div>

                <!-- Schedule Toggle -->
                <div class="toggle-section">
                    <div class="d-flex align-items-center">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="enableSchedule" name="enable_schedule" value="1">
                            <label class="form-check-label ms-2" for="enableSchedule">
                                Enable Prayer Scheduling
                            </label>
                        </div>
                    </div>
                    <i class="bi bi-chevron-down" id="scheduleChevron"></i>
                </div>

                <!-- Schedule Configuration Section -->
                <div class="schedule-config" id="scheduleConfig">
                    <h6 class="mb-3"><i class="bi bi-calendar-event"></i> Prayer Schedule Settings</h6>

                    <!-- Basic Schedule Card -->
                    <div class="schedule-card basic-schedule-card mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Remind me</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="reminderValue" value="15" min="0" name="reminder_minutes">
                                        <select class="form-select" id="reminderUnit" name="reminder_unit">
                                            <option value="minutes">minutes</option>
                                            <option value="hours">hours</option>
                                        </select>
                                    </div>
                                    <span class="">before each prayer time</span>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Starting Date</label>
                                    <input type="date" class="form-control" id="scheduleStartDate" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}" name="start_date">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">End Date (Optional)</label>
                                    <input type="date" class="form-control" id="scheduleEndDate" min="{{ date('Y-m-d') }}" name="end_date">
                                </div>

                                <div class="everyday-settings" id="everydaySettings">
                                    <label class="form-label">Prayer Times</label>
                                    <div class="prayer-times-container">
                                        <div class="input-group mb-2">
                                            <input type="time" class="form-control prayer-time-input" name="prayer_times[]" value="09:00">
                                            <button type="button" class="btn btn-outline-danger remove-time-btn" onclick="removePrayerTime(this)">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-primary btn-sm mt-2" onclick="addPrayerTime()">
                                        <i class="bi bi-plus"></i> Add Another Time
                                    </button>
                                </div>

                                <div class="form-group mt-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="everydayToggle" checked name="is_everyday" value="1">
                                        <label class="form-check-label" for="everydayToggle">
                                            Everyday at the same times
                                        </label>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!-- Advanced Custom Cycle Card -->
                    <div class="schedule-card custom-cycle-card mb-3" id="customCycleCard" style="display: none;">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Custom Cycle</h6>
                            </div>
                            <div class="card-body">
                                <!-- Day/Date Toggle -->
                                <div class="form-group">
                                    <label class="form-label">Day/Date Cycle</label>
                                    <div class="btn-group w-100" role="group">
                                        <input type="radio" class="btn-check" name="cycleType" value="cycleDays" id="cycleDays" autocomplete="off" checked>
                                        <label class="btn btn-outline-primary" for="cycleDays">Days</label>
                                        <input type="radio" class="btn-check" name="cycleType" value="cycleDates" id="cycleDates" autocomplete="off">
                                        <label class="btn btn-outline-primary" for="cycleDates">Dates</label>
                                    </div>
                                </div>

                                <!-- Days Selection -->
                                <div class="cycle-options days-options" id="daysOptions">
                                    <label class="form-label">Select Days</label>
                                    <div class="row">
                                        <div class="col-6 col-md-4"><div class="form-check">
                                            <input class="form-check-input day-checkbox" type="checkbox" name="selected_days[]" value="0" id="sun" checked>
                                            <label class="form-check-label" for="sun">Sun</label>
                                        </div></div>
                                        <div class="col-6 col-md-4"><div class="form-check">
                                            <input class="form-check-input day-checkbox" type="checkbox" name="selected_days[]" value="1" id="mon" checked>
                                            <label class="form-check-label" for="mon">Mon</label>
                                        </div></div>
                                        <div class="col-6 col-md-4"><div class="form-check">
                                            <input class="form-check-input day-checkbox" type="checkbox" name="selected_days[]" value="2" id="tue" checked>
                                            <label class="form-check-label" for="tue">Tues</label>
                                        </div></div>
                                        <div class="col-6 col-md-4"><div class="form-check">
                                            <input class="form-check-input day-checkbox" type="checkbox" name="selected_days[]" value="3" id="wed" checked>
                                            <label class="form-check-label" for="wed">Wed</label>
                                        </div></div>
                                        <div class="col-6 col-md-4"><div class="form-check">
                                            <input class="form-check-input day-checkbox" type="checkbox" name="selected_days[]" value="4" id="thu" checked>
                                            <label class="form-check-label" for="thu">Thurs</label>
                                        </div></div>
                                        <div class="col-6 col-md-4"><div class="form-check">
                                            <input class="form-check-input day-checkbox" type="checkbox" name="selected_days[]" value="5" id="fri" checked>
                                            <label class="form-check-label" for="fri">Fri</label>
                                        </div></div>
                                        <div class="col-6 col-md-4"><div class="form-check">
                                            <input class="form-check-input day-checkbox" type="checkbox" name="selected_days[]" value="6" id="sat" checked>
                                            <label class="form-check-label" for="sat">Sat</label>
                                        </div></div>
                                    </div>
                                </div>

                                <!-- Dates Selection -->
                                <div class="cycle-options dates-options" id="datesOptions" style="display: none;">
                                    <label class="form-label">Select Dates</label>
                                    <select class="form-select" id="monthDates" name="selected_dates[]" multiple>
                                        <option value="1">1st</option>
                                        <option value="2">2nd</option>
                                        <option value="3">3rd</option>
                                        <option value="4">4th</option>
                                        <option value="5">5th</option>
                                        <option value="6">6th</option>
                                        <option value="7">7th</option>
                                        <option value="8">8th</option>
                                        <option value="9">9th</option>
                                        <option value="10">10th</option>
                                        <option value="11">11th</option>
                                        <option value="12">12th</option>
                                        <option value="13">13th</option>
                                        <option value="14">14th</option>
                                        <option value="15">15th</option>
                                        <option value="16">16th</option>
                                        <option value="17">17th</option>
                                        <option value="18">18th</option>
                                        <option value="19">19th</option>
                                        <option value="20">20th</option>
                                        <option value="21">21st</option>
                                        <option value="22">22nd</option>
                                        <option value="23">23rd</option>
                                        <option value="24">24th</option>
                                        <option value="25">25th</option>
                                        <option value="26">26th</option>
                                        <option value="27">27th</option>
                                        <option value="28">28th</option>
                                        <option value="29">29th</option>
                                        <option value="30">30th</option>
                                        <option value="31">31st</option>
                                    </select>
                                </div>

                                <!-- Month Selection -->
                                <div class="form-group mt-3">
                                    <label class="form-label">Month Cycle</label>
                                    <select class="form-select" id="monthCycle" name="selected_months[]" multiple>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <small class="form-text text-muted">Leave empty for all months</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Add Prayer Point</button>
            </form>
        </div>
    </div>

    <!-- Floating Action Button -->
    <button class="floating-btn" id="openPrayerModal">
        <i class="bi bi-plus"></i>
    </button>

    <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>

    <script src="{{ asset('js/select2.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script>
        let scheduleCount = 1;

        $(document).ready(function() {
            // Initialize Select2 for dynamically created custom days selects
            $(document).on('select2:open', '.custom-days-select', function() {
                if (!$(this).hasClass('select2-hidden-accessible')) {
                    $(this).select2({
                        placeholder: 'Select days...',
                        allowClear: true
                    });
                }
            });
            /* Initialize Select2 for Categories */
            $('#prayerCategory').select2({
                placeholder: 'Select or create categories...',
                tags: true,
                tokenSeparators: [','],
                ajax: {
                    url: '{{ url("/api/categories/search") }}',
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term,
                            page: params.page || 1
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data.items,
                            pagination: {
                                more: data.pagination.more
                            }
                        };
                    },
                    cache: true
                },
                createTag: function (params) {
                    var term = $.trim(params.term);

                    if (term === '') {
                        return null;
                    }

                    return {
                        id: term,
                        text: term,
                        isNew: true
                    };
                },
                insertTag: function (data, tag) {
                    data.push(tag);
                }
            });

            /* Hamburger menu toggle */
            $('#hamburger').click(function() {
                $('#sideMenu').addClass('active');
                $('#sideMenuOverlay').addClass('active');
            });

            /* Close menu on overlay click */
            $('#sideMenuOverlay').click(function() {
                $('#sideMenu').removeClass('active');
                $('#sideMenuOverlay').removeClass('active');
            });

            /* Menu item click */
            $('.menu-item').click(function() {
                $('.menu-item').removeClass('active');
                $(this).addClass('active');

                // Close menu after selection on mobile
                if ($(window).width() <= 768) {
                    $('#sideMenu').removeClass('active');
                    $('#sideMenuOverlay').removeClass('active');
                }
            });

            /* Close menu on escape key */
            $(document).keydown(function(e) {
                if (e.keyCode == 27) {
                    $('#sideMenu').removeClass('active');
                    $('#sideMenuOverlay').removeClass('active');
                    $('#prayerModal').removeClass('active');
                    $('#prayerModalOverlay').removeClass('active');
                }
            });

            /* Prayer modal toggle */
            $('#openPrayerModal').click(function() {
                $('#prayerModal').addClass('active');
                $('#prayerModalOverlay').addClass('active');
                // Reset Select2 when opening modal
                $('#prayerCategory').val(null).trigger('change');
            });

            /* Close prayer modal on overlay click */
            $('#prayerModalOverlay').click(function() {
                $('#prayerModal').removeClass('active');
                $('#prayerModalOverlay').removeClass('active');
            });

            // Close prayer modal on close button
            $('#closePrayerModal').click(function() {
                $('#prayerModal').removeClass('active');
                $('#prayerModalOverlay').removeClass('active');
            });

            /* Schedule Toggle Functionality */
            $('#enableSchedule').change(function() {
                if ($(this).is(':checked')) {
                    $('#scheduleConfig').addClass('show');
                    $('#scheduleChevron').removeClass('bi-chevron-down').addClass('bi-chevron-up');
                } else {
                    $('#scheduleConfig').removeClass('show');
                    $('#scheduleChevron').removeClass('bi-chevron-up').addClass('bi-chevron-down');
                }
            });

            /* Everyday Toggle Functionality */
            $('#everydayToggle').change(function() {
                if ($(this).is(':checked')) {
                    $('#customCycleCard').hide();
                } else {
                    $('#customCycleCard').show();
                    // Initialize Select2 for monthCycle when custom cycle card is shown
                    setTimeout(function() {
                        if (!$('#monthCycle').hasClass('select2-hidden-accessible')) {
                            $('#monthCycle').select2({
                                placeholder: 'Select months...',
                                allowClear: true,
                                closeOnSelect: false
                            });
                        }
                    }, 100);
                }
                // Prayer times always stay visible
            });

            /* Day/Date Cycle Toggle */
            $('input[name="cycleType"]').change(function() {
                if ($('#cycleDays').is(':checked')) {
                    $('#daysOptions').show();
                    $('#datesOptions').hide();
                } else {
                    $('#daysOptions').hide();
                    $('#datesOptions').show();
                    // Initialize Select2 for monthDates when dates option is selected
                    setTimeout(function() {
                        if (!$('#monthDates').hasClass('select2-hidden-accessible')) {
                            $('#monthDates').select2({
                                placeholder: 'Select dates...',
                                allowClear: true,
                                closeOnSelect: false
                            });
                        }
                    }, 100);
                }
            });


        });

        function addPrayerTime() {
            const timeHtml = `
                <div class="input-group mb-2">
                    <input type="time" class="form-control prayer-time-input" name="prayer_times[]">
                    <button type="button" class="btn btn-outline-danger remove-time-btn" onclick="removePrayerTime(this)">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
            `;
            $('.prayer-times-container').append(timeHtml);
        }

        function removePrayerTime(button) {
            // Don't remove if it's the last time input
            if ($('.prayer-time-input').length > 1) {
                $(button).closest('.input-group').remove();
            }
        }

        function resetForm() {
            $('#prayerForm')[0].reset();
            // Reset Select2
            $('#prayerCategory').val(null).trigger('change');

            // Reset schedule configuration
            $('#enableSchedule').prop('checked', false).trigger('change');

            // Reset everyday toggle back to checked
            $('#everydayToggle').prop('checked', true).trigger('change');

            // Reset day/date cycle to days
            $('#cycleDays').prop('checked', true).trigger('change');

            // Reset all checkboxes for days
            $('.day-checkbox').prop('checked', true);

            // Reset multi-selects
            $('#monthDates').val(null).trigger('change');
            $('#monthCycle').val(null).trigger('change');

            // Reset reminder settings
            $('#reminderValue').val(15);
            $('#reminderUnit').val('minutes');
            $('#scheduleStartDate').val(new Date().toISOString().split('T')[0]);
            $('#scheduleEndDate').val('');

            // Reset prayer times container to single default input
            $('.prayer-times-container').html(`
                <div class="input-group mb-2">
                    <input type="time" class="form-control prayer-time-input" name="prayer_times[]" value="09:00">
                    <button type="button" class="btn btn-outline-danger remove-time-btn" onclick="removePrayerTime(this)">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
            `);
        }
    </script>
    @stack('scripts')
</body>
</html>
