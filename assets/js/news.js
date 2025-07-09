
        // Add interactivity to category tabs
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Search functionality
        document.querySelector('.search-btn').addEventListener('click', function() {
            const searchTerm = document.querySelector('.search-input').value;
            if (searchTerm.trim()) {
                console.log('Searching for:', searchTerm);
                // Add search logic here
            }
        });

        // Enter key search
        document.querySelector('.search-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                document.querySelector('.search-btn').click();
            }
        });
     // Pagination functionality
            const pageButtons = document.querySelectorAll('.page-btn');
            pageButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    if (!this.textContent.includes('❮') && !this.textContent.includes('❯')) {
                        // Remove active class from all page buttons
                        pageButtons.forEach(b => b.classList.remove('active'));
                        
                        // Add active class to clicked button
                        this.classList.add('active');
                        
                        console.log('Page selected:', this.textContent);
                    } else {
                        // Handle navigation arrows
                        const currentActive = document.querySelector('.page-btn.active');
                        const currentPage = parseInt(currentActive.textContent);
                        
                        if (this.textContent.includes('❮') && currentPage > 1) {
                            // Previous page
                            currentActive.classList.remove('active');
                            currentActive.previousElementSibling.classList.add('active');
                        } else if (this.textContent.includes('❯') && currentPage < 3) {
                            // Next page
                            currentActive.classList.remove('active');
                            currentActive.nextElementSibling.classList.add('active');
                        }
                    }
                });
            });