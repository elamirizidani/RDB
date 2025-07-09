
        // Download button functionality
        document.querySelectorAll('.download-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const documentTitle = this.parentElement.querySelector('.document-title').textContent;
                console.log('Downloading:', documentTitle);
                // Add actual download logic here
                alert('Download started for: ' + documentTitle);
            });
        });

        // Category filter functionality
        document.querySelectorAll('.category-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const category = this.querySelector('span').textContent;
                console.log('Filtering by category:', category);
                // Add filtering logic here
            });
        });

        // Search functionality
        document.querySelector('.search-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const searchTerm = this.value;
                console.log('Searching for:', searchTerm);
                // Add search logic here
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