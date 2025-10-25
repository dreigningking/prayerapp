# Prayer Buddy Mobile App Backend

This Laravel backend provides API endpoints and database structure for a mobile prayer scheduling app.

## Database Schema

### Tables

#### `prayers`
- Core prayer points with title, body, priority, categories
- Supports soft deletes and completion tracking

#### `schedules`
- Template schedules with multiple times per day (JSON array)
- Links to frequencies for recurring patterns

#### `frequencies`
- Explicit frequency types (no more confusing intervals!)
- Types: `once`, `daily`, `every_other_day`, `weekly`, `every_other_week`, `monthly`, `every_other_month`, `yearly`, `custom_days`

#### `schedule_instances`
- Individual prayer time slots generated from schedules
- Trackable status: `pending`, `prayed`, `skipped`, `missed`
- Perfect for mobile notifications and UI lists

#### `comments`
- Comments on prayer points (single-user, no user_id needed)

## API Endpoints

### Schedule Instances
```
GET  /api/schedule-instances/upcoming    # Next prayers to do
GET  /api/schedule-instances/today       # Today's prayers
GET  /api/schedule-instances/past        # Past prayers (paginated)
GET  /api/schedule-instances/statistics  # Prayer completion stats
POST /api/schedule-instances/{id}/prayed # Mark as prayed
POST /api/schedule-instances/{id}/skipped # Mark as skipped
```

## Usage Examples

### Creating a Daily Prayer Schedule
```php
// 1. Create prayer
$prayer = Prayer::create([
    'title' => 'Morning Devotion',
    'body' => 'Read Psalm 23 and pray for guidance',
    'priority' => 'high',
    'category' => 'devotion'
]);

// 2. Create schedule with multiple times
$schedule = Schedule::create([
    'prayer_id' => $prayer->id,
    'date' => '2024-10-28', // Start date
    'times' => ['06:00', '18:00', '21:00'] // 6am, 6pm, 9pm
]);

// 3. Add frequency for daily recurrence
Frequency::create([
    'schedule_id' => $schedule->id,
    'frequency_type' => 'daily',
    'end_date' => '2024-12-31' // Optional end date
]);

// 4. Generate instances
$service = new ScheduleInstanceService();
$service->generateInstances($schedule);
```

### Mobile App Integration

#### Get Today's Prayers
```javascript
// GET /api/schedule-instances/today
[
    {
        "id": 1,
        "prayer": {
            "title": "Morning Devotion",
            "body": "Read Psalm 23...",
            "priority": "high"
        },
        "scheduled_time": "06:00:00",
        "status": "pending"
    },
    {
        "id": 2,
        "prayer": {...},
        "scheduled_time": "18:00:00",
        "status": "pending"
    }
]
```

#### Mark Prayer as Completed
```javascript
// POST /api/schedule-instances/1/prayed
{
    "success": true,
    "message": "Prayer marked as completed"
}
```

#### Get Statistics
```javascript
// GET /api/schedule-instances/statistics
{
    "today_completed": 3,
    "today_total": 5,
    "week_completed": 18,
    "week_total": 25,
    "upcoming_count": 7
}
```

## Frequency Types Explained

| Type | Description | Example |
|------|-------------|---------|
| `once` | One-time only | Single prayer session |
| `daily` | Every day | Daily prayer at same time |
| `every_other_day` | Every other day | Pray today, skip tomorrow |
| `weekly` | Every week | Every Monday at 6am |
| `every_other_week` | Every other week | Every other Monday |
| `monthly` | Every month | Same date each month |
| `every_other_month` | Every other month | Jan, Mar, May, etc. |
| `yearly` | Every year | Same date each year |
| `custom_days` | Specific days of month | 1st, 15th, and 30th |

## Mobile App Features

### ✅ Individual Time Slots
- Each time in `times` array becomes a separate schedule instance
- Perfect for UI: "6am Prayer", "6pm Prayer", "9pm Prayer"
- Individual notification scheduling

### ✅ Prayer Tracking
- Mark each instance as prayed/skipped
- Completion timestamps for analytics
- Status-based filtering (pending, prayed, skipped, missed)

### ✅ Flexible Scheduling
- Multiple times per day
- Complex recurring patterns
- End dates for recurring schedules

### ✅ Analytics Ready
- Daily/weekly completion rates
- Prayer streaks and patterns
- Category-based insights

## Next Steps

1. **Mobile App Development**: Use the API endpoints in your NativeMobile app
2. **Notification System**: Schedule local notifications based on `schedule_instances`
3. **UI Components**: Build prayer cards, calendar views, and statistics screens
4. **Background Jobs**: Set up recurring instance generation for new schedules

The schema is now optimized for mobile prayer tracking with clear, individual schedule instances that make app development much simpler!
