## Table Info

Table name: `product_images`

Save images about the products

## Columns

| Name         | Type       | Not Null |                              | Note                 |
|--------------|------------|----------|------------------------------|----------------------|
| id           | bigInteger | true     | PK, Auto increment, unsigned |                      |
| product_id   | bigInteger | true     | FK, unsigned                 | Belong to `products` |
| index        | bigInteger | true     | unsigned                     |                      |
| is_thumbnail | boolean    | false    |                              |                      |
| source       | string     | true     |                              |                      |
| deleted_at   | timestamp  | false    |                              |                      |
| created_at   | timestamp  | true     |                              |                      |
| updated_at   | timestamp  | false    |                              |                      |


