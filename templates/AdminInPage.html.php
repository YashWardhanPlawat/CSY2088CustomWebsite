<main>
<main>
    <h1>Admin Page</h1>
    
    <section>
        <h2>Add New Product</h2>
        <form method="post" action="AdminInPage.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="price">Price:</label>
            <input type="number" step="0.01" id="price" name="price" required>
            <br>
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" required>
            <br>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
            <br>
            <label for="provider">Provider:</label>
            <input type="text" id="provider" name="provider" required>
            <br>
            <button type="submit" name="addProduct">Add Product</button>
        </form>
    </section>

    <section>
        <h2>Existing Products</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Provider</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) { ?>
                    <tr>
                        <td><?=$product['Name']?></td>
                        <td><?=$product['Price']?></td>
                        <td><?=$product['Category']?></td>
                        <td><?=$product['Description']?></td>
                        <td><?=$product['Provider']?></td>
                        <td>
                            <form method="post" action="AdminInPage.php" style="display:inline;">
                                <input type="hidden" name="id" value="<?=$product['ID']?>">
                                <button type="submit" name="deleteProduct">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>

</main>