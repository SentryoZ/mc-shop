## Table Info

Table name: `payments`

Save data about the payments

## Columns

| Name       | Type       | Not Null |                              | Note               |
|------------|------------|----------|------------------------------|--------------------|
| id         | bigInteger | true     | PK, Auto increment, unsigned |                    |
| order_id   | bigInteger | true     | FK, unsigned                 | Belong to `orders` |
| user_id    | bigInteger | true     | FK, unsigned                 | Belong to `users`  |
| provider   | string     | true     |                              |                    |
| amount     | decimal    | true     | unsigned                     |                    |
| status     | bigInteger | true     | unsigned                     |                    |
| deleted_at | timestamp  | false    |                              |                    |
| created_at | timestamp  | true     |                              |                    |
| updated_at | timestamp  | false    |                              |                    |


