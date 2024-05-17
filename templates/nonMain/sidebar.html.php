<div class="container">
    <button class="hamburger">
            <div></div>
            <div></div>
            <div></div>
    </button>
    <aside class="filters">
        <div class="filter-group">
            <label for="brand1">Brand</label>
            <select id="brand1">
                <option>Nike</option>
                <option>Addidas</option>
                <option>The North Face</option>
                <option>Hoodrich</option>
                <option>Under Armour</option>

            </select>
        </div>
        <div class="filter-group">
            <label for="brand2">Price</label>
            <select id="brand2">
                <option value="brand1">Brand 1</option>
            </select>
        </div>
        <div class="filter-group">
            <label for="brand3">Sale&Offers</label>
            <select id="brand3">
                <option value="brand1">Brand 1</option>
            </select>
        </div>
        <div class="filter-group">
            <label for="brand4">Gender</label>
            <select id="brand4">
                <option value="brand1">Brand 1</option>
            </select>
        </div>
        <div class="filter-group">
            <label for="brand5">Kids</label>
            <select id="brand5">
                <option value="brand1">Brand 1</option>
            </select>
        </div>
        <div class="filter-group">
            <label for="brand6">Colour</label>
            <select id="brand6">
                <option value="brand1">Brand 1</option>
            </select>
        </div>
        <div class="filter-group">
            <label for="brand7">Fit</label>
            <select id="brand7">
                <option value="brand1">Brand 1</option>
            </select>
        </div>
        <div class="filter-group">
            <label for="brand8">Sports</label>
            <select id="brand8">
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
