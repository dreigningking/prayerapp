document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
    const navLinks = document.querySelector(".nav-links");

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener("click", function () {
            navLinks.classList.toggle("active");
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const waitlistForm = document.querySelector(".waitlist-form");

    if (waitlistForm) {
        waitlistForm.addEventListener("submit", function (e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(this);

            // Here you would typically send the data to your server
            // For example:
            /*
            fetch('/api/waitlist', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Handle success
            })
            .catch(error => {
                // Handle error
            });
            */
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById("testimonialContainer");
    const prevButton = document.getElementById("prevButton");
    const nextButton = document.getElementById("nextButton");
    const cards = document.querySelectorAll(".testimonial-card");

    let currentIndex = 0;

    function updateCarousel() {
        cards.forEach((card, index) => {
            card.classList.remove("active");
            if (index === currentIndex) {
                card.classList.add("active");
            }
        });

        // Update button states
        prevButton.disabled = currentIndex === 0;
        nextButton.disabled = currentIndex === cards.length - 1;
    }

    prevButton.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });

    nextButton.addEventListener("click", () => {
        if (currentIndex < cards.length - 1) {
            currentIndex++;
            updateCarousel();
        }
    });

    // Initialize carousel
    updateCarousel();

    // Optional: Auto-advance carousel
    setInterval(() => {
        if (currentIndex < cards.length - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarousel();
    }, 5000); // Change slide every 5 seconds
});

// Add animation when benefits come into view
document.addEventListener("DOMContentLoaded", function () {
    const benefits = document.querySelectorAll(".benefit-item");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    benefits.forEach((benefit) => {
        benefit.style.opacity = "0";
        benefit.style.transform = "translateY(20px)";
        benefit.style.transition = "all 0.5s ease-out";
        observer.observe(benefit);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const questionHeaders = document.querySelectorAll(".question-header");

    questionHeaders.forEach((header) => {
        header.addEventListener("click", function () {
            const questionId = this.dataset.question;
            const answer = document.getElementById(`answer-${questionId}`);
            const plusIcon = this.querySelector(".plus");
            const minusIcon = this.querySelector(".minus");

            // Close all other answers
            document.querySelectorAll(".question-answer").forEach((item) => {
                if (item.id !== `answer-${questionId}`) {
                    item.classList.add("hidden");
                }
            });

            document.querySelectorAll(".question-header").forEach((header) => {
                if (header !== this) {
                    header.querySelector(".plus").classList.remove("hidden");
                    header.querySelector(".minus").classList.add("hidden");
                }
            });

            // Toggle current answer
            answer.classList.toggle("hidden");
            plusIcon.classList.toggle("hidden");
            minusIcon.classList.toggle("hidden");
        });
    });
});
