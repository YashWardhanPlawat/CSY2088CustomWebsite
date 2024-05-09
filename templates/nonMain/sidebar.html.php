<div class="container">
    <button class="hamburger">
            <div></div>
            <div></div>
            <div></div>
    </button>
    <aside class="filters">
        <div class="filter-group">
            <label for="brand">Brand</label>
            <select id="brand">
                <option value="brand1">Brand 1</option>
            </select>
        </div>
        <div class="filter-group">
            <label for="brand">Price</label>
            <select id="brand">
                <option value="brand1">Brand 1</option>
            </select>
        </div>
        <div class="filter-group">
            <label for="brand">Sale&Offers</label>
            <select id="brand">
                <option value="brand1">Brand 1</option>
            </select>
        </div>
        <div class="filter-group">
            <label for="brand">Gender</label>
            <select id="brand">
                <option value="brand1">Brand 1</option>
            </select>
        </div>
        <div class="filter-group">
            <label for="brand">Kids</label>
            <select id="brand">
                <option value="brand1">Brand 1</option>
            </select>
        </div>
        <div class="filter-group">
            <label for="brand">Colour</label>
            <select id="brand">
                <option value="brand1">Brand 1</option>
            </select>
        </div>
        <div class="filter-group">
            <label for="brand">Fit</label>
            <select id="brand">
                <option value="brand1">Brand 1</option>
            </select>
        </div>
        <div class="filter-group">
            <label for="brand">Sports</label>
            <select id="brand">
                <option value="brand1">Brand 1</option>
            </select>
        </div>
    </aside>
</div>
<script>
    document.querySelector('.hamburger').addEventListener('click', function() {
        this.classList.toggle('active');
        document.querySelector('.filters').classList.toggle('open');
        if (this.classList.contains('active')) {
            this.style.left = '300px'; // Move the icon right by the width of the sidebar
        } else {
            this.style.left = '0'; // Return the icon to the original position
        }
    });
</script>
