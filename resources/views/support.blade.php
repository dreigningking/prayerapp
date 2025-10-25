@extends('layout.app')

@section('page', 'Support')

@section('content')
    <div class="page-header">
        <h2>Support Center</h2>
        <p>Get help, learn more, and connect with our community</p>
    </div>

    <div class="support-grid">
        <div class="support-card">
            <i class="bi bi-question-circle"></i>
            <h3>FAQ</h3>
            <p>Find answers to commonly asked questions about prayer scheduling and app features.</p>
            <button class="btn btn-outline-primary">Browse FAQs</button>
        </div>

        <div class="support-card">
            <i class="bi bi-book"></i>
            <h3>User Guide</h3>
            <p>Learn how to make the most of your prayer app with detailed tutorials and guides.</p>
            <button class="btn btn-outline-primary">View Guide</button>
        </div>

        <div class="support-card">
            <i class="bi bi-chat-dots"></i>
            <h3>Community</h3>
            <p>Connect with fellow prayer warriors, share experiences, and find encouragement.</p>
            <button class="btn btn-outline-primary">Join Community</button>
        </div>

        <div class="support-card">
            <i class="bi bi-envelope"></i>
            <h3>Contact Us</h3>
            <p>Have a question or need help? Send us a message and we'll get back to you.</p>
            <button class="btn btn-outline-primary">Send Message</button>
        </div>

        <div class="support-card">
            <i class="bi bi-bug"></i>
            <h3>Report Issue</h3>
            <p>Found a bug or experiencing issues? Help us improve by reporting it.</p>
            <button class="btn btn-outline-primary">Report Issue</button>
        </div>

        <div class="support-card">
            <i class="bi bi-lightbulb"></i>
            <h3>Feature Requests</h3>
            <p>Have ideas for new features? Share your suggestions to help shape the future.</p>
            <button class="btn btn-outline-primary">Suggest Feature</button>
        </div>
    </div>

    <!-- Bible Verses Section -->
    <div class="bible-section">
        <h3>Daily Inspiration</h3>
        <div class="bible-card">
            <div class="bible-verse">
                <p class="verse-text">"Pray without ceasing."</p>
                <p class="verse-reference">- 1 Thessalonians 5:17</p>
            </div>
            <div class="bible-verse">
                <p class="verse-text">"Ask, and it shall be given you; seek, and ye shall find; knock, and it shall be opened unto you."</p>
                <p class="verse-reference">- Matthew 7:7</p>
            </div>
        </div>
    </div>

    <!-- Quick Links Section -->
    <div class="quick-links">
        <h3>Quick Links</h3>
        <div class="links-grid">
            <a href="#" class="link-item">
                <i class="bi bi-privacy"></i>
                <span>Privacy Policy</span>
            </a>
            <a href="#" class="link-item">
                <i class="bi bi-file-earmark-text"></i>
                <span>Terms of Service</span>
            </a>
            <a href="#" class="link-item">
                <i class="bi bi-info-circle"></i>
                <span>About Prayer Buddy</span>
            </a>
            <a href="#" class="link-item">
                <i class="bi bi-star"></i>
                <span>Rate the App</span>
            </a>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .page-header {
        margin-bottom: 40px;
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

    .support-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        margin-bottom: 50px;
    }

    .support-card {
        background: white;
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .support-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .support-card i {
        font-size: 48px;
        color: #667eea;
        margin-bottom: 20px;
    }

    .support-card h3 {
        color: #333;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 12px;
    }

    .support-card p {
        color: #666;
        font-size: 15px;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .bible-section {
        margin-bottom: 50px;
    }

    .bible-section h3 {
        color: #333;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 25px;
        padding-bottom: 10px;
        border-bottom: 2px solid #e0e0e0;
        text-align: center;
    }

    .bible-card {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }

    .bible-verse {
        margin-bottom: 25px;
        text-align: center;
    }

    .bible-verse:last-child {
        margin-bottom: 0;
    }

    .verse-text {
        font-style: italic;
        font-size: 18px;
        color: #333;
        margin-bottom: 8px;
        line-height: 1.4;
    }

    .verse-reference {
        font-weight: 600;
        color: #667eea;
        font-size: 14px;
    }

    .quick-links {
        margin-bottom: 40px;
    }

    .quick-links h3 {
        color: #333;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 25px;
        padding-bottom: 10px;
        border-bottom: 2px solid #e0e0e0;
        text-align: center;
    }

    .links-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 15px;
    }

    .link-item {
        display: flex;
        align-items: center;
        gap: 12px;
        background: white;
        border-radius: 8px;
        padding: 15px;
        text-decoration: none;
        color: #333;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
        transition: all 0.3s;
    }

    .link-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        color: #667eea;
    }

    .link-item i {
        font-size: 20px;
        color: #667eea;
    }

    .link-item span {
        font-weight: 500;
        font-size: 16px;
    }

    @media (max-width: 768px) {
        .page-header h2 {
            font-size: 24px;
        }

        .support-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .support-card {
            padding: 25px;
        }

        .support-card h3 {
            font-size: 18px;
        }

        .bible-card {
            padding: 25px;
        }

        .verse-text {
            font-size: 16px;
        }

        .links-grid {
            grid-template-columns: 1fr;
        }

        .link-item {
            padding: 12px 15px;
        }
    }

    @media (max-width: 576px) {
        .support-card {
            padding: 20px;
        }

        .bible-section,
        .quick-links {
            padding: 0 10px;
        }
    }
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // Add click handlers for support actions
    $('.support-card .btn').click(function() {
        const cardTitle = $(this).closest('.support-card').find('h3').text();
        console.log('Support action:', cardTitle);

        // TODO: Implement actual navigation/actions for each support item
        switch(cardTitle) {
            case 'FAQ':
                // Navigate to FAQ page
                break;
            case 'User Guide':
                // Navigate to guide
                break;
            case 'Community':
                // Open community link
                break;
            case 'Contact Us':
                // Open contact form
                break;
            case 'Report Issue':
                // Open bug report form
                break;
            case 'Feature Requests':
                // Open feature request form
                break;
        }
    });

    $('.link-item').click(function(e) {
        e.preventDefault();
        const linkText = $(this).find('span').text();
        console.log('Quick link:', linkText);

        // TODO: Implement proper navigation for quick links
    });

    // TODO: Load dynamic bible verses based on user preferences
});
</script>
@endpush
