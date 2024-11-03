## Table Info

Table name: `order_items`

Save data about the items in the order

## Columns

| Name          | Type       | Not Null |                              | Note                 |
|---------------|------------|----------|------------------------------|----------------------|
| id            | bigInteger | true     | PK, Auto increment, unsigned |                      |
| order_id      | bigInteger | true     | FK, unsigned                 | Belong to `orders`   |
| product_id    | bigInteger | true     | FK, unsigned                 | Belong to `products` |
| product_name  | string     | true     |                              |                      |
| product_price | bigInteger | true     | unsigned                     |                      |
| quantity      | bigInteger | true     | unsigned                     |                      |
| deleted_at    | timestamp  | false    |                              |                      |
| created_at    | timestamp  | true     |                              |                      |
| updated_at    | timestamp  | false    |                              |                      |
