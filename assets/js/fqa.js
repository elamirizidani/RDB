  
        // FAQ accordion functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                // Remove active class from all questions
                document.querySelectorAll('.faq-question').forEach(q => q.classList.remove('active'));
                
                // Add active class to clicked question
                this.classList.add('active');
                
                // Close all other answers
                document.querySelectorAll('.faq-answer').forEach(answer => {
                    if (answer.id !== this.getAttribute('data-bs-target').substring(1)) {
                        answer.classList.remove('show');
                    }
                });
            });
        });

        // Handle collapse events
        document.querySelectorAll('.faq-answer').forEach(answer => {
            answer.addEventListener('hidden.bs.collapse', function() {
                const question = document.querySelector(`[data-bs-target="#${this.id}"]`);
                question.classList.remove('active');
            });
            
            answer.addEventListener('shown.bs.collapse', function() {
                const question = document.querySelector(`[data-bs-target="#${this.id}"]`);
                question.classList.add('active');
            });
        });
