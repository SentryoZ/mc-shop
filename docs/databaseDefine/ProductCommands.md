## Table Info

Table name: `product_commands`

Save data about the command will run when player claim the product

## Columns

| Name       | Type       | Not Null |                              | Note                 |
|------------|------------|----------|------------------------------|----------------------|
| id         | bigInteger | true     | PK, Auto increment, unsigned |                      |
| product_id | bigInteger | true     | FK, unsigned                 | Belong to `products` |
| index      | bigInteger | true     | unsigned                     |                      |
| command    | string     | true     |                              |                      |
| deleted_at | timestamp  | false    |                              |                      |
| created_at | timestamp  | true     |                              |                      |
| updated_at | timestamp  | false    |                              |                      |


