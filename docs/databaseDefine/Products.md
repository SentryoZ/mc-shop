## Table Info

Table name: `products`

Save general product data, other data like sale, image, content will split to other tables

## Columns

| Name        | Type       | Not Null |                              | Note |
|-------------|------------|----------|------------------------------|------|
| id          | bigInteger | true     | PK, Auto increment, unsigned |      |
| name        | string     | true     |                              |      |
| description | string     | true     |                              |      |
| price       | bigInteger | true     | unsigned                     |      |
| status      | bigInteger | true     | unsigned                     |      |
| deleted_at  | timestamp  | false    |                              |      |
| created_at  | timestamp  | true     |                              |      |
| updated_at  | timestamp  | false    |                              |      |


