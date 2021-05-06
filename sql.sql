SELECT products.title, 
       tans_bodies.body, 
       COUNT(products.title) AS title_count
FROM products
     JOIN translatables ON translatables.record_id = products.id
     JOIN tans_bodies ON tans_bodies.translatable_id = translatables.id
WHERE EXISTS
(
    SELECT product_images.product_id, 
           COUNT(product_images.id) AS count_image
    FROM product_images
    WHERE product_images.product_id = products.id
    GROUP BY product_images.product_id
    HAVING count_image > 2
)
GROUP BY title
HAVING title_count > 3
ORDER BY title ASC
LIMIT 3000 OFFSET 10;