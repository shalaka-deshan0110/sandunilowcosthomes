/**
 * Sanduni Low Cost Homes - Main JavaScript File
 * Handles interactive elements and UI functionality
 */

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Navigation Toggle
    const navToggle = document.getElementById('nav-toggle');
    if(navToggle) {
        navToggle.addEventListener('change', function() {
            if(this.checked) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = 'auto';
            }
        });
    }

    // FAQ Toggle
    const faqQuestions = document.querySelectorAll('.faq-question');
    if(faqQuestions.length > 0) {
        faqQuestions.forEach(question => {
            question.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                const icon = this.querySelector('.toggle-icon i');
                
                // Toggle answer visibility
                if(answer.style.display === 'block') {
                    answer.style.display = 'none';
                    icon.classList.remove('fa-minus');
                    icon.classList.add('fa-plus');
                } else {
                    answer.style.display = 'block';
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-minus');
                }
            });
        });
    }

    // Projects Filter
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');
    
    if(filterButtons.length > 0 && projectItems.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                
                // Show/hide project items based on filter
                projectItems.forEach(item => {
                    if(filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }

    // Project Modal
    const viewProjectButtons = document.querySelectorAll('.btn-view-project');
    const projectModal = document.getElementById('projectModal');
    const closeModal = document.querySelector('.close-modal');
    
    if(viewProjectButtons.length > 0 && projectModal) {
        viewProjectButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                const projectTitle = this.closest('.project-info').querySelector('h3').textContent;
                const projectCategory = this.closest('.project-info').querySelector('p').textContent;
                
                // Set modal content
                document.getElementById('modalProjectTitle').textContent = projectTitle;
                document.getElementById('modalProjectCategory').textContent = projectCategory;
                
                // Example content - in a real application, this would be dynamically populated
                document.getElementById('modalProjectDescription').innerHTML = '<p>Detailed description of the ' + projectTitle + ' project. This would include information about the scope, challenges, and solutions implemented during the construction process.</p>';
                document.getElementById('modalProjectClient').textContent = 'Sample Client';
                document.getElementById('modalProjectLocation').textContent = 'City, Country';
                document.getElementById('modalProjectDate').textContent = 'January 2023';
                document.getElementById('modalProjectServices').textContent = 'Design, Construction';
                
                // Show the modal
                projectModal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            });
        });
        
        // Close modal
        if(closeModal) {
            closeModal.addEventListener('click', function() {
                projectModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            });
        }
        
        // Close modal when clicking outside
        window.addEventListener('click', function(e) {
            if(e.target === projectModal) {
                projectModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
        
        // Thumbnail gallery
        const thumbnails = document.querySelectorAll('.thumbnail');
        const mainImage = document.getElementById('modalMainImage');
        
        if(thumbnails.length > 0 && mainImage) {
            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    // Remove active class from all thumbnails
                    thumbnails.forEach(thumb => thumb.classList.remove('active'));
                    
                    // Add active class to clicked thumbnail
                    this.classList.add('active');
                    
                    // Update main image
                    mainImage.src = this.src;
                });
            });
        }
    }

    // Simple form validation
    const contactForm = document.querySelector('form');
    if(contactForm) {
        contactForm.addEventListener('submit', function(e) {
            let valid = true;
            
            // Get form fields
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const message = document.getElementById('message');
            
            // Simple validation
            if(name && name.value.trim() === '') {
                valid = false;
                showError(name, 'Name is required');
            } else if(name) {
                removeError(name);
            }
            
            if(email && email.value.trim() === '') {
                valid = false;
                showError(email, 'Email is required');
            } else if(email && !isValidEmail(email.value)) {
                valid = false;
                showError(email, 'Please enter a valid email');
            } else if(email) {
                removeError(email);
            }
            
            if(message && message.value.trim() === '') {
                valid = false;
                showError(message, 'Message is required');
            } else if(message) {
                removeError(message);
            }
            
            // Prevent form submission if not valid
            if(!valid) {
                e.preventDefault();
            }
        });
    }
    
    // Helper functions for form validation
    function showError(input, message) {
        const formGroup = input.parentElement;
        const errorMessage = formGroup.querySelector('.error-message') || document.createElement('span');
        
        input.classList.add('error-input');
        
        if(!formGroup.querySelector('.error-message')) {
            errorMessage.classList.add('error-message');
            formGroup.appendChild(errorMessage);
        }
        
        errorMessage.textContent = message;
    }
    
    function removeError(input) {
        const formGroup = input.parentElement;
        const errorMessage = formGroup.querySelector('.error-message');
        
        input.classList.remove('error-input');
        
        if(errorMessage) {
            formGroup.removeChild(errorMessage);
        }
    }
    
    function isValidEmail(email) {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }
});
