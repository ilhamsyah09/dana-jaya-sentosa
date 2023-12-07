<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.navbar-expand-lg');
            const scrollPosition = window.scrollY;

            if (scrollPosition >= 50) {
                header.classList.add('stiky-header');
            } else {
                header.classList.remove('stiky-header');
            }
        })
        
        document.querySelectorAll('a[href="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttibute("href")).scrollIntoView({
                    behavior: "smooth"
                });
            });
        });
    </script>
</body>
</html>