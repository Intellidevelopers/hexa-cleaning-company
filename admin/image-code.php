<?php
// Query the database to fetch the image filename for a specific product
$product_id = $userItem['id']; // Assuming you have the product ID available
$query = "SELECT post_image FROM posts WHERE id = $product_id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$post_image = $row['post_image'];

// Check if the image exists
if($post_image) {
    // Construct the URL of the image
    $image_url = "path/to/your/image/folder/" . $post_image; // Replace with the actual path to your image folder

    // Display the image
    echo '<img src="' . $image_url . '" alt="Product image" title="Product image" class="rounded me-3" height="48" />';
} else {
    // If no image is found, display a placeholder image or a message
    echo '<img src="assets/images/products/product-placeholder.jpg" alt="No Image Available" title="No Image Available" class="rounded me-3" height="48" />';
}